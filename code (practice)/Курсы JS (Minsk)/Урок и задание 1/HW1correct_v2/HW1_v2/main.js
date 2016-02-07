var k = document.getElementById("btn");
k.addEventListener("click", updatestate, false);

function updatestate () {
	var q = document.getElementById("fibN");
	var result = +q.value + 10;
	document.write(result);
};




//function number() {
	//for(var i = 1; i<=3; i++){
		//document.write("Посчитали до: "+i);
	//}
//}
//document.write("Это "+ c + b);