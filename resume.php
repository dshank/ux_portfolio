<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Portfolio</title>

<head>
    <?php $nav = 'resume'?>
    <?php include('includes/head.php'); ?>
</head>

<body onload="menuSlider.init('nav','slide')">

    <div class="container_12">

    <?php include('includes/header.php'); ?>
    <?php include('includes/nav.php'); ?>

        <!-- Begin Content -->
        <div id="content">

            <div><a href="resume.pdf" target="_blank"><img width=50px style="vertical-align:middle;" src='images/pdf.png'>Click here to download PDF<a><br><br></div>

            <div class="grid_12">
                <center><object data="resume.pdf" type="application/pdf" width="89%" height="1070px"></object>
            </div>

        </div>
        <!-- End Content -->

    </div>

</body>

</html>
