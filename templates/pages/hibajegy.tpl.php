<div id="hibajegy">
    <br>
    <br>
    <h3>Hibajegy adatok:</h3>
<br>

<?php

// Adatbázis kapcsolat

try {
    $dbh = new PDO('mysql:host=localhost;dbname=itservhelpdesk', 'itservhelpdesk', 'Aik1ido!59');     
} catch (PDOException $e) {
    die("Nem lehet csatlakozni az adatbázishoz". $e->getMessage());
}
// SQL lekérdezés

$stmt = $dbh->query('SELECT * FROM tickets WHERE ticketnumber IS NOT NULL ORDER BY ticketnumber DESC LIMIT 1');
$rows = $stmt->fetchAll();

// Eredmény kiírtaás (mindig a legutóbbi leadott ticket)

foreach ($rows as $row) {
    echo "<strong>Hibajegy száma: </strong>";
    echo $row['ticketnumber'];
    echo "<br>";
    echo "<br>";
    if($row['username']==0) {
        echo "<strong>Név: </strong>Vendég felhasználó";
    }
    else {
    echo "<strong>Felhasználónév: </strong>";
    echo $row['username'];
    echo "<br>";
    echo "<br>";
    echo "<strong>Vezeték név: </strong>";
    echo $row['lastname'];
    echo "<br>";
    echo "<br>";
    echo "<strong>Keresztnév: </strong>";
    echo $row['firstname'];
    }
    echo "<br>";
    echo "<br>";
    echo "<strong>Szakterület: </strong>";
    echo $row['department'];
    echo "<br>";
    echo "<br>";
    echo "<strong>PC szám: </strong>";
    echo $row['pcnumber'];
    echo "<br>";
    echo "<br>";
    echo "<strong>Hibaleírás: </strong>";
    echo $row['message'];
    echo "<br>";
    echo "<br>";
}

?>
</div>

