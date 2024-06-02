<?php
session_start();
if (isset($_SESSION['id'])) {
?>
<html>

    <head></head>

    <body>
        <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
    </body>

</html>
<?php
} else {
    header("location: login.html");
}
?>