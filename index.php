<?php 
include('kontakto.php'); 
include('postprocess.php');
?>
<html manifest="manifest.appcache">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/content.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/dropdown.css">
        <link rel="stylesheet" href="CSS/curiosities.css">
        <link rel="stylesheet" href="CSS/gallery.css">
        <link rel="stylesheet" href="CSS/puzzle.css">


        <title>Classical-Art</title>
    
    </head>
    
    <body>
        
        <div class="top-bar">
            
            <div id="rectangle"></div>
            <div id="contact"><p>Tel: 11111 2222222222 | Mail: <a href="mailto:info@classicalart.com"/>info@classicalart.com</p></a></div>

            <div class="search-bar">
                <?php 
                if(!isset($_SESSION["loggedin"]))
                {
                    echo '<a href="login.php"><button>Login</button></a>';
                    echo '<a href="register.php"><button>Register</button></a>';

                }
                else
                {
                    echo '<span>Welcome, youre logged in as <b>'. $_SESSION["username"].'</b></span>';
                    echo '<a href="logout.php"><button>Logout</button></a>';

                }
                ?>
                <form>
                    <input type="text" placeholder="Search" name="Search">
                    <img src="Fotot/Search-button.png"/>
                </form>

            </div>

        </div>
    
        <header>
            
            <div class="logo">
                <h1>Classical Art</h1>
                <h4>Free PSD Website Template</h4>
            </div>
            
            <div class="menu">
                <ul class="nav">
                    <li><a id="v" href="index.php" style="color: #1194B2">HOME</a></li>
                    <li><a id="v" href="forma.php">BUY TICKETS</a></li>
                    <li><a id="v" href="curiosities.php">CURIOSITIES</a></li>
                    <li><a id="v" href="#">DROPDOWN</a>
                        <ul class="sub-menu">
                            <li><a href="loja.php">GAME</a></li>
                            <li><a href="tabela/tabela.html">ARTISTS</a></li>
                        </ul>    
                    </li>
                    <li><a id="v" href="gallery.php">GALLERY</a></li>
                    <li><a href="posts.php">POST</a></li>
                </ul>
            </div>
            
        </header>
    
     <div class="image-swap">
            <div class="small-image-container">
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM1.jpg"   width="60" height="60" alt="Foto1"
                    onclick="document.swap.src='Fotot/IM1.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM2.jpg"   width="60" height="60" alt="Foto2" 
                    onclick="document.swap.src='Fotot/IM2.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM3.jpg"   width="60" height="60" alt="Foto3" 
                    onclick="document.swap.src='Fotot/IM3.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM4.jpg"   width="60" height="60" alt="Foto4"
                    onclick="document.swap.src='Fotot/IM4.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM5.jpg"   width="60" height="60" alt="Foto5"
                    onclick="document.swap.src='Fotot/IM5.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM6.jpg"   width="60" height="60" alt="Foto6"
                    onclick="document.swap.src='Fotot/IM6.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM7.jpg"   width="60" height="60" alt="Foto7"
                    onclick="document.swap.src='Fotot/IM7.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM8.jpg"   width="60" height="60" alt="Foto8"
                    onclick="document.swap.src='Fotot/IM8.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM9.jpg"   width="60" height="60" alt="Foto9"
                    onclick="document.swap.src='Fotot/IM9.jpg';"></div></div>
                <div class="small-wrap"><div id="small-image"><img src="Fotot/IM10.jpg"  width="60" height="60" alt="Foto10"
                    onclick="document.swap.src='Fotot/IM10.jpg';"></div></div>
            </div>
         
            <div class="big-image-container">
                <div class="big-wrap"><div id="big-image"><img src="Fotot/IM1.jpg"  width="770" height="386" alt="Image-Swap" name="swap"/><br><br><br></div></div>
            </div>
        </div>
    
<!--PJESA 2 : SHOUT , CONTENT -->
<div class="main">

<div class="slideshow-quotes">
            <span class="fadingline"> </span>

            <div class="quotes">
                <q>Art is the daughter of freedom.</q>
                <p class="autori">- Friedrich Schiller</p>
            </div>

            <div class="quotes">
                <q>In art, the hand can never execute
                    anything higher than the heart can imagine.</q>
                <p class="autori">- Ralph Waldo Emerson</p>
            </div>

            <div class="quotes">
                <q>Every child is an artist.
                    The problem is how to remain an artist once we grow up.</q>
                <p class="autori">- Pablo Picasso</p>
            </div>

            <div class="quotes">
                <q>Art enables us to find ourselves and lose ourselves at the same time.</q>
                <p class="autori">- Thomas Merton</p>
            </div>

            <div class="quotes">
                <q>What art offers is space -
                    a certain breathing room for the spirit.</q>
                <p class="autori">- John Updike</p>
            </div>

                    <a class="next" onclick="plusSlides(1)"> <img src="Fotot/next.png" alt=""></a>
                    <a class="prev" onclick="plusSlides(-1)"> <img src="Fotot/previous.png" alt=""></a>

            <span class="fadingline"> </span>
</div>

<div class="content">

    <div id="block1">
        <h3>What is classical art ?</h3>
  Classical art is the art which is associated with the classical period. In the Classical period there was a revolution in Greek statuary, usually associated with the introduction of democracy and the end of the aristocratic culture associated with the kouroi. The Classical period saw changes in the style and function of sculpture. Poses became more naturalistic and the technical skill of Greek sculptors in depicting the human form in a variety of poses greatly increased. From about 500 BC statues began to depict real people. 
          

        <br><a href="https://www.quora.com/What-is-classical-art" class="rmlink">Read More »</a>
    </div>


    <div id="block2">
      <h3>Greek Art</h3>
 In the early 5th century Greek artists began consciously to attempt to render human and animal forms realistically. This entailed careful observation of the model as well as understanding the mechanics of anatomy - how a body adjusts to a pose which is not stiffly frontal but with the weight shifted to one side of the body, and how a body behaves in violent motion.<!--kom shtu tekst -->


        <br><a href="https://www.quora.com/What-is-classical-art" class="rmlink">Read More »</a>
      </div>


    <div id="block3">
      <h3>Early Classical Art</h3>
        The new style is best expressed in the Parthenon marbles of about 450-435 BC but there was a preceding style of some importance - the Early Classical, sometimes called the Severe Style, which is exemplified in the sculptures for the Temple of Zeus at Olympia. The successors to the archaic kouroi, mainly athlete figures, are thus regularly shown 'at ease', one leg relaxed.<!--kom shtu tekst -->
        <br><a href="https://www.quora.com/What-is-classical-art" class="rmlink">Read More »</a>
      </div>

</div>
</div>
    
<!-- PJESA 3 : FOOTER , COPYRIGHT -->
    
<footer>
    
  <div class="bllok">
    <p class="FROM_THE_BLOG">FROM THE BLOG</p>
    <p class="Blog_Post_Title"><?php echo $_SESSION["subjecti2"]; ?></p>
    <p class="Posted_by_Admin">Posted by <?php echo $_SESSION["username2"]; ?> on <?php echo $_SESSION["created_at"]; ?></p>
    <p class="blog_post"><?php echo $_SESSION["posti2"]; ?></p>
    <p class="Read"><a href="https://www.beazley.ox.ac.uk/sculpture/styles/classical.htm">Read More » </a></p>
      
  </div>
    
 </div>
            <div class="bllok">
            <p class="Quick_Links">QUICK LINKS</p>
            <p class="Lorem"><a href="https://en.wikipedia.org/wiki/Category:Classical_art">» Wikipedia: Classical Art</p></a>
            <p class="Lorem"><a href="https://en.wikipedia.org/wiki/Ancient_Greek_art">»  Ancient Greek Art</p></a>
            <p class="Lorem"><a href="https://www.pinterest.com/natalyapall/classical-art/">»  Classical Art Photos</p></a>
            <p class="Lorem"><a href="https://www.theguardian.com/artanddesign/jonathanjonesblog/2014/aug/14/top-10-ancient-greek-artworks-jonathan-jones">»  Top 10 Ancient Greek ArtWorks</p></a>
            <p class="Lorem"><a href="http://www.keralaculture.org/classical-arts/25">»  Classical Art Forms</p></a>
            <p class="Lorem"><a href="https://en.wikipedia.org/wiki/Classicism">»  Wikipedia : Classicism</p></a>
            <p class="Lorem"><a href="http://www.interlude.hk/front/the-classical-age-in-music-and-the-arts/">»  The Classical Age in Music and Arts</p></a>
            
            </div>

            <div class="bllok">
            <p class="Latest_Tweets">LATEST TWEETS</p>
            <p class="tweet"><span class="namehere"><a href="https://twitter.com/erbliniberisha"> @Erblin </a></span> The purpose of art is washing the dust of daily life out off our souls. 1 day ago</p>
            <p class="tweet"><span class="namehere"><a href="https://twitter.com/erbliniberisha"> @Erblin </a></span> Classical Art stands for form. Romantic Art stands for content. 1 day ago</p>
            </div>

            <div class="bllok">
                <p class="contact_us">CONTACT US</p>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="email" name="email" placeholder="Email"><br>
                    <input type="message" name="message" placeholder="Message"><br>
                    <input type="submit" name="submit" value="submit">
                    <?php 
                        include 'kontakto.php';
                        if($msg != ''): ?>
                            <div class="alert">
                                <?php echo $msg ?>
                            </div>
                    <?php endif; ?>
                </form>
            </div>

            </footer>
    
    <div class="copyright">
                <p>Copyright &copy; 2012 Domain Name - All rights reserved <span class="template">Template by OS templates</span></p>
            </div>

<!-- FUNKSIONI PER SLIDE -->
    <script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("quotes");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>
