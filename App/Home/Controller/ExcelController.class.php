<?php
/**
 * Created by PhpStorm
 * Author: zhuangxiaofan
 * Date: 2016/1/26
 * Time: 11:10
 */

namespace Home\Controller;


use Think\Controller;

class ExcelController extends Controller
{
    public function getExcel(){

        vendor('phpexcel.PHPExcel');
        vendor('phpexcel.PHPExcel.IOFactory');
        vendor('phpexcel.PHPExcel.Writer.Excel5');


        /* 以下部分需根据具体数据替换 */
        $data = M()->query('select * from labels');

        $objPHPExcel = new \PHPExcel();
        $objWriter = new \PHPExcel_Writer_Excel5($objPHPExcel);

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'label_name');
        $i = 2;
        foreach($data as $item){
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $item['id']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $item['label_name']);
            $i ++;
        }

        /* 设置导出参数 */

        //设置导出文件名
        $outputFileName = 'test.xls';

        //导出方式一：直接生成并下载excel文件
        //ob_start(); ob_flush();
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header('Content-Disposition:inline;filename="'.$outputFileName.'"');
        header("Content-Transfer-Encoding: binary");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");

        $objWriter->save("php://output");

        //导出方式二：本地生成xls文件
        //$objWriter->save($outputFileName);

    }

    public function loadExcel(){
        $data = $this->readExcel('test.xls');
        dump($data);
    }

    //导入excel文件并返回数组
    public function readExcel($filename,$encode='utf-8'){
        vendor('phpexcel.PHPExcel');
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');

        $objPHPExcel = $objReader->load($filename);
        $objWorkSheet = $objPHPExcel->getActiveSheet();
        $highestRow = $objWorkSheet->getHighestRow();
        $highestCol = $objWorkSheet->getHighestColumn();
        $highestColumn_index = \PHPExcel_Cell::columnIndexFromString($highestCol);

        //取出excel表中的数据组成数组
        $excelData = array();
        for($row=1; $row<$highestRow; $row++){
            for($col=0; $col<$highestColumn_index; $col++){
                $excelData[$row][] = (string)($objWorkSheet->getCellByColumnAndRow($col,$row)->getValue());
            }
        }

        return $excelData;

    }

    public function getCsv(){
        $data = M()->query('select * from labels');

        $filename = 'test.csv';
        //处理数据
        $csv = '';
        foreach($data as $key=>$val){
            $csv .= implode(',',array_values($val));
            $csv .= "\n";
        }

        file_put_contents($filename,$csv);
        echo $csv;
    }


    public function loadCsv(){
        $filename = '1-26-winner.csv';

        $file = fopen($filename,'r');
        $data = fread($file,filesize($filename));

        $arr = explode("\n",$data);
        foreach($arr as $val){
            $result[] = explode(',',$val);
        }
        //dump($result);

        array_shift($result);
        array_pop($result);

        $str = '';
        foreach($result as $key=>$val){
            $str .= "('$val[0]','$val[1]'),";
        }

        $str = rtrim($str,',');

        $sql = 'insert into winner (mobile,date) values '.$str;

        echo $sql;

    }
}