<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<?php session_start(); ?>
<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/functions.php");?>

<?php 
// A global reference to the logged user
if(isset($_SESSION)){
    $userdata = getData($_SESSION["loggeduser"]);
//    if($userdata == null)
//    {redirectTo("index.php");}
}
//else{ redirectTo("index.php"); }
?>
<html lang="en">
<head>
		<meta charset="UTF-8" />	
		<title>Explore</title>
		<link rel="stylesheet" type="text/css" href="stylesheet/demo.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/pagestyle.css" />
</head>
	<body>
        
        <header>
            <h1>Explore</h1>
            <a class="myastyle" href="index.php">home</a>
        </header>        
        <section>
            <ul class="elist">
                <?php if(isset($_SESSION)){
                        $userdata = getData($_SESSION["loggeduser"]);
                        if($userdata != null)
                        {
                             echo "<li>
                    <h2>".$userdata["username"]." <span>posts 6 </span></h2>
                    <p><span>About</span> ".$userdata["about"]."
                    </p>
                    <p><span>Contact</span></p>
                    <div>                       
                        <p><span>email</span>".$userdata["email"]."</p>
                        <p><span>phone</span>". $userdata["phone"]."</p>
                        <p><span>website</span>". $userdata["site"]."</p>                        
                    </div>
                    <p><a href=\"exploreauthor.php#slide-main\">Check out my posts !</a></p>
                </li>";
                        }
                    }
                ?>
                
                <li>
                    <h2>Joseph <span>posts 6 </span></h2>
                    <p><span>About</span> The about content goes here and then it goes to the next line.
                    </p>
                    <p><span>Contact</span></p>
                    <div>                       
                        <p><span>email</span> someone@email.com</p>
                        <p><span>phone</span> 1234567890</p>
                        <p><span>website</span> someonesite.com</p>                        
                    </div>
                    <p><a href="exploreauthor.php#slide-main">Check out my posts !</a></p>
                </li>      
                <li>
                    <h2>Prabhu<span>posts 6 </span></h2>
                    <p><span>About</span> The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                    </p>
                    <p><span>Contact</span></p>
                    <div>                       
                        <p><span>email</span> someone@email.com</p>
                        <p><span>phone</span> 1234567890</p>
                        <p><span>website</span> someonesite.com</p>                        
                    </div>
                    <p><a href="exploreauthor.php#slide-main">Check out my posts !</a></p>
                </li>      
                <li>
                    <h2>Rafi <span>posts 6 </span></h2>
                    <p><span>About</span> The about content goes here and then it goes to the next line.
                        next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                    </p>
                    <p><span>Contact</span></p>
                    <div>                       
                        <p><span>email</span> someone@email.com</p>
                        <p><span>phone</span> 1234567890</p>
                        <p><span>website</span> someonesite.com</p>                        
                    </div>
                    <p><a href="exploreauthor.php#slide-main">Check out my posts !</a></p>
                </li>
                 <li>
                    <h2>Suraj<span>posts 6 </span></h2>
                    <p><span>About</span> The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                        The about content goes here and then it goes to the next line.
                    </p>
                    <p><span>Contact</span></p>
                    <div>                       
                        <p><span>email</span> someone@email.com</p>
                        <p><span>phone</span> 1234567890</p>
                        <p><span>website</span> someonesite.com</p>                        
                    </div>
                    <p><a href="exploreauthor.php#slide-main">Check out my posts !</a></p>
                </li>
                <li>
                    <h2>Martin <span>posts 6 </span></h2>
                    <p><span>About</span> The about content goes here and then it goes to the next line.
                    </p>
                    <p><span>Contact</span></p>
                    <div>                       
                        <p><span>email</span> someone@email.com</p>
                        <p><span>phone</span> 1234567890</p>
                        <p><span>website</span> someonesite.com</p>                        
                    </div>
                    <p><a href="exploreauthor.php#slide-main">Check out my posts !</a></p>
                </li>
            </ul>
        </section>
    </body>
</html>
<?php if(isset($connection)){	mysqli_close($connection);}?>
