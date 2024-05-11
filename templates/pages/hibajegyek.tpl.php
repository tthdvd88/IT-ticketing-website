<!DOCTYPE html>
<html>
    <head>
        <style>
            div#table {
            width: 60%;
            margin: auto;
            padding: 20px;
}

div#table th {
    border: solid 1px black;
    height: 30px;
}

div#table td {
    border: solid 1px black;
    height: 30px;
}
</style>
    </head>
    <body>
<?php

// Adatbázis kapcsolat

try {
    $dbh = new PDO('mysql:host=localhost;dbname=itservhelpdesk', 'itservhelpdesk', 'Aik1ido!59');     
} catch (PDOException $e) {
    die("Nem lehet csatlakozni az adatbázishoz". $e->getMessage());
}
// SQL lekérdezés

$stmt = $dbh->query('SELECT * FROM tickets ORDER BY created DESC');
$rows = $stmt->fetchAll();

?>
<div id="table">
    <table style="border: solid 1px black; border-collapse: collapse;">
            <tr>
                <th>Hibajegy száma</th>
                <th>Vezetéknév</th>
                <th>Keresztnév</th>
                <th>Időpont</th>
                <th>Szakterület</th>
                <th>PC szám</th>
                <th>Hibaleírás</th>
            </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?=$row['ticketnumber'];?></td>
                <td><?=$row['lastname'];?></td>
                <td><?=$row['firstname'];?></td>
                <td><?=$row['created'];?></td>
                <td><?=$row['department'];?></td>
                <td><?=$row['pcnumber'];?></td>
                <td><?=$row['message'];?></td>
            <tr>
            <?php endforeach; ?>
                
    </table>
        </div>
        </body>
</html>