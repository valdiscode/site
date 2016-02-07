// Регулярные выражения (Класс RegExp)

//1 var pattern = /\w+/g,
// 	string = "How we survive is what makes us who are";

// 	console.log(string.match(pattern));


//2 var input = document.getElementsByClassName("input")[0],
// 	output = document.getElementsByClassName("output")[0],
// 	voc = {
// 		name: "Sorax",
// 		title: 'JavaScript Tuts',
// 		resource: 'YouTube'
// 	};

// input.addEventListener('keyup', function(){
// 	output.innerHTML = this.value.replace(
// 		/\{\{(\w*)\}\}/g, function(match, value){
// 			return voc[value];
// 		}
// 	);
// }, false);


//3 var pattern = /\w+/g;

// console.log(pattern.global);
// console.log(pattern.ignoreCase);
// console.log(pattern.multiline);

// console.log(pattern.lastIndex);


//4 var pattern = /\w+@\w+\.\w+/g,
// 	string = "Lorem ipsum dolor sit amet, test@test.com_consectetur adipisicing elit. Minima, asperiores!"

// console.log(pattern.test(string));
// console.log(pattern.lastIndex);
// console.log(pattern.test(string));



var pattern = /\w+/g,
	string = "How we survive is what makes us who we are",

	match;

while (match = pattern.exec(string)) {
	console.log(match);

}
