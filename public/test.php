<?php


// define('TEST','teSSSSSSSst');

// $A = 'AAAA';
// $a = 'aaaaa';
// echo TEST;
// echo '<br>';
// echo $A;
// echo '<br>';
// echo $a;
// echo '<br>';
// echo '<br>';
// echo '<br>';

// const SSSS = 'SSSSS';
// echo SSSS;


// function aa($s){
// 	echo $s;
// }

// AA('ssss');



// $getf = get_defined_constants();
// echo '<pre>';
// // print_r($getf);
// echo '</pre>';
// echo $_SERVER['PHP_AUTH_USER' ];

//  if (!isset($_SERVER['PHP_AUTH_USER' ])) {

//      header ( 'WWW-Authenticate: Basic realm="My Realm"' );
//      header ( 'HTTP/1.0 401 Unauthorized' );
//     echo  'Text to send if user hits Cancel button' ;

//     exit;

//   } else {
//   	$name = $_SERVER[ 'PHP_AUTH_USER'];
//   	$pwd = $_SERVER[ 'PHP_AUTH_PW'];
//   	$connect = mysqli_connect('localhost','root','123','test') or exit(mysqli_connect_error());
//   	mysqli_set_charset($connect,'utf8');
//   	$sql = "select * from user where name='{$name}' and paw = '{$pwd}'";
//   	$res = mysqli_query($connect,$sql);
//   	if(!$res){
// 		unset($_SERVER['PHP_AUTH_USER' ]);
// 		header('location:./test.php');

//   	}
//   	$user = mysqli_fetch_all($res);
  	
//   	// if

//     echo  "<p>Hello  {$_SERVER[ 'PHP_AUTH_USER' ]} .</p>" ;
//     echo  "<p>You entered  {$_SERVER[ 'PHP_AUTH_PW' ]}  as your password.</p>" ;
//   }



// echo '<a href="?onlogin=1">退出</a>';

// if(isset($_GET['onlogin'])){
// 	echo $_GET['onlogin'];
// 		unset($_SERVER['PHP_AUTH_USER' ]);
// 		header('location:./test.php');
// }



// $url  =  "http://alijiujiu99.1688.com/page/contactinfo.htm?spm=a2615.2177701.0.0.1a0378c1o5j10h" ;

//  $opts  = array( 'http'  =>
//     array(
//          'method'  =>  'GET' ,
//          'max_redirects'  =>  '1' ,
//          'ignore_errors'  =>  '1',
//          'timeout '=>'100000.0'
//      )
// );

//  $context  =  stream_context_create ( $opts );
//  $stream  =  fopen ( $url ,  'r' ,  false ,  $context );

//  var_dump($stream);

//  // header information as well as meta data
// // about the stream
//  // var_dump ( stream_get_meta_data ( $stream ));

//  // actual data at $url
//  print_r ( stream_get_contents ( $stream ));
//  fclose ( $stream );


//  // $result  =  file_get_contents ('https://alijiujiu99.1688.com/page/contactinfo.htm' ,  true ,  $context );
//  // file_put_contents('./1688.html', $result);
// echo $result;

// echo urldecode('http://www.so.com/link?m=a7zByqCKigr8vbN5cE9ptTL9D3%2F3fQFd821qAcB%2Bcr%2Bxgg9oCcVKSLY9YXdIAb7L%2FojIP6i6MWnNWxrrtctBP%2BijgYXeLFeMRkQfPaLxatUAhac4gaw6Iit5g6A8do6L5JuHIwP0oYW0%3D');




$fopen = fopen('./test.txt','r');

// fwrite($fopen,"sssssss\n");

if($fopen){
	while(!feof($fopen) && $s = fgets($fopen,4096)){
		$file[] = $s;
	}
}

$str = file_get_contents('./test.txt');
echo (str_repeat($str,10000));

// strpos()

// var_dump($file);