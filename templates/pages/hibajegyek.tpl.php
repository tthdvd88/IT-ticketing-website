<?php 
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=helpdesk', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlSelect = "select ticketnumber from tickets";
        $sth = $dbh->prepare($sqlSelect);
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e){
        echo "Hiba: ".$e->getMessage();
    }

?>

<?php if(isset($row)) { ?>
 <?php if($row) { ?>
    <h1>Hibajegy adatok<h2>
    Hibajegy szám: <?= $row['ticketnumber'] ?>
<?php } ?>
<?php } ?>