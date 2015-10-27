<!DOCTYPE html>
<html ng-app="store" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Angular.js Form</title>
    
	<!-- Google Fonts -->

    <!-- Bootstrap -->
    <link href="components/bootstrap/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	  <body>
	  	<div class="container" ng-controller="storeController as store">
		<div ng-repeat="product in store.products">
		  		<div class="row-fluid text-center">
		  			<div class="col-md-4">
			  			<img ng-src="{{product.img[0].full}}"/>
				  		<h2>{{product.type}}</h2>
				  		<h3>{{product.price}}</h3>
				  		<blockquote ng-repeat="review in product.reviews">
			  				<b>Stars: {{review.stars}}</b></br>
			  				{{review.body}}</br>
			  				<cite>by: {{review.author}}</cite>
			  			</blockquote>
			  		</div>
				</div>	
			<div class="col-lg-8">
			  	<form class="form-signin" name="reviewForm" ng-controller="reviewController as reviewCtrl" ng-submit="reviewCtrl.addReview(product)">
			  		<blockquote>
						<b>Stars: {{reviewCtrl.review.stars}}</b></br>
						Preview: {{reviewCtrl.review.body}}</br>
						Author: {{reviewCtrl.review.author}}</br>
					</blockquote>
					<div>
				  		<select class="btn btn-default dropdown-toggle" ng-model="reviewCtrl.review.stars">
							<option value="1" class="one">1 Star</option>
							<option value="2">2 Stars</option>
							<option value="3">3 Stars</option>
							<option value="4">4 Stars</option>
							<option value="5">5 Stars</option>
						</select></br>
					</div>
					<textarea ng-model="reviewCtrl.review.body" placeholder="Describe the iPhone here..."></textarea></br>
					<label>by:</label></br>
					<input type="email" ng-model="reviewCtrl.review.author" placeholder="Enter email here..." /></br>
					<input type="submit" value="Submit" class="btn btn-primary" />	  		
			  	</form>
		   	</div>
		   </div>
  		</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="components/jquery/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="components/bootstrap/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <!-- Include Angular.js -->
    <script src="components/angular/angular.min.js"></script>
    <!-- Include Angular.js -->
    <script src="js/app.js"></script>
    <!-- Include custom jquery -->
    <script src="js/main.js"></script>

  </body>
</html>