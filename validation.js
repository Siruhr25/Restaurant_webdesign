function validate() {
    var uname = document.getElementById('name');
    var uemail = document.getElementById('email');
    var unum = document.getElementById('num');
    var udob = document.getElementById('dob');
    var uadd = document.getElementById('address');
    if (uname.value ==" "|| uemail.value ==" "|| usum.value==""||
        udob.value==" "|| uadd.value ==" ")
    {
        alert("please,fill the correct details");
        return false;
    }
    else {
        true;
        
    }
}