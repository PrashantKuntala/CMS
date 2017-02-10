<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<!--PHP includes-->
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
            <a class="myastyle" href="allposts.php">All Posts</a>
            <a class="myastyle" href="index.php">home</a>
        </header>
        
        <section>
            <!--  Dynamic page articles are created here -->
            <?php 
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                $start_from = ($page-1) * 4;
                
                $sql = "SELECT * FROM posts ORDER BY id ASC LIMIT $start_from, 4"; 
                $rs_result = mysqli_query($connection,$sql); 

                while ($row = mysqli_fetch_assoc($rs_result)) { 
                        echo  nl2br(
                            "<article>                
                            <p class=\"authdate\">"
                                .$row["datestamp"].
                                "&nbsp;&nbsp;<span>"
                                .$row["authorname"].
                                "</span>
                            </p>
                            <h2>".$row["title"]."</h2>
                            <p>".$row["content"]."</p>
                            </article>"
                        );
                }; 
            ?> 
        </section>
        
<!-- Contains the footer pagination navigation -->
        
        <footer style="text-align:center;padding:10px;margin:5px;">
            <?php 
                $sql = "SELECT COUNT(id) FROM posts"; 
                $rs_result = mysqli_query($connection,$sql); 
                $row = mysqli_fetch_row($rs_result); 
                $total_records = $row[0]; 
                $total_pages = ceil($total_records / 4);

                $prev = $page - 1;
                $next = $page + 1;

                if(!($page<=1))
                {
                    echo "<a  class=\"myfoot\" href='posts.php?page=".$prev."'>Prev</a> "; 
                }
                if($total_pages>0){
                    for ($i=1; $i<=$total_pages; $i++) { 
                        echo "<a  class=\"myfoot\" href='posts.php?page=".$i."'>".$i."</a> "; 
                    };
                }
                if(!($page>=$total_pages))
                {
                   echo "<a  class=\"myfoot\" href='posts.php?page=".$next."'>Next</a>";
                }              
            ?>
        </footer>
    </body>
</html>

<!--close the database connection-->
<?php if(isset($connection)){ mysqli_close($connection);} ?>
