<?php
session_start();

if($_POST['submit']){
	if($_POST['res'] == $_SESSION['res']){
		#Замените https://nickprogramm.github.io/captcha.php на свой файл
		#И капча настроена
		#Удачного использования
		header("Location: https://nickprogramm.github.io/captcha.php");
		exit();
	}
	else{
		$_SESSION['mes'] = '<script type="text/javascript">alert("Ошибка");</script>';
		header("Location: https://nickprogramm.github.io/captcha.php");
		exit();
	}
}

$a = rand(1, 10);
$b = rand(1, 10);
$_SESSION['res'] = $a + $b;

?>
<!doctype html>
<html>
<head>
<style>
/* cyrillic-ext */
@font-face {
  font-family: 'PT Sans';
  font-style: normal;
  font-weight: 400;
  src: local('PT Sans'), local('PTSans-Regular'), url(https://fonts.gstatic.com/s/ptsans/v10/jizaRExUiTo99u79D0-ExdGM.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'PT Sans';
  font-style: normal;
  font-weight: 400;
  src: local('PT Sans'), local('PTSans-Regular'), url(https://fonts.gstatic.com/s/ptsans/v10/jizaRExUiTo99u79D0aExdGM.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* latin-ext */
@font-face {
  font-family: 'PT Sans';
  font-style: normal;
  font-weight: 400;
  src: local('PT Sans'), local('PTSans-Regular'), url(https://fonts.gstatic.com/s/ptsans/v10/jizaRExUiTo99u79D0yExdGM.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'PT Sans';
  font-style: normal;
  font-weight: 400;
  src: local('PT Sans'), local('PTSans-Regular'), url(https://fonts.gstatic.com/s/ptsans/v10/jizaRExUiTo99u79D0KExQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<style>
body {
    margin:0;
    padding:0;
    font-family:sans-serif;
    background:#fff;/*8e44ad*/
}
.box{
    position:absolute ;
    top:50%;
    left:50%;
        transform:translate(-50%,-50%);
    width:200px;
    padding:40px;
    text-align:center ;
    background:#000;
    border-radius:8px;
}
.box h1{
    color:#2ecc71;
    text-transform:uppercase ;
    font-family: 'PT Sans', sans-serif;
}
.box input[type = "text"],.box input[type = "password"]{
    border:0;
    display:block ;
    background:none;
    outline:none ;
    color:white;
    text-align:center ;
    margin:20px auto ;
    border:1px solid #8e44ad;
    padding:14px 5px;
    border-radius:25px;
    transition:.25s;
    width:160px;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
    border-color:#2ecc71;
    width:180px;
}
.box input[type = "submit"]{
    border:0;
    display:block ;
    background:none;
    outline:none ;
    color:white;
    text-align:center ;
    margin:10px auto ;
    border:1px solid #8e44ad;
    padding:14px 20px;
    border-radius:25px;
    transition:.25s;
}
.box input[type = "submit"]:hover{
    background:#2ecc71;
    color:black;
    cursor:pointer ;
    border-color:#2ecc71;
}
.box h3{
    color:white;
    text-align:center ;
    font-size:10px;
    text-transform:uppercase ;
    padding-top:10px;
    font-family: 'PT Sans', sans-serif;
}
.box a{
    text-decoration:none;
    color:#2ecc71;
    font-weight:bold ;
    font-style:italic ;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Проверка безопасности</title>
</head>
<body>
<div align="center">
<form method="post" action="" autocomplete="off" class="box" id="box">
<h1>Решите пример<br><?php echo $a. ' + ' .$b. ' = '?><h1>
<input type="text" name="res" />
<input type="submit" name="submit" value="Отправить" id="send" />
</form></div></body></html>
<?php
echo $_SESSION['mes'];
unset($_SESSION['mes']);
?>
