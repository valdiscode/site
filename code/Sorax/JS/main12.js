// Прототипы и наследования

// var ObjectProto = {
// 	name: "Sorax"
// };

// var object = Object.create(ObjectProto);
// console.log(object.name);

var Person = {
	constructor: function(name, age, gender) {
		this.name = name;
		this.age = age;
		this.gender = gender;
		return this;
	},
	greet: function() {
		console.log("Hi, my name is " + this.name);
	}
};

var WebDeveloper = Object.create(Person);
WebDeveloper.constructor = function(name, age, gender, skills) {
	Person.constructor.apply(this, arguments);
	this.skills = skills || [];
	return this;
};
WebDeveloper.develop = function(){
	console.log("Working...");
}

var developer = Object.create(WebDeveloper).constructor("Jack", 21, "male", ["html", "css", "js", "php", "mysql"]);

	console.log(developer.skills);
	developer.develop();
	console.log(developer.name);
	developer.greet();

//2 var person, anotherPerson, thirdPerson;

// person = Object.create(Person).constructor("John", 35, "male");
// anotherPerson = Object.create(Person).constructor("Jessica", 28, "female");
// thirdPerson = Object.create(Person).constructor("Bruce", 38, "male");

// console.log(person.name);
// console.log(anotherPerson);
// console.log(thirdPerson.name);

// person.greet();
// anotherPerson.greet();
// thirdPerson.greet();

// console.log(Person.isPrototypeOf(person));

