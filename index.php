<!DOCTYPE html>
<html>
<head>
	<title>Check username availability - Clue Mediator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container-fluid mt-3">
	<h4>Check username availability - <a href="https://www.cluemediator.com" target="_blank">Clue Mediator</a></h4>
	<div class="row mt-4">
		<div class="col-md-3">
			<input type="text" name="username" class="form-control mb-1" autocomplete="off" placeholder="Enter Username"  id="username" />
			<div id="uname_result"></div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$('#username').on('blur', function(){
				var user_name = $(this).val().trim();
				if(user_name != ''){
					$.ajax({
						url: 'username_checker.php',
						type: 'post',
						data: {user_name: user_name},
						success: function(response){
							$('#uname_result').html(response);
						}
					});
				} else {
					$("#uname_result").html("");
				}
			});
		});
	</script>

</body>
</html>