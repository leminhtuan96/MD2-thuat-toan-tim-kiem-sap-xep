<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="phone" placeholder="nhap so dien thoai"></textarea>
    <button>Kiem tra</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_REQUEST["phone"];

    $phones = explode(",", $phone);
    function check($number)
    {
        $dauso = substr($number, 0, 3);
        switch ($dauso) {
            case "091":
            case "092":
                return "vinaphone";
            case "097":
            case "098":
                return "viettel";
            case "090":
                return "mobiphone";
        }
    }

    $viettel = [];
    $mobiphone =[];
    $vinaphone = [];

foreach ($phones as $phone){
    if (check($phone)=="vinaphone"){
        $vinaphone[]=$phone;
    }elseif (check($phone)=="viettel"){
        $viettel[]=$phone;
    }else{
        $mobiphone[]=$phone;
    }
}

echo "<pre>";
echo "viettel:";
print_r($viettel);
echo "<br>";
echo "mobiphone:";
print_r($mobiphone);
echo "<br>";
echo "vinaphone:";
print_r($vinaphone);
}
?>



