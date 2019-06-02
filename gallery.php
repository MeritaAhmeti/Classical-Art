<?php
session_start();
?>
<html manifest="manifest.appcache">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
        <link rel="stylesheet" href="CSS/gallery.css">
        <link rel="stylesheet" href="CSS/dropdown.css">
        <link rel="stylesheet" href="CSS/header.css">

        <title>Gallery</title>
	                 <script>
        function showHint(str){
            if(str.length == 0){
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            else
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET","gethint.php?q="+str,true);
                xmlhttp.send();
            }
        }

    </script>
	        <style>
    .tiketa
    {
        margin-left: 310px;
        margin-bottom: 10px;
        padding:25px;
        font-family: "Times New Roman", Times, serif;
        float:left;
        background-color: #bfbfbf;
        border: 3px solid #808080;
        border-radius: 8px; 
       
    }
</style>
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
                    echo '<span>Welcome, you are logged in as <b>'. $_SESSION["username"].'</b></span>';
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
                    <li><a id="v" href="index.php">HOME</a></li>
                    <li><a id="v" href="forma.php">BUY TICKETS</a></li>
                    <li><a id="v" href="curiosities.php">CURIOSITIES</a></li>
                    <li><a id="v" href="#">DROPDOWN</a>
                        <ul class="sub-menu">
                            <li><a href="loja.php">GAME</a></li>
                            <li><a href="artists.php">ARTISTS</a></li>
                            <li><a href="posts.php">POST</a></li>
                            <li><a href="admincp.php">ADMINCP</a></li>
                        </ul>    
                    </li>
                    <li><a href="gallery.php" style="color: #1194B2">GALLERY</a></li>
                </ul>
            </div>
        </header>
            <div class="content1">
            	<span class="fadingline2"></span>
                <div id="desc">
                    <h1>The World's Best Cities for Arts and Culture</h1>
                    <p>We asked our readers to rate their favorite cities in the world for arts and culture. These cities are centers of music and dance, museums, and theater. They are where iconic design and classical concertos were born, and where the latest in creative experimentation is happening seemingly on every corner. Here are the best cities in the world for soaking in culture and finding inspiration in the arts, starting with the top spot.</p>
            <span class="fadingline2"></span>
			       <h4 style="color: #5c5c5c;font-size:25px;  font-family: Georgia Regular;font-style: italic;">Facts about Classical Art!</h4>
                    <p><b> Let's see an array about classical art.</b></br>
                    <?php
                    $str = "Roman Statues were made with detachable heads";
                    print_r (explode(" ",$str));
                    ?> </br>
                    <b>Now let's take that array and form it in a full sentence.</b></br>
                    <?php
                    $arr = array('Roman','Statues','were','made','with','detachable','heads');
                    echo implode(" ",$arr);
                    ?> </br>
                    <?php
                    $number = 12;
                    $str = "years! Only the lips!";
                    printf("Painting the Mona Lisa’s lips took Leonardo da Vinci %u %s ",$number,$str);
                    ?><br>
                    <?php
                    echo("New brain research showed that creativity,")
                    ?>                    
                    <?php
                   echo substr("And social development and self-worth, are promoted through art.",4);
                    ?>
            <span class="fadingline2"></span>
                    <p>Share:</p><br>
                    <a href="https://outlook.live.com/owa/"><img src="Fotot/email.png" alt="Email"/></a>
                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="Fotot/facebook.png" alt="Facebook"/></a>
                    <a href="https://twitter.com/"><img src="Fotot/twitter.png" alt="Twitter"/></a>
                </div>
            </div>


          <div class="content2">
          	<div id="desc1">
          		<h3>For more information click the images!</h3>
          	</div>
          </div>

               <div class="container">
                <div class="gallery">
                 <a target="_blank" href="qytetet/Florence.html">
                 <img src="Fotot/Florence.jpg" alt="Florence" width="300" height="300" >
                 </a>
                 <div class="pershkrimi">Florence,Italy</div>
                 </div>
                 

                
                 <div class="gallery">
                 <a target="_blank" href="qytetet/Rome.html">
                 <img src="Fotot/Rome.jpg" alt="Rome" width="300" height="300" >
                 </a>
                 <div class="pershkrimi">Rome,Italy</div>
                 </div>
                

                <div class="gallery">
                <a target="_blank" href="qytetet/Paris.html">
                <img src="Fotot/Paris.jpg" alt="Paris" width="300" height="300" >
                </a>
                <div class="pershkrimi">Paris,France</div>
                </div>
              

                <div class="container">
                 <div class="gallery">
                 <a target="_blank" href="qytetet/Athens.html">
                 <img src="Fotot/Athens.jpg" alt="Athens" width="300" height="300" >
                 </a>
                 <div class="pershkrimi">Athens,Greece</div>
                 </div>
                

                
                <div class="gallery">
                <a target="_blank" href="qytetet/Barcelona.html">
                <img src="Fotot/Barcelona.jpg" alt="Barcelona" width="300" height="300" >
                </a>
                <div class="pershkrimi">Barcelona,Spain</div>
                </div>
              

                
                <div class="gallery">
                <a target="_blank" href="qytetet/Istanbul.html">
                <img src="Fotot/Istanbul.jpg" alt="Istanbul" width="300" height="300" >
                </a>
                <div class="pershkrimi">Istanbul,Turkey</div>
                </div>
             
                <div class="gallery">
                <a target="_blank" href="qytetet/Santa Fe.html">
                <img src="Fotot/Santa Fe.jpg" alt="Santa Fe" width="300" height="300" >
                </a>
                <div class="pershkrimi">Santa Fe,New Mexico</div>
                </div>
                

                <div class="gallery">
                <a target="_blank" href="qytetet/Venice.html">
                <img src="Fotot/Venice.jpg" alt="Venice" width="300" height="300" >
                </a>
                <div class="pershkrimi">Venice,Italy</div>
                </div>


                <div class="gallery">
                <a target="_blank" href="qytetet/NewYork.html">
                <img src="Fotot/NewYork.jpg" alt="New York" width="300" height="300" >
                </a>
                <div class="pershkrimi">New York,USA</div>
                </div>
            </div>
        </div>
	  <b><p style="display:inline-block; margin-left:310px ;">Please write down the city to see if it is part of most popular cities for arts and culture?</p></b>
        <form>
        <p style="display:inline-block; margin-left:310px ;"> City: 
        <input style="display:inline-block;margin-right:100px; margin-bottom: 10px;" type="text" onkeyup="showHint(this.value)"><br>
		<p style=" margin-left:310px"><b>Suggestions: </b><span id="txtHint"></span></p>
        </form>
  <div class="tiketa">
        <?php
        $cities = array
        (
          array("<b>Florence:</b>",22,18),
          array("<b>Rome:</b>",15,13),
          array("<b>Paris:</b>",5,2),
          array("<b>Athens:</b>",10,0),
          array("<b>Barcelona:</b>",17,4),
          array("<b>Istanbul:</b>",14,2),
          array("<b>Santa Fe:</b>",9,3),
          array("<b>Venice:</b>",30,27),
          array("<b>New York:</b>",40,40)
         );
  
         echo $cities[0][0]."  Tickets: ".$cities[0][1].", sold: ".$cities[0][2].".<br>";
         echo $cities[1][0]."  Tickets: ".$cities[1][1].", sold: ".$cities[1][2].".<br>";
         echo $cities[2][0]."  Tickets: ".$cities[2][1].", sold: ".$cities[2][2].".<br>";
         echo $cities[3][0]."  Tickets: ".$cities[3][1].", sold: ".$cities[3][2].".<br>";
         echo $cities[4][0]."  Tickets: ".$cities[4][1].", sold: ".$cities[4][2].".<br>";
         echo $cities[5][0]."  Tickets: ".$cities[5][1].", sold: ".$cities[5][2].".<br>";
         echo $cities[6][0]."  Tickets: ".$cities[6][1].", sold: ".$cities[6][2].".<br>";
         echo $cities[7][0]."  Tickets: ".$cities[7][1].", sold: ".$cities[7][2].".<br>";
         echo $cities[8][0]."  Tickets: ".$cities[8][1].", sold: ".$cities[8][2].".<br>";
        ?>
       <br>
        <button style="margin-left:16px;"><a href="forma.php" target="_blank" style="text-decoration: none">BUY TICKETS HERE!</a></button>
       <br>
       </div>
       <img src="Fotot/tiketa.jpg" alt="Tiketa"  width="421" style="margin-left: 90px; margin-top:-2px; border: 1px solid #bfbfbf;  border-radius: 4px; padding: 8px;">
<footer>
	 <div class="copyright">
                <p>Copyright &copy; 2012 Domain Name - All rights reserved <span class="template">Template by OS templates</span></p>
            </div>
        </footer>

</body>
</html>
