<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		{{-- Jquery cdn link --}}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!-- main css file -->
		<link rel="stylesheet" href="{{url('./assets/css/style.css')}}" />

		<!-- bootstrap css file -->
		<link rel="stylesheet" href="{{url('./assets/css/bootstrap.min.css')}}" />

		<!-- google fonts link -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
			rel="stylesheet" />
		<link
			rel="shortcut icon"
			href="{{url('./assets/images/logo.png')}}"
			type="image/x-icon" />
		<title>Log In</title>
	</head>

	<body>
		<section class="main-section">
			<div class="left-side"></div>
			<div class="right-side">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="login-box">
								<div class="login-form p-3">
									<img src="./assets/images/logo.png" alt="" />
									<form action="{{route('admin.login')}}" method="POST" class="mt-3">
										@csrf
										@include('validator.validate')
										<div class="form-group">
											<!-- <label for="">Username</label> -->
											<input id="name" name="userinfo"
												placeholder="Username/Email/Cell"
												class="form-control mb-3"
												type="text" />
										</div>
										<div class="form-group">
											<!-- 	<label for="">Password</label> -->
											<input id="pass" name="pass"
												placeholder="Password"
												class="form-control mb-3"
												type="password" />
										</div>
										<div class="pass-check d-flex">
											<input type="checkbox" name="" id="check"><label for="check">Show
												Password</label>
										</div>
										<a href="#">forgot password?</a>
										<input class="submit" type="submit" value="Login" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="{{url('./assets/js/bootstrap.min.js')}}"></script>
		<script src="{{url('./assets/js/custom.js')}}"></script>


	</body>

</html>