<!DOCTYPE html>
<html>
<head>
	<title>RTBUSPH</title>
	<meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="styles/css/custom.css" media="screen">
</head>
<body>

<div class="wrapper">
  <div class="head">head</div>
  <div class="content">Carousel</div>
  <div class="footer">footer</div>
  <div class="book">
  		<div>

  				<form action="index_submit" method="get" accept-charset="utf-8">
  					<fieldset>
						    <legend>Book now</legend>
						    <ul>
						    	<li>
						    			<ul>
									    	<li>One way<input type="radio" name="trip" value="One way" checked="checked"></li>

									    	<li>Round Trip<input type="radio" name="trip" value="Round Trip"></li>
						  				</ul>
						    	</li>

						    	<li>
							    		<label>I am in:
										<input list="origin" name="from" /></label>
										<datalist class="glows" id="origin">
											<option value="Zamboanga City">
											<option value="Ipil">
											<option value="Pagadian City">
											<option value="Cagayan de Oro">
											<option value="Tagum City">
											<option value="Davao City">
										</datalist>
								</li>

								<li>
										<label>going to:
										<input list="destination" name="to" /></label>
										<datalist class="glows" id="destination">
											<option value="Zamboanga City">
											<option value="Ipil">
											<option value="Pagadian City">
											<option value="Cagayan de Oro">
											<option value="Tagum City">
											<option value="Davao City">
										</datalist>
								</li>

								<li>
										<label for="travel date">Travel Date :</label>
										<input id="travel date" type="date" value="2017-01-25"/>

								</li>

								<li>
										<label for="return date">Return Date :</label>
										<input id="return date" type="date" value="2017-01-25"/>

								</li>

								<li>
										<input type="submit" value="Search">

								</li>

						    </ul>


  					</fieldset>


  					

  				</form>
  			
  		</div>
  </div>
  <div class="about">About
  			<ul>
  				<li><a href="#" title="">Contact Us</a></li>
  				<li><a href="#" title="">Our Partners</a></li>
  				<li><a href="#" title="">Security Policy</a></li>
  				<li><a href="#" title="">Terms & Condiitons</a></li>

  			</ul>
  </div>
  <div class="quick">Quicklinks
  			<ul>
  				<li><a href="#" title="">How to book</a></li>
  				<li><a href="#" title="">Pricing and Schedules</a></li>
  				<li><a href="#" title="">Know your Routes</a></li>
  				<li><a href="#" title="">Know your Terminal</a></li>
  				<li><a href="#" title="">FAQs</a></li>
  				<li><a href="#" title="">Help</a></li>
  			
  			</ul>
  </div>
  <div class="logo">logo</div>
  <div class="nav">
  			<ul>
  				<li><a href="#" title="">Book now</a></li>
  				<li><a href="#" title="">How to book</a></li>
  				<li><a href="#" title="">Bus Routes</a></li>
  				<li><a href="#" title="">Bus Terminals</a></li>
  				
  			</ul>
  </div>
  <div class="sup">
		  	<ul>
		  		<li><a href="#" title="">Contact Us</a></li>
		  	</ul>
  </div>
</div>


</body>
</html>
