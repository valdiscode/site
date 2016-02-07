// Location (работаем с адресной строкой браузера)

// console.log(window.location);
// location.hash = "anything";


// location.href = "http://google.com";


// console.log("Current URL is: " + location);
// console.log(location);


var encoded = encodeURI(
	"http//google.com/page?name=Какое то имя"
);

console.log(decodeURI(encoded));