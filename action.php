FROM : <?php echo htmlspecialchars($_POST['from']) ; ?>.
COLLUMN : <?php echo htmlspecialchars($_POST['col']) ?>


<?php
require 'connection.php';

$acteur = htmlspecialchars($_POST['from']);

$requetelistepays = "SELECT * FROM `" .$acteur .'`';

echo $requetelistepays;

foreach ($connection->query($requetelistepays) as $lesPays){
        print '<h4>' .$lesPays[htmlspecialchars($_POST['col'])] ."\n</h4>";
}

?>