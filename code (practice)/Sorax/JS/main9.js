// Обьекты

// {
// 	имя: значение,
// 	имя: значение,
// 	имя: значение
// }

var person = {
	name: "Sorax",
	age: 20,
	gender: "male",
	sayHi: function() {
		return "Hello!!";
	}
}

// var object = new Object();
// object.property = "value";

var object = Object.create({x: 10, y: 20});
object.x = 20;
console.log(object);

// delete выражение 
delete object.x
console.log(object);


console.log(object.z);
console.log("z" in object);

object.z = undefined;
console.log(object.z);
console.log("z" in object);

// console.log("x" in object);
// console.log("o" in object);
// console.log(object.x);
// console.log(object.o);


// person.age = 25;
// person.userID = 222335;

// выражение.идентификатор

// console.log(person.name);
// console.log(person.gender);

// выражение[выражение]

// console.log(person["age"]);

// console.log(person);

// console.log(person.sayHi());