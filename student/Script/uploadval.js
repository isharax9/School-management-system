function val(){
    var img = document.forms['FilesUpload']['picture'];
    var valid_ext = ["jpeg", "png", "jpg"];
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(img.value == ""){
      text = "Fill in all the required information";
      error_messege.innerHTML = text;
      return false;
    }else {
           
      var img_ext = img.value.substring(img.value.lastIndexOf('.')+1);
      var result = valid_ext.includes(img_ext);
      if(result == false){
        text = "only png or jpg or jpeg allowed";
        error_messege.innerHTML = text;
        return false;
         }
         else{

                if(parseFloat(img.files[0].size/(1024)) >= 200)
                {
                  text = "Your file size must be within 200 KB";
                  error_messege.innerHTML = text;
                  return false;
                }else{
                       
                       alert("File uploaded!!")
                       return true;

                     }

            }
      
    }

  }