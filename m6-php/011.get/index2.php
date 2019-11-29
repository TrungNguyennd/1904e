<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

if (isset($_GET["email"])){
    echo "<br>".$_GET["email"];
}
if (isset($_GET["username"])){
    echo "<br>".$_GET["username"];
}
?>
<form name="demo" method="get" action="">
    <input name="email" value="" type="text" placeholder="email">
    <br>
    <input name="username" value="" type="text" placeholder="username">
    <br>
    <input name="submit" type="submit">
</form>
</body>
</html>
