<!DOCTYPE html>
<html lang="en">
<head>
  <title>Layout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav">
  	<li class="nav-item">
    	<a class="nav-link active" href="about">about</a>
  	</li>
  	<li class="nav-item">
    	<a class="nav-link" href="contact">Contact Us</a>
  	</li>
  	<li class="nav-item">
    	<a class="nav-link" href="data">Data</a>
  	</li>
  	<li class="nav-item">
    	<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
	<div class="container">
		@yield('content')
	</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
</body>