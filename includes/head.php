<!-- Begin Styles -->
<link href="css/transition.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/960.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<!-- End Styles -->

<!-- Begin Scripts -->
<script type="text/javascript" language="javascript" src="js/script.js"></script>
<script type='text/javascript' src='js/jquery-1.8.2.min.js'></script>

<script>
    $(document).ready(function(){
        $('.toggle_show').click(function() {
          $(this).parents('.project_row').find('.more_info').slideToggle('slow',function() {
              $(this).parents('.project_row').find('.show .more').toggle();
              $(this).parents('.project_row').find('.show .less').toggle();
            });
        });
    });
</script>
<!-- End Scripts -->