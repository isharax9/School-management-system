"use strict"
function ajax(){
	const roll = document.getElementById('roll').value;
	const xhttp	= new XMLHttpRequest();
    xhttp.open('GET', '../View/searchStudentLibProfile.php?roll='+roll, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}
}