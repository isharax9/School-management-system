function ChangePassword(){
    // require_once('../Model/DatabaseConnection.php');
    // var User = getUserById(var_COOKIE['ID']);
	// var Id = User['id'];
	// var pass = User['password'];
    //var form = document.getElementById("RegistrationForm").value;
    var password = document.getElementById("password").value;
    var repass = document.getElementById("repass").value;
    var newpass = document.getElementById("newpass").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(password == "" || newpass == "" || repass == ""){
      text = "**Please fill all the sections**";
      error_messege.innerHTML = text;
      return false;
    }else {
      if (password == newpass || newpass != repass){
        text = "**Invalid Password**";
        error_messege.innerHTML = text;
        return false;
      }else {
        if (newpass.length < 8){
          text = "**Password Should be atleast 8 characters long**";
          error_messege.innerHTML = text;
          return false;
        }
        else{
            alert("Password changed sucessfully!!")
            return true;
        }
      }
    }

  }