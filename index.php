<?php
session_start();
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div class="breadcrumb" style="text-align:center"><h1>Open-ID Blog</h1></div>
<hr>
<?php   if(isset($_GET['comments'])){
        $c = $_GET['comments'];
        if($c== "on"){
?>
<div class="span2 pull-right"><a href="logout.php">Logout</a></div><?php }}else{?>
<div class="span2 pull-right"><a href="login.php">Sign-In</a></div><?php }?>
<div id="leftcol" class="span8 breadcrumb" style="text-align:justify">

                         <article class="post">

                              <div class="post_content">
					<h3>Federated Login to GOOGLE with OpenID</h3>
					<p>Third-party websites and applications can now let visitors sign in using their Google user accounts. Federated Login, based on the <a href="openid.net">OpenID</a> standard, frees users from having to set up separate login accounts for different web sites--and frees web site developers from the task of implementing login authentication measures. OpenID achieves this goal by providing a framework in which users can establish an account with an OpenID provider, such as Google, and use that account to sign into any web site that accepts OpenIDs. This page describes how to integrate Google's Federated Login for a web site or application.</p>
                                   <blockquote>

					<p><a href="https://developers.google.com/accounts/docs/OpenID">Google Developers reference.</a></p>
                                   </blockquote>

				<p>To test our application please sign-in to comment. You can sign-in with your google account, with your gmail username and password. Don't worry its not going to be stored by us. Google takes care of the privacy. For details check the diagram of how OpenID works below. Also, to handle all the requests and response we use a PHP based client <a href="https://gitorious.org/lightopenid">LightOpenid</a>. So, please comment. :)  </p>
				<p><img src="img/OpenIdDiagram.png"></p><br>
				<p> Note: This is a demo site to test Open-Id, so the security is not taken into conideration. Also, the comments are handled with session variables. So, don't mind your comments goes away once you logout.</p>
				
                              </div>

                         </article>

                         <div id="post_comments">

                              <h4>Comments</h4>

                              <div class="comment" id="user_comments">
			<?php	if(isset($_GET['comments'])){
        $c = $_GET['comments'];
        if($c== "on" && $_SESSION['c_name']){
?>
                
                
                <div class="row">

                                        <figure class="span1"> <img class="img-circle" src="img/blue_img.jpg" alt=""> </figure>

                                        <div class="span7">

                                             <div class="comment_name"><?php echo $_SESSION['c_name']; echo ', email- '.$_SESSION['c_ename'];?> <a class="reply" href="#">Reply</a> </div>
                                             <div class="comment_date"><i class="icon-time"></i> Oct 4, 2013</div>

                                             <div class="the_comment">

                                                  <p> <?php echo $_SESSION['c_comments']; ?> </p>

                                             </div>

                                        </div>

                                   </div>
<?php
        }
}
?>


                                   <div class="row">

                                        <figure class="span1"> <img class="img-circle" src="img/blue_img.jpg" alt=""> </figure>

                                        <div class="span7">

                                             <div class="comment_name"> Johnny Long <a class="reply" href="#">Reply</a> </div>

                                             <div class="comment_date"><i class="icon-time"></i> Oct 1, 2013</div>

                                             <div class="the_comment">

                                                  <p>Salute! Charity rocks!.</p>

                                             </div>

                                        </div>

                                   </div>


                                   <div class="row">

                                        <figure class="span1"> <img class="img-circle" src="img/blue_img.jpg" alt=""> </figure>

                                        <div class="span7">

                                             <div class="comment_name"> Jimi Hendrix <a class="reply" href="#">Reply</a> </div>

                                             <div class="comment_date"><i class="icon-time"></i> Oct 1, 2013</div>

                                             <div class="the_comment">

						
<p>Voodoo Child!. Absolutely fantastic !</p>
                                             </div>

                                        </div>

                                   </div>

                              </div>

                         </div>

                         <div class="new_comment">

                              <h4>Add Comment</h4>

                              <form action="check_user.php" method="POST">

                                   <div class="row">

                                        <div class="span4">

                                             <input class="span4 input-xlarge" type="text" name="name" placeholder="Name">

                                        </div>

                                        <div class="span4">

                                             <input class="span4 input-xlarge" type="text" name="email" placeholder="Email">

                                        </div>

                                   </div>

                                   <div class="row">

                                        <div class="span8">

                                             <textarea rows="7" placeholder="Comments"  name="comm" class="span8"></textarea>

                                        </div>

                                   </div>

                                   <div class="row">

                                        <div class="span8"> <button type="submit">Add comment</button> </div>

                                   </div>

                              </form>

                         </div>

                    </div>
</div>
<script src="js/jquery-1.8.2.js"></script>
</body>
</html>

