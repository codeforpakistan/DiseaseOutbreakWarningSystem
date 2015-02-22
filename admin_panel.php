<?php
session_start();
if(!isset($_SESSION['user_id'])){
	echo "<script>window.open('login-form.php','_self')</script>";


}
	else
	{
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

<meta charset="utf-8" />
<title>Quick Disease Early Warning System </title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/navbar.css" />


<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script><script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->

<link rel="stylesheet" href="css/menu_styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>

<body>

<div class="page-wrapper">

        <div class="slug-pattern"><div class="overlay"><div class="slug-cut"></div></div></div>
        <div class="header">
                <div class="nav">       
                
                <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                                <a href="admin_panel.php?map"><img src="images/Q L 23.png" width="140px" height="50px" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                        <div class="eleven column omega tabwrapper">
                            <div class="menu-wrapper">
                                <ul class="tabs menu">
                                    <li>
                                       <a href="index.php" ><span>Home</span></a>
                                     
                                    </li>
                                    <li><a href="#" >Outbreaks</a>
                                       
                                    <li>
                                        <a href="#">About US</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">
                                            Contact
                                        </a>
                                    </li>
                                     <li>
                                        <a href="logout.php" >
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            
                              <center>  <a href="admin_panel.php"><img src="images/Q L 23.png" width="140px" height="50px" /></a></center><!-- Small Logo -->
                           
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation">
                                <option value="" selected="selected">Site Navagation</option>
                            </select>
                        </div>
                    </div>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            <div class="container">
                <div class="page-title">
                    <div class="rg"></div>
                    <h1>Admin Panel</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container" >
                       <div class="sixteen columns"><span class="hr mapdv"></span></div>
                        <div class="three columns">
                        
                        
                        <nav>
                        <ul>
                      <a href="#">&nbsp;&nbsp; &nbsp;Veiw Reports</a>
                            
                            
                           <h5 class="semi"><a <?php if(isset($_GET['map2'])){ ?>class="active"<?php } ?> href="admin_panel.php?map&map2">&nbsp;&nbsp; &nbsp;Map</a></h5>
                           
                           <h5 class="semi"><a href="admin_panel.php?veiw_user">&nbsp;&nbsp; &nbsp;Veiw User </a></h5>
                            <h5 class="semi"><a  <?php if(isset($_GET['add_user']) OR isset($_GET['next'])){ ?>class="active"<?php } ?> href="admin_panel.php?add_user">&nbsp;&nbsp; &nbsp;Add User</a></h5>
                            <h5 class="semi"><a href="#">&nbsp;&nbsp; &nbsp;Warnings</a></h5>
                         </ul>  
                         <a href="#" id="pull">Menu</a> 
                         </nav>   
                        
                        
                        
                            
                        </div>
                        
                        
                        
                        <div class="contact thirteen columns">
                       
                        
                          
                                
                        <?php  if(isset($_GET['map'])){ ?> 
                         <iframe width="100%" height="640" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:1px solid #999;" src="map.php"></iframe>
                         <div class="sdw"></div>
						<?php } ?>
                        <?php if(isset($_GET['add_user'])){ 
						?>
                        <div class="standard-form compressed">
                                <div id="h2"><h2>ADD USER TO <span>QDEWS</span> ACCOUNT</h2></div><br>
                                <div class="form-result" ></div>
                                
                                <form action="#" class="contactForm" id="contactus" name="contactus" style="padding-left:5%">
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease1" />
             <input type="text" class="input"  name="name" placeholder="Name " />
             <input type="text" class="input"  name="email" placeholder="Email" />
             
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease2" />
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease3" />             <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease4" />
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease5" />
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease6" />
             <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease7" />
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease8" />
            <input type="text" class="input extend" id="subject" name="subject" placeholder="Disease9" />
                        <div class="clear"></div>
                        <div id="cont">
                                          <input class="submit" type="submit" name="submit" value="Register" />
                                    </div>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        <?php
						 } ?>
                        <?php if(isset($_GET['veiw_user'])){ ?>
                        <?php } ?>
                        
                        </div>
                        
                    </div>
                </div>
                        
                        </div>
                          
                        </div>
                   </div>
                </div>
            </div> <div class="footer style-2">
            	<div class="background"><div class="stitch"></div></div>
                <div class="foot-nav-bg"></div>
            	<div class="content">
                    <div class="patch"></div>
                    <div class="blur"></div>
                    <div class="pattern">
                        <div class="container">
                        	<div class="stitch"></div>
                            <div class="sixteen columns">
                                <div class="first column alpha">
                                
                      <img src="images/lll.png" width="140" height="60"  />
                                        <p>
                                         Quick disease early warning system is a timely surveillance system that gathers information of different epidemic-prone diseases and handles public health outbreaks on time to prevent the effective area from more casualties. The system will inform/warn and produce awareness in general public from its symptoms, caution and other concern knowledge through reports. 
                     					</p>

                                </div>
                                <div class="column ct">
                                    <h5>Recent Tweets:</h5>
                                    <ul class="twitter" id="twitter_update_list"><li>Twitter is loading</li></ul>
                                </div>
                                <div class="last column omega">
                                    <h5>Join our Mailing List</h5>
                                    
                                    <div class="input-wrapper">
                                        <input type="text" placeholder="Email..." id="email" name="email" />
                                    </div>
                                    <div class="right">
                                    	<a href="#" class="button color"><span>Join</span></a>
                                    </div>
                                    <div class="clear"></div>
                                    <span class="hr"></span>
                                    <h5>Stay in Touch</h5>
                                    <ul class="sm foot">
                                        <li class="facebook"><a href="#facebook">Facebook</a></li>
                                        <li class="twitter"><a href="#twitter">LinkedIn</a></li>
                                        <li class="linkedin"><a href="#linkedin">Pinterest</a></li>
                                        <li class="pinterest"><a href="#pinterest">Pinterest</a></li>
                                        <li class="dribbble"><a href="#dribbble">Pinterest</a></li>
                                        <li class="flickr"><a href="#flickr">Pinterest</a></li>
                                        <li class="flavors"><a href="#flavors">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="sixteen columns alpha omega">
                        	<div class="foot-nav-bg"></div>
                            <div class="foot-nav">
                                <div class="copy">
                                    Coptyright © 2015 QDEWS. By Shakir Ullah & Zaheer Uddin
                                </div>
                                <div class="nav">
                                    <a href="#">Home</a>
                                    
                                    <a href="#">Contact Us</a>
                                    <a href="#">Terms of Use</a>
                                    <a href="#">Privacy</a>
                               	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
            $('.slide.testimonials').contentSlide({'nav': false});
        });
    </script>
    <script type="text/javascript" src="js/jquery.color.animation.js"></script>
    <script src="ajax/ajax_default.js" type="text/javascript"></script>
    <script src="ajax/email_conf.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>

    </div>
</body>

</html>

<?php } ?>