<!DOCTYPE html>
<html>
<head>
	<title>RV Share</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="assets/images/icon.png">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!-- FOR CALENDAR USE  -->
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- END OF CALENDAR USEABLE LINKs -->

<style type="text/css">

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
	color: black;
	background: white;
	border: none;
	border-bottom: 1px solid 	 #e6e6e6;

}
.ui-widget-header {
	background: white;
	color: black; 
	border:none;
}
.ui-datepicker th{
	border-bottom: 1px solid gray;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BRAND</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">About us</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Terms & Conditions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Privacy Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
     
    </ul>
   
  </div>
</nav>

<div class="" style="width: 100%;">
	<div class="header"> 
	<div class="overlay">
	<h1 class="text-center text-white padding-top">Discover & book unique RVs</h1>
	<h4 class="text-center text-white" >for production and events</h4>
			<div class="d-flex justify-content-center">
				<form class="form-inline" style="padding: 0px 0px; background-color: ">
					  <select class="custom-select my-1 mr-sm-0" id="inlineFormCustomSelectPref" style="border-radius: 0px;height: 50px; min-width: 200px;">
					    <option selected>Location</option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>
 						<input type="text" name="daterange" id="range_date" style="border-radius: 0px;height: 50px; min-width: 220px;"	 placeholder="Choose Date" />

					 <!-- <input onchange="fetch_rv()"  type="text" class="form-control" id="txtDateRow" placeholder="Choose your date" style="border-radius: 0px;height: 50px; min-width: 220px;" /> -->
					   <select class="custom-select my-1 mr-sm-0" id="model" style="border-radius: 0px;height: 50px;min-width: 240">
					    <option selected>Choose a Model</option>
					   
					  </select>

			  <button type="submit" class="btn btn-success my-1"  style="border-radius: 0px;padding-left: 30px;;padding-right: 30px;height: 50px;">Find</button>
			</form>
		</div>
	</div>
	</div>	
</div>


<!-- 2 Column section Start -->
<div class="container"  style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-6">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/IMG_3417.jpg" alt="Card image cap">
			    <div class="card-body">
			       <h4  class="card-title" style="color: black;">Class C 21-23</h4>
				   <p class="card-text" style="color: black;"><i> Sleeps up to 4/Recomended: 3 Adults & 2 Childred</i></p>
				   <p class="text-muted">25$ Per Person</p>
				    <img height="40" src="assets/images/2men.png">
				  
			    </div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/IMG_3417.jpg" alt="Card image cap">
				 <div class="card-body">
			       <h4  class="card-title" style="color: black;">Class C 22-24</h4>
				   <p class="card-text" style="color: black;"><i> Sleeps up to 5/Recomended: 3 Adults & 2 Childred</i></p>
				   <p class="text-muted">25$ Per Person</p>

				    <img height="40" src="assets/images/3men.png">
				  
			    </div>
			</div>
		</div>
	
	</div>
</div>
<!-- 2 Column section END -->


<!-- 3 Column section Start -->
<div class="container"  style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-4">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/IMG_3417.jpg" alt="Card image cap">
			   <div class="card-body">
			       <h4  class="card-title" style="color: black;">Class C 22-24</h4>
				   <p class="card-text" style="color: black;"><i> Sleeps up to 6/Recomended: 4 Adults & 2 Childred</i></p>
				   <p class="text-muted">25$ Per Person</p>

				    <img height="40" src="assets/images/4men.png">
				  
			    </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/IMG_3417.jpg" alt="Card image cap">
			   <div class="card-body">
			       <h4  class="card-title" style="color: black;">Class C 22-24</h4>
				   <p class="card-text" style="color: black;"><i> Sleeps up to 7/Recomended: 4 Adults & 2 Childred</i></p>
				   <p class="text-muted">25$ Per Person</p>

				    <img height="40" src="assets/images/4men.png">
				  
			    </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/IMG_3417.jpg" alt="Card image cap">
			    <div class="card-body">
			       <h4  class="card-title" style="color: black;">Class C 22-24</h4>
				   <p class="card-text" style="color: black;"><i> Sleeps up to 6/Recomended: 4 Adults & 2 Childred</i></p>
				   <p class="text-muted">25$ Per Person</p>

				    <img height="40" src="assets/images/4men.png">
				  
			    </div>
			</div>
		</div>
	
	</div>
</div>
<!-- 3 Column section END -->


<!-- 4 Column section Start -->
<div class="container-fluid jumbotron">
<div class="container">
	<h2 class="text-center">Check out our deals</h2>
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-3">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/header-image.jpg" alt="Card image cap">
			    <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				   
			    </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/header-image.jpg" alt="Card image cap">
			    <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				 	
			    </div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/header-image.jpg" alt="Card image cap">
			    <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				
			    </div>
			</div>
		</div>
				<div class="col-md-3">
			<div class="card mb-3">
			 	<img class="card-img-top" src="assets/images/header-image.jpg" alt="Card image cap">
			    <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
			
			    </div>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- 4 Column section END -->

<!-- FOOTER START -->

<div class="container-fluid" style="margin-top: 50px; background-color: #e8e8e8;">
<div class="container" style="padding-top: 50px;">
	<div class="row">
		<div class="col-md-6">
		<h3>Company</h3>
			<nav class="nav">
				  <a class="nav-link active" href="#">About us</a>
				  <a class="nav-link" href="#">Terms & Conditions</a>
				  <a class="nav-link" href="#">Privacy Policy</a>
				  <a class="nav-link" href="#">Contact us</a>
			</nav>
		</div>
		<div class="col-md-6">
		<h3 class="responsive">Join us</h3>
			<ul class="nav responsive">
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><i class="fa fa-google-plus"></i></a>
				  </li>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- FOOOTER END -->

<script type="text/javascript" src="assets/js/ajax.js"></script>

<script>
var start_date , end_date;
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
     start_date = start;
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    fetch_rv(start.format('YYYY-MM-DD'));
  });
     $('#range_date').val('');
});

	// alert($('#range_date').val());
	// $('#range_date').val('Choose value');

</script>
</html>