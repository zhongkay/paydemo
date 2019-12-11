<?
date_default_timezone_set(PRC);

//商户ID 正式使用时请替商户ID
$UserId="60089";


//接口密钥 正式使用时请替密钥
$SalfStr="f835344eec7e40309bb3989d4507af98";


//网关地址
$gateWary="https://cn.dkqu.com/Pay/bank/up.aspx";


//充值结果后台通知地址
$result_url="http://".$_SERVER["HTTP_HOST"]."/php/result_url.php";


//充值结果用户在网站上的转向地址
$notify_url="http://".$_SERVER["HTTP_HOST"]."/php/notify_Url.php";
?>