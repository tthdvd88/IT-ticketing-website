<?php
   
   if(isset($_POST['username']) || isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['department']) && isset($_POST['pcnumber']) && isset($_POST['message'])) {
   try {
        $dbh = new PDO('mysql:host=localhost;dbname=itservhelpdesk', 'itservhelpdesk', 'Aik1ido!59',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    
    $sqlInsert = "insert into tickets(ticketnumber, lastname, firstname, username, department, pcnumber, message)
                 values(0, :lastname, :firstname, :username, :department, :pcnumber, :message)";
    $stmt = $dbh->prepare($sqlInsert);
    $stmt->execute(array(':lastname' => $_POST['lastname'], 'firstname' => $_POST['firstname'], 'username' => $_POST['username'], 
    'department' => $_POST['department'], 'pcnumber' => $_POST['pcnumber'], 'message' => $_POST['message']));
    if($count = $stmt->rowCount()) {
        $newid = $dbh->lastInsertId();
        $uzenet = "A hibajegy leadása sikeres volt.<br>Hibajegy száma: {$newid}<br>A hibajegy adataid amennyiben rendelkezik regisztrációval bejelentkezés után láthatja a megfelelő aloldalon, regisztráció nélkül az utolsó hibajegyet láthatja a Hibajegy aloldalon";
        $ujra = false;
    }
    else {
        $uzenet = "A hibajegy leadása nem sikerült";
        $ujra = true;
    }
}
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }
}
?>