// JavaScript Document
function push(i){
	var k = document.getElementById("screen");
	e = k.value;
	if(e == "Syntax error"|| e.search("NaN")> 0|| e.search("undefined")>0 ||e.search("infinity")>0){
		k.value = i;
	}
	else if( e.search("=")> -1){
		var p = e.split("=");
		k.value = p[1]+""+i;
	}
	else{
		k.value += i;
	}
}

function calc(){
	var k = document.getElementById("screen");
	var op = "";
	try{
		
		var e = k.value;
		
		if( e.search("=") != -1){
			k.value = e;
		}
		else if( k.value != ""){
			var z = "="+eval(e.replace(/\s+/g, ''));
			k.value += z;
		}
	}
	catch(err){
		k.value = "Syntax error";
		window.navigator.vibrate(100);
	}
}

function del(){
	var k = document.getElementById("screen");
	var e = k.value;
	k.value = e.slice(0 , -1);
}