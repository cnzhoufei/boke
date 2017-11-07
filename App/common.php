<?php


/*
*数据加密
*$clear 明文
*返回 密文和iv
*/
function encryption($clear)
{
	$key = 'MtJULPR2k0fDXwhPROAXNmEXOQtOxWZA';//加密解密默认的密钥
	$iv = getstr(32);//加密解密默认的向量值
	import('Xcrypt.Xcrypt', VENDOR_PATH, '.class.php');
	$Xcrypt = new Xcrypt($key, 'cbc', $iv);  
	$cipher = $Xcrypt->encrypt($clear, 'base64');//加密  
	return ['cipher'=>$cipher,'iv'=>$iv];  
}

/*
*数据解密
*$cipher 密文
*$vi vi 私钥
*返回 明文
*/
function decryption($cipher,$iv){
	$key = 'MtJULPR2k0fDXwhPROAXNmEXOQtOxWZA';//加密解密默认的密钥
	import('Xcrypt.Xcrypt', VENDOR_PATH, '.class.php');
	$Xcrypt = new Xcrypt($key, 'cbc', $iv);  
	$clear = $Xcrypt->decrypt($cipher, 'base64');  
	return $clear;  
}

//截取随机字符串
function getstr($strlen=32){
	$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$string = '';
	for($i = 0;$i < $strlen;$i++){
		$rand = mt_rand(0,strlen($str)-1);
		$string .= $str[$rand];
	}
	return str_shuffle($string);
}


//中文转换为拼音
function pinyin($str)
{
	import('pinyin.PinYin', VENDOR_PATH, '.php');
	$PinYin = new py_class();
	return $PinYin -> str2py($str);
}




