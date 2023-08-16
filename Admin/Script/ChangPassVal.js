function validation(){
  var cpas = document.getElementById("cpas").value;
  var npass = document.getElementById("npass").value;
  var rnpass = document.getElementById("rnpass").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(cpas == "" || npass == "" || rnpass == ""){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }else{
    if (cpas == npass) {
      text = "Your courrent password and New password are Same";
      error_messege.innerHTML = text;
      return false;
    }else {
      if (npass != rnpass) {
        text = "New password and Retype New password mismatch!";
        error_messege.innerHTML = text;
        return false;
      }else {
        if (npass.length < 8){
          text = "Password should be atleast 8 characters long!";
          error_messege.innerHTML = text;
          return false;
        }
        return true;
      }
    }
  }
}
