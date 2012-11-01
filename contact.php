<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Me</title>

<head>
    <?php $nav = 'contact'?>
    <?php include('includes/head.php'); ?>
</head>

<body onload="menuSlider.init('nav','slide')">

    <div class="container_12">

    <?php include('includes/header.php'); ?>
    <?php include('includes/nav.php'); ?>

        <!-- Begin Content -->
        <div id="content">

            <?php

            if ( isset ($_POST['submit-form']) ) {  // Check for each form value when the form is submitted:

            $problem = FALSE; // no problems!


            if (!$problem) { // if there are no problems:

            $mailMesage =  ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email.

            $mailSubject = "{$_POST['subject']}"; // subject of the email.

            $mailRecipient = "dshank@uw.edu"; // destination email address.

            mail ($mailRecipient, $mailSubject , $mailMesage); // Function to send the email.

            print ("<p>Thanks for the shout, {$_POST['name']}!</p>\n"); // Notice that thanks the user.

            }
            }
            ?>
            <h2>Contact</h2>

            <form action="contact.php" method="post" name="contact-form">
            <table width="620" cellspacing="10">
              <tr>
                <td><label for="name">Name</label></td>
                <td><span id="sprytextfield1">
                  <input type="text" name="name" id="name" border=1>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td><span id="sprytextfield2">
                  <input type="text" name="email" id="email">
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td><label for="subject">Subject</label></td>
                <td><span id="spryselect1">
                  <select name="subject" id="subject">
                    <option value="1">You're awesome</option>
                    <option value="2">I want to hire you</option>
                    <option value="3">Let's play cribbage</option>
                    <option value="4">Call Me</option>
                  </select>
                  <span class="selectRequiredMsg">Please select an item.</span></span></td>
              </tr>
              <tr>
                <td><label for="message">Message</label></td>
                <td><span id="sprytextarea1">
                  <textarea name="message" id="message" cols="45" rows="5"></textarea>
                  <span class="textareaRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="reset-form" type="reset" value="Clear" />
                    <input name="submit-form" type="submit" value="Send Message">
                </td>
              </tr>
            </table>


            </form>


            </div>

    <!-- End Content -->

        </div>

    </div>

    <script type="text/javascript">
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
    var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
    </script>

</body>

</html>
