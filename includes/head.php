<!-- Begin Styles -->
<link href="css/transition.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/960.css" />
<!-- End Styles -->

<!-- Begin Scripts -->
<script type="text/javascript" language="javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/fasw.transitions.min.js"></script>
<script type='text/javascript' src='js/jquery-1.8.2.min.js'></script>

<script type='text/javascript'>
    $(document).ready(function(){
        $("img.a").hover(
            function() {
                $(this).stop().animate({"opacity": "0"}, "fast");
                },
            function() {
                $(this).stop().animate({"opacity": "1"}, "fast");
                }
        );

    });
</script>
<!-- End Scripts -->