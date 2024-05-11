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
        var checkPattern = /^[A-Z]{2}\d{4}$/; //formátum --> XX1234
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