<!doctype html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="jGbFBy81plKbfbIhFwD3Ng7dFqcQMlCdPNmKUiP_B9Y" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A website that hosts peer data for the Aether network">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="tableExport.js"></script>
    <script type="text/javascript" src="js/promise.js"></script>
    <script type="text/javascript" src="js/ping.js"></script>
    <script type="text/javascript" src="jquery.base64.js"></script>
    <title> Aether Peer Dump </title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <!--[if lte IE 8]>    <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">    <![endif]-->
    <!--[if gt IE 8]>  <!-->
    <script>
    $(function(){
    $("#ptable").find("tr").each(function(){
            var $tds = $(this).find("td");
            if($tds.length == 4){
                    var ip = $tds[1].textContent.replace(/^\s+|\s+$/g, '')
                    var port = $tds[2].textContent.replace(/^\s+|\s+$/g, '')
                    ping("http://" + ip + ":" + port).then(function(ms){
                            $tds[3].innerHTML = " online "
                    }).catch(function(e){
                            $tds[3].innerHTML = " down "
                    })
            }
    })
    })
    </script>
    <style>
        body {
		background-image:url('img/upfeathers.png');
	}
    </style>
    <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--  <![endif]-->
</head>

<body>
    <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon --><span>      </span> </a>
        <div id="menu">
            <div class="pure-menu"> <a class="pure-menu-heading" href="#">          Peer Dump        </a>
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"> <a href="index.php" class="pure-menu-link">              Home            </a> </li>
                    <li class="pure-menu-item"> <a href="addpeer.php" class="pure-menu-link">              Add Peer            </a> </li>
                    <li class="pure-menu-item"> <a href="about.php" class="pure-menu-link">              About            </a> </li>
                </ul>
            </div>
        </div>
        <div id="main">
            <div class="header">
                <h2 style="cursor:default;">          Find your friends!        </h2> </div>
            <center>
                <div class="content">
                    <h2 class="content-subhead" style='cursor:default;'>            Peers          </h2>
                    <table class="pure-table" id="ptable">
                        <thead>
                            <tr>
                                <th> Owner </th>
                                <th> Address </th>
                                <th> Port </th>
                                <th> Ping </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="blank">
                    </tr>
                    <tr>
                        <td>powdermilkman</td>
                        <td>67.160.120.95</td>
                        <td>38636</td>
                        <td>07/08/2015, 10:40</td></tr>
                    <tr>
                        <td>gergex</td>
                        <td>86.72.68.44</td>
                        <td>60355</td>
                        <td>07/08/2015, 10:08</td></tr>
                    <tr>
                        <td>anon</td>
                        <td>50.24.180.124</td>
                        <td>55513</td>
                        <td>07/07/2015, 23:34</td></tr>
                    <tr>
                        <td>Celas</td>
                        <td>184.160.253.182</td>
                        <td>61692</td>
                        <td>07/07/2015, 18:59</td></tr>
                    <tr>
                        <td>Stary2001</td>
                        <td>62.210.129.229</td>
                        <td>53240</td>
                        <td>07/07/2015, 16:15</td></tr>
                            <tr>
                                <td>Somebody</td>
                                <td>75.108.244.78</td>
                                <td>54611</td>
                                <td>07/07/2015, 14:52</td>
                            </tr>
                            <tr>
                                <td> fcuke5r5 </td>
                                <td> 210.195.34.61 </td>
                                <td> 43418 </td>
                                <td> 07/07/2015, 13:51 </td>
                            </tr>
                            <tr>
                                <td> Who knows </td>
                                <td> 77.98.0.207 </td>
                                <td> 49830 </td>
                                <td> 07/07/2015, 11:43 </td>
                            </tr>
                            <tr>
                                <td> shekdas </td>
                                <td> 71.127.43.204 </td>
                                <td> 56777 </td>
                                <td> 07/07/2015, 08:35 </td>
                            </tr>
                            <tr>
                                <td> Unique </td>
                                <td> 160.39.159.53 </td>
                                <td> 64493 </td>
                                <td> 07/06/2015, 23:35 </td>
                            </tr>
                            <tr>
                                <td> Grizzly </td>
                                <td> 69.250.101.219 </td>
                                <td> 51999 </td>
                                <td> 07/07/2015, 06:33 </td>
                            </tr>
                            <tr>
                                <td>Unknown</td>
                                <td> 208.120.122.29 </td>
                                <td> 59184 </td>
                                <td> 07/07/2015, 05:34 </td>
                            </tr>
                            <tr>
                                <td> FacelessLunatic </td>
                                <td> 173.216.38.54 </td>
                                <td> 51574 </td>
                                <td> 07/07/2015, 05:15 </td>
                            </tr>
                            <tr>
                                <td> blackle </td>
                                <td> 76.68.74.251 </td>
                                <td> 43183 </td>
                                <td> 07/07/2015, 02:45 </td>
                            </tr>
                            <tr>
                                <td> CorruptNova </td>
                                <td> 68.199.104.177 </td>
                                <td> 10884 </td>
                                <td> 07/07/2015, 02:17 </td>
                            </tr>
                            <tr>
                                <td> Toylore </td>
                                <td> 146.90.186.19 </td>
                                <td> 53457 </td>
                                <td> 07/07/2015, 00:53 </td>
                            </tr>
                            <tr>
                                <td> chronfab </td>
                                <td> 199.167.138.87 </td>
                                <td> 49073 </td>
                                <td> 07/06/2015, 23:16 </td>
                            </tr>
                            <tr>
                                <td> caadbury </td>
                                <td> 108.56.239.114 </td>
                                <td> 49525 </td>
                                <td> 07/06/2015, 22:47 </td>
                            </tr>
                            <tr>
                                <td> VULONKAAZ </td>
                                <td> 77.129.41.77 </td>
                                <td> 37374 </td>
                                <td> 07/06/2015, 22:25 </td>
                            </tr>
                            <tr>
                                <td> nyran20 </td>
                                <td> 47.18.127.254 </td>
                                <td> 54289 </td>
                                <td> 07/06/2015, 22:23 </td>
                            </tr>
                            <tr>
                                <td> JadelyJade </td>
                                <td> 147.194.96.51 </td>
                                <td> 59982 </td>
                                <td> 07/06/2015, 22:04 </td>
                            </tr>
                            <tr>
                                <td>Unknown</td>
                                <td> 95.94.194.83 </td>
                                <td> 56594 </td>
                                <td> 07/06/2015, 21:57 </td>
                            </tr>
                            <tr>
                                <td> fotoply </td>
                                <td> 93.184.204.215 </td>
                                <td> 7077 </td>
                                <td> 07/06/2015, 21:44 </td>
                            </tr>
                            <tr>
                                <td> n17r4m </td>
                                <td> 108.181.97.212 </td>
                                <td> 53987 </td>
                                <td> 07/06/2015, 21:37 </td>
                            </tr>
                            <tr>
                                <td> LostUlysses </td>
                                <td> 147.194.96.51 </td>
                                <td> 59982 </td>
                                <td> 07/06/2015, 20:58 </td>
                            </tr>
                            <tr>
                                <td>Unknown</td>
                                <td> 87.110.59.142 </td>
                                <td> 36501 </td>
                                <td> 07/06/2015, 20:37 </td>
                            </tr>
                            <tr>
                                <td> Website Owner </td>
                                <td> 98.114.247.24 </td>
                                <td> 52146 </td>
                                <td> 07/06/2015, 16:52 </td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <br /> <a class="pure-button pure-button-primary" onclick="$('#ptable').tableExport({type:'json',escape:'false'});">            export          </a>
		    <br />
                    <p> Note: The ping has a limitation where you cannot see if your own node is up when visiting this page from the same IP aether is running on. Sorry. Working on a fix 'real soon'!</p> 
		</div>
                    
            </center>
        </div>
    </div>
    <script src="js/ui.js">
    </script>
</body>

</html>
