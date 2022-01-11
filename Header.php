<html>
<head>
    <title>Thomi Rizqullah</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div id="wrap">
        <div id="header">
        
        </div><!--header-->
            <div id="menu" style="background-color:#FBBB4D">
                <ul>
                    <li><a href="index.php"><span>Home</span></a></li>
                    <li><a href="index.php?data=berita"><span>Berita</span></a></li>
                    <li><a href="#"><span>Rank</span></a>
                        <ul>
                            <li><a href="R1.php"><span>Rank Individu</span></a></li>
                            <li><a href="R2.php"><span>Rank Map</span></a></li>
                            <li><a href="R3.php"><span>Rank Clan</span></a></li>
                        </ul>
                    <li><a href="Esport.php"><span>E-Sport</span></a></li>
                    <li><a href="Clan.php"><span>Clan Medal</span></a></li>
                    <li><a href="index.php?data=add"><span>Attendance</span></a></li>
                    <!-- fungsi ngecek udah login atau belum -->
<?php
    // kalau udah login
    if($_SESSION['user'] == 'w1zdom') { // tampilin menu logout
        ?>
            <li><a href="Logout.php"><span>Logout</span></a></li>
        <?php
    }
?>
                    <!-- fungsi ngecek udah login atau belum -->
                </ul>
            </div><!--menu-->
