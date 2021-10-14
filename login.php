<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
        body{
	/*background-color: wheat;*/
	
	background-image: url('love.jpg');
	background-position: center;
	background-attachment: fixed;
	background-size: cover;

}
h1{	
	font-size: 35px;
	color: red;
}
#form{
	/* text-align: center; */
	/*border: groove;*/
	font-weight: bold;
	/*background-image: url('im1.jpg');
	background-repeat: no-repeat;*/
	margin: 5% 30%;
	background-attachment: fixed;
	}
#firstname{
	
	border: groove;
	padding: 5px;
	background-color: pink;
	font-weight: bold;
	
		}
#fname{
	padding: 5px
}

#lastname{
	
	border: groove;
	padding: 5px;
	margin-top: 30px;
	background-color: pink;
	font-weight: bold;
}
#lname{
	padding: 5px;
	}

#email{
	
	padding: 5px;
	border: groove;
	
	background-color: pink;
	font-weight: bold;
	}
#em{
	padding: 5px;}

#password{
	
	border: groove;
	padding: 5px;
	
	background-color: pink;
	font-weight: bold;
}
#passwd{
	padding: 5px;
}

#conpassword{
	;
	border: groove;
	padding: 5px;
	margin-top: 30px;
	background-color: pink;
	font-weight: bold;
}
#conpasswd{
	
	padding: 5px;
}

#button{
	border: groove;
	padding: 5px;
	margin-top: 30px;
	margin-bottom: 30px;
	background: green;
	font-weight: bold;
	font-size: 20px;
	color: ;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<form id="form" action="login-process.php" method="post">

		<h1>LOGIN YOUR ACCOUNT</h1><br>
        
		<label id="em">Email</label><br>
		<input type="text" name="email" id="email" value="" class="form-control">
        <label id="passwd">Password</label><br>
		<input type="text" name="password" id="password" value="" class="form-control">
        <button type="submit" class="btn btn-success mt-2">Login</button>
        <!-- <a href="registration">Create new account</a> -->
	</form>


</body>
</html>