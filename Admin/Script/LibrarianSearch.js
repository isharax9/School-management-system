"use strict"


function ajax(){
	const name = document.getElementById('name').value;
	const xhttp	= new XMLHttpRequest();


  xhttp.open('GET', '../View/OfficerSearch.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}
}
