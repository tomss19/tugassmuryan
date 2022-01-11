<?php
session_start();
    //Setting Session ketika login
    if(isset($_POST['Username'])) {
        if ($_POST['Username'] == 'w1zdom') {
            
            $_SESSION['user'] = $_POST['Username'];
            header("Location: index.php");
        } else { // kalau username salah tampilin info username tidak terdaftar
?>
    <script>alert("Username <?= $_POST['Username'] ?> tidak terdaftar !!!");document.location.href="weblogin.php"</script>
<?php
        }
    }
?>

<html>
<head>
    <title>From Login dengan CSS</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="font-family: sans-serif;background:#d5f0ff3;">
    <div class="box_login">
        <p class="login">Silahkan Login</p>
        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="Username" class="form_login" placeholder="Username..">
            <label>Pasworrd</label>
            <input type="password" name="Password" class="form_login" placeholder="Pasworrd..">
            <input type="submit" class="tombol_login" value="login">
            <br><br/>
        </form>
    </div><!--box-login-->   
</body>
</html>
