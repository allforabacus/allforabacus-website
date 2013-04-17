<?php include'header-and-footer/header.php'; ?>
<section id="content">
    <div class="wrapper">
    	<!--contact starts here-->
    	<div id="contact">
        	<div id="title-1">
				<p>Contact us</p>
				<p>&nbsp;</p>
			</div>
            
        	<div id="contact-form">
            	<form method="post" action="mailto:allforabacus@gmail.com" id="contactform" enctype="text/plain">

                    <div>
                    <div class="title-2">Send us a message</div>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    </div>

                    <div>
                    <label>Name<br>
<span class="required"></span></label>
                    <input name="name" type="text" id="name" placeholder="your name goes here.." onClick="placeholder=none" value="" />
                    </div>

                    <div>
                    <label>Email<br>
<span class="required"></span></label>
                    <input name="email" type="text" placeholder="your e-mail id goes here.." id="email" value="" />
                    </div>
                    
                    <div>
                    <label>Message<br>
<span class="required"></span></label>
                    <textarea name="message" rows="20" placeholder="your message here.." cols="50"  id="message" ></textarea><br /><br />
                    </div>
					
					<input name="redirect" type="hidden" value="contact.html">
					<input name="NEXT_URL" type="hidden" value="contact.html">

                    <div>
					<input type="submit"  value="Submit" class="button">
         			<input type="reset" value="Reset" class="button">
					</div>


                </form>
            </div>
            <div id="follow-us">
            	<div class="title-2">Follow Us</div>
            	<div class="underline"></div>
            	<ul>
                	<li><a href="http://groups.google.com/group/allforabacus" target="_blank"><img src="images/logos/logo-googlegroups1.png" alt="googlegroups" title="allforabacus@googlegroups.com"></a></li>
                    <li><a href="http://webchat.freenode.net/?channels=allforabacus" target="_blank"><img src="images/logos/logo-irc1.png" alt="irc" title="#allforabacus"></a></li>
                    <li><a href="https://github.com/allforabacus" target="_blank"><img src="images/logos/logo-github1.png" alt="github" title="github/allforabacus"></a></li>
                    <li><a href="http://www.academia.allforabacus.com" target="_blank"><img src="images/logos/logo-abacus-academia1.png" alt="abacus academia" title="www.academia.allforabacus.com"></a></li>
                    <li><a href="http://blog.allforabacus.com" target="_blank"><img src="images/logos/ligo-wordpress-blog1.png" alt="blog" title="blog.allforabacus.com"></a></li>
                </ul>
            </div>
        
        </div>
    </div>
</section>
<?php include'header-and-footer/footer.php'; ?>