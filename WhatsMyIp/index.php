<?php
if ($_GET["ip"] == "176.31.182.36")
{
    echo "The Flag is: omgitsthechangip";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Whats My Ip</title>
    </head>
    <body>
        <form method="GET" action=".">
            <label>Ip :</label>
            <input type="text" value="" name="ip"></input>
            <button>Submit</button>
        </form>
    </body>
</html>
