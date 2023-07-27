(function () {
	/*
	 * Options and Initialization
	 */
	const Darky = function (opts) {
		// Merge and define options
		this.options = Object.assign(Darky.defaults, opts);
		this.bodyEl = document.querySelector("body");
		this.bottom = this.options.bottom;
		this.right = this.options.right;
		this.left = this.options.left;
		this.time = this.options.time;
		this.backgroundColor = this.options.backgroundColor;
		this.buttonColorDark = this.options.buttonColorDark;
		this.buttonColorLight = this.options.buttonColorLight;
		this.saveInCookies = this.options.saveInCookies;
		this.labelLight = this.options.label.light;
		this.labelDark = this.options.label.dark;
		this.autoMatchOsTheme = this.options.autoMatchOsTheme;
		this.onChange = this.options.onChange;
		this.css = `
			body {
				background-color: ${this.backgroundColor};
			}
			.darkmode--background, 
			.darkmode--trigger {
				border-radius: 50%;
				height: 3rem;
				width: 3rem;
				bottom: ${this.bottom};
				right: ${this.right};
				left: ${this.left};
				position: fixed;
			}

			.darkmode--background {
				background-color: ${this.buttonColorDark};
				position: fixed;
				pointer-events: none;
				transition: all ${this.time} ease;
				box-shadow: 0 0.2rem 0.5rem 0.1rem rgba(0,0,0,0.4);
			}
				.darkmode--background.darkmode--triggered {
					border-radius: 0;
					transform: scale(100);
					box-shadow: none;
					background-color: ${this.backgroundColor};
  					mix-blend-mode: difference;
				}
				.darkmode--background.darkmode--enabled {
					width: 100%;
					height: 100%;
					right: 0;
					bottom: 0;
					transform: scale(1) !important;
				}
				
			.darkmode--trigger {
				background-color: transparent;
				color: ${this.buttonColorLight};
				display: flex;
				justify-content: center;
				align-items: center;
				cursor: pointer;
				transition: all ${this.time} ease;
				z-index: 9999;
			}
				.darkmode--trigger.darkmode--enabled {
					background-color: ${this.buttonColorLight};
					color: ${this.buttonColorDark};
				}
			
			img, picture, video .darkmode--ignore {
				isolation: isolate;
			}
			
			@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
				.darkmode--toggle {display: none !important}
			}

			@supports (-ms-ime-align:auto), (-ms-accelerator:true) {
				.darkmode--toggle {display: none !important}
			}

		`;

		// Initialize Darky library
		this.init();
	};

	/*
	 * Darky init
	 */
	Darky.prototype.init = function () {
		// Add styles
		const link = document.createElement("link");
		link.rel = "stylesheet";
		link.href = "data:text/css;charset=UTF-8," + encodeURIComponent(this.css);
		document.getElementsByTagName("head")[0].appendChild(link);

		// Create button
		let buttonEl = document.createElement("div");
		buttonEl.classList.add("darkmode--trigger");
		buttonEl.setAttribute("tabindex", "0");
		buttonEl.setAttribute("role", "button");
		buttonEl.setAttribute("aria-pressed", "false");
		buttonEl.style.display = "none";
		buttonEl.innerHTML = this.labelLight;

		// Create darkmode background
		let backgroundEl = document.createElement("div");
		backgroundEl.classList.add("darkmode--background");
		backgroundEl.style.display = "none";

		// Insert DOM elements
		this.bodyEl.insertBefore(buttonEl, this.bodyEl.firstChild);
		this.bodyEl.insertBefore(backgroundEl, this.bodyEl.firstChild);
	};

	/*
	 * Enable Darky Widget
	 */
	Darky.prototype.enable = function () {
		bodyEl = document.querySelector("body");
		buttonEl = document.querySelector(".darkmode--trigger");
		backgroundEl = document.querySelector(".darkmode--background");
		buttonEl.style.display = "flex";
		backgroundEl.style.display = "block";

		// Check if cookie is enabled and set
		if (this.saveInCookies == true) {
			const cookie = document.cookie.match(
				/^(.*;)?\s*darkmode\s*=\s*[^;]+(.*)?$/
			);
			if (cookie) {
				backgroundEl.classList.add("darkmode--triggered");
				buttonEl.classList.add("darkmode--enabled");
				buttonEl.innerHTML = this.labelDark;
				backgroundEl.classList.add("darkmode--enabled");
				bodyEl.classList.add("darkmode--enabled");
			}
		}

		// Check if prefered OS color scheme is enabled
		if (this.autoMatchOsTheme == true) {
			if (
				window.matchMedia &&
				window.matchMedia("(prefers-color-scheme: dark)").matches
			) {
				backgroundEl.classList.add("darkmode--triggered");
				buttonEl.classList.add("darkmode--enabled");
				buttonEl.innerHTML = this.labelDark;
				backgroundEl.classList.add("darkmode--enabled");
				bodyEl.classList.add("darkmode--enabled");
			}
		}

		// Toggle darkmode event listener
		buttonEl.addEventListener("click", function () {
			Darky.prototype.toggle();
		});

		// Trigger onChange event
		if (this.onChange != false) {
			buttonEl.addEventListener("click", function () {
				Darky.defaults.onChange();
			});
		}
	};

	/*
	 * Toggle Darky's darkmode
	 */
	Darky.prototype.toggle = function () {
		// Enable Darky
		if (!bodyEl.classList.contains("darkmode--enabled")) {
			if (Darky.defaults.saveInCookies == true) {
				document.cookie = "darkmode=on;max-age=" + 30 * 24 * 60 * 60;
			}
			backgroundEl.classList.add("darkmode--triggered");
			buttonEl.classList.add("darkmode--enabled");
			buttonEl.innerHTML = Darky.defaults.label.dark;
			setTimeout(function () {
				backgroundEl.classList.add("darkmode--enabled");
				bodyEl.classList.add("darkmode--enabled");
			}, 50);
		}
		// Disabled Darky
		else {
			if (Darky.defaults.saveInCookies == true) {
				document.cookie =
					"darkmode=on;expires=Thu,20 Nov 2018 12:00:00 UTC; path=/";
			}
			backgroundEl.classList.remove("darkmode--triggered");
			buttonEl.classList.remove("darkmode--enabled");
			bodyEl.classList.remove("darkmode--enabled");
			backgroundEl.classList.remove("darkmode--enabled");
			buttonEl.innerHTML = Darky.defaults.label.light;
		}
	};

	/*
	 * Check if Darkmode is enabled
	 */
	Darky.prototype.isEnabled = function () {
		bodyEl = document.querySelector("body");
		return bodyEl.classList.contains("darkmode--enabled");
	};

	/*
	 * Define default options
	 */
	Darky.defaults = {
		bottom: "32px",
		right: "32px",
		left: "unset",
		time: "300ms",
		backgroundColor: "#fff",
		buttonColorDark: "#000",
		buttonColorLight: "#fff",
		label: {
			dark: '<svg xmlns="http://www.w3.org/2000/svg" class="icon light" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z"></path><path d="M6.343 17.657l-1.414 1.414"></path><path d="M6.343 6.343l-1.414 -1.414"></path><path d="M17.657 6.343l1.414 -1.414"></path><path d="M17.657 17.657l1.414 1.414"></path><path d="M4 12h-2"></path><path d="M12 4v-2"></path><path d="M20 12h2"></path><path d="M12 20v2"></path></svg>',
			light:
				'<svg xmlns="http://www.w3.org/2000/svg" class="icon dark" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>',
		},
		saveInCookies: false,
		autoMatchOsTheme: true,
		onChange: false,
	};

	/*
	 * Make Darky accessible globally
	 */
	window.Darky = Darky;
})();
