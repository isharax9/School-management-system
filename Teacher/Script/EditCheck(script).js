function EditProfile(){
    //var form = document.getElementById("RegistrationForm").value;
    var name = document.getElementById("uname").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var id = document.getElementById("id").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(name == "" || email == "" || mobile == "" || id == "" || gender == "" || dob == ""){
      text = "**Please fill all the sections**";
      error_messege.innerHTML = text;
      return false;
    }else {
          if (email.length < 10){
            text = "**Please enter valid mail**";
            error_messege.innerHTML = text;
            return false;
          }
          else {  

            if (isNaN(mobile) || mobile.length != 10){
                text = "**Please enter valid mobile Number**";
                error_messege.innerHTML = text;
                return false;
              }
            else {
                if (id.length != 4){
                  text = "**ID must be 4 digit**";
                  error_messege.innerHTML = text;
                  return false;
                }
      
                if (name.length < 3){
                  text = "**Length of name should be greater than 3**";
                  error_messege.innerHTML = text;
                  return false;
                }else{
                  for(i=0; i<name.length; i++)
                  {
                    ch = name.charAt(i);
                    if(!(ch >= 'a' && ch <= 'z') && !(ch >= 'A' && ch <= 'Z') && !(ch == ' '))
                    {

                      text = "**Name should be characters only**";
                      error_messege.innerHTML = text;
                      return false;

                    }
                  }
                
                 }
                alert("Profile edit done sucessfully!!")
                return true;
              }

           }
        
      
    }

  }