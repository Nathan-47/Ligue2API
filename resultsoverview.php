<!DOCTYPE html>
<html lang="en">
<head>

<!--TAB ICON-->
<link rel="shortcut icon" type="image/x-icon" href="images/homelogo-tab.png" />
	
<!--TAB HEADING-->
<title>LE MANS v LENS | BKT LIGUE 2</title>
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
<div class id="nav-fixresults"><a href="standings.php">STANDINGS</a></div>
</li>

<li>
<div class id="nav-fixresults"><a href=fixturesandresults.php>FIXTURES & RESULTS</a></div>
</li>

<li>
<div class id="nav-table"><a href="clubs.html">CLUBS</a></div>
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
	
	
<!--API FUNCTION CALLING STANDINGS DATA FROM SOURCE-->
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228970&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$result = json_decode($data);
?>

<?php foreach ($result as $result):?>

 
<!--MATCHDAY CONTENT-->
<div class="container" id="overview-header">
<div class="overview-stadium">
<p>Stade Oceance</p>
</div>
	
	
<div class="row">
<div class="col-sm-3" id="overview-logo1">
<img src="<?php echo $result->team_home_badge ;?>">
</div>
	
<div class="col-sm-2">
<p class="team1"><?php echo $result->match_hometeam_name ;?></p>	
</div>
	
<div class="col-sm-2" id="overview-score">
<p><?php echo $result->match_hometeam_score ;?>  -  <?php echo $result->match_awayteam_score ;?></p>	
</div>	 
	
<div class="col-sm-2">
<p class="team2"><?php echo $result->match_awayteam_name ;?></p>	
</div>

<div class="col-sm-3" id="overview-logo2">
<img src="<?php echo $result->team_away_badge ;?>">
</div>
</div>
</div>
	
	
<!--MATCHDAY SCORERS AND BOOKINGS-->
<div class="container" id="overview-scorers">
<div class="row">
<div class="col-6" id="overview-home">
<p>B.Moussiti-Oko '33</p>
<p>H.Hafidi '71<i class="fa fa-square" aria-hidden="true"></i></p>
</div>

<div class="col-6" id="overview-away">
<p>F.Sotoca '66</p>
<p>M.Chouiar '84</p>
</div>
</div>
</div>
	
	
<!--MATCHDAY LINEUPS-->
<div class="container" id="overview-lineup-header">
<h4>LINE UPS</h4>	
</div>
	
<div class="container" id="overview-lineup">
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'home')">HOME</button>
<button class="tablinks" onclick="openCity(event, 'away')">AWAY</button>
</div>

<div id="home" class="lineupcontent">
<h3>LE MANS</h3>
	
<div class="row">
<div class="col-6" id="home_lineup">
<p>FORMATION: 4-4-2</p>
<br>
<br>

<ul>
<li>16. Y.Thuram-Ulien</li>	
<li>2. A.Vardin</li>	
<li>24. P.Lemonnier</li>	
<li>3. E.Ebosse<i class="fa fa-caret-right" aria-hidden="true"></i>'65</li>	
<li>7. S.Vincent<i class="fa fa-caret-right" aria-hidden="true"></i>'74</li>	
<li>22. R.Boissier</li>
<li>14. Y.Boe-Kane</li>	
<li>10. H.Hafidi</li>	
<li>25. S.Diarra<i class="fa fa-caret-right" aria-hidden="true"></i>'75</li>	
<li>9. V.Crehin</li>	
<li>20. B.Moussiti-Oko</li>	
</ul>
</div>
	
<div class="col-6" id="home_subs">
<p>SUBSTITUTES</p>
<br>
<br>
	
<ul>
<li>10. P.Patron</li>	
<li>1. D.Leveque</li>	
<li>6. F.Julienne<i class="fa fa-caret-left" aria-hidden="true"></i>'75</li>	
<li>1. T.Duponchelle<i class="fa fa-caret-left" aria-hidden="true"></i>'65</li>	
<li>3. Y.Maziz</li>	
<li>7. H.Manzala<i class="fa fa-caret-left" aria-hidden="true"></i>'74</li>	
<li>5. T.Rambaud</li>	
</ul>
	
COACH: R.Dezire
</div>	
</div>
</div>
	
	
<div id="away" class="lineupcontent">
<h3>LENS</h3>
<div class="row">
<div class="col-6" id="home_lineup">
<p>FORMATION: 4-2-3-1</p>
<br>
<br>

<ul>
<li>30. T.Vincensini</li>	
<li>13. C.Michelin</li>	
<li>15. S.Fortes</li>	
<li>33. C.Sene</li>	
<li>29. V.Costa</li>	
<li>27.  G.Gillet<i class="fa fa-caret-right" aria-hidden="true"></i>'82</li>
<li>6. M.Perez</li>	
<li>9. G.Robail<i class="fa fa-caret-right" aria-hidden="true"></i>'67</li>	
<li>22. T.Mauricio</li>	
<li>24. F.Sotoca</li>	
<li>14. Y.A.Gomis<i class="fa fa-caret-right" aria-hidden="true"></i>'62</li>	
</ul>
</div>
	
<div class="col-6" id="home_subs">
<p>SUBSTITUTES</p>
<br>
<br>
	
<ul>
<li>1. D.Desprez</li>	
<li>4. S.Teka</li>	
<li>10. W.Mesloub</li>	
<li>18. Y.Cahuzac<i class="fa fa-caret-left" aria-hidden="true"></i>'82</li>	
<li>19. A.Mendy</li>	
<li>23. S.Banza<i class="fa fa-caret-left" aria-hidden="true"></i>'62</li>	
<li>25. M.Chouiar<i class="fa fa-caret-left" aria-hidden="true"></i>'67</li>	
</ul>
	
COACH: P.Montanier
</div>	
</div>
</div>
	
</div>
	
	
 <!--MATCHDAY STATISTICS-->
<div class="container" id="overview-stats-header">
<h4>STATISTICS</h4>	
</div>    
	
<div class="container" id="overview-stats">

	
<div class="row">
<div class="col-4">
<p>52%</p>	
<p>17</p>	
<p>4</p>	
<p>14</p>	
<p>1</p>	
<p>0</p>	
<p>1</p>	
<p>5</p>	
</div>	
	
<div class="col-4">
<p>POSSESSION</p>	
<p>SHOTS</p>	
<p>SHOTS ON TARGET</p>	
<p>FOULS</p>	
<p>YELLOW CARDS</p>	
<p>RED CARDS</p>	
<p>OFFSIDES</p>	
<p>CORNERS</p>	
</div>	
	
<div class="col-4">
<p>48%</p>	
<p>10</p>	
<p>3</p>	
<p>13</p>	
<p>0</p>	
<p>0</p>	
<p>1</p>	
<p>2</p>	
</div>	
	
</div>
</div>	
	
<?php endforeach; ?>  


<!--FOOTER BORDER-->
<p class="border-line-results"></p>	

	
<!--FOOTER-->
<div class="footer" id="footer">
<div class="container-fluid" id="sponsors">
	
<div class="row"><div class="col-lg-12"><p class="sponsors-title1">OFFICIAL SPONSOR</p></div>
	
<div class="col-sm-1" id="bkt"><a href="https://www.bkt-tires.com/ww/en" target="_blank"><img src="images/bkt-logo.png"></a></div>
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
<script src="assets/js/script.js"></script>
<!--Burger function script-->
	
<!--Lineup function script-->   
<script src="assets/js/lineups.js"></script>
<!--Lineup function script-->
    
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    
</body>
</html>