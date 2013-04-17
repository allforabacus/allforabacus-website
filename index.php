<?php include'header-and-footer/header.php'; ?>
    <section id="content">
    <div class="wrapper">
    	<!--home starts here. home is divided to 3 sections : home-top, home-middle and home-bottom-->
    	<div id="home">
        
        
        	<div id="home-top">
            <!--home-top contains the main image (welcome-image) and main text(welcome-text) pointing to about us page-->
            	<div id="welcome-image">
           	    	<img src="images/welcome-image.jpg" width="400" height="400" alt="welcome-image"> 
                </div>
                <div id="welcome-text">
               		<div id="title-1">
                    	A Bona fide Association for Computer Users and Students
                    </div>
                    <p>&nbsp;</p>
               		<p>ABACUS is an idea initiated by the students of the Computer Science & Engineering Department, NSS College of Engineering, Palakkad to enhance their knowledge and skill and to make the learning process more interactive and free from the fetters of only the prescribed curriculum.
                    </p>
                  	<p>&nbsp;</p>
                    <a href="about.php">
                    	<div id="button-1"><!--about us button-->
                    		<p>About Us</p>
                    	</div>
                    </a>
                 </div>
            </div>
            <!--end of home-top-->
            
            
            <!--start of home-middle, which showcases 'our mission'- with 4 images which scroll vertically on mouse hover with the help of javascript.-->
            <div id="home-middle">
            	<div class="title-2">
                	Our Mission
                </div>
                <div class="underline">
                </div>
                <div id="vertical" class="clear"><!--vertical image hover- works with javescript code in the head tag-->
					<div id="home-box1"><a><img src="images/home-boxes/1.jpg" alt="" /></a></div>
					<div id="home-box2"><a><img src="images/home-boxes/2.jpg" alt="" /></a></div>
					<div id="home-box3"><a><img src="images/home-boxes/3.jpg" alt="" /></a></div>
					<div id="home-box4"><a><img src="images/home-boxes/4.jpg" alt="" /></a></div>
				</div>
            </div>
            
            <!--end of home-middle-->
            
            
            <!--start of home-bottom, which showcases activity hub-->
            <div id="home-bottom">
            	<div class="title-2">
                	Activity Hub
                </div>
              <div class="underline">
                </div>
                <ul>
                	<!--start of 'in the queue' section, to showcase activities.-->
                	<li id="home-box5">
                	  
                	  <img src="images/icons/in-the-queue.png"  alt=" "><h2>In the Queue</h2>
                    	<div class="homebox-content">
                        	<!--to add or remove activities, change in "in-the-queue.php" file-->
                    	  	<?php include'./updates/in-the-queue.php'; ?>
                        <a href="activities.php">
                        <p class="readmore">View the Activity list</p></a></div>
					</li>
                    <!--end of 'in the queue' section-->
                    
                    <!--start of 'join with us' section, to showcase methods to connect with abacus.-->
                    <li id="home-box6"> 
                      <img src="images/icons/join-with-us.png"  alt=" "><h2>Join with us</h2>
                    	<div class="homebox-content">
                        	<h3>Mailing list</h3>
                            <p><a href="http://groups.google.com/group/allforabacus" target="_blank">allforabacus@googlegroups.com</a></p><br />
                            <h3>IRC Channel</h3>
                            <p><a href="http://webchat.freenode.net/?channels=allforabacus" target="_blank">#allforabacus</a></p>
                            <br/>
                            <h3>Github</h3>
                            <p><a href="https://github.com/allforabacus" target="_blank">github.com/allforabacus</a></p>
                            
                        </div>
                    </li>
                    <!--end of 'join with us' section-->
                    
                    <!--start of 'academia' section, an introduction to academia subdomain.-->
                    <li id="home-box7"> 
                      <img src="images/icons/qa-junction.png"  alt=" ">
                      <h2>Academia </h2><img src="images/icons/anigif.gif" alt=" " width="52" height="35" id="notify">
                      
<div class="homebox-content">
           	  <p>The new online initiative from abacus. A Q&amp;A site where you can ask as well as answer any questions related to computer science academics under calicut university!<br /><br />What're you waiting for? Share what you know!<br /><a href="http://www.academia.allforabacus.com"></a></p>
                <a href="http://www.academia.allforabacus.com">
              <p class="readmore">Visit Academia</p></a>
              </div>
                    </li>
                    <!--end of 'academia' section-->
                </ul>
            </div><!--end of home bottom-->
            
            
        </div><!--end of home-->
    </div><!--end of wrapper-->    
    </section><!--end of contents-->
<?php include'header-and-footer/footer.php'; ?>