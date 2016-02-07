// Аксессоры и арибуты свойств

var person = {
	name: "Sorax",
	_age: 20,
	get age(){
		return this._age;
	},
	set age(value){
		this._age = value < 0 ? 0 : value > 122 ? 122 : value;
	}
};

console.log(Object.getOwnPropertyDescriptor(person, "name"));
console.log(Object.getOwnPropertyDescriptor(person, "age"));

Object.defineProperty(person, "gender", {
	value: "male",
	writable: false,
	enumerable: false,
	configurable: false
});


var obj = {};
//4 Object.preventExtensions(obj);
// console.log(Object.isExtensible(obj));

// Object.seal(obj);
// console.log(Object.isSealed(obj));

//5 Object.freeze(obj);
// console.log(Object.isFrozen(obj));

//3 var o = {};
// Object.defineProperties(o, {
// 	x: {
// 		value: 10,
// 		writable: false
// 	},
// 	y: {
// 		value: 20,
// 		writable: false
// 	},
// 	r: {
// 		get: function() {
// 			return Math.sqrt(this.x * this.x + this.y * this.y);
// 		}
// 	}
// });

// 		o.x = 16;
// 	console.log(o.r);

//2 console.log(person.gender);
// person.gender = "female";
// console.log(person.gender);
// console.log("");

// for (property in person) {
// 	console.log(property);
// }

// console.log(Object.keys(person));

// console.log(person.propertyIsEnumerable("gender"));

//1 person.age = 180;
// console.log(person.age);
// person.age = -80;
// console.log(person.age);
// person.age = 34;
// console.log(person.age);
