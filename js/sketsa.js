var xmlhttp = false;

try {
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
	xmlhttp = new XMLHttpRequest();
}


//untuk bukutamu
function sketsa(key){
	var obj=document.getElementById("sket");
	var url='http://localhost/yayasan/index.php/c_page/getSketsa/'+key;

	xmlhttp.open("GET", url);

	xmlhttp.onreadystatechange = function() {
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
			obj.innerHTML = xmlhttp.responseText;
		} else {
			obj.innerHTML = '<div align ="center"><img src="http://livelink.nationalwatchparty.com/images/loading_transparent.gif" alt="Silahkan Tunggu..." /></div>';
		}
	}
	xmlhttp.send(null);
}