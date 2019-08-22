<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>truy cập vào từng sessition trong php</h1>
<?php
//$_sessition là 1 mảng
$_SESSION["user_name"]="admin";
$_SESSION["user_email"]="trungcntt96@gmail.com";

$location=" hà nội";

$_SESSION["user_location"]=$location;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<div>
    <?php
    // Kiểm tra 1 session có tồn tại không
    //
    if (isset($_SESSION["user_name"])) :
        ?>
        <p>username là : <?php echo $_SESSION["user_name"] ?></p>
    <?php endif; ?>

    <?php if (isset($_SESSION["user_email"])) : ?>
        <p>user_email là : <?php echo $_SESSION["user_email"] ?></p>
    <?php endif; ?>

    <?php if (isset($_SESSION["user_location"])) : ?>
        <p>user_location là : <?php echo $_SESSION["user_location"] ?></p>
    <?php endif; ?>

</div>
</body>
</html>
