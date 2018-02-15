<?php
if (isset($_GET["str"]) && isset($_GET["rot"]) && isset($_GET["step"])) {
    $rot = intval($_GET["rot"]);
    $str = $_GET["str"];
    $step = intval($_GET["step"]);
    $i = 0;
    $new_string = "";
    for ($i = 0 ; $i < strlen($str) ; $i++) {
        $new_string .= chr(ord($str[$i]) + ($rot + $step));
        $j++;
    }
    echo $new_string;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>i++ Crypto</title>
    </head>
    <body>
        <form method="GET" action=".">
            <label>String to decode</label>
            <input type="text" name="str"></input>
            <label>Start Rotate Value</label>
            <input type="number" name="rot"></input>
            <label>Step</label>
            <input type="number" name="step"></input>
            <button>Submit</button>
        </form>
    </body>
</html>
