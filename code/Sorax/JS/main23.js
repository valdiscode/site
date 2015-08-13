// History, Screen, Navigator

//1  screen (разрешение экрана пользователя)

// console.log(screen.width, screen.height);
// console.log(screen.availWidth, screen.availHeight);
// console.log(screen.colorDepth); 


// console.log(navigator);

// if (history && history.pushState) {
// 	// Do something with history api
// }


//2 History (управляем историей браузера)

// console.log(history.length);


var links,
	updatestate,
	contentEl,
	navEl;

contentEl = document.querySelector('.content');
navEl = document.querySelector('.nav');

links = {
	main: "This is the <strong>main</strong> page",
	about: "This is the <strong>about</strong> page",
	downloads: "This is the <strong>downloads</strong> page",
};

updatestate = function(){
	var content = links[location.hash.slice(1)];
	contentEl.innerHTML = content || "Page not found";
};

window.addEventListener('hashchange', updatestate);
window.addEventListener('load', updatestate);

