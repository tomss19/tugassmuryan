<?php
    session_start();
    // Pengecekan fungsi udah login atau belum
    if ( (!isset($_SESSION['user'])) && ($_SESSION['user'] != 'w1zdom')) {
        header("Location: weblogin.php");
    } else {
?>
<?php require "Header.php"?>
<?php require "Left.php"?>
    <!-- Element panel kanan ini bagian dinamis -->
            <div id="right">
                <?php
                    if(isset($_GET['data'])) {
                        switch ($_GET['data']) {
                            case 'berita':
                                include "Berita.php";
                                break;
                            case 'add':
                                include "Add.php";
                                break;    
                            case 'map':
                                include "datamap.php";
                                break;
                            case 'espt':
                                include "Esport.php";
                                break;
                            case 'clan':
                                include "Clan.php";
                                break; 
                            case 'rank':
                                include "Rank.php";
                                break;
                            case 'R1':
                                include "R1.php";
                                break;
                            case 'R2':
                                include "R2.php";
                                break;  
                            case 'R3':
                                include "R3.php";
                                break;     

                            default:
                                # code...
                                break;
                        }
                    } else {
                ?>
                    <div id="top-right">
                    <div id="title">
                        Event Point Blank
                    </div><!--title-->
                    
                    <div id="content-tr"><img src="foto.png" width="150px" height="auto" vspace="-10" hspace="10" align="left">
                        <p>Hai Troopers Kami Mengadakan Event Shop Besar besaran loh mulai dari tanggal 5 november sampai tanggal  29 november 2021 Diskon dimulai dari 70% loh guys
                        <p>Ketentuan ini dibuat untuk penetapan peraturan dasar tentang syarat-syarat penggunaan seluruh isi/konten (online games) yang disediakan oleh zepetto (untuk selanjutnya disebut layanan). Hak publikasi dan operasional layanan dimiliki sepenuhnya oleh Zepetto.
                        
                    </div><!--content-tr-->
                    
                </div><!--top-right-->
                
                <div id="banner">
                <iframe src="https://giphy.com/embed/5bgYZ6gVFFlIsq1mek"  width="720" height="150" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

                </div><!--banner-->
               
                
                <div id="midle-right">
                    <div id="mr-left">
                        <div id="title-1">
                        <strong>Zepetto</strong>
                        </div><!--title-->
                        <div id="content-mr-left">
                            <ul><p>Zepetto adalah perusahaan game online yang menyediakan game yang dapat dimainkan melalui internet serta website dari game-game yang disediakan sebagai media informasi jasa game online yang disediakan oleh Zepetto.
                        <p>
                        
                                
                            </ul>
                        </div>
                    </div><!--mr-left-->

                    <div id="mr-center">
                        <div id="title-2">
                            Syarat layanan
                        </div><!--title-->
                        <div id="content-mr-center">
                            <ul><p>Untuk memakai layanan atau jasa melalui Website zepetto anda diwajibkan melakukan regitrasi terlebih dahulu melalui website yang Zepetto sediakan
                        </div>
                    </div><!--mr-center-->
                            
                    <div id="mr-right">
                        <div id="title-3">
                            Faq
                        </div><!--title-->
                        <div id="content-mr-right">

                        </div>
                    </div><!--mr-right-->
                </div><!--midle-right-->

                <div id="bottom-right">
                    <div id="bt-left">
                        <div id="title">

                        </div>
                        <div id="content-br-left">
                        <video width="476px" height="200" controls>
                            <source src="TOMS.mp4.mp4" type="video/mp4"> 
                        </video>
                        </div>
                    </div><!--bt-left-->

                    <div id="bt-right">
                        <div id="title">

                        </div>
                        <div id="content-bt-right">
                        <video width="200px" height="200px" controls>
                        <source src="ok.mp4.mp4" type="video/mp4"> 
                        
                        </div>
                    </div><!--bt-left-->
                </div><!--bottom-right-->
                <?php
                    }
                ?>
            </div><!--right-->
    <!-- Element panel kanan berakhir disini -->
<?php include "Footer.php"?>

            
        </div><!--wrap-->
    </body>
</html>
<?php 
}

?>