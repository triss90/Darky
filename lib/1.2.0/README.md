# Darky.js documentation

Darky.js is a light, easy-to-use JavaScript library that allows developers to quickly and efficiently implement dark mode on their websites. This library dynamically changes the CSS styles of your website to provide a night mode effect that reduces the light emitted by the screen.

* [Download](https://darky.app/)
* [Documentation](https://darky.app/#docs)
* [Changelog](https://darky.app/#changelog)

## How to use Darky

Include the Darky.js library in your HTML file and Instantiate a new Darky object to add a darkmode toggle to your webpage:

### The easy way (JSDelivr CDN)
```js
<script src="https://cdn.jsdelivr.net/npm/darkyjs@1.2.0/1.2.0/darky.min.js"></script>
<script>
    const darkmode = new Darky();
    darkmode.enable();
</script>
```

Or [download Darky.js]([https://darky.app/]) and host it yourself.

### Using NPM
```bash
npm install darkyjs
```

## Options

Here are the available options

* **bottom:** (String) CSS value for the widget position from the bottom. Defaults to "32px".
* **right:** (String) CSS value for the widget position from the right. Defaults to "32px".
* **left:** (String) CSS value for the widget position from the left. Defaults to "unset".
* **time:** (String) CSS value for transition time. Defaults to "300ms".
* **backgroundColor:** (String) CSS value for the background color in dark mode. Defaults to "#fff".
* **buttonColorDark:** (String) CSS value for the dark mode button color. Defaults to "#000".
* **buttonColorLight:** (String) CSS value for the light mode button color. Defaults to "#fff".
* **label.dark:** (String) HTML content for the dark mode button label. Defaults to a SVG moon icon.
* **label.light:** (String) HTML content for the light mode button label. Defaults to a SVG sun icon.
* **saveInCookies:** (Boolean) if set to true, the user's preference will be saved in a cookie. Defaults to false.
* **autoMatchOsTheme:** (Boolean) if set to true, the color theme will automatically match the user's OS preference. Defaults to true.
* **onChnge:** (Function) Provides a callback whenever darkmode is toggled on or off. Defaults to false.

### Example

```js
const options = {
    bottom: "32px",
    right: "32px",
    left: "unset",
    time: "300ms",
    backgroundColor: "#fff",
    buttonColorDark: "#000",
    buttonColorLight: "#fff",
    label: {
    dark: '<svg xmlns="http://www.w3.org/2000/svg" class="icon light" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z"></path><path d="M6.343 17.657l-1.414 1.414"></path><path d="M6.343 6.343l-1.414 -1.414"></path><path d="M17.657 6.343l1.414 -1.414"></path><path d="M17.657 17.657l1.414 1.414"></path><path d="M4 12h-2"></path><path d="M12 4v-2"></path><path d="M20 12h2"></path><path d="M12 20v2"></path></svg>',
    light: '<svg xmlns="http://www.w3.org/2000/svg" class="icon dark" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>',
},
    saveInCookies: false,
    autoMatchOsTheme: true,
    onChange: false
}
const darkmode = new Darky(options);
darkmode.enable();
```

## Methods

Use the following methods to interact with the Darky library:

* `darky.enable();`: This method enables the Darky widget on your webpage.
* `darky.toggle();`: This method toggles the darkmode on or off. When called, it checks the current mode and changes it to the opposite one.
* `darky.isEnabled();`: This method checks if darkmode is currently enabled and returns a boolean value.

### Example

```js
const darkmode = new Darky();
darkmode.enable();      // Activates the Darky widget
darkmode.toggle();      // Toggles darkmode on/off
darkmode.isEnabled();   // Returns true if darkmode is enabled
```

## Events

The following events are available:

* **onChange**: This callback function fires whenever darkmode is toggled on or off and returns the result of the defined JS.

### Example

```js
const darkmode = new Darky(
    onChange: function() {
    console.log('Darkmode was toggled');
    // JS goes here
    }
);
darkmode.enable();
```

## Overrides

By default the following elements are not converted to dark mode: `img`, `picture`, `video`. There are several ways to prevent an element from being converted:

1. Add the class `darkmode--ignore` to the elements HTML:

```html
<span class="darkmode--ignore">I AM NOT DARKMODE<span>
```

1. Add the following CSS to the element:

```css
.element {
    isolation: isolate;
}
```

1. Revert the darkmode like so

```css
.darkmode--enabled .element {
    mix-blend-mode: difference;
}
```
