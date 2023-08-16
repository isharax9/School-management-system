function val() {
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var password = document.getElementById("password").value;
    var confirm = document.getElementById("confirm").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var paddress = document.getElementById("paddress").value;
    var classs = document.getElementById("classs").value;
    var section = document.getElementById("section").value;
    var roll = document.getElementById("roll").value;
    var error_messege = document.getElementById("error_messege"); 
    var text;


    if (id == "" || name == "" || email == "" || password == "" || confirm == "" || mobile == "" || gender == "" || dob == "" || classs == "" || section == "" || roll == "" || paddress == "") {
        text = "Fill in all the required information.";
        error_messege.innerHTML = text;
        return false;
    } else {
        if (password.length < 8) {
            text = "Password should be atleast 8 characters long!";
            error_messege.innerHTML = text;
            return false;
        } else {
            if (password != confirm) {
                text = "Password and Confirm password must be the same!";
                error_messege.innerHTML = text;
                return false;
            } else {
                if (email.length < 6) {
                    text = "Please Enter your Email";
                    error_messege.innerHTML = text;
                    return false;
                }
                else {
                    if (id.length != 4) {
                        text = "ID must be 4 digit";
                        error_messege.innerHTML = text;
                        return false;
                    }
                    if (mobile.length != 11) {
                        text = "Mobile Number must be 11 digit";
                        error_messege.innerHTML = text;
                        return false;
                    }

                    if (name.length < 3) {
                        text = "Name is too short";
                        error_messege.innerHTML = text;
                        return false;
                    }
                    alert("Form Submited Sucessfully!")
                    return true;
                }
            }
        }
    }
}