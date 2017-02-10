<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<?php session_start(); ?>
<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/functions.php");?>

<?php 
if(isset($_POST['logout'])){
    $_SESSION["loggeduser"]="";
    redirectTo("index.php");
}
?>
<!--To delete a subject-->
<?php if(isset($_GET['id'])){
        $q="delete from subjects where id='".$_GET['id']."' limit 1";
        $result = mysqli_query($connection,$q);
        if($result)
        {
            redirectTo("admin.php#subjects");
        }
    }
?>

<!--to delete a post-->
<?php if(isset($_GET['pid'])){
        $q="delete from posts where id='".$_GET['pid']."' limit 1";
        $result = mysqli_query($connection,$q);
        if($result)
        {
            redirectTo("admin.php#posts");
        }
    }
?>

<?php 
// A global reference to the logged user
if(isset($_SESSION)){
    $userdata = getData($_SESSION["loggeduser"]);
    if($userdata == null)
    {redirectTo("index.php");}
}
else{ redirectTo("index.php"); }
?>

<html lang="en">
<head>
		<meta charset="UTF-8" />	
		<title>Fables - Admin</title>
		<link rel="stylesheet" type="text/css" href="stylesheet/demo.css" />
		<link rel="stylesheet" type="text/css" href="stylesheet/adminstyle.css" />
        <script type="text/javascript" src="stylesheet/script.js"></script>
</head>
	<body>		
		
		<!-- Home -->
		<div id="home" class="panel">
			<div class="content">
				<h2>Home</h2>
				<p>Select the appropriate tab to edit those sections</p><br/><br/>
                <div>
                    <p>Your Last Visit was on &nbsp;&nbsp;
                        <span><?php echo $userdata["lvisit"];?></span>
                    </p><br/> 
                    <p>Your published subjects &nbsp;&nbsp;
                        <span><?php echo $userdata["nsubjects"];?></span>
                    </p><br/>
                    <p>Your published posts &nbsp;&nbsp;
                        <span><?php echo $userdata["nposts"];?></span>
                    </p>                   
                </div>
			</div>
		</div>
		<!-- /Home -->
		
		<!-- Subjects -->
		<div id="subjects" class="panel">
			<div class="content">
				<h2>Subjects <span id="sname" onclick="appear(3)"> &#43;&nbsp;&nbsp;Add</span></h2>
                <form id="subjectform" method="post" action="admin.php#subjects" style="display:none;">
					<input type="text"
                           style="color:#000;background:seashell;padding:10px;font-size:20px;"
                           name="subname" class="mybutton" placeholder="Subject name"/>
                    <input class="mybutton" type="submit" name="addsub" value="Add subject"/>
				</form><br/>
                <?php if(isset($_POST['addsub'])){
                        $subname = mysqlPrep($_POST['subname']);                        
                        addSubject($userdata["username"],$subname);
                    }
                ?>
				<p>All your subjects are listed below :</p>
                <?php  
                    $sql = "SELECT * FROM subjects ORDER BY id ASC"; 
                    $subjectSet = mysqli_query($connection,$sql);
                    while ($subject = mysqli_fetch_assoc($subjectSet)) {
                                echo "<article>
                                <div>
                                <ul>            
                                <li><a href=\"admin.php#subjects\">Edit</a></li>
                                <li><a href=\"admin.php?id=".$subject["id"]."\" onclick=\"return confirm('Are you sure?');\">Delete</a></li>
                                <li><p>".$subject["title"]."</p></li>
                                <li><p>".$subject["datestamp"]."</p></li>
                                </ul>
                                </div>                       
                                </article>";
                            }		
                ?>                       
			</div>
		</div>
		<!-- /subjects -->
		
        <!-- posts -->
		<div id="posts" class="panel">
			<div class="content">
				<h2>Posts <span><a href="creditpost.php">&#43;&nbsp;&nbsp;Add</a></span></h2>
				<p>All your posts are listed below :</p>				
                    <?php
                        $sqli = "SELECT * FROM posts ORDER BY id ASC"; 
                        $subj = mysqli_query($connection,$sqli); 

                        while ($sub = mysqli_fetch_assoc($subj)) {
                                    echo "<article>
                                    <div>
                                    <ul>                                    
                                    <li><a href=\"creditpost.php?id=".$sub["id"]."\">Edit</a></li>
                                    <li><a href=\"admin.php?pid=".$sub["id"]."\" onclick=\"return confirm('Are you sure?');\">Delete</a></li>
                                    <li><p>".$sub["title"]."</p></li>
                                    </ul>
                                    </div>                       
                                    </article>";
                                }		
                    ?>                           
			</div>
		</div>
		<!-- /posts -->
        
		<!-- About -->
		<div id="about" class="panel">
			<div class="content">
				<h2>About <span id="ename" onclick="appear(2)">Edit</span></h2>
				<p id="apara"><?php echo nl2br($userdata["about"]); ?></p>
                <form id="aboutform" method="post" action="admin.php#about" style="display:none;">
					<p style="color:seashell;background:#000;border-bottom:2px solid orangered;padding:10px;font-size:20px;"> Edit text below to change information about you !</p><br/>
                    <textarea name="aboutcontent"><?php echo $userdata["about"]; ?></textarea><br/>
                    <input class="mybutton" type="submit" name="editabout" value="edit"/>
				</form>
                <?php if(isset($_POST['editabout'])){
                        $about = mysqlPrep($_POST['aboutcontent']);                        
                        updateAbout($userdata["username"],$about);
                    }
                ?>
			</div>
		</div>
		<!-- /About -->
		
		<!-- Contact -->
		<div id="contact" class="panel">
			<div class="content">
				<h2>Contact</h2>
				<?php echo "<p style=\"color:seashell;background:#000;border-bottom:2px solid orangered;padding:10px;font-size:20px;\"> your email : ".$userdata["email"]."</p>"; ?><br/>
                <?php echo "<p style=\"color:seashell;background:#000;border-bottom:2px solid orangered;padding:10px;font-size:20px;\"> your phone : ".$userdata["phone"]."</p>"; ?><br/>
                <?php echo "<p style=\"color:seashell;background:#000;border-bottom:2px solid orangered;padding:10px;font-size:20px;\"> your website : ".$userdata["site"]."</p>"; ?><br/><br/><br/>				
				<form id="form" method="post" action="admin.php#contact">
					<p><label>email </label><input type="email" name="email" /></p>
					<p><label>phone </label><input maxlength="10" name="phone"/></p>
					<p><label>website </label><input type="text" name="website" /></p>
                    <p><input type="submit" name="change" value="Change"/></p>
				</form>
                <?php if(isset($_POST['change'])){
                        $email = mysqlPrep($_POST['email']);
                        $phone = mysqlPrep($_POST['phone']);
                        $website = mysqlPrep($_POST['website']);
                        updateContact($userdata["username"],$email,$phone,$website);
                    }
                ?>
			</div>
		</div>
		<!-- /Contact -->
        
        <!-- overview -->
<!--
		<div id="overview" class="panel">
			<div class="content">
				<h2>Overview</h2>				
				<section class="left">
                    <div>
                        <p>Stats.</p>
                        <article>
                            <div class="holder">
                                <p>posts<span>10</span></p>
                                <p>subjects<span>5</span></p>
                                <p>published<span>8</span></p>
                                <p>drafts<span>2</span></p>
                            </div>
                            <div class="holder right">
                                <p><sup>Today</sup>27th March 2015</p>
                                <p><sup>Last</sup> 26th March 2015</p>
                            </div>
                        </article>
                    </div>
                </section>
			</div>
		</div>
-->
		<!-- /overview -->

		<!-- Header with Navigation -->
		<div id="header">            
			<h1>Fables</h1>
            <div id="user">
                <ul>                    
                    <li id="first"><p> Welcome <span class="author"><?php echo $_SESSION["loggeduser"]; ?></span> !</p></li>
                    <li><p>
                        <form method="post" action="admin.php">
                            <input type="submit" name="logout" value="Logout"/> 
                        </form>
                    </p></li>
                    <li><p><a href="explore.php">Settings</a></p></li>
                </ul>
            </div>            
<!-- id attributes are being used for navigation and once on clicking the target pseudo property might trigger the animation-->            
			<ul id="navigation">
				<li><a id="link-home" href="#home">Home</a></li>
				<li><a id="link-subjects" href="#subjects">Subjects</a></li>
                <li><a id="link-posts" href="#posts">Posts</a></li>
				<li><a id="link-about" href="#about">About Me</a></li>
				<li><a id="link-contact" href="#contact">Contact</a></li>
<!--                <li><a id="link-overview" href="#overview">Overview</a></li>-->
			</ul>
		</div>	
        
	</body>
</html>
<?php if(isset($connection)){	mysqli_close($connection);}?>

