document.head = document.head || document.getElementsByTagName("head")[0];
function changeFavicon(src) {
	var link = document.createElement("link"),
		oldLink = document.getElementById("dynamic-favicon");
	link.id = "dynamic-favicon";
	link.rel = "shortcut icon";
	link.href = src;
	if (oldLink) {
		document.head.removeChild(oldLink);
	}
	document.head.appendChild(link);
}

function swapFav() {
	const darkmodeTest = document.querySelector(".darkmode--trigger");
	if (darkmodeTest.classList.contains("darkmode--enabled")) {
		changeFavicon("/assets/img/dark/favicon.ico");
	} else {
		changeFavicon("/assets/img/light/favicon.ico");
	}
}

swapFav();
