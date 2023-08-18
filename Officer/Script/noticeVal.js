function validation(){
  var notice = document.getElementById("notice").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(notice == ""){
    text = "Please fill up the field";
    error_messege.innerHTML = text;
    return false;
  }
  return true;

}
