function refresh(){
	setTimeout(function(){ location.reload(true); }, 300);
}
	function klik(a,b,c){
	xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","index.php?number1="+a+"&number2="+c+"&operation="+b,true);
        xmlhttp.send(null);
		refresh();
}
