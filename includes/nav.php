<!-- Begin Navigation -->
<div class="grid_10">
    <div class="nav">
        <ul id="nav">
            <li <?php if ($nav == 'about') { print 'value="1" class="selected""'; } ?>>      <a href="index.php">About Dan</a></li>
            <li <?php if ($nav == 'projects') { print 'value="1" class="selected""'; } ?>>   <a href="projects.php">Recent Projects</a></li>
            <li <?php if ($nav == 'resume') { print 'value="1" class="selected""'; } ?>>     <a href="resume.php">The Resumé</a></li>
            <li <?php if ($nav == 'contact') { print 'value="1" class="selected"'; } ?>>    <a href="contact.php">Contact Me</a></li>
        </ul>
        <div id="slide"></div>
    </div>

    <div class="clear"></div>
</div>
<!-- End Navigation -->