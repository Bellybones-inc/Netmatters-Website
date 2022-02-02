
    <?php
    require 'inc/header.php';
    ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <div class="container">

      <div class="locations">
        <div class="row">

          <div class="col-xs-12 col-md-4">
            <div class="block address address-cambridge">
            <div class="image">
              <a href="#">
                <img class="office_image" src="img/cambridge.jpeg" alt="Cambridge Netmatters Office">
              </a>
            </div>
              <div class="office_content">
                <h2>Cambridge Office</h2>
                <p class="p">
                  Unit 1.28,
                  <br>
                  St John's Innovation Centre,
                  <br>
                  Cowley Road,
                  Milton,
                  <br>
                  Cambridge,
                  <br>
                  CB4 0WS
                  </p>
              </div>
              <div class="telephone">
                <a>01223 37 57 72</a>
              </div>
          </div>
        </div>

          <div class="col-xs-12 col-md-4">
            <div class="block address address-cambridge">
            <div class="image">
              <a href="#">
                <img class="office_image" src="img/wymondham.jpeg" alt="Cambridge Netmatters Office">
              </a>
            </div>
              <div class="office_content">
                <h2>Wymondham Office</h2>
                <p class="p">
                  Unit 15,
                  <br>
                  Penfold Drive,
                  <br>
                  Gateway 11 Business Park,
                  <br>
                  Wymondham, Norfolk,
                  <br>
                  NR18 0WZ
                </p>
              </div>
              <div class="telephone">
                <a>01603 70 40 20</a>
              </div>
          </div>
        </div>

          <div class="col-xs-12 col-md-4">
            <div class="block address address-cambridge">
              <div class="image">
                <a href="#">
                  <img class="office_image" src="img/yarmouth-2.jpeg" alt="Cambridge Netmatters Office">
                </a>
              </div>
              <div class="office_content">
                <h2>Great Yarmouth Office</h2>
                <p class="p">
                  Suite F23,
                  <br>
                  Beacon Innovation Centre,
                  <br>
                  Beacon Park, Gorleston,
                  <br>
                  Great Yarmouth, Norfolk,
                  <br>
                  NR31 7RA
                </p>
              </div>
              <div class="telephone">
                <a>01493 60 32 04</a>
              </div>
          </div>
        </div>

        </div>
      </div>

    </div>

    </div>
    </div>

    <div class="container">

    <div class="details_con">
      <p>Email us on:</p>
      <p><a href="#" class="net_email">sales@netmatters.com</a></p>
      <p class="bus_hrs">Business Hours</p>
      <p class="opening">Monday - Friday 7:00 - 18:00</p>
    </div>

    <div class="accordion out-of-hours">
      <div id="question-wrapper" class="hide">
        <h4>
          <a class="dropdown_link" href="#/">
            <p id="support-heading" class="hide">Out of Hours IT Support
            <i id="arrow" class="fa fa-chevron-down rotate"></i></p>
          </a>
        </h4>

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
      </div>
    </div>

    <!-- Email section -->

    <form id="contact_form" action="upload.php" method="POST">
      <div class="row">

        <div id="error"></div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
              <label for="name">Your Name</label>
                <input class="form-control" id="name" type="text" name="name">
            </fieldset>
            <div id="name_err"></div>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="company">Company Name</label>
              <input class="form-control" id="company" type="text" value="" name="company">
            </fieldset>

          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="email">Your Email</label>
              <input class="form-control" id="email" type="text"  name="email" value="">
            </fieldset>
              <div id="email_err"></div>
          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <fieldset>
            <label for="phone">Your Telephone Number</label>
              <input class="form-control" id="phone" type="text" name="phone" value="">
            </fieldset>
               <div id="phone_err"></div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <fieldset>
            <label for="subject">Subject</label>
              <input class="form-control" id="subject" type="text" name="subject" value="">
            </fieldset>
                <div id="subject_err"></div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <fieldset>
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="10" cols="50"></textarea>
            </fieldset>
              <div id="message_err"></div>
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

    <?php
    require 'inc/footer.php';
    ?>

    <?php
    require 'inc/sidebar.php';
    ?>

  </div>

    <script>
      $("#accordion").accordion();
    </script>

    <script src="js/contact.js"></script>

</body>
</html>
