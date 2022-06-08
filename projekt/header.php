<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/flexslider/flexslider.css">
	<link rel="stylesheet" type="text/css" href="icofont.min.css">
	<link rel="stylesheet" type="text/css" href="icofont.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script></script>
	<script type="text/javascript" src="js/flexslider/jquery.flexslider.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<title>Tatto Studio</title>
</head>
<body>
	<!------------------ JS SCRIPTA ZA OZNACAVANJE TRENUTNE STRANICE ------------------>
	<script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $("#divHeader a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
                //for making parent of submenu active
               $(this).closest("li").parent().parent().addClass("active");
            }
        });
    });        
</script>
<!------------------ JS SCRIPTA ZA MENU PRI RESPONSIVU ------------------>
<script>
$(function() {
	$( '#dl-menu' ).dlmenu();
});
</script>
	<!------------------- TOP HEADER ------------------>
<div id="divTopHeaderWrap">
	<div id="divTopHeader">
		<div id="divTopHeaderCol1">
			<h2>Tattoo Studio</h2>
		</div>
		<div id="divTopHeaderCol2">
			<h2>Call for Appointment(+123) 234-567-890</h2>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
	<!------------------ MAIN HEADER ------------------>
<div id="divHeaderWrap">
	<div id="divHeader">
		<div id="divHeaderCol1">
			<h1>Tattoo</h1>
		</div>
		<div id="divHeaderCol2">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="aboutus.php">About Us</a>
				</li>
				<li>
					<a href="services.php">Services</a>
				</li>
				<li>
					<a href="artists.php">Artists</a>
				</li>
				<li id="lastLi">
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>

<!------------------ MAENU PRI RESPONSIVU ------------------>
	<h1 id="h1Tattoo">Tattoo</h1>
<div id="divHeaderCol2">
<div id="dl-menu" class="dl-menuwrapper">
	<button class="dl-trigger">Open <a href="https://www.jqueryscript.net/menu/">Menu</a></button>
		<ul class="dl-menu">
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="aboutus.php">About Us</a>
			</li>
			<li>
				<a href="services.php">Services</a>
			</li>
			<li>
				<a href="artists.php">Artists</a>
			</li>
			<li id="lastLi">
				<a href="contact.php">Contact</a>
			</li>
		</ul>
	</div>
	<div style="clear: both;"></div>

</div>
<div style="clear: both;"></div>
</div>



<!-----
<div id="divHeaderWrap">
	<div id="dl-menu" class="dl-menuwrapper">
	<button class="dl-trigger">Open <a href="https://www.jqueryscript.net/menu/">Menu</a></button>
		<ul class="dl-menu">
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="aboutus.php">About Us</a>
			</li>
			<li>
				<a href="services.php">Services</a>
			</li>
			<li>
				<a href="artists.php">Artists</a>
			</li>
			<li id="lastLi">
				<a href="contact.php">Contact</a>
			</li>
		</ul>
	</div>
	<div style="clear: both;"></div>
</div> --->
