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
            <h3>Step 4:</h3>
            <h4>Booking Information</h4>
          </div><!-- step4 -->
            <br>

          <div class="book4">
              

                  <div class="box2">
                        <form id="form" action="book-step5.php" method="post">
                      <fieldset>
                          <legend> Bookers Details</legend>
                    <ul>
                      <li>First Name: <input type="text" name="fname" size="40" required></li>
                      <li>Last Name: <input type="text" name="lname" size="40" required></li>
                      <li>Email: <input type="text" name="email" size="45" required></li>
                      <li>Cellphone Number: <input type="text" name="cpnumber" required></li>
                      <li>Age: <input type="text" name="age" size="5" maxlength="3"></li>
                      <li>Gender: <select name = "dropdown">
                            <option value = "Male" selected>Male</option>
                            <option value = "Female">Female</option>
                         </select></li>
                      <!-- <li>I am also a passenger <input type="radio" name="alsopassenger"></li> -->
                    </ul>



                    <div>
                      <label>Payment Partner:
                    <input list="payment" name="pay" /></label>
                    <datalist class="glows" id="payment">
                      <option value="Pay on terminal">
                      <option value="BDO">
                      <option value="BPI">
                      <option value="MLhuillier">
                      <option value="Cebuana Lhuillier">
                      <option value="Palawan Pawnshop">
                      <option value="Bayad Center">
                      <option value="Western Union">
                    </datalist>
                </div>
                <p id="subcon">Please make your payments at the selected payment partner.</p>

                 </div><!-- box2 -->
                    <br><br>
                    <div class="box1">
                           <div class="travelinfo">
                                    <fieldset>
                                          <legend>Summary</legend>

                                          <ul>
                                            <li></li>
                                            <li>Origin:
                                              <p>Origin City</p></li>
                                              <li>Destination:
                                                <p>Destination City</p></li>
                                              <li>Date:
                                                <p>Travel Date</p></li>
                                              <li>Depart Time:
                                                <p>Departure Time</p></li>
                                              <li>Bus:
                                                <p>Bus Name</p></li>
                                              <li>Seat Number(s):
                                                <p>Seat#s</p></li>
                                              <li>Passengers count:
                                                <p>Count</p></li>
                                              <li>Ticket Price:
                                                <p>Bus Ticket Price</p></li>
                                              <li>Service fee:
                                                <p>Online Service fee</p></li>
                                              <li> </li>
                                              <li><br></li>
                                              <li>Grand total:
                                                <p>Bus Ticket Price</p>
                                                <p style="text-decoration: underline;">   + Service Fee</p>
                                                <p>Total to pay</p></li>
                                          </ul>
                                          
                                         
                                    </fieldset>
                                    
                                </div><!-- travelinfo -->
                          
                          
                    </div><!-- box1 -->
                        <br><br><br>
                        <p id="subcon">By clicking submit the booker are sure to book and reserve seat for this travel and all provided information are correct and true.</p>
                        
                        
                              <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-bus w3-margin-right"></i> Submit</button>

                    </fieldset>
                  </form>
                 

          </div><!-- book4 -->


          <br><br><br><br>
          <div class="steps">
            <a href="book-step3.php">Click here to go back to previous page</a>
          </div><!-- step4 -->
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
