<!--   JS nem fut le a Nethelyre való feltöltés után ezért ki lett kommentelve az egész ellenőrzés

<script>

function ellenoriz(){
    var rendben = true;


//változó deklarálás
    var lastname = document.getElementById("lastname");
    var firstname = document.getElementById("firstname");
    var message = document.getElementById("message");
    var pcnumber = document.getElementById("pcnumber");

//feltétel vizsgálat
    if(lastname){
        if(lastname.value.length<5) {
            rendben=false;
            lastname.style.background='#f99';
        }
    }

    if(firstname){
        if(firstname.value.length<5) {
            rendben=false;
            firstname.style.background='#f99';
        }
    }

    if(pcnumber) {
        var checkPattern = /^[A-Z]{2}\d{4}$/; 
        if(!checkPattern.test(pcnumber.value)) {
            rendben=false;
            pcnumber.style.background='#f99';
        }
    }

    if(message) {
        if(message.value.length<30) {
            rendben=false;
            message.style.background='#f99';
        }
    }




//submit előtti ellenőrzés
var kuld = document.getElementById("send");
if (kuld) {

}
return rendben;

}

</script>

-->

<form action = "?oldal=kapcsolat" method = "post"> <!-- onsubmit="return ellenoriz();"> -->
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
                    <td><input type="submit" value="Üzenet küldése"></td> <!-- id="send" -->
                </tr>
        </table>
        </div>
    </fieldset>
    <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="?oldal=kapcsolat">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
</div>
