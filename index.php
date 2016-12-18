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
    <!--TODO: Add <icon> tag-->
    <link rel="stylesheet" type="text/css" href="global.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="index.js"></script>
</head>
<body lang="en-US" onload="indexLoader()" style="background-color: gray; margin: 0px; padding: 0px; text-align: center;">
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
        <div id="Information">
            <div id="Students" class="Quarter" style="width: <?php echo $scale;?>;">
                <h2>Students</h2>
                <p>
                    A place for current members of the team and others who are interested
                    in becoming a part of the team.
                    <br>
                    Access various resources and view the calendar of team events.
                </p>

            </div>
            <div id="Parents" class="Quarter" style="width: <?php echo $scale;?>;">
                <h2>Parents</h2>
                <p>
                    Location of various parent involvement resources, such as the calendar
                    or student involvement reports.
                </p>

            </div>
            <div id="Community" class="Quarter" style="width: <?php echo $scale;?>;">
                <h2>Community</h2>
                <p>
                    Are you a local business who sponsors the cadillac connectors? Would
                    you like to? All information about our sponsors can be found here.
                </p>

            </div>
            <div id="Outreach" class="Quarter" style="width: <?php echo $scale;?>;">
                <h2>Outreach</h2>
                <p>
                    The cadillac connectors do our best to help in our community. For any information
                    relating to our involvement, check here.
                </p>
            </div>
        </div>
        <div id="Images">
            <div class="Quarter">
                <img src="resources/pictures/students.jpg" title="Connectors at TC Competition" alt="2016 Students" class="QuarterImage">
            </div>
            <div class="Quarter">
                <img src="resources/pictures/parents.jpg" title="Members of the connectors working on the robot" alt="2 Parents" class="QuarterImage">
            </div>
            <div class="Quarter">
                <img src="resources/pictures/community.jpg" title="Connectors cheer on their team" alt="Connectors in the stands" class="QuarterImage">
            </div>
            <div class="Quarter">
                <img src="resources/pictures/outreach.jpg" title="Connectors win an award" alt="Team winning award" class="QuarterImage">
            </div>
        </div>

        <?php echo $br; ?>
    </div>
    <hr>
    <footer>
        <h2><i>Connect</i> with us</h2>
        <p>
            <img src="resources/media/twitter.png" onclick="twitter()" alt="Twitter" title="Cadillac Connectors Twitter" class="mediaButton">
            <img src="resources/media/facebook.png" onclick="facebook()" alt="Facebook" title="Cadillac Connectors Facebook" class="mediaButton">
            <img src="resources/media/instagram.png" onclick="instagram()" alt="Instagram" title="Cadillac Connectors Instagram" class="mediaButton">
            <img src="resources/media/pintrest.png" onclick="pinterest()" alt="Pinterest" title="Cadillac Connectors Pinterest" class="mediaButton">
            <img src="resources/media/reddit.png" onclick="reddit()" alt="Reddit" title="Cadillac Connectors Subreddit" class="mediaButton">
            <img src="resources/media/youtube.png" onclick="youtube()" alt="Youtube" title="Cadillac Connectors Youtube Channel" class="mediaButton">
        </p>
    </footer>
</body>
</html>
