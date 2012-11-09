<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>

<title>Portfolio</title>

<head>
    <?php $nav = 'projects'?>
    <?php include('includes/head.php'); ?>

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

            <?php include('includes/project_wyc.php'); ?>
		
		    <div class="spacer"></div>


            <?php include('includes/project_tool.php'); ?>

            <div class="spacer"></div>


            <?php include('includes/project_hands.php'); ?>

            <div class="spacer"></div>


            <?php include('includes/project_market.php'); ?>

            <div class="spacer"></div>


            <?php include('includes/project_wood.php'); ?>


		</div>
        <!-- End Content -->

    </div>

    <?php include('includes/footer.php'); ?>

</body>

</html>
