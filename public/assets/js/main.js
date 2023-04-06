const burger = document.querySelector("#burger");
const menu = document.querySelector("#menu_large ul");
const nav = document.querySelector("nav");
const header = document.getElementsByTagName("header")[0];

burger.addEventListener("click", function () {
	menu.classList.toggle("visible");
});

document.addEventListener("scroll", function (e) {
	if (window.scrollY > header.offsetHeight - nav.offsetHeight) {
		nav.classList.add("bgOpaque");
	} else {
		nav.classList.remove("bgOpaque");
	}
});
