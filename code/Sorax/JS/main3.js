// Преобразование типов

console.log(5 + "5");
console.log(typeof(5 + "5"));
console.log("5" * "4");
console.log(typeof("5" * "4"));
console.log("5" * "hi");
console.log(typeof("5" * "hi"));

console.log("5" == 5);
console.log("0" == false);
console.log(0 == false);
console.log("5" == true);
console.log("" == false);
console.log(null == false);
console.log(null == true);
console.log(undefined == false);
console.log(undefined == true);
console.log(undefined == null);

// Явные преобразования

console.log(Number("555"));
console.log(typeof(Number("555")));
console.log(String(4433));
console.log(typeof(String(4433)));
console.log(Boolean(1));
console.log(typeof(Boolean(1)));

console.log(!!5);
console.log(!!0);

console.log(typeof(345 + ""));
console.log(typeof +"454");

var number = 22;
console.log(typeof number.toString());
number = 45;
console.log(number.toString(3));
number = 5;
console.log(number.toString(2));

console.log(typeof false.toString());



console.log(parseInt("45 px", 10));
console.log(parseFloat("12.45 em"));



console.log(typeof String(Infinity));
console.log(typeof String(NaN));
console.log(+"");

console.log(!!"");
console.log(!!NaN);
console.log(!!0);
console.log(!!null);
console.log(!!undefined);

console.log(!!"Hi");
console.log(+"       4 g");
console.log(parseInt("4 px"));

console.log(+true);
console.log(+false);

var n = 5;
console.log(n.value);
var n = "hello";
console.log(n.value);
var n = null;
console.log(n.value);