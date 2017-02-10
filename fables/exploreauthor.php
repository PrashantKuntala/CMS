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
        <link rel="stylesheet" type="text/css" href="stylesheet/exploreauthor.css" />
</head>
	<body>
        
        <header>
            <h1>Author Explore</h1>
            <a class="myastyle" href="explore.php">authors</a>
        </header>
        
        <section class="cn-container">
                                                                                        <!--First slide-->
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!--  There is no home page navigation in all pages -->
				<div class="cn-slide" id="slide-main">
					<h2>Subjects</h2>
					<nav>
						<a href="#slide-1">Philosophy</a>							
						<a href="#slide-2">Science</a>						
						<a href="#slide-3">Literature</a>
                        <a href="#slide-1">Philosophy</a>							
						<a href="#slide-2">Science</a>						
						<a href="#slide-3">Literature</a>  
					</nav>
				</div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->				
                                        <!--   Second slide Posts with subject name on top and backlink-->
                
				<!-- Slide 1 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-1">
					<h2>Philosophy</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-1-1">Epistemology</a>							
						<a href="#slide-1-2">Metaphysics</a>
						<a href="#slide-1-3">Aesthetics</a>
						<a href="#slide-1-4">Ethics</a>
					</nav>
				</div>
				
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                                                            <!-- Each post is shown below-->
				<div class="cn-slide" id="slide-1-1">
					<h2>Epistemology</h2>
                    <span class="cn-note">6th April, 2015</span>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>					
				</div>
				
				<div class="cn-slide" id="slide-1-2">
					<h2>Metaphysics</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-3">
					<h2>Aesthetics</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-1-4">
					<h2>Ethics</h2>
					<a href="#slide-1" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
                                                        <!-- End of the First subject its posts and stuff-->
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                                   
                
				<!-- Slide 2 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-2">
					<h2>Science</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-2-1">Physics</a>							
						<a href="#slide-2-2">Biology</a>
						<a href="#slide-2-3">Anthropology</a>
						<a href="#slide-2-4">Chemistry</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-2-1">
					<h2>Physics</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-2-2">
					<h2>Biology</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-2-3">
					<h2>Anthropology</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-2-4">
					<h2>Chemistry</h2>
					<a href="#slide-2" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<!-- Slide 3 and Sub-slides -->
				<div class="cn-slide cn-slide-sub" id="slide-3">
					<h2>Literature</h2>
					<a href="#slide-main" class="cn-back">Back</a>
					<nav>
						<a href="#slide-3-1">Poetry</a>							
						<a href="#slide-3-2">Prose</a>
						<a href="#slide-3-3">Fiction</a>
						<a href="#slide-3-4">Non-fiction</a>
					</nav>
				</div>
				
				<div class="cn-slide" id="slide-3-1">
					<h2>Poetry</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>The lysine contingency - it's intended to prevent the spread of the animals is case they ever got off the island. Dr. Wu inserted a gene that makes a single faulty enzyme in protein metabolism. The animals can't manufacture the amino acid lysine. Unless they're continually supplied with lysine by us, they'll slip into a coma and die. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-2">
					<h2>Prose</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-3">
					<h2>Fiction</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>
				
				<div class="cn-slide" id="slide-3-4">
					<h2>Non-fiction</h2>
					<a href="#slide-3" class="cn-back">Back</a>
					<div class="cn-content">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
					</div>
					<span class="cn-note">Keep clicked to show image</span>
				</div>

			</section>       
    </body>
</html>
<?php if(isset($connection)){	mysqli_close($connection);}?>
