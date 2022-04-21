<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>gumcode</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <style> h1 { color : whitesmoke}
                /* h1 {background-color: cornflowerblue} */
                h1 { font-style:oblique}
				button {color: black}
        
        </style>
    </head>
<body>
	<section id="two">
        <h1>FORM TELEGRAM BOT</h1>

		{{-- <form action='backend.php' method="POST"> --}}
			{{-- <form action="view/bot_telegram/backend.php" method="POST"> --}}
	
	<div class="col-md-6">
                           
		<form action="{{ url('/telegram') }}" method="POST">

			@csrf

		<div class="form-group">
			<input type="id" name="id" class="form-control form-footer" placeholder="ID TELEGRAM" required="">
		</div>
	   
		<div class="form-group">
			<input type="pesan" name="pesan" textarea class="form-control form-footer" rows="5" placeholder="Message"></textarea>
		</div>
	</section>
		<button type="submit" name="submit" class="btn btn-solid-state">Send Message</button>
	</form>

</body>
  
</html>