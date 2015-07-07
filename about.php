<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Aether Peer Dump</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
</head>
<body>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Peer Dump</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="addpeer.php" class="pure-menu-link">Add Peer</a></li>
                <li class="pure-menu-item"><a href="about.php" class="pure-menu-link">About</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h2 style='cursor:default;'>Find your friends!</h2>
        </div>
        <center>
        <div class="content">
            <h2 class="content-subhead" style='cursor:default;'>About Me</h2>
			<p style='cursor:default;'>Who cares about me, go find your friends.</p>

            <p><a href="https://github.com/NateBrune/AetherPeerDump">If you're looking for the source code, its here</a></p>
        </div>
        </center>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
