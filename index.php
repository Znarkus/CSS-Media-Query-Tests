<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Test and explore CSS media queries and viewport settings." />
	<title>CSS media query tests</title>

	<? if (isset($_GET['viewport'])): ?>
		<meta name="viewport" content="<?= htmlspecialchars($_GET['viewport']) ?>" />
	<? endif ?>

	<link rel="stylesheet" href="all.css" />
</head>
<body>

<h1>CSS media query tests</h1>
<label>
	Viewport:
	<select id="viewport">
		<option value="">Not set</option>
		<option>initial-scale=1</option>
		<option>width=device-width</option>
		<option>width=device-width, initial-scale=1</option>
		<option>width=device-width, initial-scale=1, maximum-scale=1</option>
	</select>
</label>
<p id="real_data">Dimensions</p>

<section>
	<div id="test11">
		Min-width: 320px
		<code>only screen and (min-width: 320px)</code>
	</div>
	
	<div id="test12">
		Min-width: 480px
		<code>only screen and (min-width: 480px)</code>
	</div>
	
	<div id="test9">
		Min-width: 768px
		<code>only screen and (min-width: 768px)</code>
	</div>
	
	<div id="test13">
		Min-width: 1024px
		<code>only screen and (min-width: 1024px)</code>
	</div>
	
	<div id="test10">
		Min-width: 1024px (tablet)
		<code>only screen and (min-width: 1024px),
only screen and (min-device-height: 1024px) and (orientation: landscape)</code>
	</div>
</section>


<section>
	<p>From <a href="http://css-tricks.com/snippets/css/media-queries-for-standard-devices/">http://css-tricks.com/snippets/css/media-queries-for-standard-devices/</a>.</p>

	<div id="test0">
		Smartphones (portrait and landscape)
		<code>only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px)</code>
	</div>

	<div id="test1">
		Smartphones (landscape)
		<code>only screen
	and (min-width : 321px)</code>
	</div>

	<div id="test2">
		Smartphones (portrait)
		<code>only screen
	and (max-width : 320px)</code>
	</div>

	<div id="test3">
		iPads (portrait and landscape)
		<code>only screen
	and (min-device-width : 768px)
	and (max-device-width : 1024px)</code>
	</div>

	<div id="test4">
		iPads (landscape)
		<code>only screen
	and (min-device-width : 768px)
	and (max-device-width : 1024px)
	and (orientation : landscape)</code>
	</div>

	<div id="test5">
		iPads (portrait)
		<code>only screen
	and (min-device-width : 768px)
	and (max-device-width : 1024px)
	and (orientation : portrait)</code>
	</div>

	<div id="test6">
		Desktops and laptops
		<code>only screen
	and (min-width : 1224px)</code>
	</div>

	<div id="test7">
		Large screens
		<code>only screen
	and (min-width : 1824px)</code>
	</div>

	<div id="test8">
		iPhone 4
		<code>only screen and (-webkit-min-device-pixel-ratio : 1.5),
	only screen and (min-device-pixel-ratio : 1.5)</code>
	</div>
</section>

<footer>
	Fork on <a href="https://github.com/Znarkus/CSS-Media-Query-Tests">GitHub</a>.
	Created by the <a href="http://snowfireit.com/">Snowfire</a> team.
</footer>

<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>