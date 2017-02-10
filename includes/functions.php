<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<?php 

function redirectTo($location){
    header("location:".$location);
}

function mysqlPrep($string){
    global $connection;
    $escaped_string = mysqli_real_escape_string($connection,$string); 
    return $escaped_string;
}

function confirm_query($result_set){
    if(!$result_set){
        die("database query failed !");
    }
}



// My functions for the index page

function findUserAvailabilty($uname){
    global $connection;
    //querying for the list of admin usernames from admins table
    $query = "select username from admins order by id;";		
    $adminset = mysqli_query($connection,$query);
    confirm_query($adminset);
    //conversting the retrieved query result into an assoc_array
    //that is $adminNames is a single row in the db.
    $adminNames = mysqli_fetch_assoc($adminset);
    if($adminNames != null){
         while($adminNames){
            if($adminNames['username'] == $uname){
                return true;
            }             
        }
    }
    else{
        return false;
    }
    return false;
}


function insertNewUser($username,$password,$email){
    global $connection;
    // add the password encryption here !
    $lvist = date('jS F Y');
    $query = "insert into admins (username, password, email, about,
                phone, site, nsubjects, nposts, lvisit ) values(";
    $query .= " '{$username}', '{$password}', '{$email}',
                'We would like to know about you !', 'your Phone no ?',
                'Do you have a website ?', 0, 0, '{$lvist}')";

    $result = mysqli_query($connection,$query);
    confirm_query($result);
    return;
}

function verifyUser($username,$password){
    global $connection;
    if(findUserAvailabilty($username)){
        $query = "select password from admins where username = '".$username."'";
        $result = mysqli_query($connection,$query);
        confirm_query($result);
        $value = mysqli_fetch_assoc($result);
        //check for password equality
        if($value['password'] == $password){
            return true;
        }
        else{return false;}
    }
}

// My functions for admin page
function getData($uname){
    global $connection;
    $query = "select * from admins where username = '".$uname."'";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    $userdata = mysqli_fetch_assoc($result);
    return $userdata;
}

function updateContact($uname,$email,$phone,$website){
    global $connection;
    $query = "update admins set email = '".$email."', phone = '".$phone."', site = '".$website."'
            where username = '".$uname."' limit 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    if(mysqli_affected_rows($connection) == 1){
       echo "<a  href=\"admin.php\" style=\"color:seashell;
     background:#f04848;padding:10px;font-size:20px;font-family:Ubuntu\">Refresh</a>";       
    }
    else{ echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-                                          size:20px;font-family:Ubuntu\">OOPS something went wrong !</p>";    }
}

function updateAbout($uname,$about){
    global $connection;
    $query = "update admins set about = '".$about."' where username = '".$uname."' limit 1";
    $result = mysqli_query($connection,$query);
    confirm_query($result);
    if(mysqli_affected_rows($connection) == 1){
     echo "<br/><a  href=\"admin.php\" style=\"color:seashell;
     background:#f04848;padding:10px;font-size:20px;font-family:Ubuntu\">Refresh</a>";        
    }
    else{ echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-                                          size:20px;font-family:Ubuntu\">OOPS something went wrong !</p>";    }
}

function calcPosition($val){
    global $connection;
    $count = 0;
    switch($val){
        case 1: $query = "select id from subjects order by id ASC";
                $result = mysqli_query($connection,$query);
                confirm_query($result);
                $count = mysqli_num_rows($result);                
                break;
        case 2: $query = "select id from posts order by id ASC";
                $result = mysqli_query($connection,$query);
                confirm_query($result);
                $count = mysqli_num_rows($result);                
                break;
    }
    return ($count+1);
}

//function findSubjectAvailabilty($uname,$title){
//    global $connection;   
//    $query = "select * from subjects where authorname='".$uname."';";		
//    $adminset = mysqli_query($connection,$query);
//    confirm_query($adminset);    
//    $adminNames = mysqli_fetch_assoc($adminset);
//    if($adminNames != null){
//         while($adminNames){
//            if($adminNames['title'] == $title){
//                return true;
//            }             
//        }
//    }
//    else{
//        return false;
//    }
//    return false;
//}

function addSubject($uname,$title){
    global $connection;
    // not working check the function
//    if(findSubjectAvailabilty($uname,$title)){
//        echo "<p style=\"color:seashell;background:#f04848;padding:10px;font-                                          size:20px;font-family:Ubuntu\">Subject already available</p><br/>";
//    }
    
    //calculating the positon
    $position = calcPosition(1);
    $datestamp = date('jS F Y');
    $query = "insert into subjects (title, authorname, datestamp, position, visible) values(";
    $query .= " '{$title}', '{$uname}', '{$datestamp}', $position, 1)";
    $result = mysqli_query($connection,$query);
    confirm_query($result);    
}

function allSubjects(){
    global $connection;
    $query = "select * from subjects order by id asc;";
    $other = mysqli_query($connection,$query);
//    confirm_query($result);
    while ($row = mysqli_fetch_assoc($other)) { 
        echo "<option>".$row["title"]."</option>";
    }
}
function findSubject($subname){
    global $connection;
    $query = "select id from subjects where title = '".$subname."' limit 1;";
    $other = mysqli_query($connection,$query);
    $userdata = mysqli_fetch_assoc($other);
    return $userdata['id'];
}


?>
