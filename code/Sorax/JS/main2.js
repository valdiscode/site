// Логические значения
console.log(true);
console.log(false);

console.log(5 === 5);
console.log(5 === 6);

console.log(Boolean(5));

// Falsy values

console.log(Boolean(undefined));
console.log(Boolean(null));
console.log(Boolean(0));
console.log(Boolean(NaN));
console.log(Boolean(""));

var s = "Text";

if (s) {
	console.log("Its true");
};

console.log(true && false);
console.log(true && true);
console.log(true || false);
console.log(false || false);
console.log(!true);
console.log(!false);


var a = 0,
	isTrue = true;
isTrue && (a = 5);
console.log(a);

var someString = "Non-empty string";
var newString = someString ||  "Default String";
console.log(newString);


// null and undefined

console.log(typeof null);
console.log(typeof undefined);

var temp;
var obj = {};
var a = [1,2,3,4];

function greet(name) {
	return "Hello " + name;
}

console.log(temp);
console.log(obj.property);
console.log(a[4]);

console.log(greet("Sorax"));
console.log(greet());

console.log(null == undefined);
console.log(null === undefined);



