function FileUpload(){
    //var form = document.getElementById("RegistrationForm").value;
    var formm = document.forms['Upload']['photo'];
    var img_type = ["jpeg", "png", "jpg"];
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(formm.value == ""){
      text = "**Please select a file first**";
      error_messege.innerHTML = text;
      return false;
    }else {
           
      var img_ext = formm.value.substring(formm.value.lastIndexOf('.')+1);
      var result = img_type.includes(img_ext);
      if(result == false){
        text = "**File type should be png or jpg or jpeg only**";
        error_messege.innerHTML = text;
        return false;
         }
         else{

                if(parseFloat(formm.files[0].size/(1024*1024)) >= 4)
                {
                  text = "**File size should be minimum (less than 4 MB)**";
                  error_messege.innerHTML = text;
                  return false;
                }else{
                       
                       alert("File uploaded sucessfully!!")
                       return true;

                     }

            }
      
    }

  }