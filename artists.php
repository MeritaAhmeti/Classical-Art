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
                            <li><a href="artists.php">ARTISTS</a></li>
                        </ul>    
                    </li>
                    <li><a id="v" href="gallery.php">GALLERY</a></li>
                    <li><a href="posts.php">POST</a></li>
                </ul>
            </div>
            
        </header>
        <h3 style=" margin-top:10px;margin-left:auto; margin-right:auto;text-align:center ;color: #5c5c5c; font-size:35px; font-style:italic;">Top artists of all time</h3>
        <div class="container">
                <div class="gallery">
                    <img src="Fotot/04.jpg" alt="LV" width="300" height="300" >
                 <div class="pershkrimi">
                   <?php
                  class Artisti_1 {
                  private $emri;
                  private $mbiemri;
        
                  public function __get($name) 
                  {
                  return $this->$name;
                 }
                  public function __set($name, $value) 
                  {
                  $this->$name = $value;
                 }
               }
                  $Artisti1 = new Artisti_1();
                  $Artisti1->emri = 'Leonardo';
                  $Artisti1->mbiemri = 'Da Vinci';
                  echo $Artisti1->emri . " " . $Artisti1->mbiemri;
                  echo '<br>1452 - 1519';
            ?>
                 </div>
             </div>


                  <div class="gallery">
                 <img src="Fotot/10.jpg" alt="VVG" width="300" height="300" >
                 <div class="pershkrimi">
                             <?php
                  class Artisti_2 {
                  private $emri;
                  private $mbiemri;
        
                  public function __get($name) 
                  {
                  return $this->$name;
                 }
                  public function __set($name, $value) 
                  {
                  $this->$name = $value;
                 }
               }
                  $Artisti2 = new Artisti_2();
                  $Artisti2->emri = 'Vincent';
                  $Artisti2->mbiemri = ' Van Gogh';
                  echo $Artisti2->emri . " " . $Artisti2->mbiemri;
                  echo '<br>1853 - 1890';
            ?>
                 </div>
                 </div>

                 <div class="gallery">
                 <img src="Fotot/06.jpg" alt="PB" width="300" height="300" >
                 <div class="pershkrimi">
                             <?php
                  class Artisti_3 {
                  private $emri;
                  private $mbiemri;
        
                  public function __get($name) 
                  {
                  return $this->$name;
                 }
                  public function __set($name, $value) 
                  {
                  $this->$name = $value;
                 }
               }
                  $Artisti3 = new Artisti_3();
                  $Artisti3->emri = 'Pablo ';
                  $Artisti3->mbiemri = '  Picasso';
                  echo $Artisti3->emri . " " . $Artisti3->mbiemri;
                  echo '<br>1881 - 1973';
            ?>
                 </div>
                 </div>


                 </div>
             </div>

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

</body>
</html>