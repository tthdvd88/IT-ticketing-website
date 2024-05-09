<div id="ticket">
    <fieldset>
        <legend>Hibajegy adatok</legend>
        <br>
<?php
if(isset($_POST['sender']) && isset($_POST['pcnumber']) && isset($_POST['message'])) 
{
$namere = '/^[A-Za-z]\+\" "+^[A-Za-z]/';
if(!preg_match($namere,$_POST['sender'])) {
    echo "<strong>Név: </strong>";
    echo "A megadott név nem érvényes!";
} else {
    echo "<strong>Név: </strong>";
    echo $_POST['sender'];
}

echo "<br>";
echo "<br>";
echo "<strong>Felhasználónév: </strong>";
echo $_POST['formusername'];
echo "<br>";
echo "<br>";
echo "<strong>Szakterület: </strong>";
echo $_POST['department'];
echo "<br>";
echo "<br>";
echo "<strong>Gépszám: </strong>";
echo $_POST['pcnumber'];
echo "<br>";
echo "<br>";
echo "<strong>Hiba leírás: </strong>";
echo $_POST['message'];
echo "<br>";
echo "<br>";


}
else {
    echo "Hibajegy előzmények megjelenítése nem lehetséges regisztáció nélkül. Amennyiben szeretné látni korábbi hibajegyeit, kérjük regisztráljon";
}
?>
</fieldset>
</div>