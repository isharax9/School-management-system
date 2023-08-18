function validation(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(name == "" || email == ""){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }else {
    if (email.length < 6){
      text = "Please Enter the Valid Email";
      error_messege.innerHTML = text;
      return false;
    }else {
      if (name.length<3) {
        text = "Length of name is too short";
        error_messege.innerHTML = text;
        return false;
      }else {
        for(i=0; i<name.length; i++){
          ch = name.charAt(i);
          if(!(ch >= 'a' && ch <= 'z') && !(ch >= 'A' && ch <= 'Z') && !(ch == ' ')){
            text = "Name contain only characters";
            error_messege.innerHTML = text;
            return false;
          }
        }
      }
      text = "Information is Sucessfully Updated";
      error_messege.innerHTML = text;
      return true;
    }
  }
}
