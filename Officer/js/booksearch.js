"use strict"


function ajax(){
	const title = document.getElementById('title').value;
	const xhttp	= new XMLHttpRequest();
    xhttp.open('GET', '../View/booksearch.php?title='+title, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}
}