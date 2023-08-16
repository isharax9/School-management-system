"use strict"
function ajax(){
	const id = document.getElementById('id').value;
	const xhttp	= new XMLHttpRequest();
    xhttp.open('GET', '../View/searchTeacherList.php?id='+id, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('viewteacherlist').innerHTML = this.responseText;
		}
	}
}
