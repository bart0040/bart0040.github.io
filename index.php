<!DOCTYPE html>
<html>
<head>
 <title>Homepage</title>
 <link rel="stylesheet" href="main.css">
</head>

<body>
  
  <ul>
    <li><a href="index.php">Homepage</a></li>
    <li><a href="personalDashboard.php">Personal dashboard</a></li>
    <li><a href="profilePage.html">Profilepage</a></li>
    <li><a href="FAQ.html">FAQ</a></li> 
  </ul>
  
<div class="container"> 
    <div class= "d1"> 
          <a href="https://hz.nl/" target="blank">
            <img src="afb1.jpg"class="afb2" alt="Logo HZ" >
          </a> 
    </div>

  <div class="d3">                
    <div class="text">  
             <br>
             HBO niveau past bij mij, omdat ik niet alleen theoretisch wil bezig zijn en ik uiteindelijk een Havo diploma heb gehaald. <br><br>
             Deze opleiding past bij mij, want ik ben goed in een hele dag achter een pc te zitten. 
             Daarnaast vind ik de manier van lesgeven erg fijn, omdat er veel vrijheid is en veel zicht op de toekomst.
    </div>
  </div>

  <div class="d2">
            <img src="afb2.jpg" class="afb2" alt="Gebouw HZ" >
  </div>

  <div class = "d4">
          <a href="https://www.calvijncollege.nl/" target="blank">
            <img src="afb7.jpg" class="afb2" alt="Logo CC" >
          </a>
  </div>
  <div class="d5">           
            <table>
              <tr>
                <td>
                  <?php
                date_default_timezone_set("Europe/Amsterdam");
                $vandaag = date("j F Y");
                echo "Vandaag is het $vandaag.";
                ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php
                $tijd = date("H:i");
                echo "De tijd op dit moment is $tijd.";
                ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php
                $maand = date("F");
                $dagenInMaand = date("t");
                echo "De maand, $maand heeft $dagenInMaand dagen.";
                ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php
                $dag = date("z");
                $dag .= "e";
                echo "Deze dag is de $dag dag van het jaar.";
                ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php
                $dagVanWeek = date("w");
                $dagVanWeek .= "e";
                echo "Het is de $dagVanWeek  dag van de week.";
                ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php
                $jaarL = date("L");
                $schrikkeljaar = date("L");
                $jaarY = date("Y");
                echo "Het jaar $jaarY is";
                if ($jaarL = $schrikkeljaar){
                  echo " een schrikkeljaar.";
                } 
                else {
                  echo " geen schrikkeljaar.";
                }
                ?>
            </td>
          </tr>
        </table>
  </div>
</div>
  </body>
  
  </html>