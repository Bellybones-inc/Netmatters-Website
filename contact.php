
    <?php
    require 'inc/header.php';
    ?>

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
