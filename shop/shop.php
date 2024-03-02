<?php 

    $con = mysqli_connect("localhost:3306","root","");
    if(!$con){
        die('Could not connect: '.mysqli_error($con));
    }
    echo "Connection Success<br>";
    
    mysqli_select_db($con,"studioK");

    $count_query = "SELECT COUNT(*) AS row_count FROM booking";
    $result = mysqli_query($con, $count_query);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $row_count = $row['row_count'];
    } else {
        $row_count = 0;
    }
    echo $row_count;

    mysqli_close($con);

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio K</title>
    <link type="text/css" rel="stylesheet" href="./welcome_header.css">
    <link type="text/css" rel="stylesheet" href="./shop.css">
    <link type="text/css" rel="stylesheet" href="./booking.css">
    <script src="./scripts.js"></script>
       
</head>
<body>
    <div id="main_title">
        <img src="./Images/Studio k.jpg" alt="a sample" height="50px">
        <h4>STUDIO K <b>MUSIC</b> STUDIO PRODUCTION AND SHOP</h4>
    </div>

    <div class="navbar">
        <a href="#">Home</a>
        <a href="#recordings">Recordings</a>
        <a href="#studios">Studios</a>
        <a href="#productions">Productions</a>
        <a href="#Artists">Artists</a>
        <a href="#Booknow">Book Now</a>
        <a href="../Our_Studio/ourstudio.html">Website</a>
        
    </div>


    <section>

        <div id="headviddeo">
            <video autoplay muted loop id="video1">
                <source src="./Vedios/video.mp4" type="video/mp4" >
            </video>

        </div>
        
        <h1 id="eff">
            <span class="an">W</span>
            <span class="an">E</span>
            <span class="an">L</span>
            <span class="an">C</span>
            <span class="an">O</span>
            <span class="an">M</span>
            <span class="an">E</span>
        </h1>
    </section>

    
    <div id="mid_text">

        <h1 id="Welcome">Our music studio Stores !</h1>
        <h3 style="font-size:15px;;">Please connect us about dates for your bookings</h3><br>
        <button class="round-button"><a href="../Contact_Us/ContactPage.html" style="text-decoration: none;">Contact Us!</a></button>
    </div>

    <script>
            //For Recording
            document.addEventListener("DOMContentLoaded", function () {
            // Function to handle smooth scrolling
                function scrollToElement(targetElement) {
                    window.scrollTo({
                    top: targetElement.offsetTop - 200, // Adjust the value as needed
                    behavior: "smooth"
                    });
                 }

            // Add click event listener to the "WELCOME" link
            const welcomeLink = document.querySelector("a[href='#recordings']");
            if (welcomeLink) {
                welcomeLink.addEventListener("click", function (e) {
                    e.preventDefault(); // Prevent the default link behavior
                    const targetElement = document.querySelector(this.getAttribute("href"));
                    if (targetElement) {
                        scrollToElement(targetElement);
                    }
                });
            }
        });

    </script>
   
    <h1 id="recordings" class="title_pro" style="margin-top: 150px;">RECORDINGS</h1>

    <div class="rec_box">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/images.jpeg">
                        <h3>Vocal Recording</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.10000.00<br><br>Record your vocals with an engineer at Studio K with. We will edit and mix the performance and you will get a finished song, ready for release. </p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/songrec.jpeg">
                        <h3>Song Recording</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.15000.00<br><br>Let us record you singing and playing guitar/piano in our live room through our world class microphones and analog hardware.</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/guitarrec.jpeg">
                        <h3>Guitar Recording</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.15000.00<br><br>Play your guitar through any of the amps in our amp-collection in the live room. Get world-class recordings with our mics and hardware equipment</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/pianorec.jpeg">
                        <h3>Piano Recording</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.15000.00<br><br>Play a piano through our grand piano in the live room. Get world-class recordings with our mics and hardware equipment</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //For Recording
        document.addEventListener("DOMContentLoaded", function () {
        // Function to handle smooth scrolling
            function scrollToElement(targetElement) {
                window.scrollTo({
                top: targetElement.offsetTop - 200, // Adjust the value as needed
                behavior: "smooth"
                });
             }

        // Add click event listener to the "WELCOME" link
        const welcomeLink = document.querySelector("a[href='#studios']");
        if (welcomeLink) {
            welcomeLink.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent the default link behavior
                const targetElement = document.querySelector(this.getAttribute("href"));
                if (targetElement) {
                    scrollToElement(targetElement);
                }
            });
        }
    });

    </script>

    <h1 id="studios" class="title_pro">STUDIOS</h1>

    <div class="rec_box">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/soundstu.jpeg">
                        <h3>Sound Studio</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>For 1 hour Rs.5000.00<br><br>This is our main recording and mix facility. It has everything you would expect from a classic analog studio, combined with the latest technology and audio connections to all rooms in the building</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/voicerecstu.jpeg">
                        <h3>Recording Studio</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>For 1 hour Rs.4000.00<br><br>This is our voice recording studio.This room has a window into the downstairs vocal booth and is perfect for any voice-over or dubbing session.</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/practisestu.jpeg">
                        <h3>Sound Practise Studio</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>For 1 hour Rs.5000.00<br><br>This is our Sound practise studio.This room has a many equipments to practise including drums.</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/vediostu.jpeg">
                        <h3>Vedio Studio</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>For 1 hour Rs.4000.00<br><br>This is our vedio studio and there are many modern equipments to make your vedios more quality and attaractive</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //For Recording
        document.addEventListener("DOMContentLoaded", function () {
        // Function to handle smooth scrolling
            function scrollToElement(targetElement) {
                window.scrollTo({
                top: targetElement.offsetTop - 200, // Adjust the value as needed
                behavior: "smooth"
                });
             }

        // Add click event listener to the "WELCOME" link
        const welcomeLink = document.querySelector("a[href='#productions']");
        if (welcomeLink) {
            welcomeLink.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent the default link behavior
                const targetElement = document.querySelector(this.getAttribute("href"));
                if (targetElement) {
                    scrollToElement(targetElement);
                }
            });
        }
    });

    </script>

    <h1 id="productions" class="title_pro">PRODUCTIONS</h1>

    <div class="rec_box">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/mixing.jpeg">
                        <h3>Mixing</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.8000.00<br><br>Bring your mix to the next level with our mastering service. We will perfect your sound, ensuring your track is polished and ready for release with the highest standard of audio quality</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/mastering.jpeg">
                        <h3>Master</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.15000.00<br><br>Bring your mix to the next level mastering service. We will perfect your sound, ensuring your track is polished and ready for release.</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/vocalcovers.jpeg">
                        <h3>Vocal Covers</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.10000.00<br><br>You can do a very beautiful covers with our modern equipments and deliver a quality product</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/instrumentalcovers.jpeg">
                        <h3>Instrumental Covers</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.10000.00<br><br>You can do a very beautiful instrumental covers with our modern equipments and deliver a quality product</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //For Recording
        document.addEventListener("DOMContentLoaded", function () {
        // Function to handle smooth scrolling
            function scrollToElement(targetElement) {
                window.scrollTo({
                top: targetElement.offsetTop - 200, // Adjust the value as needed
                behavior: "smooth"
                });
             }

        // Add click event listener to the "WELCOME" link
        const welcomeLink = document.querySelector("a[href='#Artists']");
        if (welcomeLink) {
            welcomeLink.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent the default link behavior
                const targetElement = document.querySelector(this.getAttribute("href"));
                if (targetElement) {
                    scrollToElement(targetElement);
                }
            });
        }
    });

    </script>

    <h1 id="Artists" class="title_pro">Artists</h1>

    <div class="rec_box">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/dilshan.jpg">
                        <h3>Dilshan Priyankara</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.15000.00<br><br>Dilshan Priyankara is Well Known Keyboardist at B-ONE Band and 15 year experience in the field</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/dinesh.jpeg">
                        <h3>Dinesh Subasinha</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.25000.00<br><br>Dinesh Subasinha is Multitalented player and his specific instrument is violin and he conduct many groups all over the srilanka</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/dileepa.jpg">
                        <h3>Dileepa Mangala</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.15000.00<br><br>Dileepa Mangala is a current Keyboardist in Mariance music band and he is a very well player</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="./Images/dilan.jpg">
                        <h3>Dilan Priyankara</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Rs.10000.00<br><br>Dilan Priyanka is best base guitarist and he had 10 year experience in the music industry</p>
                            <a href="#Booknow">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //For Recording
        document.addEventListener("DOMContentLoaded", function () {
        // Function to handle smooth scrolling
            function scrollToElement(targetElement) {
                window.scrollTo({
                top: targetElement.offsetTop - 200, // Adjust the value as needed
                behavior: "smooth"
                });
             }

        // Add click event listener to the "WELCOME" link
        const welcomeLink = document.querySelector("a[href='#Booknow']");
        if (welcomeLink) {
            welcomeLink.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent the default link behavior
                const targetElement = document.querySelector(this.getAttribute("href"));
                if (targetElement) {
                    scrollToElement(targetElement);
                }
            });
        }
    });

    </script>

    <h1 id="Booknow" class="title_pro">Book Now</h1>

    <script>
        function validateForm(){
            var phonejs=document.getElementById("phone").value;
            
            if(!(phonejs.length == 10)){
                alert("phone number should not exceed 10 digits");
                return false;
            }
            return true;
        }   
    </script>

    <div id="booking_form_div" align="center" style="margin-top: 80px;">
        <form action="booking.php" method="post" onsubmit="return validateForm();">
            <table id="table_form"  style="color:white;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: 18px;width: 700px;height: 300px;padding:30px;">
                <tr>
                    <td colspan="2" align="center" style="height: 20px; padding-bottom: 15px;"><b>Fill Up your details we will reach you soon!</b><br></td> 
                </tr>
                <tr>
                    <td width="350px">Name :</td>
                    <td width="350px"><input type="text" name="fname" style="width: 300px; height:25px;" required></td>
                </tr>

                <tr>
                    <td>Telephone :</td>
                    <td><input type="text" id="phone" name="Telephone" style="width: 300px; height:25px;" required></td>
                </tr>

                <tr>
                    <td>What Do you like to Booking :</td>
                    <td>
                        <select id="firstSelect" name="category" onchange="updateSecondSelect(this)" style="width: 200px; height: 25px;">
                            <option value="Recordins">Recordins</option>
                            <option value="Studios">Studios</option>
                            <option value="Productions">Productions</option>
                            <option value="Artists">Artists</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Select one of these :</td>
                    <td>
                        <select id="secondSelect" name="need" style="width: 200px; height: 25px;">
                            <!-- Options for the second select will be populated dynamically -->
                            <option value="Vocal Recording">Vocal Recording</option>
                            <option value="Song Recording">Song Recording</option>
                            <option value="Guitar Recording">Guitar Recording</option>
                            <option value="Piano Recording">Piano Recording</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" style="width: 100px; height: 25px;"></td>
                </tr>
                
            </table>
        </form>
    </div>

    <div style="color:white; text-align:center;  " id="row-count">
        <p style="font-size:50px;">Total Number of Bookings We Got:</p>
        <p style=" font-size:100px;margin-top:0"> <?php echo $row_count; ?></p>
    </div>

    <div id="navbar-bottom">
        <table id="abottom" cellspacing="20px">
            <tr id="bottom-head">
                <td style="width: 300px;">WELCOME</td>
                <td style="width: 300px;">OUR STUDIO</td>
                <td style="width: 300px;">WHAT WE DO</td>
                <td style="width: 300px;">SHOP</td>
            </tr>
            <tr>
                <td align="center" id="welcome-td" class="data_td">About<br>Writing Camps<br>Studio-K Music Live<br>Blog<br>Privacy Policy</td>
                <td align="center" id="ourstudio-td" class="data_td">Recordings<br>Mixing/Mastering<br>Add Post-Production<br>Voice recordings<br>Publishing<br>Partners</td>
                <td class="data_td"></td>
                <td align="center" id="shop-td" class="data_td">Recordings<br>Studios<br>Productions<br>Artists<br>Bookings</td>
            </tr>
            <tr>
                <td>2023 Studio-K Music Studios</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>



    

</body>
</html>
