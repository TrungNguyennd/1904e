<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    loop mảng đa chiều
    yêu cầu : in ra được  các quốc gia và tên thành phố

</pre>
cấu trúc in ra
<ul>
    <li>trung quốc </li>
    <li>Bắc kinh</li>
    <li>hà nam </li>
    <li>thành đô</li>
</ul>
<ul>
    <li>hàn quốc </li>
    <li>seun</li>
</ul>
<ul>
    <li>nhật bản </li>
    <li>tokyo</li>
</ul>
<?php
$array3= array();
$array3["china"] = array("name" => "trung quốc", "city" => array("bắc kinh", "thâm quyến", "thành đô"));
$array3["korea"] = array("name" => "hàn quốc", "city" => array("seun"));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo", "kyoto"));
$array3["vn"] = array("name" => "việt nam", "city" => array("hà nội", "hồ chí minh"));

echo "<pre>";
print_r($array3);
echo "</pre>";

foreach ($array3 as $keyCountry=>$country){
    foreach ($country as $keyCities => $cities) {
        if ($keyCities == "city") {
            foreach ($cities as $keyCity => $city) {
                echo "<br> " . $city;
            }
        }
    }
}
?>
</body>
</html>