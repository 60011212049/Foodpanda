function ck(){
    alert(" .... 9");
    var fname = document.form1.fname.value;
    var lname = document.form1.lname.value;
    var user = document.form1.user.value;
    var pass = document.form1.pass.value;
    var age = document.form1.age.value;
    var sex = document.form1.sex.value;
    var numberformat = /^[0-9]+$/;
    var letters = /^[A-Za-zก-ฮ]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    return false;
}