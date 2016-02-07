// Конструкторы и классы 

// var Person, person, anotherPerson, Developer, developer;

// Person = function(name) {
// 	this.name = name;
// };

// Person.prototype.greet = function() {
// 	console.log("Hello my neme is " + this.name);
// };

// Person.prototype.toString = function() {
// 	return this.name;
// };

// Developer = function(name, skills) {
// 	Person.apply(this, arguments);
// 	this.skills = skills || [];
// };

// Developer.prototype = Object.create(Person.prototype);
// Developer.prototype.constructor = Developer;

// developer = new Developer("John", ["ruby", "rar", "python"]);

// var func = function(arg) {
// 	return arg + 10;
// };

// console.log(func.toString());

//2 console.log(developer.name);
// console.log(developer.skills);
// developer.greet();

// console.log(developer instanceof Developer);

// console.log(developer instanceof Person);





//1 person = new Person("Jack");
// console.log(person.name);
// person.greet();


// anotherPerson = new Person("Bruce");
// console.log(anotherPerson.name);
// anotherPerson.greet();


var classof = function(object) {
	return Object.prototype.toString.call(object).slice(8,-1);
};

console.log(classof(""));
console.log(classof([]));
console.log(classof({}));
console.log(classof(function(){}));
console.log(classof(32423));
console.log(classof(true));
console.log(classof(/\d/));


