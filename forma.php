<?php 
include('forma-orders.php');
session_start();
?>

<html manifest="manifest.appcache">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
        <link rel="stylesheet" href="CSS/forma.css">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/dropdown.css">
        <link rel="stylesheet" href="CSS/footer.css">
       
        <title>Classical-Art</title>
    
    <style type="text/css">
    body {
    background-image: url('Fotot/foto1.jpg');
}
    </style>

    </head>
    <body>
        
<!-- PJESA 1 : HEADER --> 
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
                <h1 class="klasik">Classical Art</h1>
                <h4 class="free">Free PSD Website Template</h4>
            </div>
            <div class="menu">
                <ul class="nav">
                    <li><a id="v" href="index.php">HOME</a></li>
                    <li><a id="v" href="#" style="color: #1194B2">BUY TICKETS</a></li>
                    <li><a id="v" href="curiosities.php">CURIOSITIES</a></li>
                    <li><a id="v" href="#">DROPDOWN</a>
                        <ul class="sub-menu">
                            <li><a href="puzzle.html">PUZZLE</a></li>
                            <li><a href="artists.php">ARTISTS</a></li>
                            <li><a href="posts.php">POST</a></li>
                        </ul>    
                    </li>
                    <li><a href="gallery.php">GALLERY</a></li>
                </ul>
            </div>
        </header>
        
        
<!-- PJESA 2 : FORMA -->
<div class="mforma">
    <h1>Register Here To Buy a GLEEN BROWN  Art Gallery Ticket</h1>  
    <div class="reg">
        <form id="reg" method="post" oninput="x.value=parseInt(tk.value)*parseInt(tp.value)" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Please fill out all required fields</h2>
            
            <label>First Name :</label><br>
            <input type="text" name="firstname" placeholder="First Name" id="name" autofocus >
            <br><br>
            
            <label>Last Name :</label><br>
            <input type="text" name="lastname" placeholder="Last Name" id="name">
            <br><br>
            
            <label>Date Of Birth :</label><br>
            <input type="date" name="date" id="name">
            <br><br>
            
            <label>Gender :</label><br>
            <input type="radio" name="gender" value="male" id="ma" checked><span id="ma">Male</span> 
            <input type="radio" name="gender" value="female" id="ma"><span id="ma">Female</span>
            <br><br>
            
            
            <label>How Many Tickets: </label><br>
            <input type="number" name="number" min="1" max="5" id="tk" value="1"><strong id="tb">*</strong>
            <input type="number" name="number" value="15" id="tp" disabled ><strong id="tb">$ =</strong>
            <output name="shuma-totale" for="tk tp" value="15" id="tb"></output><strong id="tb">$</strong>
            <br><br><br>
            
            <label>What Are You Interested In: </label><br>
            <input type="text" name="interested-in" list="art" id="name" placeholder="Select an art-style">
              <datalist id="art" > 
                <option>Abstract Art</option>
                <option>Sculpture</option>
                <option>Portrait</option>
                <option>Art Movies</option>
              </datalist>
            <br><br>
            
            <label>Email :</label><br>
            <input type="email" name="email" placeholder="E.g example@email.com" id="name" >
            <br><br>
            
            <label>Password :</label><br>
            <input type="password" name="pass" placeholder="Enter your pasword" id="name" >
            <br><br>
            
            <label>Description :</label><br>
            <textarea name="message" rows="10" cols="39" placeholder="Write down your expectations about this Gallery Art so we can keep it up to you"></textarea>
            <br><br>
            
            <label>Select Your Payment</label><br>
              <select name="payment" id="name">
                <option>PayPal</option>
                <option>Visa</option>
                <option>GoogleWallet</option>
                <option>Venmo</option>
                <option>Dwolla</option>
              </select>
            <br><br>
            
            <label>Credit-Card Number :</label><br>
            <input type="text" name="c-number" placeholder="Enter your CC number" id="name">
            <br><br>
            
            <input name="terms" type="checkbox" id="ch" required><span id="ch"> I agree all the terms & conditions</span>
            <br><br>
            
            <input name="buy-tickets" class="button" type="submit" >
            <?php
                 include 'forma-orders.php';
                 if($msg != ''): ?>
                    <div class="alert">
                        <?php echo $msg ?>
                    </div>
                <?php endif; ?>

            
        </form>
    </div>
</div>        
        
        
<!-- PJESA 3 : FOOTER , COPYRIGHT -->

        <div class="copyright">
                <p>Copyright &copy; 2012 Domain Name - All rights reserved <span class="template">Template by OS templates</span></p>
            </div>


</body>
</html>

