<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Sakawarga</title>
</head>
<body>
    @include ('tema._nav')
    <div class="cover">

        <div class="information">
            <h1>-</h1>
            <h3>Kaseduluran</h3>
            <h2>Menehi Rasa Karembong</h2>
            <h1> <span>ꦱꦲꦺꦏꦼꦠ꧀ꦱꦶꦒꦼꦱꦒꦼ</span> </h1>
            <h2> <span><a href="donate.blade.php" target="blank"><button>DONATE</button></a></span> </h2>
            <h1>-</h1>
        </div>


    </div>

    <div class="explore" id="explore"></div>

    <div class="about">
        <div class="imgcontanner">
            <div class="aboutimg"></div>
        </div>
        <div class="aboutcontent">
            <h5>_</h5>
            <h1>Kenapa Donasi?</h1>
            <p> Banyak orang merasa empati terhadap orang-orang yang kurang beruntung atau mengalami kesulitan, dan mereka ingin membantu mereka secara finansial atau dengan memberikan dukungan moral.</p>
            <p>Banyak orang meyakini bahwa pendidikan adalah kunci untuk mengatasi kemiskinan dan memajukan masyarakat. Mereka mendonasikan uang untuk mendukung program pendidikan, beasiswa, atau pembangunan sekolah.</p>
            <a href="donate.html" target="black">DONATE</a>
            <br>
            <br>
            <h5>_</h5>

        </div>
    </div>

    <!-- ----------------------------------  Service -------------------------------------- -->
    <div class="service" id="service">

        <h5>Layanan</h5>
        <h1>Layanan Kami</h1>

        <div class="details">

            <div class="info">

                <div class="logo"><i class="fas fa-book-reader"></i></div>
                <p id="head">yang kita lakukan</p>
                <p>Kita mencoba membantu saudara yang membutuhkan.</p>

            </div>

            <div class="info" data-aos="fade-up">

                <div class="logo"><i class="fas fa-book-open"></i></div>
                <p id="head">Bagaimana Caranya?</p>
                <p>Dengan membuat website untuk saling membantu.</p>
            </div>

            <div class="info" data-aos="fade-up">

                <div class="logo"><i class="fas fa-book"></i></div>
                <p id="head">Membuat Perbedaan</p>
                <p>Dapat membantu banyak orang dengan cara yang kita belajari yaitu dengan digital</p>

            </div>

            <div class="info" data-aos="fade-up">

                <div class="logo"><i class="fas fa-chart-line"></i></div>
                <p id="head">Apa Manfaatnya?</p>
                <p>Dengan website ini diharapkan dapat memudahkan saudara kita yang ingin membantu.</p>

            </div>

        </div>

    </div>

    
    <!---------------------------- contact ------------------- -->
    
    <div class="contact" id="contact">
        <h1>HUBUNGI SAYA</h1>
        <br>
        <div class="contactcontanner">
            
            <div class="contanner">
                <div class="heading">
                    <div class="icon"><i class="far fa-map"></i></div>
                    <div class="info">
                        <p>Alamat : </p>
                        <p id="contactinfo">JL. Serayu No.84, Pandean, Taman, Pandean, Kec.Taman, Kota Madiun, Jawa Timur 63133</p>
                    </div>
                </div>
                
                <div class="heading">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="info">
                        <p>Nomor : </p>
                        <p id="contactinfo">(0351) 452970 </p>
                    </div>
                </div>
                
                <div class="heading">
                    <div class="icon"><i class="far fa-envelope"></i></div>
                    <div class="info">
                        <p>Email : </p>
                        <p id="contactinfo">@gmail.com</p>
                    </div>
                </div>
            </div>
            
            <div class="messageform">
                <div class="form">
                    <form action="" method="POST">
                        
                        <style>
                            ::placeholder {color: rgba(255, 255, 255, 0.7);}
                        </style>
    
                        <input type="text" name="name" placeholder="NAMA" required>
                        <input type="email" name="email" placeholder="EMAIL" required>
                        <input type="text" name="subject" placeholder="SUBJEK" required>
                        <textarea type="message" name="message" id="inputbox"  cols="30" rows="5" placeholder="PESAN" required></textarea>
                        <button type="submit">KIRIM PESAN</button>
    
                    </form>
                </div>
            </div>

        </div>          
    </div>

    <!-- <div class="topspace"></div> -->
    <footer>
        <p>Copyright @Sakawarga  </p>
    </footer>
    <!-- scripts  -->
    <script>
         @section('tema._nav')
        // drop down menu script
        var menu = document.getElementById("menu");
        menu.style.maxHeight = "0px";
        function togglemenu() {
            if (menu.style.maxHeight == "0px") {
                menu.style.maxHeight = "390px";
            }
            else {
                menu.style.maxHeight = "0px";
            }
        }

    </script>

</body>
</html>