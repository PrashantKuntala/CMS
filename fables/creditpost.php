<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<!--PHP includes-->
<?php session_start(); ?>
<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/functions.php");?>

<?php 
// A global reference to the logged user
if(isset($_SESSION)){
    $userdata = getData($_SESSION["loggeduser"]);
    if($userdata == null)
    {redirectTo("index.php");}
}
else{ redirectTo("index.php"); }
?>

<?php
    if(isset($_POST['save']))
    {
            $title = mysqlPrep($_POST['title']);
            $content = mysqlPrep($_POST['content']);
            $stamp =  date('jS F Y'); 
            $user = $_SESSION["loggeduser"];
            $position = calcPosition(2);
            $subjectid = findSubject(mysqlPrep($_POST['subjectname']));
            $query = "insert into posts (title,content,datestamp,authorname,position,visible,subjectid) values(";
            $query .= " '{$title}', '{$content}', '{$stamp}', '{$user}', $position, 1, $subjectid)";
//get the username from the session above in the case of author and also add stuff for selecting the subject from the subject list of that author
        
            $res = mysqli_query($connection,$query);
        
            if($res){ echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-size:20px;\">Saved</p>";}
            else{ echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-size:20px;\">Oops ! Something went wrong.</p>";}
        
    }

if(isset($_POST['publish'])){
    redirectTo("admin.php#posts");
}

// To update a particular post
if(isset($_POST['change'])){
            $title = mysqlPrep($_POST['title']);
            $content = mysqlPrep($_POST['content']);
            $stamp =  date('jS F Y'); 
            $user = $_SESSION["loggeduser"];            
            $subjectid = findSubject(mysqlPrep($_POST['subjectname']));
           $query = "update posts set title = '".$title."', content = '".$content."', datestamp = '".$stamp."', subjectid = '".$subjectid."'
            where username = '".$user."' limit 1";
            
            $rel = mysqli_query($connection,$query);        
            if($rel){ echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-size:20px;\">Updated successfully !</p>";}
            else{ echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-size:20px;\">Oops ! Something went wrong.</p>";}
}
?>

<html lang="en">
<head>
		<meta charset="UTF-8" />	
		<title>Posts</title>
		<link rel="stylesheet" type="text/css" href="stylesheet/demo.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/pagestyle.css" />
</head>
	<body>
        
<!-- Form for creating and editing the post -->
        <section class="fcontatiner">
            <form class="cpform" method="post" action="creditpost.php">
                <ul>
                    <?php
                            if(isset($_GET['id'])){
                                echo "<li><input type=\"submit\" name=\"change\" value=\"Change\"/></li>";
                            }
                            else{
                                echo "<li><input type=\"submit\" name=\"publish\" value=\"Publish\"/></li>";
                            }
                    ?>                    
                    <li><input type="submit" name="save" value="Save"/></li>                    
                    <li><select class="mybutton" name="subjectname">
                        <option>Choose a subject</option>
                        <?php allSubjects();?>
                        </select>
                    </li>                    
                    <li><a href="admin.php#posts">Close</a></li>                    
                </ul>
                <div>
<!-- Header for the post-->
                    <p class="authdate">
                        <?php
                            if(isset($_GET['id']))
                                {                                    
                                    $query = "select * from posts where id='".$_GET['id']."'";
                                    $res = mysqli_query($connection,$query);
                                    $sol = mysqli_fetch_assoc($res);
                                    echo $sol["datestamp"];
                                }
                            else{ echo date('jS F Y');}
                        ?>                       
                        &nbsp;<span>
                        <?php
                            if(isset($_GET['id']))
                                { 
                                    echo $_SESSION["loggeduser"];
                                }
                            else{ echo $_SESSION["loggeduser"];}
                        ?> 
                        </span>
                    </p>
<!-- Header for the post-->
                    
<!-- Title goes here-->
                    <input type="text" name="title" Placeholder="Enter your post title here"
                           value="<?php
                                    if(isset($_GET['id']))
                                    {   
                                        echo $sol["title"];
                                    }                       
                                  ?>"/>
<!--Content goes here-->
                    <textarea name="content">
                        <?php if(isset($_GET['id']))
                                {   
                                    echo $sol["content"];
                                }
                        ?>
                    </textarea>            
                </div>
            </form>
<!-- end of the form-->
        </section>
    </body>
</html>

<!--Close the database connection-->
<?php if(isset($connection)){mysqli_close($connection);}?>


