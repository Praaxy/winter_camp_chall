<?php
if ($_GET["passwd"] == "admin")
{
    echo "Voici le flag en ModuleDebianFive : " . md5("md5hash");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ModuleDebianFive</title>
	<script type="text/javascript"src="index.js"></script>
</head>
<body>
    <form method="GET" action=".">
        <label>Password : </label>
        <input type="text" value="" name="passwd"></input>
        <button>Submit</button>
    </form>
</body>
</html>