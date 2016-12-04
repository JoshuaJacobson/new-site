<?php
#Front page for the website. Connects to the 4 major parts of the site:
#Students
#Parents
#Community
#Outreach
$mobile = $_GET["mobile"];
$w = $_GET["w"];
$h = $_GET["h"];
if ($mobile == "true") {
    $scale = "inherit";
    $br = "<hr />";
} else {
    $scale = "25%";
    $br = "";
}
$secs = 1483803000 - time();
if ( $secs >= 60 ) {
    $mins = (int)($secs / 60);
    $secs = $secs % 60;
}
if ( $mins >= 60 ) {
    $hours = (int)($mins / 60);
    $mins = $mins % 60;
}
if ( $hours >= 24 ) {
    $days = (int)($hours / 24);
    $hours = $hours % 24;
}
if ( $days >= 7 ) {
    $weeks = (int)($days / 7);
    $days = $days % 7;
}


?>
<html>
<head>
    <title>Cadillac Connectors Website</title>
    <link rel="SHORTCUT ICON" href="resources/icon.ico">
    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="index.js"></script>
</head>
<body onload="indexLoader()" style="background-color: gray; margin: 0px; padding: 0px; text-align: center;">
        <h1 id="Logo_wrapper">
            <img src="resources/connectors_lightgreen.png" id="Logo">
            Home of the FRC Team 5086
        </h1>
    <hr />
        <h2 id="Countdown" class="Countdown">Countdown to FIRST Steamworks Kickoff</h2>
        <p id="pCountdown" class="Countdown">
            <span id="weeks"><?php echo $weeks;?></span> Weeks,
            <span id="days"><?php echo $days;?></span> Days,
            <span id="hours"><?php echo $hours;?></span> Hours,
            <span id="mins"><?php echo $mins;?></span> Minutes,
            <span id="secs"><?php echo $secs;?></span> Seconds.
        </p>
        <noscript>In order for the countdown to work, you need to enable javascript.</noscript>
    <hr />
    <div id="Container">
        <div id="Students" class="Quarter" style="width: <?php echo $scale;?>;">
            <h2>Students</h2>
        </div>
        <div id="Parents" class="Quarter" style="width: <?php echo $scale;?>;">
            <h2>Parents</h2>
        </div>
        <div id="Community" class="Quarter" style="width: <?php echo $scale;?>;">
            <h2>Community</h2>
        </div>
        <div id="Outreach" class="Quarter" style="width: <?php echo $scale;?>;">
            <h2>Outreach</h2>
        </div>
        <?php echo $br; ?>
    </div>
</body>
</html>
