// if (выражение) инструкция

if (true) console.log("Its true");
if (false) console.log("Its true");

var n = 5;

if (n > 3) {
	console.log(n);
}





var name = "Sorax", homecity;

if (name === "John") {
	homecity = "Boston";
} else if (name === "Sorax") {
	homecity = "Belgorod";
} else if (name === "Bill") {
	homecity = "LA"
}

console.log(homecity);

switch(name) {
	case "John": homecity = "Boston"; break;
	case "Sorax": homecity = "Belgorod"; break;
	case "Bill": homecity = "LA";
	default: homecity = "Moscow";
}

console.log(homecity);



// условный оператор   выражение1 ? выражение2 : выражение3

var x = 5;
var text = x > 10 ? "x больше десяти" : x < 10 ? "x меньше десяти" : "x равен десяти";

console.log(text);

// выражение, выражение

var test = (15,20);
console.log((test, "Hello"));
