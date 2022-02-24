FROM : <?php echo $_POST['from']; ?>.
COLLUMN : <?php echo $_POST['col'] ?>


<?php
try {
        $connection = new PDO('mysql:host=localhost;dbname=test', 'root', '');

        $acteur = htmlspecialchars($_POST['from']);

        $requetelistepays = "SELECT * FROM `" . $acteur . '`';

        echo $requetelistepays;
        $rs = $connection->query($requetelistepays);

        foreach ($rs as $lesPays) {
                print '<h4>' . $lesPays[htmlspecialchars($_POST['col'])] . "\n</h4>";
        }
} catch (PDOException $e) {
        header('Location: /errordroit.html');
        exit();
        die();
}

?>