
    <?php
    require 'inc/header.php';
    ?>

  </div>
  </div>

    <div class="container">




    <form id="contact_form" action="index.html" method="post">
      <div class="fields">

        <div class="input_field">
          <div class="form-group">
            <label for="name" class="required">Your Name</label>
            <input class="form-control" type="text" name="name">
          </div>
        </div>

        <div class="input_field">
          <div class="form-group">
            <label for="company" class="required">Company Name</label>
            <input class="form-control" type="text" name="company">
          </div>
        </div>

        <div class="input_field">
          <div class="form-group">
            <label for="email" class="required">Your Email</label>
            <input class="form-control" type="email" name="email">
          </div>
        </div>

        <div class="input_field">
          <div class="form-group">
            <label for="telephone" class="required">Your Telephone Number</label>
            <input class="form-control" type="text" name="telephone">
          </div>
        </div>

        <div class="input_field">
          <div class="form-group">
            <label for="subject" class="required">Subject</label>
            <input class="form-control" type="text" name="subject">
          </div>
        </div>

        <div class="input_field">
          <div class="form-group">
            <label for="message" class="required">Message</label>
            <textarea class="form-control" name="message" rows="10" cols="50"></textarea>
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

        <button type="submit" name="button">Send Enquiry</button>

      </div>
    </form>

    </div>

    <?php
    require 'inc/footer.php';
    ?>

    <?php
    require 'inc/sidebar.php';
    ?>

</body>
</html>
