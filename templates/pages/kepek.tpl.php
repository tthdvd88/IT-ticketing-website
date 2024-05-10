

<?php
    $MAPPA = './images/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $MAXMERET = 500*1024;
?>

<?php
$kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);

?>

<!DOCTYPE html>
<html>
<body>
<div id="kepek">
    <div id="galeria">
    <h2>Referencia munkák</h2>
    <?php
    // arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img src="<?php echo $MAPPA.$fajl ?>">
            </a>            
        </div>
    <?php
    }
    ?>
    </div>

    <?php
    include('kepfeltolt.tpl.php');
    ?>
</div>

</body>
</html>