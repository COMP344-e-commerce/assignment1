<title>书籍信息管理登陆</title>
<?php
include("db.php");
$email=$_POST["email"];
$pwd=$_POST["password"];
$sql = "select email from user where email = $email and password = $pwd";
if (mysqli_query($conn, $sql) === TRUE) {
    echo "success";
    setcookie("email",$Email);
    header("location:main.php");//跳转页面，注意路径
} else {
    echo "Error: password is wrong or the userid does not exist";
}

?>
