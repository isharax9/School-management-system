function Notice(){
    //var form = document.getElementById("RegistrationForm").value;
    var notice = document.getElementById("notice").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(notice == ""){
      text = "**Please write something**";
      error_messege.innerHTML = text;
      return false;
    }else {
           alert("Successfully Submitted!!")
           return true;
        
      
       }

  }