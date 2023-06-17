<h1>Exercice Football :</h1>

<?php 
include('Team.php');
include('Player.php');
include('Play.php');
include('Country.php');

// France and Club
$France = new Country("France");
$PSG = new Team("PSG",1970,$France );
$RCS = new Team("Racing Club Stras",1906,$France);

// Spain and Club
$Spain = new Country("Spain");
$FCBarcelone = new Team("FC Barcelone",1988,$Spain);
$RealMadrid = new Team("Real Madrid",1899,$Spain);

// England and Club
$England = new Country("England");
$ManchesterUnited = new Team("Manchester United",1878,$England);

// Italie and Club
$Italie = new Country("Italie");
$Juventus = new Team("Juventus",1897,$Italie);


// other contry
$Argentina = new Country("Argentina");
$Portugal = new Country("Portugal");
$Bresil = new Country("Bresil");


// Player
$KMbappe = new Player("Killian Mbappe",$France,1999);
$LMessi = new Player("Lionel Messi",$Argentina,1988);
$NJunior = new Player("Neymar Junior",$Bresil,1991);
$CRonarldo = new Player("Christiano Ronarldo",$Portugal,1986);


$KMbappe_Play_PSG = new Play(2017,$PSG,$KMbappe);
$LMessi_Play_PSG = new Play(2021,$PSG,$LMessi);
$NJunior_Play_PSG = new Play(2017,$PSG,$NJunior);

$NJunior_Play_FCBarcelone = new Play(2013,$FCBarcelone,$NJunior);
$LMessi_Play_FCBarcelone = new Play(2013,$FCBarcelone,$LMessi);

$CRonarldo_Play_Juventus = new Play(2013,$Juventus,$CRonarldo);

$all_Contry = [$France,$Spain,$England,$Italie];
foreach($all_Contry as $contry){
    echo '<h3>'.$contry.'</h3><br>';
    foreach($contry->displayTeam() as $team){
        echo $team."<br>";
    }
}

$all_Team = [$PSG,$RCS,$FCBarcelone,$Juventus];
foreach($all_Team as $team){
    echo '<h3>'.$team.'</h3><br>';
    foreach($team->displayPlayer() as $player){
        echo $player."<br>";
    }
}

$all_Player = [$KMbappe,$LMessi,$NJunior,$CRonarldo];
foreach($all_Player as $player){
    echo '<h3>'.$player.'</h3><br>';

    foreach($player->displayPlay() as $play){
        echo $play."<br>";
    }

}

?>

