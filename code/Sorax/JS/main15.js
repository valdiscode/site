// JSON
// Можно хранит /обьекты/массивы/строки/числа/true/false/nall

var user = {
	name: "Frank",
	id: 42345,
	lastVisit: Date.now(),
	friends: [2452, 62523, 8969],
	toJSON: function() {
		return {
			name: this.name,
			lastVisit: this.lastVisit
		}
	}
};

var userData = JSON.stringify(user);
console.log(userData);

console.log(JSON.parse(userData));