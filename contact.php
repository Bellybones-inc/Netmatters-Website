
    <?php
    require 'inc/header.php';
    ?>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    </div>
    </div>

    <div class="container">

    <div class="details_con">
      <p>Email us on:</p>
      <p><a href="#" class="net_email">sales@netmatters.com</a></p>
      <p class="bus_hrs">Business Hours</p>
      <p class="opening">Monday - Friday 7:00 - 18:00</p>
    </div>

    <div class="out-of-hours">
      <div class="question out-of-hours">
        <h4>
          <a href="#">
            <p class="question-text">
              "Out of Hours IT Support"
            </p>
            <i id="arrow" class="fa fa-chevron-down rotate"></i>
          </a>
        </h4>
      </div>
    </div>
    <div id="answer">
      <p>
        Netmatters IT are offering an Out of Hours service for Emergency and
        Critical tasks.
      </p>
      <p>
        <strong>Monday - Friday 18:00 - 22:00</strong>
        <strong>Saturday 08:00 - 16:00</strong></br>
        <strong>Sunday 10:00 - 18:00</strong>
      </p>
      <p>
        To log a critical task, you will need to call our main line number
        and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician
        will contact you on the number provided within 45 minutes of your call.&nbsp;
      </p>
    </div>

    <form id="contact_form" action="" method="POST">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            
            <fieldset>
              <label for="name">Your Name</label>
                <input id="name" type="text" name="name">
            </fieldset>
          </div>
        </div>


        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="company">Company Name</label>
              <input id="company" type="text" value="" name="company">
            </fieldset>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="email">Your Email</label>
              <input id="email" type="text"  name="email" value="">
            </fieldset>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="phone">Your Telephone Number</label>
              <input id="phone" type="text" name="phone" value="">
            </fieldset>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <fieldset>
            <label for="subject">Subject</label>
              <input id="subject" type="text" name="subject" value="">

            </fieldset>

          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <fieldset>
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="10" cols="50"></textarea>
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
            <button id="submit_enquire" type="submit" name="submit">Send Enquiry</button>
          </fieldset>

        </div>

      </div>
    </form>

    </div>

    <script>
    $("#accordion").accordion();
  </script>

  <script src="./js/contact.js"></script>

    <?php
    require 'inc/footer.php';
    ?>

    <?php
    require 'inc/sidebar.php';
    ?>

    <!-- <script>

    const submitButton = document.getElementById("submit_enquire");

    submitButton.addEventListener('click', () => {
    let name = document.getElementById("name").value;

    const formdata = new FormData();

    formdata.append("name", name);

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "")

  })

    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>
</html>
