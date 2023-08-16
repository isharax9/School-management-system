function LoginValid(){
    //var form = document.getElementById("RegistrationForm").value;
    var id = document.getElementById("id").value;
    var password = document.getElementById("password").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(id == "" || password == ""){
      text = "**Please fill all the sections**";
      error_messege.innerHTML = text;
      return false;
    }
  }