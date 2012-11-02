<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Portfolio</title>

<head>
    <?php $nav = 'projects'?>
    <?php include('includes/head.php'); ?>
    <script>
        $(document).ready(function(){
            $('.toggle_show').click(function() {
              $(this).parents('.project_row').find('.more_info').slideToggle('slow',function() {
                  $(this).parents('.project_row').find('div.arrow.up').fadeToggle();
                  $(this).parents('.project_row').find('div.arrow.down').fadeToggle();
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
                        <a rel="group" title="Caption 1 oh so many captions" href="images/wyc_thumb.png"><img src="images/wyc_thumb.png" class="thumb"/></a>
                        <a rel="group" title="Caption 2" href="images/hands_thumb.png"></a>
                        <a rel="group" title="Caption 3" href="images/tool_thumb.png"></a>
                        <a rel="group" title="Caption 4" href="images/market_thumb.png"></a>
                    </div>
                </div>

                <div class="grid_7 description">
                    <p>Class Project to redesign an existing site using User Centered principles.  Site chosen for our group was the Washington Yacht Club</p>
                    <br><p><b>Goals: </b>Improve Usability and Visual Design</p>
                    <p><b>Role: </b>Team Organizer, Visual Designer, Programmer</p>
                    <p><b>Technologies Used: </b>SimpleCardSort, Axure, Photoshop, HTML, CSS, Google Sites</p>
                </div>

                <div class="grid_1">
                    <div class="fadehover arrow up">
                        <a class='toggle_show'>
                            <img src="images/arrow_down.png" alt="" class="a">
                            <img src="images/arrow_down_hover.png" alt="" class="b">
                        </a>
                    </div>
                </div>

                <div class="clear"></div>

                <div style="display:none" class="more_info">
                    <br>
                    <div class="grid_4">
                    </div>
                    <div class="grid_7">
                        <p>Project involved the following deliverables:</p>
                        <ul>
                            <li>Personas</li>
                            <li>Card Sort</li>
                            <li>Information Architecture</li>
                            <li>Wireframe</li>
                            <li>Clickable Prototype</li>
                            <li>Usability Test Scenarios</li>
                            <li>Deployment Version</li>
                        </ul>
                    </div>
                    <div class="grid_1">
                        <div class="fadehover arrow down" style="display:none">
                            <a class='toggle_show'>
                                <img src="images/arrow_up.png" alt="" class="a">
                                <img src="images/arrow_up_hover.png" alt="" class="b">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>


            </div>


		
		    <div class="spacer"></div>


		
            <div class="project_row">

                <div class="grid_4 center">
                    <h3>The Language of Hands</h3>
                    <img src='images/hands_thumb.png'>
                </div>

                <div class="grid_7 description">
                    <p>The purpose of this project was to explore the embedded meaning of visual language in a particular context. </p>
                    <p>The context chosen was that of hands, specifically the ways meaning is embedded within a person's choice of rings, nails, tattoos</p>
                </div>

                <div class="grid_1">
                    <div class="fadehover arrow">
                        <a class='toggle_show'>
                            <img src="images/arrow_right.png" alt="" class="a">
                            <img src="images/arrow_right_hover.png" alt="" class="b">
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
                    <h3>Tool Tutor</h3>
                    <img src='images/tool_thumb.png' width=150>
                </div>

                <div class="grid_7 description">
                    <p>This project was developed for the purpose of exploring interactions </p>
                </div>

                <div class="grid_1">
                    <div class="fadehover arrow">
                        <a class="toggle_show">
                            <img src="images/arrow_right.png" alt="" class="a ">
                            <img src="images/arrow_right_hover.png" alt="" class="b ">
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

                <div class="grid_7 description">
                    <p></p>
                </div>

                <div class="grid_1">
                    <div class="fadehover arrow">
                        <a class="toggle_show">
                            <img src="images/arrow_right.png" alt="" class="a">
                            <img src="images/arrow_right_hover.png" alt="" class="b">
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
                    <img class='thumb' src='images/cribbage_thumb.png'>
                </div>

                <div class="grid_7 description">
                    <p></p>
                </div>

                <div class="grid_1">
                    <div class="fadehover arrow">
                        <a class="toggle_show">
                            <img src="images/arrow_right.png" alt="" class="a">
                            <img src="images/arrow_right_hover.png" alt="" class="b">
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
