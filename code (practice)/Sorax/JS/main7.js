//  Цепочки областей видимости

i = 5

var func = function() {
	var i = 10;
	console.log(i);
	var innerFunc = function() {
		var i;
		console.log(i);
		i = 15;
	};
	innerFunc();
	console.log(i);
};

func();



// Замыкания

// var func = function() {
// 	var i = 10;
// 	return function(){
// 		return i;
// 	}
// };

// var anotherFunc = function(){
// 	var i = 20;
// 	console.log(func()());
// };

// anotherFunc();



// var counter = (function(){
// 	var count = 0;
// 	return function(num){
// 		count = num !== undefined ? num : count;
// 		return count++;
// 	}
// }());


var counter = function(num){
	counter.count = num !== undefined ? num :
		counter.count;
	return counter.count++;
};

counter.count = 0;

console.log(counter());
console.log(counter());
console.log(counter());
console.log(counter());
console.log(counter());
console.log(counter());
console.log(counter(500));
console.log(counter());
console.log(counter());
console.log(counter());
console.log(counter());
console.log(counter());