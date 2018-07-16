/*登录页面后台验证login.php*/ 
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="../img/favicon.ico" type="image/x-icon" rel="shortcut  icon"  ="" />
<title>书籍信息管理登陆</title>
<?php
error_reporting(0);
$mysql_servername = "localhost"; //主机地址
$mysql_username = "root"; //数据库用户名
$mysql_password =""; //数据库密码
$mysql_database ="comp344"; //数据库
/*mysql_connect($mysql_servername , $mysql_username , $mysql_password);*/
$con = mysqli_connect($mysql_servername , $mysql_username , $mysql_password);
mysqli_select_db($mysql_database);
$Email=$_POST['Email'];
$UserPassowrd=$_POST['UserPassword'];
if ($Email && $UserPassowrd){
/*$sql = "SELECT Email FROM customs WHERE Email = '$Email' and UserPassword='$UserPassword'";*/
$sql = "SELECT Email FROM customs WHERE Email = '$Email' and UserPassword='$UserPassowrd'";
/*$res = mysql_query($sql);*/
$res = mysqli_query($sql,$con);

$row = mysqli_fetch_assoc($res);
print_r($row);
if($row['Email']==$Email){
setcookie("userid",$Email);
header("location:add.php");//跳转页面，注意路径
exit;
}
else{
echo "<script-->"; echo "alert('对不起，您输入的用户不存在！请重新登录！')"; echo ""; echo "
<script>";
    echo "window.location.href='../index.html'";
    echo "</script>"; } } ?>