<!doctype html>
<html lang="en">
<head>
<style>
        body {
		background-image:url('img/upfeathers.png');
	}
</style>
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
            <?php 
            include 'simple_html_dom.php';
            if(isset($_POST['go'])){ // button name
                $time = gmmktime();
                $alias = filter_var($_POST['alias'], FILTER_SANITIZE_STRING);
                $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
                $port = filter_var($_POST['port'], FILTER_SANITIZE_STRING);
                $fp = @fsockopen($address,$port,$errno,$errstr,10);
                if(!$fp)
                {
                    echo "<h2>Could not connect to peer</h2>";
                    echo "<h3>Are you sure you're port forwarded?</h3>";
                }

                else{
                    echo "<h2 style='cursor:default;'>Thank you!</h2>";
                    echo "<h2 style='cursor:default;'>You have been added to the list.</h2>";
                    fclose($fp);
                    $html = file_get_html('index.php', $use_include_path = false, $context=null, $offset = -1, $maxLen=-1, $lowercase = true, $forceTagsClosed=true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN=false, $defaultBRText=DEFAULT_BR_TEXT);
                    $ptable = $html->find('tr[id=blank]', 0);
                    $ptable->innertext='
                    </tr>
                    <tr>
                        <td>'.$alias.'</td>
                        <td>'.$address.'</td>
                        <td>'.$port.'</td>
                        <td>'.date("m/d/Y, H:i", $time).'</td>';
                    $fh = fopen('index.php', 'w');
                    fwrite($fh, $html);
                    fclose($fh);

                }
                
            }
            else{
                echo "<h2 style='cursor:default;'>Find your friends!</h2>";
            }
            ?>   
        </div>
        <center>
        <div class="content">
            <h2 class="content-subhead" style='cursor:default;'>Submit new peer</h2>
            <form action="addpeer.php" method="post" class="pure-form">
                <fieldset class="pure-group">
                    <input name="alias" id="alias" type="text" class="pure-input-1-2" placeholder="Owner's Alias">
                    <input name="address" id="address" type="text" class="pure-input-1-2" placeholder="Address">
                    <input name="port" id="port" type="text" class="pure-input-1-2" placeholder="Port">
                </fieldset>
                <button type="submit" name="go" class="pure-button pure-input-1-2 pure-button-primary">Submit</button>
            </form>
        </div>
        </center>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
