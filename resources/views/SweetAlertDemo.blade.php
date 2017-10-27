<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>--}}
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}"  >
	<script src="{{asset ('js/sweetalert.min.js')}}"></script>
</head>
<body>
	<div class="container">
		<h3 class="center-text">Sweet Alert using Laravel - Learn Infinity</h3>
	 
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				
				@include('sweet::alert')
	 
			</div>
	 
		</div>
	 
	</div>
</body>
</html>