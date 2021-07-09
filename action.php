<?php
$alphas = array_merge(range('A', 'Z'), range('a', 'z'));
$numbers = range(0,9);

$stringlength = 0;

if (!empty($_POST['stringlength'])) {
    if (isset($_POST['stringlength'])) {
        $stringlength = $_POST['stringlength'];
    }
} else {
    echo "<h1>Form not filled.</h1><br>";
}

$symbols = [];
if (!empty($_POST['choice'])){
    if (isset($_POST['choice'])){
        switch ($_POST['choice']){
            case 'numbers':
                $symbols = $numbers;
                break;
            case 'letters':
                $symbols = $alphas;
                break;
            case 'numlet':
                $symbols = array_merge($alphas, $numbers);
                break;
        }
    }
}

function randomString($arr, $strlength) {
    $str = '';
    if ($strlength != 0) {
        for ($i = 0; $i < $strlength; $i++) {
            $str .= $arr[rand(0, count($arr) - 1)];
        }
        return $str;
    } else {
        return "";
    }
}

function separateNumbers($str) {
    $numbers = '';
    if(strlen($str) != 0) {
        for ($i = 0; $i < strlen($str); $i++) {
            if (($str[$i] > 0 && $str[$i] < 9)) {
                $numbers .= $str[$i];
            }
        }
    }
    return $numbers;
}

function separateLetters($str) {
    $letters='';
    if(strlen($str)!=0) {
        for ($i = 0; $i < strlen($str); $i++) {
            if (($str[$i] > 'a' && $str[$i] < 'z') || ($str[$i] > 'A' && $str[$i] < 'Z')) {
                $letters .= $str[$i];
            }
        }
    }
    return $letters;
}

$s = randomString($symbols, $stringlength);
$n = separateNumbers($s);
$l = separateLetters($s);
echo "Your string is: $s <br>";
echo "Numbers in your string: $n <br>";
echo "Letters in your string: $l <br>";
?>

<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Result</title>
</head>
<body>
<a href="index.php">Back</a>
</body>
</html>
