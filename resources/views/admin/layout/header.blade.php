<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .header{
    	
    }
    .header ul li{
    	list-style: none;
    }
    .header img{
    	float:left;
    }
	.header a{
		margin-top: 15px;
		margin-right: 10px;
		margin-left: 10px;
		margin-bottom: 15px;
	}
</style>
<body>
    <div class="header">
    		<nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="homepage.php"><img style="margin: 15px;" src="img/weblogo.jpg" width="180px" height="50px"></a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="homepage.php"><span class=" glyphicon glyphicon-home"> Home</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Account<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="login2.php">Login</a></li>
										<li><a href="signup.php">Sign Up</a></li>
										<li><a href="cart.php">Team management</a></li>
									</ul>
								</li>
								<li><a href="managesong.php"><span class=" glyphicon glyphicon-music"> Match</a></li>
								<li><a href="introduction.php"><span class=" glyphicon glyphicon-bookmark"> News</a></li>
						</ul>
							<!-- <ul class="nav navbar-nav navbar-right">
								<div style="margin-top: 25px;" id="form_search">
									<form method="get" action="search.php">
										<input type="text" name="user_query" placeholder="Search a music" />
										<input type="submit" name="Search" value="search" />
									</form>
								</div>	
							</ul> -->
					</div>
				</div>
			</nav>	
		</div>
</body>       
</html>