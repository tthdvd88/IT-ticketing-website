<form action = "?oldal=kapcsolat" method = "post" onsubmit="return ellenoriz();">
<div id="fieldform">
<fieldset>
        <legend>Kapcsolat</legend>
        <br>
        <div id="form">
            <table cellspacing="0" cellpadding="4">
                <tr>
                    <td><label>Vezetéknév </label></td>
                    <td><input type="text" name="lastname" id="lastname"></td>
                </tr>
                <tr>
                    <td><label>Keresztnév </label></td>
                    <td><input type="text" name="firstname" id="firstname"></td>
                </tr>
                <tr>
                    <td><label>Felhasználónév </label></td>
                    <td><input type="text" name="username" id="username" placeholder="opcionális"></td>
                </tr>
                <tr>
                    <td><label>Szakterület </label></td>
                    <td><select name="department" id="department">
                        <option value="HR">HR</option>
                        <option value="Pénzügy">Pénzügy</option>
                        <option value="Termelés">Termelés</option>
                        <option value="Logisztika">Logisztika</option>
                    </td>
                </tr>
                <tr>
                    <td><label>Gépszám </label></td>
                    <td><input type="text" name="pcnumber" id="pcnumber" placeholder="formátum: XX1234"></td>
                </tr>
                <tr>
                    <td><label>Üzenet </label></td>
                    <td><textarea name="message" id="message" rows="10" placeholder="Kérjük adja meg a hiba rövid leírását (min 30 max 100 karakter)"></textarea><br><br></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Üzenet küldése" id="send"></td>
                </tr>
        </table>
        </div>
    </fieldset>
    <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="index.php?oldal=belepes">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
</div>
