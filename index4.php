<?php 
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script
	src="http://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript"src="index4.js"></script>
  	<title>CHALL 4</title>
</head>
<body>
	<fieldset style="margin-top: 10px; padding: 10px;" width="60%">
		<input id="login">
		<input id="password">
		<button id="log"> clickMe </button>
	</fieldset>
    </body>
</html>

<script>
$('#log').click(function()
{
	if (SHA1($("#password").val()) == "d033e22ae348aeb5660fc2140aec35850c4da997") {
		alert("Good password");
	} else {
		alert("Bad password")
	}
});
</script>
