<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<?php session_start(); ?>
<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/functions.php");?>

<html lang="en">
<head>
		<meta charset="UTF-8" />	
		<title>Posts</title>
		<link rel="stylesheet" type="text/css" href="stylesheet/demo.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/pagestyle.css" />
</head>
	<body>
        
        <header>
            <h1>Posts</h1>
            <a class="myastyle" href="posts.php">Recent Posts</a>
            <a class="myastyle" href="index.php">home</a>
        </header>
        <section class="ac-container">            
<!-- Each div has a input radiobuttonlabel and article -->
<!-- first article -->
            <?php 
            $query = "SELECT * FROM posts ORDER BY id ASC";
            $res = mysqli_query($connection,$query);
            $sol = mysqli_fetch_assoc($res);    

            while($sol = mysqli_fetch_assoc($res)){
                echo  
                    "<div>
					<input id=\""
                    .$sol["id"].
                    "\"name=\"accordion-1\" type=\"radio\" notchecked />
					<label for=\"".$sol["id"]."\">
                    <p class=\"ac-authdate\">"
                    .$sol["datestamp"].
                    "<span>".$sol["authorname"]."</span></p><h2>"
                    .$sol["title"].
                    "</h2></label>".nl2br("<article class=\"ac-height\"><p>"
                    .$sol["content"].
                    "</p></article>")."</div>";
            }?>         
			</section>        
    </body>
</html>

<!--close the connection-->
<?php if(isset($connection)){	mysqli_close($connection);}?>
