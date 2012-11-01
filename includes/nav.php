<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!-- Begin Navigation -->
<div class="grid_12">
    <div class="nav">
        <ul id="nav">
            <li <?php if ($page == 'index.php') { print 'value="1"'; } ?>>      <a href="index.php">About</a></li>
            <li <?php if ($page == 'projects.php') { print 'value="1"'; } ?>>   <a href="projects.php">Projects</a></li>
            <li <?php if ($page == 'resume.php') { print 'value="1"'; } ?>>     <a href="resume.php">Resumé</a></li>
            <li <?php if ($page == 'contact.php') { print 'value="1"'; } ?>>    <a href="contact.php">Contact</a></li>
        </ul>
        <div id="slide"></div>
    </div>

    <div class="clear"></div>
</div>
<!-- End Navigation -->