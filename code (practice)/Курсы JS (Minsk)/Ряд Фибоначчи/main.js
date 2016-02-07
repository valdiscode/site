// 	function memoize(f) {
// var cache = {};
//  return function() {
//  var key = arguments.length + Array.prototype.join.call(arguments,",");
//  if (key in cache) return cache[key];
//  else return cache[key] = f.apply(this, arguments);
//  };
// }



function Fib(x) {
		
		if (x > 1) {
		 return Fib(x-1) + Fib(x-2)// При х от 2 и выше начинает действовать данная формула
	}
		else {
		return x; //При х = 0, и при х = 1 возвращаем данные значения в ряде Фибоначчи (т.е. 0 и 1)
		}
	};



		var n = prompt("Введите количество чисел ряда Фибоначчи");//В окне появляется сообщение с просьбой ввести количество членов ряда
		for(i = 0; i <= n; i++) {
		document.write(i + " - " + Fib(i) + "<br>");// Совершается цикл, в результате которого каждый подсчитанный член ряда Фибоначчи записывается в окне
};
