<?php
$constellation=$_POST['constellation'];
$days=$_POST['days'];

if ($constellation==""){
$constellation="libra";	
$days="today";
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
<title>星座运势查询系统 V1.0</title>
<link rel="stylesheet" href="css/Constellation.css" />
</head>
<body>
<div align="center">
<div class="sdiv">
<div class="a1 tdiv">星座运势查询系统</div>
<br />
<form name="form1" method="post" action="">
<select name="constellation" id="select">
<option value="aries" <?php if($constellation=="aries"){echo 'selected="selected"';}?>>白羊座 (3月21日~4月20日)</option>
    <option value="taurus" <?php if($constellation=="taurus"){echo 'selected="selected"';}?>>金牛座 (4月21日～5月20日)</option>
    <option value="gemini" <?php if($constellation=="gemini"){echo 'selected="selected"';}?>>双子座 (5月21日～6月21日)</option>
    <option value="cancer" <?php if($constellation=="cancer"){echo 'selected="selected"';}?>>巨蟹座 (6月22日～7月22日)</option>
    <option value="leo" <?php if($constellation=="leo"){echo 'selected="selected"';}?>>狮子座 (7月23日～8月22日)</option>
    <option value="virgo" <?php if($constellation=="virgo"){echo 'selected="selected"';}?>>处女座 (8月23日～9月22日)</option>
    <option value="libra" <?php if($constellation=="libra"){echo 'selected="selected"';}?>>天秤座 (9月23日～10月22日)</option>
    <option value="scorpio" <?php if($constellation=="scorpio"){echo 'selected="selected"';}?>>天蝎座 (10月23日～11月22日)</option>
    <option value="sagittarius" <?php if($constellation=="sagittarius"){echo 'selected="selected"';}?>>射手座 (11月23日～12月21日)</option>
    <option value="capricorn" <?php if($constellation=="capricorn"){echo 'selected="selected"';}?>>摩羯座 (12月22日～1月19日)</option>
    <option value="aquarius" <?php if($constellation=="aquarius"){echo 'selected="selected"';}?>>水瓶座 (1月20日～2月18日)</option>
    <option value="pisces" <?php if($constellation=="pisces"){echo 'selected="selected"';}?>>双鱼座 (2月19日～3月20日)</option>
  </select>
    <select name="days" id="select">
    <option value="today" <?php if($days=="today"){echo 'selected="selected"';}?>>今天 (<?php echo date('Y年m月d日')?>)</option>
    <option value="tomorrow" <?php if($days=="tomorrow"){echo 'selected="selected"';}?>>明天 (<?php echo date('Y年m月d日',strtotime('+1 day'))?>)</option>
    <option value="thisweek" <?php if($days=="thisweek"){echo 'selected="selected"';}?>>本周 (周一 至 周日)</option>
    <option value="thismonth" <?php if($days=="thismonth"){echo 'selected="selected"';}?>>本月 (<?php echo date('Y年m月')?>)</option>
  </select>
<button class="btn" type="submit">确定</button>
</form>
<div class="a2 tdiv">
<a id="Comment"></a>
<?php
if(!function_exists('bae_api_call')) {
 
    function bae_api_get($api_name){
         
        $params = func_get_args();
         
        array_shift($params);
         
        $url  = 'http://limapi.duapp.com/api.php';
         
        $d['api_name'] = $api_name;
         
        $d['params']= '';
         
        foreach ($params as $k=>$p)
             
            $d['params['.$k.']'] = $p;
         
        $ch = curl_init($url);
         
        curl_setopt($ch, CURLOPT_POST, true);
         
        curl_setopt($ch, CURLOPT_POSTFIELDS, $d);
         
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent :Internet Explorer/8.3 (X11; Ubuntu Server; ) Api called'));         //过滤设置，特殊HTTP头
 
        $content = curl_exec($ch);
         
        return json_decode($content);
         
    }
 
}

$leirong= bae_api_get('horoscope',$constellation,$days); 
$leirong=str_replace("\n","<br />",$leirong);
echo $leirong;
echo '<br /><br />';
?>
</div>
</div>
<div id="foot">© 2011 - 2013 <a href="http://www.ibokes.com">熊海博客</a> & 星座运势查询系统 V 1.0</div>
</div>
</body>
</html>