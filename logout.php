<html>
<?php $title = "Logout" ?>
<?php include("head.php"); ?>
<body>
<?php include("navigation.php"); ?>
<h1>Logout</h1>
<?php
if (isset($_SESSION['user'])) {
    echo "You have been logged out";
    unset($_SESSION['user']);
} ?>
</body>
</html>