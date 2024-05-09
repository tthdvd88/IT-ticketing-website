function ellenoriz(){
    var rendben = true;
    var fokusz = null;


//változó deklarálás
    var sender = document.getElementById("sender");
    var message = document.getElementById("message");
    var pcnumber = document.getElementById("pcnumber");

//feltétel vizsgálat
    if(sender){
        if(sender.value.length<5) {
            rendben=false;
            sender.style.background='#f99';
            fokusz = sender;
        }
    }

    if(pcnumber) {
        var checkPattern = /^[A-Z]{2}\d{4}$/; //formátum --> XX1234
        if(!checkPattern.test(pcnumber.value)) {
            rendben=false;
            pcnumber.style.background='#f99';
            fokusz = pcnumber;
        }
    }

    if(message) {
        if(message.value.length<30) {
            rendben=false;
            message.style.background='#f99';
            fokusz = message;
        }
    }

    //fokusz
    if (fokusz) {
        fokusz.focus();
    }


//submit előtti ellenőrzés
var kuld = document.getElementById("send");
if (kuld) {

}
return rendben;

}