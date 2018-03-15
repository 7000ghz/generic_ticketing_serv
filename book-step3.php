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
            <h3>Step 3:</h3>
            <h4>Pick your seats</h4>
          </div><!-- step3 -->
            <br>

          <div class="book3">
              <div class="travelinfo">
                  <h5>Origin: Origin City</h5>
                  <h5>Destination: Destination City</h5>
                  <h5>Date: Travel Date</h5>
                  <h5>Time: Departure Time</h5>
                  <h5>Bus: Bus Name</h5>
              </div>

                  <form id="form" action="book-step4.php" method="post">

              <div class="travelers">
                <ul>
                  <li><label><i class="fa fa-male" ></i> Adults</label>
                      <input type="number" value="1" name="Adults" min="0" max="6" required></li>
                  <li><label><i class="fa fa-child"></i> Kids</label>
                     <input type="number" value="0" name="Kids" min="0" max="6"></li>
                  <!-- <li><label><i class="fa fa-male"></i> Senior</label>
                      <input type="number" value="0" name="Senior" min="0" max="6"></li> -->
                  
                </ul>

            </div>


              <div class="mytable">
                      <div class="pickseat">
                            <table class="pstbl">
                            
                            <tr>
                              <td> </td>
                              <td> </td>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                              <td>9</td>
                              <td>10</td>
                              <td>11</td>
                            </tr>
                            <tr>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td>21</td>
                              <td>20</td>
                              <td>19</td>
                              <td>18</td>
                              <td>17</td>
                              <td>16</td>
                              <td>15</td>
                              <td>14</td>
                              <td>13</td>
                              <td>12</td>
                            </tr>
                            <tr>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td>22</td>
                            </tr>
                            <tr>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td>31</td>
                              <td>30</td>
                              <td>29</td>
                              <td>28</td>
                              <td>27</td>
                              <td>26</td>
                              <td>25</td>
                              <td>24</td>
                              <td>23</td>
                            </tr>
                            <tr>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td> </td>
                              <td>40</td>
                              <td>39</td>
                              <td>38</td>
                              <td>37</td>
                              <td>36</td>
                              <td>35</td>
                              <td>34</td>
                              <td>33</td>
                              <td>32</td>
                            </tr>

                          </table>
                        
                      </div><!-- pickseat -->
                
              </div><!-- mytable -->
                

                              <br><br><br>
                              <p>Please refrain from choosing the priority seats if possible, if you are not pregnant, senior or pwd. </p>

                              <br>
                              <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-bus w3-margin-right"></i> Proceed to next step</button>


                  </form>

          </div><!-- book3 -->


          <br><br><br><br>
          <div class="steps">
            <a href="book-step2.php">Click here to go back to previous page</a>
          </div><!-- step3 -->
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
