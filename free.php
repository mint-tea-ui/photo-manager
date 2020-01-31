<?php
include("data_framework.php");
include("data_framework_sqlite.php");
include("QSelect.php");?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Photos</title>
</head>
<body>
<?php

///Template
$static_params=array(
"{OriginalName}" => "file01",
"{Name}"         => "img_0000",
"{Number}"       => "0234",
"{Ext}"          => "MOV",
"{Edited}"       => "_edited",
"{Year}"         => "2004",
"{Copy}"         => "",
);

var_dump($static_params);
var_dump(array_keys($static_params));
var_dump(array_values($static_params));


$filename_template = "{OriginalName}{Copy}{Edited}.{Ext}";
var_dump($filename_template);


$filename= str_replace(array_keys($static_params),array_values($static_params), $filename_template);
var_dump($filename);

// работа с файлами
db1("--",file_exists("E:/Media 21_01_2020 move test 4/DCIM/105APPLE/IMG_5908.JPG"));
link("D:/iPhone/Media 21.01.2020/DCIM/105APPLE/IMG_5908.JPG","D:/Pictures/iPhone 4 move test/2018/IMG_59083.JPG");

?>
</body>
</html>