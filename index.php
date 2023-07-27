<?php include "_inc/head.php";?>

<body>

<div class="header-bg">
	<header>
		<?php include "_inc/nav.php";?>

		<h1>Darky.js</h1>
		<p><strong>Add a dark mode to your website in seconds. No hassle, no reworking your entire codebase!</strong></p>
		<br>
		<a href="/lib/1.1.0/darky.min.js" download class="button"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</a>
		<a href="#docs" class="button outline"><i class="fa fa-book" aria-hidden="true"></i> Documentation</a>
	</header>
</div>

<main>
<br>
<h2 id="docs">Documentation</h2><br>
<h3>How to use Darky</h3>
<p>Include the Darky.js library in your HTML file and Instantiate a new Darky object to add a darkmode toggle to your webpage:</p>

<h4>The easy way (JSDelivr CDN)</h4>
<pre><code class="language-html">&lt;script src=&quot;https://cdn.jsdelivr.net/npm/darkyjs@1.1.0/1.1.0/darky.min.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
  const darkmode = new Darky();
  darkmode.enable();
&lt;/script&gt;</code></pre>

<p>Or <a href="/lib/1.1.0/darky.min.js" download>download the library</a> and host it yourself.</p>

<h4>Using NPM</h4>
<pre><code class="language-bash">npm install darkyjs</code></pre>

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
	<li><strong>buttonShadow:</strong> (String) CSS value for the button shadow. Defaults to "0 0.2rem 0.5rem 0.1rem rgba(0,0,0,0.4)".</li>
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
  buttonShadow: "0 0.2rem 0.5rem 0.1rem rgba(0,0,0,0.4)",
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

<h2 id="changelog">Changelog</h2><br>
<h3>v1.1.0</h3>
<ul>
	<li><strong>Added - </strong> Added button shadow control</li>
	<li><strong>Fix - </strong> Fixed an issue where dark mode would require a preset background color</li>
	<li><strong>Fix - </strong> Override background changed from <code>background</code> to <code>background-color</code> to be less disruptive</li>
</ul>
<h3>v1.0.4</h3>
<ul>
	<li><strong>Update - </strong> Documentation links now reflect the correct version</li>
</ul>
<h3>v1.0.3</h3>
<ul>
	<li><strong>Added - </strong> AddedDocumentation links</li>
</ul>
<h3>v1.0.2</h3>
<ul>
	<li><strong>Update - </strong> Documentation now reflect proper method names</li>
</ul>
<h3>v1.0.1</h3>
<ul>
	<li><strong>Fix - </strong> Issue with NPM package links</li>
</ul>
<h3>v1.0.0 (initial release)</h3>
<ul>
	<li><strong>Added - </strong> General support for darkmode now works</li>
	<li><strong>Added - </strong> Added callback function when darkmode is triggered</li>
	<li><strong>Added - </strong> Added support for native os darkmode override</li>
	<li><strong>Added - </strong> Added function to ave user choice in cookie</li>
</ul>


<?php include "_inc/footer.php";?>

</main>
<?php include "_inc/scripts.php";?>
