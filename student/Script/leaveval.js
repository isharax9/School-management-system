function val() 
{
    var leave_from = document.getElementById("leave_from").value;
    var leave_to = document.getElementById("leave_to").value;
    var error_messege = document.getElementById("error_messege");
    var text;

    if (leave_from == "" || leave_to == "") 
    {
        text = "Fill in all the required information.";
        error_messege.innerHTML = text;
        return false;
    } 
    else 
    {
        if (leave_from == leave_to) {
            text = "Your leave start date and end date are the same!";
            error_messege.innerHTML = text;
            return false;
    }
    else 
    {
         return true;
    }
}
    
}