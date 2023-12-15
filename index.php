<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My website</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>Martin Hans Ramaputra Simaremare</h1>
            <h3>Halaman Saya</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="http://localhost/website_martin/index.php?page=home">Home</a></li>
                <li><a href="http://localhost/website_martin/index.php?page=profile">Profile</a></li>
                <li><a href="http://localhost/website_martin/index.php?page=sejarah">Sejarah</a></li>
                <li><a href="http://localhost/website_martin/index.php?page=about">About</a></li>
                <li><a href="http://localhost/website_martin/index.php?page=kontak">Kontak</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="box_container">
				<div class="box">
					<img src="gambar2.jpg">
				</div>
				<div class="box">
					<img src="gambar1.jpg">
				</div>
			</div>
            <div class="konten">
                <?php
                    if(isset($_GET['page'])){
                        $page=$_GET['page'];
                        switch($page){
                            case "home":
                                include "home.php";
                                break;
                            case "profile":
                                include "profile.php";
                                break;
                            case "sejarah":
                                include "sejarah.php";
                                break;
                            case "about":
                                include "about.php";
                                break;
                            case "kontak":
                                include "kontak.php";
                                break;
                            default:
                                include "404.html";
                                break;
                        }
                    }else{
                        include "home.php";
                    }
                    ?>
                </div>
        </div>
        <div class="box_footer">
            <div class="box">
                Martin dikenal pandai menghitung atau pun matematika di sekolah maupun di kuliah hingga
                dia pernah membantu teman temannya.
            </div>
            <div class="box">
                Padahal saya masih belum pandai menghitung guyss apalagi rumus rumus aja terkadang mau lupa
                sehingga saya mau juga bertanya sama teman teman maupun guru atau dosen hehe.
            </div>
            <div class="box">
                <ul>
                    <li>Martin Hans R. Simaremare (4193550012)</li>
                    <li>Mata Kuliah Perancangan dan Pemrograman Web</li>
                    <li>Website Untuk Memenuhi Ujian Tengah Semester Ganjil</li>
                    <li>Dosen Pengampu : Insan Taufik, M. Kom</li>
                </ul>
            </div>
        </div>
        <div class="footer">Copyright &copy; Martin Hans</div>
    </div>
</body>
</html>