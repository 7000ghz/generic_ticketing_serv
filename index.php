<!DOCTYPE html>
<html>
<head>
	<title>RTBUSPH</title>
	<meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- local css/js -->
    <link rel="stylesheet" href="styles/css/bootstrap.min.css" media="screen"> 
    
<!--     <link rel="stylesheet" href="styles/css/style.css" media="screen"> -->
<!--     <link rel="stylesheet" href="styles/css/default.css" media="screen"> -->
<!--     <link rel="stylesheet" href="styles/css/custom.css" media="screen"> -->
    <link rel="stylesheet" href="styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css" media="screen"> 
    <script src="styles/js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="styles/css/custom.css" media="screen"> 

</head>
<body>

<div class="wrapper">
  <div class="head">head</div>
  <div class="content" id="content2">content</div>
  <div class="footer">footer</div>
  <div class="book">
  		<div>

  				<form action="index_submit" method="post" accept-charset="utf-8">
  					<fieldset>
						    <legend><i class="fa fa-bus"></i> Book now</legend>
						    <ul>
						    	<li>
						    			<ul>
						    				
									    	<li>One way<input type="radio" onclick="javascript:yesnoCheck();" id="noCheck" name="trip" value="One way" checked="checked"></li>

									    	<li>Round Trip<input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck" name="trip" value="Round Trip"></li>
						  					
					  					</ul>
						    	</li>

						    	<li>
							    		<label>I am in:
										<input list="origin" name="from" /></label>
										<datalist class="glows" id="origin">
											<option value="Zamboanga City">
											<option value="Tungawan">
											<option value="Ipil">
											<option value="Nagga">
											<option value="Kabasalan">
											<option value="Siay">
											<option value="Imelda">
											<option value="Diplahan">
											<option value="Buug">
											<option value="Kumalarang">
											<option value="Dumalinang">
											<option value="Pagadian City">
											<option value="Cagayan de Oro">
											<option value="Tagum City">
											<option value="Davao City">
										</datalist>
								</li>

								<li>
										<label>Going to:
										<input list="destination" name="to" /></label>
										<datalist class="glows" id="destination">
											<option value="Zamboanga City">
											<option value="Tungawan">
											<option value="Ipil">
											<option value="Nagga">
											<option value="Kabasalan">
											<option value="Siay">
											<option value="Imelda">
											<option value="Diplahan">
											<option value="Buug">
											<option value="Kumalarang">
											<option value="Dumalinang">
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
										<div id="ifYes" style="display:none">
												<label for="return date">Return Date :</label>
												<input id="return date" type="date" value="2017-01-25"/>
										</div>

										<script type="text/javascript">
											function yesnoCheck() {
										    	if (document.getElementById('yesCheck').checked) {
										        document.getElementById('ifYes').style.display = 'block';
										    	}
										    	else document.getElementById('ifYes').style.display = 'none';
											}
										</script>

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
  				<li><a href="#" title="">FAQs</a></li>
  				<li><a href="#" title="">Our Partners</a></li>
  				<li><a href="#" title="">Security Policy</a></li>
  				<li><a href="#" title="">Terms & Condiitons</a></li>

  			</ul>
  </div>
  <div class="quick">Quicklinks
  			<ul>
  				<li><a href="#" title="">Pricing and Schedules</a></li>
  				<li><a href="#" title="">How to book</a></li>
  				<li><a href="#" title="">Know your Routes</a></li>
  				<li><a href="#" title="">Know your Terminal</a></li>
  				<li><a href="#" title="">Contact Us</a></li>
  				<li><a href="#" title="">Help</a></li>
  			
  			</ul>
  </div>
  <div class="logo"><i class="fa fa-bus"></i></div>
  <div class="nav">
  			<ul>
  				<h2>Rural Transit Online</h2>
  				<li><a href="#" title="">Book now</a></li>
  				<li><a href="#" title="">How to book</a></li>
  				<li><a href="#" title="">Bus Routes</a></li>
  				<li><a href="#" title="">Bus Terminals</a></li>
  				
  			</ul>
  </div>

</div>

			

<!-- local js -->
    <script src="styles/js/bootstrap.min.js"></script>
    <script src="styles/js/custom.js"></script>
    <script src="styles/js/jquery.dlmenu.js"></script>
    <script src="styles/js/jquery.js"></script>
    <script src="styles/js/jquery.smooth-scroll.min.js"></script>
    <script src="styles/js/wow.min.js"></script>
    <script src="styles/js/contactform.js"></script>

</body>
</html>