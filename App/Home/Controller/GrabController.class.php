<?php
/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Corp: Songheng
 * Date: 2016/2/19
 */

namespace Home\Controller;


use Think\Controller;

class GrabController extends Controller
{
    /* 聚合数据 老黄历 */
    /*private $api_url = 'http://v.juhe.cn/laohuangli/d';
    private $key = '22211d0b83d4e24957841d34c22b15b4';
    private $start_date = '2010-01-01';
    private $end_date = '2025-12-31';*/

    /* HaoService 老黄历 */
    /*private $api_url = 'http://apis.haoservice.com/lifeservice/laohuangli/d';
    private $key = '598fad3fde8540f990dc83d8955048bb';
    private $start_date = '2003-01-01';
    private $end_date = '2009-12-31';*/

    public function index() {
        if(empty($this->key)) die('key check fail');

        set_time_limit(0);

        $start_date = strtotime($this->start_date);
        $end_date = strtotime($this->end_date);

        $result_year_array =  array();
        for($date = $start_date; $date <= $end_date; $date+=24*3600) {

            $year = date('Y',$date);
            $date_str = date('Y-m-d',$date);

            $result_name = 'laohuangli_data_'. $year;
            if(!in_array($result_name,$result_year_array)) {
                $result_year_array[] = $result_name;
            }

            $url = $this->api_url.'?date='. $date_str .'&key='.$this->key;
            $data = json_decode($this->curlGrab($url));
            $data = is_object($data) ? get_object_vars($data) : $data;

            if($data['error_code'] == 0) {

                $day_data = is_object($data['result']) ? get_object_vars($data['result']) : $data['result'];
                ${$result_name}[$date_str] = $day_data;
            }
            else{
                echo 'error at '. date('Y-m-d',$date) .':<br>';
                dump($data);
                break;
            }

        }


        foreach($result_year_array as $val) {
            $result = json_encode($$val);
            $path = './snapshot/'. $val .'.js';
            file_put_contents($path,$result);
        }


        $this->ajaxReturn(array('status'=>'success'));
    }


    private function curlGrab($url, $timeout=5) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }


    public function clearNull() {
        $arr = array(2021,2022,2023,2024,2025);
        $arr2 = array(2011,2012,2013,2014,2015);

        foreach($arr as $key=>$value) {
            $filename = './snapshot/laohuangli_data_'. $value .'.js';
            $data = json_decode(file_get_contents($filename, true));
            $data = get_object_vars($data);

            $filename2 = './snapshot/laohuangli_data_'. $arr2[$key] .'.js';
            $data2 = json_decode(file_get_contents($filename2, true));
            $data2 = get_object_vars($data2);

            foreach($data as $k=>$v) {
                if(is_null($v)) {
                    $date = strtotime($k);
                    $year = date('Y',$date);
                    $date2 = date('m-d',$date);
                    $date2 = ($year-10).'-'.$date2;

                    $copy_data = $data2[$date2];
                    $copy_data->yangli = $k;
                    $copy_data->yinli = null;

                    /*
                     * 从万年历中抓取对应的阴历数据填入
                     */
                    $url = 'http://japi.juhe.cn/calendar/day?date='. date('Y-n-j',$date) .'&key=83ffe86f3ab0c7761c423e8985719c98';
                    $calendar = get_object_vars(json_decode($this->curlGrab($url)));

                    $yinli = $calendar['result']->data->lunarYear. '('. $calendar['result']->data->animalsYear .')'. $calendar['result']->data->lunar;
                    $copy_data->yinli = $yinli;

                    $data[$k] = $copy_data;
                }
            }

            $filename_new = 'laohuangli_data_'. $value .'_clearNull.js';
            $path_new = './snapshot/'. $filename_new;
            file_put_contents($path_new, json_encode($data));
            echo '更新了：'.$filename_new,'<br>';
        }

        echo '<hr>complete!';
    }

    public function saveDB() {

    }


}