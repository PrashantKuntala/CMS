<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<?php session_start(); ?>
<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/functions.php");?>
<?php 
    if(isset($_POST['submit'])){
        //grabing the values
        $username = mysqlPrep($_POST['username']);
        $password = mysqlPrep($_POST['password']);
        $email = mysqlPrep($_POST['mailid']);
        
        // Registering new Users
        if($username != null && $password != null && $email != null)
        {       //check for unique usernames here
                $useravailable = findUserAvailabilty($username);
                if($useravailable){
                    //set a global and print it or use validations
                    echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-                                          size:20px;font-family:Ubuntu\">Username is in use  !
                       please choose another username</p>";
                }
                else{
                    //do the insert of new users
                    insertNewUser($username,$password,$email);  
                    echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-                                          size:20px;font-family:Ubuntu\">Successfully registered ! Login to continue .</p>";
                }
        }
        
        // Logging users
        if($username != null && $password != null && $email == null){
            if(verifyUser($username,$password)){
                //set the session and then redirect
                $_SESSION["loggeduser"] = $username;
                redirectTo("admin.php");
            }
            else{
                $_SESSION["loggeduser"] = null;
                echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-                                          size:20px;font-family:Ubuntu\">Wrong Username or Password !</p>";
            }
        }
    }
?>

<html lang="en">     
    <head>
        <meta charset="utf-8">
        <title>fables</title>
        <link rel="stylesheet" href="stylesheet/global.css"/>
        <script type="text/javascript" src="stylesheet/script.js"></script>
    </head>
    <body>
        <section class="headersection" id="headsection">
            <header>
                <nav id="navigation">
                    <ul>
                        <li class="myastyle"><a>Fabs</a></li>
                        <li class="myastyle"><a href="posts.php">Posts</a></li>
                        <li class="myastyle"><a href="explore.php">Explore</a></li>                        
                    </ul>
                </nav>
            </header>
                <h1>fables <span>encourage people to write and spread</span></h1>
        </section>
        
            <section class="loginform">
                <h2 class="pink" id="head">sign In</h2>
                <form method="post" action="index.php">                    
                    <input type="text"  name="username" placeholder="Username" value=""/>
                    <input type="password" name="password" placeholder="Password" value=""/>
                    <input type="email" name="mailid" placeholder="someone@mail.com" id="mail"/>
                    <input type="submit" name="submit" value="submit"/>
                </form>
                <p class="pink" onClick="appear(1)" id="regbutton" style="cursor:pointer;">Register</p>
                <p class="blue"> Under Fabs <br/>Experience the art <br/> of free writing !</p>
            </section>         
      
        <section class="tools">
            <div>
                <h2>Built On ; Runs On ; Open Source</h2>
                <ul class="toollist">
                    <li><p>php</p></li>
                    <li><p>mySql</p></li>
                    <li><p>wamp</p></li>
                    <li><p>brackets</p></li>
                    <li><p>jQuery</p></li>
                </ul>
            </div>           
        </section>
        
        <section class="features">
            <div>
                <h2>Adapt , grow and reach millions</h2>
                <p>The responsive layout of the web sites you create with adapt to any device out there .</p>
            </div>
            <div>
                <h2>Author and Share</h2>
                <p>No Need to learn ! No need to worry ! Create your content fast and easy.</p>
            </div>
        </section>
        
        <footer>
            <div>
                <h3><q>&nbsp; learning never ends &nbsp;</q><span class="myastyle"><a href="#">&uarr;</a></span></h3>
            </div>
            <nav>
                <ul>
                    <li class="myastyle"><a>About</a></li>
                    <li class="myastyle"><a>Contact</a></li>
                    <li class="myastyle"><a>Help</a></li>
                </ul>
            </nav>
            <p>&copy; copyright, 2015 </p>
        </footer>
    </body>
</html>
<?php if(isset($connection)){mysqli_close($connection);}?>
