<?php
session_start();
if(empty($_SESSION)){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ITS Lost n Found</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include 'navbar.php';?>
	<?php include 'sidebar.php';?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
				
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pesan</h1>
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		    <div class="col-md-8 message-sideright">
		        <div class="panel">
		            <div class="panel-heading">
		                <div class="media">
		                    <a href="kirimpesan.php" class="btn btn-danger pull-right rounded"><i class="fa fa-share"></i></a>
		                    <a class="pull-left" href="#">
		                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Rebecca Cabean" class="img-circle avatar" width="150" height="150">
		                    </a>
		                    <div class="media-body">
		                        <h4 class="media-heading">Rebecca Cabean <small>(Sales Manager)</small></h4>
		                        <small>Thursday 5th July 2014-via Intercom</small>
		                    </div>
		                </div>
		            </div><!-- /.panel-heading -->
		            <div class="panel-body">
		                <p class="lead">
		                    RE : Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		                </p>
		                <hr>
		                <p>
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		                </p>
		                <br>
		                <p>
		                    Thanks! <br>
		                    Rebecca.
		                </p>
		            </div><!-- /.panel-body -->
		        </div><!-- /.panel -->
		        <div class="panel">
		            <div class="panel-heading">
		                <div class="media">
		                    <a class="pull-left" href="#">
		                        <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="sarah tingting" class="img-circle avatar">
		                    </a>
		                    <div class="media-body">
		                        <h4 class="media-heading">Sarah Tingting</h4>
		                        <small>Thursday 5th July 2014-via Intercom</small>
		                    </div>
		                </div>
		            </div><!-- /.panel-heading -->
		            <div class="panel-body">
		                <p class="lead">
		                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		                </p>
		                <hr>
		                <strong>Hi Tol Lee</strong>
		                <p>
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		                </p>
		            </div><!-- /.panel-body -->
		        </div><!-- /.panel -->
		    </div><!-- /.message-sideright -->
		</div>
		</div><!--/.row-->	


	</div>	<!--/.main-->
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
