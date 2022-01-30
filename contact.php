
    <?php
    require 'inc/header.php';
    ?>

    <?php
    include 'form_process.php';
    ?>

  </div>
  </div>

    <div class="container">

      <?php
      include 'includes/dbh.php';

        $sql = "SELECT * FROM Fruit;";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo $row['Town'];
          }
        }
       ?>

    <div class="details_con">
      <p>Email us on:</p>
      <p><a href="#" class="net_email">sales@netmatters.com</a></p>
      <p class="bus_hrs">Business Hours</p>
      <p class="opening">Monday - Friday 7:00 - 18:00</p>
    </div>

    <form id="contact_form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="row">

        <div class="col-6">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input class="form-control" type="text" name="name">
            <span class="error"><?= $name_error ?></span>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="company">Company Name</label>
            <input class="form-control" type="text" name="company">
            <span class="error"><?= $company_error ?></span>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="email">Your Email</label>
            <input class="form-control" type="text" name="email">
            <span class="error"><?= $email_error ?></span>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="phone">Your Telephone Number</label>
            <input class="form-control" type="text" name="phone">
            <span class="error"><?= $phone_error ?></span>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="subject">Subject</label>
            <input class="form-control" type="text" name="subject">
            <span class="error"><?= $subject_error ?></span>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="message">Message</label>
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
        <div class="col-6">
          <button class="enquire" type="submit" name="button">Send Enquiry</button>
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
