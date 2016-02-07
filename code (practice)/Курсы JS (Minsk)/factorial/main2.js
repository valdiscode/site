// 	function memoize(f) {
// var cache = {};
//  return function() {
//  var key = arguments.length + Array.prototype.join.call(arguments,",");
//  if (key in cache) return cache[key];
//  else return cache[key] = f.apply(this, arguments);
//  };
// }



function factorial(x) {
		
		if (x > 0) {
		 return factorial(x-1) * x// При х  выше нуля начинает действовать данная формула
	}
		else {
		return 1; //При х <= 0, возвращаем  1;
		}
	};



		var n = prompt("Введите количество членов для вычисления факториала");//В окне появляется сообщение с просьбой ввести количество членов ряда
		for(i = 0; i <= n; i++) {
		document.write(i + " - " + factorial(i) + "<br>");// Совершается цикл, в результате которого каждый подсчитанный член ряда Фибоначчи записывается в окне
};
