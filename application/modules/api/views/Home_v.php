<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Youtube Video Finder</title>

<!-- ~~~=| Fonts files |==-->
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,700italic,400italic,300italic,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- ~~~=| Font awesome |==-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<!-- ~~~=| Bootstrap css |==-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/css/bootstrap.css">

<!-- ~~~=| Theme files |==-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/css/responsive.css">

<!-- Favicons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/theme/images/apple-touch-icon-precomposed.png">
<link rel="shortcut icon" type="image/ico" href="<?php echo base_url();?>assets/theme/images/favicon.ico"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- Done by Shakhawat H. from codingcouples.com // -->
<!--[if lt IE 9]>
      <script src="<?php echo base_url();?>assets/theme/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="<?php echo base_url();?>assets/theme/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


  <style>
	  * {
	  box-sizing: border-box;
	}

	/* Style the search field */
	form.example input[type=text] {
	  padding: 10px;
	  font-size: 17px;
	  border: 1px solid grey;
	  float: left;
	  width: 80%;
	  background: #f1f1f1;
	}

	/* Style the submit button */
	form.example button {
	  float: left;
	  width: 20%;
	  padding: 10px;
	  background: red;
	  color: white;
	  font-size: 17px;
	  border: 1px solid grey;
	  border-left: none; /* Prevent double borders */
	  cursor: pointer;
	}

	form.example button:hover {
	  background: #0b7dda;
	}

	/* Clear floats */
	form.example::after {
	  content: "";
	  clear: both;
	  display: table;
	}
	</style>


<body>

<!-- ~~~=| Header START |=~~~ -->
<header class="header_area">
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="header_top_left">
            <div class="news_twiks">
              <h4>YVF</h4>
            </div>
            <div class="news_twiks_items">
              <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel"> 
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <p>Youtube Video Finder</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          
        </div>
      </div>
    </div>
  </div>
  
  <!-- ~~~=| Logo Area START |=~~~ -->
  <div class="header_logo_area">
    <div class="container">
      <div class="row">
			<div class="col-md-offset-3 col-md-6 col-xs-12">
				<center>
					<p><h3>Find Video in Youtube</h3></p>
				</center>
				<form class="example" action="<?php echo base_url();?>api" method="get">
				  <input required value="" type="text" name="q" placeholder="Search Video in Youtube" name="search">
				  <button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
      </div>
    </div>
  </div>
  <!-- ~~~=| Logo Area END |=~~~ --> 
  
  
</header>
<!-- ~~~=| Header END |=~~~ --> 


<!-- ~~~=| Main Wrapper END |=~~~ -->
<section class="main_news_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12"> 
		<?php
			if($data == '')
				$response = 'False';
			else
				$response = 'True';
			if($response == 'True')
			{
				/*
				echo"<pre>";
				print_r($data->items);
				echo"</pre>";
				*/
				foreach($data->items as $d)
				{
					if(isset($d->id->videoId))
					{
						$id = $d->id->videoId;
					}elseif(isset($d->id->channelId))
						$id = $d->id->channelId;
					else
						$id = $d->id->playlistId;
						
		?>
			<div class="col-md-3 col-sm-12 col-xs-12 text-center" style="padding:10px;border:1px solid #f2eee7;height:420px">
				<center>
				<div>
					<img style="height:220px; width:220px" src="<?php echo $d->snippet->thumbnails->high->url;?>" class="img img-responsive" alt="">
				</div>
				</center>
				<br>
				<div style="height:120px">
					<h5 style="height:50px">
					  <?php echo $d->snippet->title; ?>
					</h5>          
					<h6>
					  <?php echo $d->snippet->channelTitle; ?>
					</h6>     
					<h6>
					  <?php echo date('d-F-Y', strtotime($d->snippet->publishedAt)); ?>
					</h6>     
				</div>
				<button onclick="window.open('https://www.youtube.com/watch?v=<?php echo $id; ?>')" class="btn btn-primary">
					<i class="fab fa-youtube"></i>
					View in Youtube
				</button>           
			</div>
		<?php
				}
			}else
			{
				
			}
		?>
		
		
      </div>
    </div>
  </div>
</section>
<!-- ~~~=| Main Wrapper END |=~~~ --> 


<!-- ~~~=| Footer START |=~~~ -->
<footer class="footer_area"><div class="container">
  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="footer_bottom_box">
		<p> © 2019 Made by Andreas Hermawan  </p>
	  </div>
	</div>
  </div>
</footer>
<!-- ~~~=| Footer END |=~~~ --> 

<!-- ~~~=| Latest jQuery |=~~~ --> 
<script src="<?php echo base_url();?>assets/theme/https://code.jquery.com/jquery.min.js"></script> 

<!-- ~~~=| Bootstrap jQuery |=~~~ --> 
<script src="<?php echo base_url();?>assets/theme/js/bootstrap.min.js"></script> 

<!-- ~~~=| Opacity & Other IE fix for older browser |=~~~ --> 
<!--[if lte IE 8]>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/js/ie-opacity-polyfill.js"></script>
	<![endif]--> 

<!-- ~~~=| Theme jQuery |=~~~ --> 
<script src="<?php echo base_url();?>assets/theme/js/main.js"></script>
</body>
</html>
