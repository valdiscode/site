// Обработка исключений (throw/try/catch/finaly)

// throw выражение 
// инструкция throw прерывает выполнение скрипта

// throw "Hello"

// 10 = "string"

// var myError = new ReferenceError("My Error Message");
// console.log(myError.name);
// console.log(myError.message);

// throw myError;


var calculate = function(n) {
	if (n > 10) throw new Error("n should be less than 10")
		return n + 10;
};

calculate(20);


// try {
// 	инструкция
// }catch (идентификатор) {
// 	инструкция
// } finally {
// 	инструкция
// }


try {
	calculate(20);
}catch (e) {
	console.log("Can`t execute calculate: " + e.message);
}