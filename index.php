
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Vasu Naman">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Snap Chat Database Overview</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active navigate"><a href="#mynumber">Check My Number</a></li>
        </ul>
        <h3 class="text-muted">SnapChat DB overview</h3>
      </div>

      <div class="jumbotron">
        <h1>SnapChat Search</h1>
        <p class="lead">Please enter your number to check whether do you belong from 4.6 millon of users whose accounts has been compromised. And understand whether your personal information is leaked or not</p>
        <form role="form">
		  <div class="form-group">
		    <label for="exampleInputEmail1"><a name="mynumber">Your Phone Number</a></label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Phone Number">
		  </div>
		</form>  
        <p><a class="btn btn-lg btn-success" href="#" role="button">Search</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Security</h4>
          <p>This application uses the database provided by the snapchat hackers to let you know how secure you are.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <div class="footer">
        <p>&copy; BIMJL 2013</p>
      </div>

    </div> <!-- /container -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        <script src="dist/js/jquery.scrollTo.min.js"></script>
		<script src="dist/js/jquery.localScroll.min.js"></script>
		
		<script>
			$(document).ready(function() {
			   $('.navigate').localScroll({duration:500});
			});
		
		</script>
  </body>
</html>