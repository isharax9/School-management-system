function validation(){
  var name = document.getElementById("name").value;
  var classE = document.getElementById("classE").value;
  var description = document.getElementById("description").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(name == "" || classE == "" || description == ""){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }
  return true;

}
