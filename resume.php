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

            <div class="grid_12 center">
                <a href="resume.pdf" target="_blank">Click here to download PDF</a>
            </div>

            <div class="clear"></div><br>

            <div class="grid_12">
                <center><object data="resume.pdf" type="application/pdf" width="89%" height="1070px"></object></center>
            </div>

        </div>
        <!-- End Content -->

    </div>

    <?php include('includes/footer.php'); ?>

</body>

</html>
