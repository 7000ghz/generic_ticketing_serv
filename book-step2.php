<!DOCTYPE html>
<html>
<title>RTBUS PH</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" href="styles/css/w3.css">
<link rel="stylesheet" href="styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="styles/css/custom.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="book.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-bus w3-margin-right"></i>RTBUSPH</a>
  <a href="howto.php" class="w3-bar-item w3-button w3-mobile">How to book</a>
  <a href="routes.php" class="w3-bar-item w3-button w3-mobile">Bus Routes</a>
  <a href="terminals.php" class="w3-bar-item w3-button w3-mobile">Bus Terminals</a>
  <a href="book.php" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Book Now</a>
</div>
<!-- Header -->


<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">
          
          <div class="steps">
            <h3>Step 2:</h3>
            <h4>Choose Departure Time and Bus</h4>
          </div><!-- step2 -->
            <br>

          <div class="book2">
              <div class="travelinfo">
                  <h5>Origin: Origin City</h5>
                  <h5>Destination: Destination City</h5>
                  <h5>Date: Travel Date</h5>
              </div>

              <form id="form" action="book-step3.php" method="post">
                      <div class="mytable">
                              <div class="pickbus">
                                    <table>
                                    <tr>
                                      <th>Bus Type</th>
                                      <th>Departure Time</th>
                                      <th>Seats Available</th>
                                      <th>Price</th>
                                      <th></th>
                                    </tr>
                                    <tr>
                                      <td>Aircon Bus 01</td>
                                      <td>5:00 am</td>
                                      <td>30 seats available</td>
                                      <td>245 Php</td>
                                      <td><input type="radio" name="radiobus">Select</td>
                                    </tr>
                                    <tr>
                                      <td>Aircon Bus 02</td>
                                      <td>5:30 am</td>
                                      <td>40 seats available</td>
                                      <td>245 Php</td>
                                      <td><input type="radio" name="radiobus">Select</td>
                                    </tr>
                                    <tr>
                                      <td>Aircon Bus 03</td>
                                      <td>6:00 am</td>
                                      <td>40 seats available</td>
                                      <td>245 Php</td>
                                      <td><input type="radio" name="radiobus">Select</td>
                                    </tr>
                                    <tr>
                                      <td>Aircon Bus 04</td>
                                      <td>6:30 am</td>
                                      <td>40 seats available</td>
                                      <td>245 Php</td>
                                      <td><input type="radio" name="radiobus">Select</td>
                                    </tr>
                                    <tr>
                                      <td>Aircon Bus 05</td>
                                      <td>7:00 am</td>
                                      <td>40 seats available</td>
                                      <td>245 Php</td>
                                      <td><input type="radio" name="radiobus">Select</td>
                                    </tr>
                                    <tr>
                                      <td>Aircon Bus 06</td>
                                      <td>8:00 am</td>
                                      <td>40 seats available</td>
                                      <td>245 Php</td>
                                      <td><input type="radio" name="radiobus">Select</td>
                                    </tr>
                                  </table>
                                
                              </div><!-- pickbus -->
                        
                      </div><!-- mytable -->
                      <br>
                              <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-bus w3-margin-right"></i> Proceed to next step</button>

                    </form><!-- form -->

                  </div><!-- book2 -->
              

              


            <br><br><br><br>
          <div class="steps">
            <a href="book.php">Click here to go back to previous page</a>
          </div><!-- step2 -->
            <br>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-margin-top">
  
  <div class="row">

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6	" data-wow-delay="0.3s">
                            <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
                              <div class="quick" id="footerlinks"><h2>Quicklinks</h2>
							  			<ul>
							  				<li><a href="book.php" title="">Book Now</a></li>
							  				<li><a href="howto.php" title="">How to book</a></li>
							  				<li><a href="routes.php" title="">Know your Routes</a></li>
							  				<li><a href="terminals.php" title="">Know your Terminal</a></li>
							  				<li><a href="#" title="">Contact Us</a></li>
							  				<li><a href="#" title="">Help</a></li>
							  			
							  			</ul>
							  </div>
                              <!--<a class="btn btn-primary">Learn more</a>-->
                            </div>
                          </div>
                          
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="service-box wow bounceInDown" data-wow-delay="0.1s">
                              <div class="about" id="footerlinks"><h2>About</h2>
							  			<ul>
							  				<li><a href="#" title="">FAQs</a></li>
							  				<li><a href="#" title="">Our Partners</a></li>
							  				<li><a href="#" title="">Security Policy</a></li>
							  				<li><a href="#" title="">Terms & Condiitons</a></li>

							  			</ul>
							  </div>
                              <!--<a class="btn btn-primary">Learn more</a>-->
                            </div>
                          </div>

	</div>
  
</footer>
						<div class="col-md-12">
                          <p align="center">RTBUSPH 2018</p>

                          <div class="credits">
                            <a href="#"></a>
                          </div>
                        </div>
</body>
</html>
