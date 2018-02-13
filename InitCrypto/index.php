<?php
if (isset($_GET["str"]) && isset($_GET["rot"])) {
    $rot = intval($_GET["rot"]);
    $str = $_GET["str"];
    $i = 0;
    $new_string = "";
    while ($i < strlen($str)) {
        $new_string .= chr(ord($str[$i]) + $rot);
        $i++;
    }
    echo $new_string;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hidden form</title>
    </head>
    <body>
        <form method="GET" action=".">
            <label>String to decode</label>
            <input type="text" name="str"></input>
            <label>Rotate Value</label>
            <input type="number" name="rot"></input>
            <button>Submit</button>
        </form>
    </body>
</html>
