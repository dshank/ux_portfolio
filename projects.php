<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>

<title>Portfolio</title>

<head>
    <?php $nav = 'projects'?>
    <?php include('includes/head.php'); ?>
    <script>
        $(document).ready(function(){
            $('.toggle_show').click(function() {
              $(this).parents('.project_row').find('.more_info').slideToggle('slow',function() {
                  $(this).parents('.project_row').find('div.arrow.up').toggle();
                  $(this).parents('.project_row').find('div.arrow.down').toggle();
                });
            });
        });
    </script>

    <link rel="stylesheet" type="text/css" href="jquery.fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="jquery.fancybox/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="jquery.fancybox/jquery.fancybox-1.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("div.fancyDemo a").fancybox();
        });
    </script>

</head>

<body onload="menuSlider.init('nav','slide')">

    <div class="container_12">

    <?php include('includes/header.php'); ?>
    <?php include('includes/nav.php'); ?>

        <!-- Begin Content -->
        <div id="content">
		
            <div class="project_row">

                <div class="grid_4 center">
                    <h3>Washington Yacht Club</h3>
                        <a href="https://sites.google.com/site/wycprojectfinalprototype/" target="_blank">
                            <img src="images/wyc/wyc_new.png" width=275 style="border: 1px solid #A0A0A0;"/>
                        </a>

                    <!--<br>-->
                    <!--<div class="fadehover button">-->
                        <!--<a href="https://sites.google.com/site/wycprojectfinalprototype/" target="_blank">-->
                            <!--<img src="images/view_button.png" alt="" class="a">-->
                            <!--<img src="images/view_button_hover.png" alt="" class="b">-->
                        <!--</a>-->
                    <!--</div>-->

                </div>

                <div class="grid_8 description">
                    <p>
                        A class group project to redesign an existing site using User Centered principles.  Site chosen for our group was the Washington Yacht Club due
                        to my personal involvement in the club and the messy state of their current site. Project was completed over the course of 9 weeks with the cooperation
                        of the club officers as stakeholders.
                    </p>
                    <br><p><b>Goals: </b>Improve Usability and Visual Design to better present the character of the club</p>
                    <p><b>Personal Role: </b>Project Manager, Visual Designer, Programmer</p>
                    <p><b>Technologies Used: </b>SimpleCardSort, Axure, Photoshop, HTML, CSS, Google Sites</p>
                    <p><b>Challenges: </b>Working within the context of Google Sites to reduce the technical burden of continuing use. Intelligently reducing the amount of published content.</p>


                    <!--<div class="fadehover arrow up">-->
                        <!--<a class='toggle_show'>-->
                            <!--<img src="images/arrow_down.png" alt="" class="a">-->
                            <!--<img src="images/arrow_down_hover.png" alt="" class="b">-->
                        <!--</a>-->
                    <!--</div>-->
                    <!--<div class="fadehover arrow down" style="display:none">-->
                        <!--<a class='toggle_show'>-->
                            <!--<img src="images/arrow_up.png" alt="" class="a">-->
                            <!--<img src="images/arrow_up_hover.png" alt="" class="b">-->
                        <!--</a>-->
                    <!--</div>-->
                  </div>

                <div class="clear"></div>

                <div class="more_info">
                    <br><br>
                    <div class="grid_3 fancyDemo">
                        <a rel="group" title="Old version of website" href="images/wyc/wyc_old.png">
                        <a rel="group" title="Personas - Developed from Surveys and Interviews" href="images/wyc/wyc_persona_exp.png"><img src="images/wyc/wyc_persona_exp.png" class="thumb"/></a>
                        <a rel="group" title="Personas - Novice Members" href="images/wyc/wyc_persona_nov.png"></a>
                    </div>

                    <div class="grid_3 fancyDemo">
                        <a rel="group" title="Information Architecture" href="images/wyc/wyc_information_architecture.png"><img src="images/wyc/wyc_info_arch.png" class="thumb"/></a>
                    </div>

                    <div class="grid_3 fancyDemo">
                        <a rel="group" title="Clickable Prototype - Built Using Axure" href="images/wyc/wyc_prototype.png"><img src="images/wyc/wyc_prototype.png" class="thumb"/></a>
                    </div>

                    <div class="grid_3 fancyDemo">
                        <a rel="group" title="Final Version - Developed Using a combination of Google Sites and custom HTML/CSS" href="images/wyc/wyc_new.png"><img src="images/wyc/wyc_new.png" class="thumb"/></a>
                    </div>
                    <div class="clear"></div><br/>

                    <div class="grid_3">
                        <p><b>Research and Personas</b></p>
                        <ul>
                            <li>Personas were developed based on data retrieved from surveys sent out to club members in addition to various interviews of club officers</li>
                        </ul>
                    </div>

                    <div class="grid_3">
                        <p><b>Information Architecture</b></p>
                        <ul>
                            <li>Preliminary Information Architecture was developed from card sorting exercises executed using SimpleSort</li>
                        </ul>
                    </div>

                    <div class="grid_3">
                        <p><b>Prototype</b></p>
                        <ul>
                            <li>Clickable Prototype was developed using Axure and modified incrementally using feedback from conducted usability tests</li>
                        </ul>
                    </div>

                    <div class="grid_3">
                        <p><b>Release</b></p>
                        <ul>
                            <li>Finished version was developed using a combination of Google Sites and custom HTML and CSS. Photoshop was also used extensively for the visual design</li>
                        </ul>
                    </div>

                </div>
                <div class="clear"></div>

                <div class="center" style="height:22px; cursor:pointer;">
                    <a class='toggle_show'><img src="images/tab.png" width=175></a>
                </div>

            </div>


		
		    <div class="spacer"></div>


		
            <div class="project_row">

                <div class="grid_4 center">
                    <h3>The Language of Hands</h3>
                    <a href="http://students.washington.edu/dshank/Project_V3/Male.html" target="_blank">
                        <img src='images/hands_thumb.png' width=220>
                    </a>
                </div>

                <div class="grid_8 description">
                    <p>An individual class project to explore the embedded meaning of visual language using an interactive interface</p>
                    <br></b><p><b>Goals: </b>To explore the ways we embed meaning in a person's choice of rings, nails, and tattoos in order to decorate their hands</p>
                    <p><b>Technologies Used: </b>Photoshop, Axure</p>
                    <p><b>Challenges: </b>Limiting the scope of the project to just nails, rings, and tatoos for different hand types.  Other possible directions included
                            scars and wrist decorations such as watches and bracelets.  </p>

                     <!--<div class="fadehover button">-->
                         <!--<a href="http://students.washington.edu/dshank/Project_V3/Male.html" target="_blank">-->
                             <!--<img src="images/view_button.png" alt="" class="a">-->
                             <!--<img src="images/view_button_hover.png" alt="" class="b">-->
                         <!--</a>-->
                     <!--</div>-->
                    
                    
                    <!--<div class="fadehover arrow up">-->
                        <!--<a class='toggle_show'>-->
                            <!--<img src="images/arrow_down.png" alt="" class="a">-->
                            <!--<img src="images/arrow_down_hover.png" alt="" class="b">-->
                        <!--</a>-->
                    <!--</div>-->
                    <!--<div class="fadehover arrow down" style="display:none">-->
                        <!--<a class='toggle_show'>-->
                            <!--<img src="images/arrow_up.png" alt="" class="a">-->
                            <!--<img src="images/arrow_up_hover.png" alt="" class="b">-->
                        <!--</a>-->
                    <!--</div>-->

                </div>

                <div class="clear"></div>

                <div class="more_info">
                    <br><br>
                    <div class="grid_4">
                        <p><b>Version 1</b></p>
                        <p>Very minimal interface. Used simple html buttons for controlling configurations.  Limited permutations.</p>
                    </div>
                    <div class="grid_4">
                        <p><b>Version 2</b></p>
                        <p>Added interface elements including title and footer. Also added additional permutations</p>
                    </div>
                    <div class="grid_4">
                        <p><b>Final Version</b></p>
                        <p>Changed interface to use a combination of text and images.  Added additional permutations. Added 'random' and 'reset' features. </p>
                    </div>
                
                </div>

                <div class="clear"></div>

                <div class="center" style="height:22px; cursor:pointer;">
                    <a class='toggle_show'><img src="images/tab.png" width=175></a>
                </div>

            </div>


            <div class="spacer"></div>


            <div class="project_row">

                <div class="grid_4 center">
                    <h3>Tool Tutor</h3>
                    <img src='images/tool_thumb.png' width=200>
                </div>

                <div class="grid_8 description">
                    <p>This project was developed for the purpose of exploring interactions </p>

                    <div class="fadehover arrow up">
                        <a class='toggle_show'>
                            <img src="images/arrow_down.png" alt="" class="a">
                            <img src="images/arrow_down_hover.png" alt="" class="b">
                        </a>
                    </div>
                    <div class="fadehover arrow down" style="display:none">
                        <a class='toggle_show'>
                            <img src="images/arrow_up.png" alt="" class="a">
                            <img src="images/arrow_up_hover.png" alt="" class="b">
                        </a>
                    </div>

                </div>

                <div class="clear"></div>

                <div style="display:none" class="grid_12 more_info">

                </div>
                <div class="clear"></div>
            </div>


            <div class="spacer"></div>


            <div class="project_row">

                <div class="grid_4 center">
                    <h3>Market Maven</h3>
                    <img src='images/market_thumb.png' style="border: 1px solid #A0A0A0;" width=275>
                </div>

                <div class="grid_8 description">
                    <p></p>

                    <div class="fadehover arrow up">
                        <a class='toggle_show'>
                            <img src="images/arrow_down.png" alt="" class="a">
                            <img src="images/arrow_down_hover.png" alt="" class="b">
                        </a>
                    </div>
                    <div class="fadehover arrow down" style="display:none">
                        <a class='toggle_show'>
                            <img src="images/arrow_up.png" alt="" class="a">
                            <img src="images/arrow_up_hover.png" alt="" class="b">
                        </a>
                    </div>

                </div>

                <div class="clear"></div>

                <div style="display:none" class="grid_12 more_info">

                </div>
                <div class="clear"></div>
            </div>


            <div class="spacer"></div>


            <div class="project_row">

                <div class="grid_4 center">
                    <h3>Wood Crafts</h3>
                    <img src='images/wood_thumb.png' width=325>
                </div>

                <div class="grid_8 description">
                    <p></p>

                    <div class="fadehover arrow up">
                        <a class='toggle_show'>
                            <img src="images/arrow_down.png" alt="" class="a">
                            <img src="images/arrow_down_hover.png" alt="" class="b">
                        </a>
                    </div>
                    <div class="fadehover arrow down" style="display:none">
                        <a class='toggle_show'>
                            <img src="images/arrow_up.png" alt="" class="a">
                            <img src="images/arrow_up_hover.png" alt="" class="b">
                        </a>
                    </div>

                </div>

                <div class="clear"></div>

                <div style="display:none" class="grid_12 more_info">

                </div>
                <div class="clear"></div>
            </div>

		</div>
        <!-- End Content -->

    </div>

</body>

</html>
