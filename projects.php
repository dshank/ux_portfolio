<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" xmlns="http://www.w3.org/1999/html"/>

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
                    <div class="fancyDemo">
                        <a rel="group" title="Old version of website" href="images/wyc/wyc_old.png"><img src="images/wyc/wyc_stack.png" width=300/></a>
                    </div>
                </div>

                <div class="grid_8 description">
                    <p><b>The Challenge: </b>Class Group Project to redesign an existing site using User Centered principles.  Site chosen for our group was the Washington Yacht Club. Project was completed over the course of 9 weeks</p>
                    <p><b>Project Goals: </b>Improve Usability and Visual Design in order to better present the character of the Club</p>
                    <p><b>Role: </b>Project Manager, Visual Designer, Programmer</p>
                    <p><b>Technologies Used: </b>SimpleCardSort, Axure, Photoshop, HTML, CSS, Google Sites</p>

                    <div class="fadehover button">
                        <a href="https://sites.google.com/site/wycprojectfinalprototype/" target="_blank">
                            <img src="images/view_button.png" alt="" class="a">
                            <img src="images/view_button_hover.png" alt="" class="b">
                        </a>
                    </div>


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

                <div style="display:none" class="more_info">
                    <br>
                    <div class="grid_3 fancyDemo">
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
                        <p>First Stage</p>
                        <ul>
                            <li>Personas developed from Survey results sent out to members of the club and various interviews of club officers</li>
                        </ul>
                    </div>

                    <div class="grid_3">
                        <p>Second Stage</p>
                        <ul>
                            <li>Information Architecture developed from card sorting exercises executed using SimpleSort</li>
                        </ul>
                    </div>

                    <div class="grid_3">
                        <p>Third Stage</p>
                        <ul>
                            <li>Clickable Prototype developed using Axure and modified incrementally using feedback from conducted usability tests</li>
                        </ul>
                    </div>

                    <div class="grid_3">
                        <p>Final Stage:</p>
                        <ul>
                            <li>Finished version was developed using a combination of Google Sites and custom HTML and CSS.  Photoshop was also used extensively for the visual design</li>
                        </ul>
                    </div>

                </div>
                <div class="clear"></div>

            </div>


		
		    <div class="spacer"></div>


		
            <div class="project_row">

                <div class="grid_4 center">
                    <h3>The Language of Hands</h3>
                    <img class="thumb" src='images/hands_thumb.png' width=220>
                </div>

                <div class="grid_8 description">
                    <p>Individual Class project who's purpose was to explore the embedded meaning of visual language in a particular context. </p>
                    <p><b>Project Goals: </b>To explore the ways we embed meaning in a person's choice of rings, nails, and tattoos to decorate their hands</p>
                     <p><b>Technologies Used: </b>Photoshop, Axure</p>

                     <div class="fadehover button">
                         <a href="http://students.washington.edu/dshank/Project_V3/Male.html" target="_blank">
                             <img src="images/view_button.png" alt="" class="a">
                             <img src="images/view_button_hover.png" alt="" class="b">
                         </a>
                     </div>
                 </div>

                <div class="clear">

            </div>


            <div class="spacer"></div>


            <div class="project_row">

                <div class="grid_4 center">
                    <h3>Tool Tutor</h3>
                    <img src='images/tool_thumb.png'>
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
                <div class="clear">
            </div>


            <div class="spacer"></div>


            <div class="project_row">

                <div class="grid_4 center">
                    <h3>Market Maven</h3>
                    <img class='thumb' src='images/market_thumb.png'>
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
                    <img src='images/wood_thumb.png' width=300>
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
