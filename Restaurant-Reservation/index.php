<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/LOGOO.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>




<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>MCC Restaurant</h3>
   <div class="row">
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/bicol express.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/bistek tagalog.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/bulalo.jpg" alt="Third slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="img/kare kare.jpg" alt="Fourth slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/pinakbet.jpg" alt="Fifth slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/sinigang.jpg" alt="Sixth slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="img/sisig.jpg" alt="Seventh slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/tapa.jpg" alt="Eighth slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>


     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>The restaurant MCC Restaurant first opened in 2004 in Mabalacat City, Pampanga, a vibrant area known for its rich culinary traditions. In 2010, the restaurant earned its first Michelin star, a testament to its exceptional Filipino cuisine, and has proudly maintained this accolade since.<br><br>
	In that same year, MCC Restaurant relocated to the top floor of a modern building on the city's bustling main avenue. Recently, the restaurant underwent a transformation by the renowned architectural firm Divercity, blending contemporary design with traditional Filipino aesthetics. During the warmer months, the restaurant moves to an elevated outdoor space, offering diners a unique setting with breathtaking views of the surrounding cityscape and the lush landscapes of Pampanga.
<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>

<div class="header2">
</div>

<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/bulalo.jpg" class="img-fluid">
              <img src="img/bistek tagalog.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/bicol express.jpg" class="img-fluid">
              <img src="img/tapa.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/kare kare.jpg" class="img-fluid">
               <img src="img/sisig.jpg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/sinigang.jpg" class="img-fluid">
               <img src="img/pinakbet.jpg" class="img-fluid">
           </div>
        </div>
    </div>
</div><br><br>

<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDca2kN0h_UyD4aQKRc7dGLYxzgLvtars8&q=Mabalacat+City+College,+Rizal,+Barangay+Dolores,+Mabalacat,+Pampanga,+Philippines" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
    
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }

   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">MCC Restaurant<br><i class="fa fa-map-marker"></i>&nbsp; Rizal, Barangay Dolores, Mabalacat City<br>Pampanga <br><br>email: MCCResto@gmail.com<br>phone: 09369126829</p>
            </div>

	</div>
    </div>
</section>


<?php
require "footer.php";
?>