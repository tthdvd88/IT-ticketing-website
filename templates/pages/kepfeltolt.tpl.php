<?php
    // Alkalmazás logika:
    $uzenet = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " A feltölteni kívánt fájl már létezik a szerveren!";
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' A képfeltöltés Sikeres! Fájlnév: ' . $fajl['name'];
                }
            }
        }        
    }
    // Megjelenítés logika:
?><!DOCTYPE html>
<html>
<body>
    <h2>További képek hozzáadása</h2>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=kepek" method="post"
                enctype="multipart/form-data">
            <input type="file" name="elso" required>
        <br><br>
        <input type="submit" name="kuld" value="Feltöltés">
      </form>    
</body>
</html>
