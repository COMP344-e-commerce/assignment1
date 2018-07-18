<html>
<?php $title = "COMP344" ?>
<?php include("head.php"); ?>
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