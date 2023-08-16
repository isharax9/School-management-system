function val() 
{
    var currentpass = document.getElementById("currentpass").value;
    var newpass = document.getElementById("newpass").value;
    var retypepass = document.getElementById("retypepass").value;
    var error_messege = document.getElementById("error_messege");
    var text;

    if (currentpass == "" || newpass == "" || retypepass == "") {
        text = "Fill in all the required information.";
        error_messege.innerHTML = text;
        return false;
    } else {
        if (currentpass == newpass) {
            text = "Your courrent password and New password are Same";
            error_messege.innerHTML = text;
            return false;
        } else {
            if (newpass != retypepass) {
                text = "Your New password and Retype New password are not same!";
                error_messege.innerHTML = text;
                return false;
            } else {
                if (newpass.length < 8) {
                    text = "Password should be atleast 8 characters long!";
                    error_messege.innerHTML = text;
                    return false;
                }
                return true;
            }
        }
    }
}