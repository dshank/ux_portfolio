<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!-- Begin Navigation -->
<div id="navigation">
<ul id="navigation-items">
<li<?php if ($page == 'index.php') { print ' class="selected"'; } ?>><a href="index.php">Statement</a></li>
<li<?php if ($page == 'resume.php') { print ' class="selected"'; } ?>><a href="resume.php">Resumé</a></li>
<li<?php if ($page == 'skills.php') { print ' class="selected"'; } ?>><a href="skills.php">Skills</a></li>
<li<?php if ($page == 'contact.php') { print ' class="selected"'; } ?>><a href="contact.php">Contact</a></li>
</ul>
</div>
<!-- End Navigation -->