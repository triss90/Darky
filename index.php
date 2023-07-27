<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Darky.js</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/app.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">

	<meta name="description" content="Page description">
	<meta property="og:title" content="Unique page title - My Site">
	<meta property="og:description" content="Page description">
	<meta property="og:image" content="https://www.mywebsite.com/image.jpg">
	<meta property="og:image:alt" content="Image description">
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:url" content="https://www.mywebsite.com/page">
	<link rel="canonical" href="https://www.mywebsite.com/page">

	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/light/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/light/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/light/favicon-16x16.png">
	<link rel="manifest" href="/assets/img/light/site.webmanifest">
	<link rel="mask-icon" href="/assets/img/light/safari-pinned-tab.svg" color="#f74469">
	<link rel="shortcut icon" href="/assets/img/light/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/assets/img/light/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/dark/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/dark/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/dark/favicon-16x16.png">
	<link rel="manifest" href="/assets/img/dark/site.webmanifest">
	<link rel="mask-icon" href="/assets/img/dark/safari-pinned-tab.svg" color="#2762ff">
	<link rel="shortcut icon" href="/assets/img/dark/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/assets/img/dark/browserconfig.xml">
	<meta name="theme-color" content="#ffffff"> -->

</head>


<body>

<header>
	<nav>
		<a href="/">Darky.js</a>
		<ul>
			<li><a href="#docs">Docs</a></li>
			<li><a href="https://github.com/triss90/Darky" target="_blank">GitHub</a></li>
		</ul>
	</nav>

	<h1>Darky.js</h1>
	<p>Add a dark-mode to your website in seconds. No hassle, no reworking your entire codebase!</p>
	<br>
	<a href="/lib/1.0.0/darky.min.js" download class="button">Download</a>
	<a href="#docs" class="button outline">Documentation</a>
</header>


<main>

<hr>
<h2 id="docs">Documentation</h2><br>
<h3>How to use Darky</h3>
<p>Include the Darky.js library in your HTML file and Instantiate a new Darky object to add a darkmode toggle to your webpage:</p>

<pre><code class="language-html">&lt;script src=&quot;/assets/js/darky.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
  const darkmode = new Darky();
  darkmode.enableWidget();
&lt;/script&gt;</code></pre>

<br>
<h3>Options</h3>
<p>Here are the available options</p>
<ul>
	<li><strong>bottom:</strong> (String) CSS value for the widget position from the bottom. Defaults to "32px".</li>
	<li><strong>right:</strong> (String) CSS value for the widget position from the right. Defaults to "32px".</li>
	<li><strong>left:</strong> (String) CSS value for the widget position from the left. Defaults to "unset".</li>
	<li><strong>time:</strong> (String) CSS value for transition time. Defaults to "300ms".</li>
	<li><strong>backgroundColor:</strong> (String) CSS value for the background color in dark mode. Defaults to "#fff".</li>
	<li><strong>buttonColorDark:</strong> (String) CSS value for the dark mode button color. Defaults to "#000".</li>
	<li><strong>buttonColorLight:</strong> (String) CSS value for the light mode button color. Defaults to "#fff".</li>
	<li><strong>label.dark:</strong> (String) HTML content for the dark mode button label. Defaults to a SVG moon icon.</li>
	<li><strong>label.light:</strong> (String) HTML content for the light mode button label. Defaults to a SVG sun icon.</li>
	<li><strong>saveInCookies:</strong> (Boolean) if set to true, the user's preference will be saved in a cookie. Defaults to false.</li>
	<li><strong>autoMatchOsTheme:</strong> (Boolean) if set to true, the color theme will automatically match the user's OS preference. Defaults to true.</li>
	<li><strong>onChnge:</strong> (Function) Provides a callback whenever darkmode is toggled on or off. Defaults to false</li>
</ul>
<h4>Example:</h4>
<pre><code class="language-javascript">const options = {
  bottom: "32px",
  right: "32px",
  left: "unset",
  time: "300ms",
  backgroundColor: "#fff",
  buttonColorDark: "#000",
  buttonColorLight: "#fff",
  label: {
    dark: &#039;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon light&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M6.343 17.657l-1.414 1.414&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M6.343 6.343l-1.414 -1.414&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M17.657 6.343l1.414 -1.414&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M17.657 17.657l1.414 1.414&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M4 12h-2&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M12 4v-2&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M20 12h2&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M12 20v2&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&#039;,
    light: &#039;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;icon dark&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;&lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot; fill=&quot;none&quot;&gt;&lt;/path&gt;&lt;path d=&quot;M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z&quot;&gt;&lt;/path&gt;&lt;/svg&gt;&#039;,
},
  saveInCookies: false,
  autoMatchOsTheme: true,
  onChange: false
}
const darkmode = new Darky(options);
darkmode.enable();
</code></pre>


<br>
<h3>Methods</h3>
<p>Use the following methods to interact with the Darky library:</p>
<ul>
	<li><code>darky.enable();</code>: This method enables the Darky widget on your webpage.</li>
	<li><code>darky.toggle();</code>: This method toggles the darkmode on or off. When called, it checks the current mode and changes it to the opposite one.</li>
	<li><code>darky.isEnabled();</code>: This method checks if darkmode is currently enabled and returns a boolean value.</li>
</ul>
<h4>Example:</h4>
<pre><code class="language-javascript">const darkmode = new Darky();
darkmode.enable();      // Activates the Darky widget
darkmode.toggle();      // Toggles darkmode on/off
darkmode.isEnabled();   // Returns true if darkmode is enabled
</code></pre>


<br>
<h3>Events</h3>
<p>The following events are available:</p>
<ul>
	<li><strong>onChange</strong>: This callback function fires whenever darkmode is toggled on or off and returns the result of the defined JS.</li>
</ul>
<h4>Example</h4>
<pre><code class="language-javascript">const darkmode = new Darky(
  onChange: function() {
    console.log('Darkmode was toggled');
    // JS goes here
  }
);
darkmode.enable();
</code></pre>


<br>
<h3>Overrides</h3>
<There>By default the following elements are not converted to dark mode: <code>img</code>, <code>picture</code>, <code>video</code>. There are several ways to prevent an element from being converted:</p>
<ol>
	<li>Add the class <code>darkmode--ignore</code> to the elements HTML:
	<pre><code class="language-html">&lt;span class=&quot;darkmode--ignore&quot;&gt;I AM NOT DARKMODE&lt;span&gt;</code></pre>
	</li>
	<li>Add the following CSS to the element:
		<pre><code class="language-css">.element {
  isolation: isolate;
}</code></pre>
	</li>
	<li>Revert the darkmode like so <pre><code class="language-css">.darkmode--enabled .element {
  mix-blend-mode: difference;
}</code></pre></li>
</ol>

<hr>
<footer>
	<section>
		<div style="text-align:center">
			<p>Made by <a href="https://triss.dev">Tristan White</a></p>
			<p><small>The library is inspired by the <a href="https://dev.to/wgao19/night-mode-with-mix-blend-mode-difference-23lm">work of Wei Gao</a></small></p>
		</div>
	</section>
</footer>

<!-- <div class="tutorial">
	This is Darky.js
</div>
<svg class="tutorial-arrow" viewBox="0 0 170 143" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M9.7747 42.7064C9.7747 42.7064 19.5575 77.2951 44.4558 84.8113C62.0225 90.1142 81.0061 80.1196 77.791 68.3309C76.0904 62.0955 69.0574 62.4735 65.5106 65.8444C59.1003 71.9368 67.8591 89.7423 77.9205 96.1324C112.816 118.295 161.943 84.5867 161.943 84.5867" stroke="#19191a" stroke-width="2" stroke-linecap="round"></path>
	<path d="M159.804 93.8429L162.704 84.4917L152.715 80.8293" stroke="#19191a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> -->

</main>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>

<script src="/assets/js/darky.js"></script>
<script>
	const options = {
		bottom: "32px",
		right: "32px",
		left: "unset",
		time: "500ms",
		backgroundColor: "#fff",
		buttonColorDark: "#000",
		buttonColorLight: "#fff",
		label: {
			dark: '<svg xmlns="http://www.w3.org/2000/svg" class="icon light" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z"></path><path d="M6.343 17.657l-1.414 1.414"></path><path d="M6.343 6.343l-1.414 -1.414"></path><path d="M17.657 6.343l1.414 -1.414"></path><path d="M17.657 17.657l1.414 1.414"></path><path d="M4 12h-2"></path><path d="M12 4v-2"></path><path d="M20 12h2"></path><path d="M12 20v2"></path></svg>',
			light: '<svg xmlns="http://www.w3.org/2000/svg" class="icon dark" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>',
		},
		saveInCookies: true,
		autoMatchOsTheme: false,
		onChange: function() {
			// console.log('Darkmode was toggled');
			swapFav();
		}
	}
	const darkmode = new Darky(options);
	darkmode.enable();
</script>

<script src="/assets/js/app.js"></script>

</body>
</html>
