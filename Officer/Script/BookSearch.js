"use strict"


function ajax(){
	const name = document.getElementById('name').value;
	const xhttp	= new XMLHttpRequest();

  // xhttp.open('POST', '../View/BookSearch.php', true);
  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // xhttp.send('name='+name);
  //
  // xhttp.onreadystatechange = function(){
  //   if(this.readyState == 4 && this.status == 200){
  //     document.getElementById('result').innerHTML = this.responseText;
  //   }

  //}
  xhttp.open('GET', '../View/BookSearch.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}
}
