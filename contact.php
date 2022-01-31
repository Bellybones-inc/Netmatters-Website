
    <?php
    require 'inc/header.php';
    ?>

    <?php
    include 'form_process.php';
    ?>

  </div>
  </div>

    <div class="container">

    <div class="details_con">
      <p>Email us on:</p>
      <p><a href="#" class="net_email">sales@netmatters.com</a></p>
      <p class="bus_hrs">Business Hours</p>
      <p class="opening">Monday - Friday 7:00 - 18:00</p>
    </div>

    <form id="contact_form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <fieldset>
              <label for="name">Your Name</label>
                <input class="form-control" type="text" value="<?php echo $name; ?>" name="name">
                <span id="error"><?= $name_error ?></span>
            </fieldset>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="company">Company Name</label>
              <input class="form-control" type="text" value="<?php echo $company; ?>" name="company">
              <span id="error"><?= $company_error ?></span>
            </fieldset>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="email">Your Email</label>
              <input class="form-control" type="text"  name="email" value="<?php $email; ?>">
              <span id="error"><?= $email_error ?></span>
            </fieldset>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="phone">Your Telephone Number</label>
              <input class="form-control" type="text" name="phone" value="<?php echo $phone;?>">
              <span id="error"><?= $phone_error ?></span>
            </fieldset>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <fieldset>
            <label for="subject">Subject</label>
              <input class="form-control" type="text" name="subject" value="<?php echo $subject;?>">
              <span id="error"><?= $subject_error ?></span>
            </fieldset>

          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <fieldset>
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="10" cols="50"><?php echo $message ?></textarea>
            </fieldset>
          </div>
        </div>

        <div class="marketing_info_container">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
          </div>
          <p class="policy_text">Please tick this box if you wish to receive marketing
            information from us. Please see our
            <a href="#" class="privacy">Privacy Policy</a> for more
            information on how we use your data.
            <span class="space_between">&nbsp;</span>
          </p>
        </div>

        <div class="col-6">
          <fieldset>
            <button id="enquire" type="submit" name="submit">Send Enquiry</button>
          </fieldset>

        </div>


      </div>
  </form>

    </div>

    <?php
    require 'inc/footer.php';
    ?>

    <?php
    require 'inc/sidebar.php';
    ?>

    <script src="js/contact.js"></script>

</body>
</html>
