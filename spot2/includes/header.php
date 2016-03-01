<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.php" rel="stylesheet">
    <link href="assets/css/font-awesome.min.php" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.php" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SP<i class="fa fa-circle"></i>T</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
					<?=makeLinks($nav1)?>
 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
		
		<div id='headerwrap'>
		<div class='container'>
			<div class='row centered'>
				<div class='col-lg-8 col-lg-offset-2'>
				<h1><b><?=$title?> </b></h1>
				<h2><?=$pageID?> </h2>	
					
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->
<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h4><?=$title?></h4>
				<p>This is the <?=$pageID?></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
	
<!--header ends here-->