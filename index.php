<html>
<?php $title = "COMP344" ?>
<?php include("head.php"); ?>
<head>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php include("header.html"); ?>
<h1>COMP344 Bookstore</h1>
<p>
    <?php
    if (isset($_SESSION["user"])) {
        echo "You are logged in as: " . $_SESSION["user"];
    }
    ?>
</p>
<?php include("footer.html"); ?>
</body>
</html>