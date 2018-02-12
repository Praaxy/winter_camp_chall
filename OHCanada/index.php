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
  	<title>Rimouski</title>
</head>
<body>
	<fieldset style="margin-top: 10px; padding: 10px;" width="60%">
		<input placeholder="password" id="password" type="password">
		<button id="log"> connect </button>
	</fieldset>
    </body>
</html>

<script>
$('#log').click(function()
{
	$.ajax({
		type: 'POST',
		url: 'login.php',
		data: {
			login: $('#login').val(),
			passwd: $('#password').val()
		},
		success: function(data) {
			var datas = JSON.parse(data)
			if (datas.verif == "YES") {
				alert(datas.password);
			} else {
				alert("NOP");
			}
		},
		error: function() {
			alert("ERREUR CONTACTER UN COBRAS !");
		}
	});
});
</script>
