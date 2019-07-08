<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    kiểu đối tượng (object)
</pre>
<?php
class student{
    public $name;
    public $age;
    public $location;

    public function setInfo($name,$age,$loaction){
        $this->age=$age;
        $this->name=$name;
        $this->location=$loaction;
    }
}
$an= new student();
var_dump($an);

echo"<pre>";
print_r($an);
echo "</pre>";
?>
</body>
</html>