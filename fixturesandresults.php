<!DOCTYPE html>
<html lang="en">
<head>

<!--TAB ICON-->
<link rel="shortcut icon" type="image/x-icon" href="images/homelogo-tab.png" />
	
<!--TAB HEADING-->
<title>FIXTURES & RESULTS | BKT LIGUE 2</title>
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
	

<!--MATCHDAY HEADING-->
<div class="container-fluid" id="fix-res-headings">
<div class="row">
<div class="col-sm-6" id="matchday-title">
<p>MATCHDAY 1 | SEASON 2019/20</p>
</div>


<!--MATCHDAY DROPDOWN PICKER-->
<div class="col-sm-6">
<div class="dropdown">	
<button onclick="myFunction()" class="dropbtn">MATCHDAY<i class="fa fa-angle-down" aria-hidden="true"></i></button>
<div id="matchday-dropdown" class="dropdown-content">
<a href="">MATCHDAY 1</a>
<a href="">MATCHDAY 2</a>	
<a href="">MATCHDAY 3</a>	
<a href="">MATCHDAY 4</a>	
<a href="">MATCHDAY 5</a>	
<a href="">MATCHDAY 6</a>	
<a href="">MATCHDAY 7</a>	
<a href="">MATCHDAY 8</a>	
<a href="">MATCHDAY 9</a>	
<a href="">MATCHDAY 10</a>	
<a href="">MATCHDAY 11</a>	
<a href="">MATCHDAY 12</a>	
<a href="">MATCHDAY 13</a>	
<a href="">MATCHDAY 14</a>	
<a href="">MATCHDAY 15</a>	
<a href="">MATCHDAY 16</a>	
<a href="">MATCHDAY 17</a>	
<a href="">MATCHDAY 18</a>	
<a href="">MATCHDAY 19</a>	
<a href="">MATCHDAY 20</a>	
<a href="">MATCHDAY 21</a>	
<a href="">MATCHDAY 22</a>	
<a href="">MATCHDAY 23</a>	
<a href="">MATCHDAY 24</a>	
<a href="">MATCHDAY 25</a>	
<a href="">MATCHDAY 26</a>	
<a href="">MATCHDAY 27</a>	
<a href="">MATCHDAY 28</a>	
<a href="">MATCHDAY 29</a>	
<a href="">MATCHDAY 30</a>	
<a href="">MATCHDAY 31</a>	
<a href="">MATCHDAY 32</a>	
<a href="">MATCHDAY 33</a>	
<a href="">MATCHDAY 34</a>	
<a href="">MATCHDAY 35</a>	
<a href="">MATCHDAY 36</a>	
<a href="">MATCHDAY 37</a>	
<a href="">MATCHDAY 38</a>	
</div>
</div>	
</div>
</div>
</div>	
	

<!--MATCH1-->
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228966&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match1 = json_decode($data);
?>

<?php foreach ($match1 as $match1):?>
	
<div class="container" id="fixture-date">
<div class="row">
<p id="date"><?php echo $match1->match_date;?> | <?php echo $match1->match_time;?></p>
</div>	
</div>	

<div class="container" id="fixtures-table-grid">
<table class="table table-hover">
<tbody>
<tr data-href="#">
<td id="team-name-home"><?php echo $match1->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3043_ac-ajaccio.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match1->match_hometeam_score;?>  -  <?php echo $match1->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3057_le-havre.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match1->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 	
	

	
	
<!--MATCH2-->	
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228967&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match2 = json_decode($data);
?>

<?php foreach ($match2 as $match2):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match2->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3071_chambly.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match2->match_hometeam_score;?>  -  <?php echo $match2->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3048_valenciennes.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match2->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 	
	
	
	
	
<!--MATCH3-->
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228968&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match3 = json_decode($data);
?>

<?php foreach ($match3 as $match3):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match3->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3042_clermont.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match3->match_hometeam_score;?>  -  <?php echo $match3->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3061_chateauroux.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match3->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 
	
	
	
	
<!--MATCH4-->	
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228969&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match4 = json_decode($data);
?>

<?php foreach ($match4 as $match4):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match4->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3032_guingamp.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match4->match_hometeam_score;?>  -  <?php echo $match4->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3078_grenoble.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match4->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 	
	
	
	
	
<!--MATCH5-->
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228972&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match5 = json_decode($data);
?>

<?php foreach ($match5 as $match5):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match5->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3047_nancy.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match5->match_hometeam_score;?>  -  <?php echo $match5->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3053_orleans.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match5->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 
	
	
	

<!--MATCH6-->	
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228973&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match6 = json_decode($data);
?>

<?php foreach ($match6 as $match6):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match6->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3059_niort.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match6->match_hometeam_score;?>  -  <?php echo $match6->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3029_troyes.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match6->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 
	
	
	
	
<!--MATCH7-->	
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228974&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match7 = json_decode($data);
?>

<?php foreach ($match7 as $match7):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match7->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3065_rodez.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match7->match_hometeam_score;?>  -  <?php echo $match7->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3051_auxerre.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match7->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
<?php endforeach; ?> 
	
	
	
	
<!--MATCH8-->	
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228975&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match8 = json_decode($data);
?>

<?php foreach ($match8 as $match8):?>
	
<tr data-href="#">
<td id="team-name-home"><?php echo $match8->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3058_sochaux.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match8->match_hometeam_score;?>  -  <?php echo $match8->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3028_caen.png" width="100%" height="100%"></td>
<td id="team-name-away"><?php echo $match8->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
</tbody>
</table>
</div>
<?php endforeach; ?> 

	
	
	
<!--MATCH9-->
<?php
	
$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228970&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';
	
$data = file_get_contents($url);
	
$match9 = json_decode($data);
?>

<?php foreach ($match9 as $match9):?>
	
	
<div class="container" id="fixture-date">
<div class="row">
<p id="date"><?php echo $match9->match_date;?> | <?php echo $match9->match_time;?></p>
</div>	
</div>	
	

<div class="container" id="fixtures-table-grid">
<table class="table table-hover">
<tbody>
<tr data-href="resultsoverview.php">	
	
<td id="team-name-home"><?php echo $match9->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3133_le-mans.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match9->match_hometeam_score;?>  -  <?php echo $match9->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3060_lens.png" width="100%" height="100%"></td>
	
<td id="team-name-away2"><?php echo $match9->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>
	
</tbody>
</table>
</div>
<?php endforeach; ?> 
	
	
	
	
<!--MATCH10-->
<?php

$url = 'https://apiv2.apifootball.com/?action=get_events&match_id=228971&APIkey=b3947f5262482995dc56bbb67bc2015761af56eda29e7503eff93d085e27aa6f';

$data = file_get_contents($url);

$match10 = json_decode($data);
?>

<?php foreach ($match10 as $match10):?>	
	
	
<div class="container" id="fixture-date">
<div class="row">
<p id="date"><?php echo $match10->match_date;?> | <?php echo $match10->match_time;?></p>
</div>	
</div>	
	

<div class="container" id="fixtures-table-grid">
<table class="table table-hover">
<tbody>
<tr data-href="#">

<td id="team-name-home">&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $match10->match_hometeam_name;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3044_lorient.png" width="100%" height="100%"></td>
	
<td id="score"><?php echo $match10->match_hometeam_score;?>  -  <?php echo $match10->match_awayteam_score;?></td>
	
<td id="logo"><img src="https://apiv2.apifootball.com/badges/3055_paris-fc.png" width="100%" height="100%"></td>
	
<td id="team-name-away2"><?php echo $match10->match_awayteam_name;?></td>
	
<td><button type="button" class="btn">View Match</button></td>
</tr>

</tbody>
</table>
</div>
<?php endforeach; ?> 
	
	
<!--MATCHDAY PAGINATION BUTTONS-->
<div class="container-fluid" id="pagination-fixtures">
<div class="row" id="pagination-fixtures-row">
<a href="#" class="previous">Previous Matchday</a>
<a href="#" class="next">Next Matchday</a>
</div>
</div>


<!--FOOTER BORDER-->
<p class="border-line-fixtures"></p>


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
   
<!--Matchday-dropdown-->
<script src="assets/js/matchday.dropdown.js"></script>
<!--Matchday-dropdown-->
	
<!--Table-Hyperlink Script-->
<script src="assets/js/hyperlink.js"></script>
<!--Table-Hyperlink Script-->
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    
</body>
</html>