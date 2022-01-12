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
                    <li><a href="index.php?data=rank"><span>Rank</span></a>
                        <ul>
                            <li><a href="index.php?data=R1"><span>Rank Individu</span></a></li>
                            <li><a href="index.php?data=R2"><span>Rank Map</span></a></li>
                            <li><a href="index.php?data=R3"><span>Rank Clan</span></a></li>
                        </ul>
                    <li><a href="index.php?data=espt"><span>E-Sport</span></a></li>
                    <li><a href="index.php?data=clan"><span>Clan Medal</span></a></li>
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
