// Функции
// function идентификатор(аргумент) {
// 	инструкция
// 	return выражение
// }

// function greet(name) {
// 	return "Hello " + name;
// }

// var greet = function(name) {
// 	console.log(arguments.length);
// 	return "Hello " + name;
// };

// выражение(аргументы)

// console.log(greet("Sorax", 34, 23, 26).toUpperCase());


// var func = function(callback) {
// 	var name = "Sorax";
// 	callback(name);
// };

// func(function(n){
// 	console.log("Hello " + n);
// });


// var func = function() {
// 	return function() {
// 		console.log("Hi");
// 	}
// };

// func()();


var greeting = (function(name) {
	return "Hello " + name;
}("Sorax"));

console.log(greeting);