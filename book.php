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
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-bus w3-margin-right"></i>RTBUSPH</a>
  <a href="howto.php" class="w3-bar-item w3-button w3-mobile">How to book</a>
  <a href="routes.php" class="w3-bar-item w3-button w3-mobile">Bus Routes</a>
  <a href="terminals.php" class="w3-bar-item w3-button w3-mobile">Bus Terminals</a>
  <a href="book.php" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Book Now</a>
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="styles/img/RTHEADER.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bus w3-margin-right"></i>Rural Transit Online</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form id="form" action="book-step2.php" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>I am in:
              <input class="w3-input w3-border" list="origin" name="from" required></label>
              <datalist id="origin">
                <option value="Zamboanga City">
                      <option value="Tungawan">
                      <option value="Ipil">
                      <option value="Naga">
                      <option value="Kabasalan">
                      <option value="Siay">
                      <option value="Imelda">
                      <option value="Diplahan">
                      <option value="Buug">
                      <option value="Kumalarang">
                      <option value="Dumalinao">
                      <option value="Pagadian">
              </datalist>
              <br>
            </div>
            <div class="w3-half w3-margin-bottom">
              <label>Going to:
              <input class="w3-input w3-border" list="destination" name="to" required></label>
              <datalist id="destination">
                <option value="Zamboanga City">
											<option value="Tungawan">
											<option value="Ipil">
											<option value="Naga">
											<option value="Kabasalan">
											<option value="Siay">
											<option value="Imelda">
											<option value="Diplahan">
											<option value="Buug">
											<option value="Kumalarang">
											<option value="Dumalinao">
											<option value="Pagadian">
              </datalist><br>
            </div>
            <div class="w3-half w3-margin-bottom">
            	    				
					<script type="text/javascript">
						function yesnoCheck() {
					    	if (document.getElementById('yesCheck').checked) {
					        document.getElementById('ifYes').style.display = 'block';
					    	}
					    	else document.getElementById('ifYes').style.display = 'none';
						}
					</script>

			    	One way <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck" name="trip" value="One way" checked="checked">
  				
            </div>
            <div class="w3-half w3-margin-bottom">
			    	Round Trip <input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck" name="trip" value="Round Trip">

            </div>

            <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Travel Date</label>
            <input class="w3-input w3-border" type="date" value="2018-03-15" name="CheckIn" required>
          </div>
          <div class="w3-half" id="ifYes" style="display:none">
            <label><i class="fa fa-calendar-o"></i> Return Date</label>
            <input class="w3-input w3-border" type="date" value="2018-03-15" name="CheckOut" required>
          </div>
        </div>
        <!-- <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="0" max="6">
          </div>
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Senior</label>
            <input class="w3-input w3-border" type="number" value="0" name="Senior" min="0" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Kids</label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
          
        </div> -->
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
      </form>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">


  
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
