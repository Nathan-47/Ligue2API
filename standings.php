<!DOCTYPE html>
<html lang="en">
<head>

<!--TAB ICON-->
<link rel="shortcut icon" type="image/x-icon" href="images/homelogo-tab.png" />
	
<!--TAB HEADING-->
<title>STANDINGS | BKT LIGUE 2</title>
<link rel="icon" type="">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!--FONT-->
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@700&display=swap" rel="stylesheet"> 

<!--lINK TO STYLESHEET-->
<link rel="stylesheet" type="text/css" href="assets/css/ligue2.css">   
    
</head>
<body>

<!--NAVBAR-->
<nav id="nav">
<div class="logo">
<img src="images/ligue2logo.png" width="5%" height="5%">
</div>

<ul class="nav-links">

<li id="navhome">
<div class id="nav-home"><a href="index.html">HOME</a></div>
</li>

<li>
<div class id="nav-standings"><a href="standings.php">STANDINGS</a></div>
</li>

<li>
<div class id="nav-fixresults"><a href="fixturesandresults.php">FIXTURES & RESULTS</a></div>
</li>

<li>
<div class id="nav-clubs"><a href="clubs.html">CLUBS</a></div>
</li>
</ul>
<!--NAVBAR-->

	
<!--Toggle button for when users have smaller screens-->
<div class="burger">
<div class="line1"></div>
<div class="line2"></div>
<div class="line3"></div>
</div>
</nav>
<!--END of toggle button-->
	

<!--LEAGUE TABLE HEADER-->
<div class="container-fluid" id="standing-header">
<h2>LIGUE 2 TABLE SEASON 2020-21</h2>	
</div>	
	
<!--API FUNCTION CALLING STANDINGS DATA FROM SOURCE-->
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_standings&get_teams&league_id=177&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$standings = json_decode($data);
	
?>

<div style="overflow-x:auto;">
<table id="efl-table">
<tr>
    
<th></th>
<th></th>
<th></th> 
<th>PLD</th>
<th>PTS</th>
<th>W</th> 
<th>D</th> 
<th>L</th>
<th>GF</th>
<th>GA</th>
</tr>    

<?php foreach ($standings as $standings):?>

<tr>
<td><?php echo $standings->overall_league_position; ?> </td>
<td><img src='<?php echo $standings->team_badge;  ?>'></td>
<td><?php echo $standings->team_name; ?></td>
<td><?php echo $standings->overall_league_payed; ?></td>
<td><?php echo $standings->overall_league_PTS; ?> </td>
<td><?php echo $standings->overall_league_W; ?> </td>
<td><?php echo $standings->overall_league_D; ?> </td>
<td><?php echo $standings->overall_league_L; ?> </td>
<td><?php echo $standings->overall_league_GF; ?> </td>   
<td><?php echo $standings->overall_league_GA; ?> </td>
</tr>

<?php endforeach; ?>
	
<!--THE FOREACH ACTS AS A LOOP TO KEEP RELAYING BACK WHAT IS WANTING TO BE GIVEN VIA THE ENDPOINTS-->

<!--END FOREACH ENDS THE LOOP WHEN THE FINAL NUMBER IS REACHED-->

</table>
</div>
	
	
<div class="container-fluid" id="tablekey">
<p>*Teams placed 1st, 2nd and 3rd are automatically granted promotion whilst bottom three teams are relgated</p>	
</div>
	
	
<!--FOOTER BORDER-->
<p class="border-line"></p>


<!--FOOTER-->
<div class="footer" id="footer">
<div class="container-fluid" id="sponsors">
	
<div class="row"><div class="col-lg-12"><p class="sponsors-title1">OFFICIAL SPONSOR</p></div>
	
<div class="col-sm-1" id="bkt"><a href="https://www.bkt-tires.com/ww/en" target="_blank"><img src="images/bkt-logo.png" ></a></div>
</div>

	
<div class="row">
<div class="col-lg-12"><p class="sponsors-title2">LEAGUE PARTNERS</p></div>	

<div class="col-sm-1" id="betclic"><a href="https://www.betclic.com/en/sports-betting/" target="_blank"><img src="images/betclic-logo.png"></a></div>
    
<div class="col-sm-1" id="beinsports"><a href="https://www.beinsports.com/us/" target="_blank"><img src="images/beinsports-logo.png"></a></div>
    
<div class="col-sm-1" id="fiat"><a href="https://www.fiat.com/" target="_blank"><img src="images/fiat-logo.png"></a></div>
    
<div class="col-sm-1" id="laposte"><a href="https://www.laposte.fr/" target="_blank"><img src="images/laposte-logo.png"></a></div>
    
<div class="col-sm-1" id="uhlsport"><a href="https://www.uhlsport.com/uk/" target="_blank"><img src="images/uhlsport-logo.png"></a></div>
</div>
</div>
    
<div class="container-fluid" id="landing-copyright">
<div class="row" id="footer-row">
<div class="col-sm-6" id="footer-copyright-text">
<p class="footer-copyright">@2020 Dominos Ligue 2 Futbol</p>
</div>
    
<div class="col-sm-6" id="name-footer">
<p class="name">Built By<a href="https://www.instagram.com/glvdstone_/" target="_blank"><img src="images/nplogo-footer.png"></a></p>
</div>  
    
</div>
</div>
</div>
    
    
<!--Burger function script-->   
<script src="script.js"></script>
<!--Burger function script-->
	
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    
</body>
</html>