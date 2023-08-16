function validation(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var mobile = document.getElementById("mobile").value;
  var password = document.getElementById("password").value;
  var repass = document.getElementById("repass").value;
  var gender = document.getElementById("gender").value;
  var dob = document.getElementById("dob").value;
  var p_address = document.getElementById("p_address").value;
  var classE = document.getElementById("classE").value;
  var section = document.getElementById("section").value;
  var roll = document.getElementById("roll").value;
  var error_messege = document.getElementById("error_messege");
  var text;


  if(id == "" || name == "" || email == "" || password == "" || repass == "" || mobile == "" || gender == "" || dob == "" || classE == "" || section == "" || roll == "" || p_address == "" ){
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
          if (mobile.length != 11){
            text = "Mobile Number must be 11 digit";
            error_messege.innerHTML = text;
            return false;
          }
          if (isNaN(roll)){
            text = "Roll number must be Number";
            error_messege.innerHTML = text;
            return false;
          }
          if (roll.length > 3){
            text = "Roll Number is not valid";
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
          alert("Form Submited Sucessfully!")
          return true;
        }
      }
    }
  }
}
