// this и непрямой вызов методов

var greet = function(greeting){
	return greeting + "! My name is " + this.name;
}

var person = {
	name: "John",
	greet: greet
};

var anotherPerson = {
	name: "Bob",
	greet: greet
};

console.log(person.greet("Hi"));
console.log(anotherPerson.greet.call(person, "Bonjour"));
console.log(anotherPerson.greet.apply(person, ["Bonjour"]));

var bound = greet.bind(anotherPerson);
console.log(bound("Hello there"));
