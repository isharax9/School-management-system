function val() {
    var id = document.getElementById("id").value;
    var password = document.getElementById("password").value;
    var error_messege = document.getElementById("error_messege");
    var text;

    if (id == "" || password == "") {
        text = "Fill in all the required information.";
        error_messege.innerHTML = text;
        return false;
    }
    return true;

}