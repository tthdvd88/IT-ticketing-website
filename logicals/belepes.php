<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=itservhelpdesk', 'itservhelpdesk', 'Aik1ido!59',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, lastname, firstname from users where username = :username and password = sha1(:password)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['username'], ':password' => $_POST['password']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['ln'] = $row['lastname']; $_SESSION['fn'] = $row['firstname']; $_SESSION['login'] = $_POST['username'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>