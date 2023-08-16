function validation(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var mobile = document.getElementById("mobile").value;
  var password = document.getElementById("password").value;
  var repass = document.getElementById("repass").value;
  var gender = document.getElementById("gender").value;
  var dob = document.getElementById("dob").value;
  var error_messege = document.getElementById("error_messege");
  var text;


  if(id == "" || name == "" || email == "" || password == "" || repass == "" || mobile == "" || gender == "" || dob == "" ){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }else {
    if (password.length < 8){
      text = "Password should be atleast 8 characters long!";
      error_messege.innerHTML = text;
      return false;
    }else {
      if (password != repass){
        text = "Password and Confirm password mismatch!";
        error_messege.innerHTML = text;
        return false;
      }else {
        if (email.length < 6){
          text = "Please Enter the Valid Email";
          error_messege.innerHTML = text;
          return false;
        }
        else {
          if (isNaN(id)){
            text = "ID must be Number";
            error_messege.innerHTML = text;
            return false;
          }
          if (id.length != 4){
            text = "ID must be 4 digit";
            error_messege.innerHTML = text;
            return false;
          }
          if (isNaN(mobile)){
            text = "Mobile Number must be Number";
            error_messege.innerHTML = text;
            return false;
          }
          if (mobile.length != 10){
            text = "Mobile Number must be 11 digit";
            error_messege.innerHTML = text;
            return false;
          }

          if (name.length<3){
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
          alert("User added Sucessfully!")
          return true;
        }
      }
    }
  }
}
