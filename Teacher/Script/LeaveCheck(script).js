function LeaveRequest(){
    //var form = document.getElementById("RegistrationForm").value;
    var request = document.getElementById("request").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(request.checked == false){
      text = "**Please select an option**";
      error_messege.innerHTML = text;
      return false;
    }else {
           alert("Successfully Updated!!")
           return true;
        
      
       }

  }