
    <?php
    require 'inc/head.php';
    ?>

    <body>
    <div id="top_container">

      <div class="main">
        <div class="main-outer">
          <div class="main-inner">

          <?php
          include 'inc/header.php';
          ?>

          <div class="contact_middle after_header">

          <div class="hidden-xs breadcrumb_container">
          <div class="container">
          <ul class="breadcrumb">
            <li>
              <a class="home_link" href="/">
                Home
              </a>
            </li>
            <li class="our_off">
                Our Offices
            </li>
            </ul>
            </div>
            </div>

          <div class="section_top">
            <div class="page_head">
            <div class="container">
              <h1>Our Offices</h1>
            </div>
            </div>
          </div>

          <div class="locations">
            <div class="service-list container">
            <div class="row">

          <div class="col-lg-4 col-md-12 spacer-sm">
            <div class="address address-cambridge">
            <div class="image">
              <a href="#">
                <img class="office_image" src="img/cambridge.jpeg" alt="Cambridge Netmatters Office">
              </a>
            </div>
              <div class="office_content">
                <p class="h2">
                  <a href="#" class="office_header">Cambridge Office</a>
                  </p>
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

              <div class="telephone">
                <a href="#" class="h3">01223 37 57 72</a>
              </div>

              <button type="button" name="button" class="view_btn btn btn-secondary btn-soft">View More</button>

              </div>
          </div>
          <div class="cambridge" id="map1">
            </div>
        </div>

          <div class=" col-lg-4 col-md-12 spacer-sm">
            <div class="address address-cambridge">
            <div class="image">
              <a href="#">
                <img class="office_image" src="img/wymondham.jpeg" alt="Cambridge Netmatters Office">
              </a>
            </div>
              <div class="office_content">
                <p class="h2">
                  <a href="#" class="office_header">Wymondham Office</a>
                  </p>
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

              <div class="telephone">
                <a href="#" class="h3">01603 70 40 20</a>
              </div>

              <button type="button" name="button" class="view_btn btn btn-secondary btn-soft">View More</button>

              </div>
          </div>
          <div class="norfolk" id="map2">
            </div>
        </div>

          <div class="col-lg-4 col-md-12 spacer-sm">
            <div class="address address-cambridge">
              <div class="image">
                <a href="#">
                  <img class="office_image" src="img/yarmouth-2.jpeg" alt="Cambridge Netmatters Office">
                </a>
              </div>
              <div class="office_content">
                <p class="h2">
                  <a href="#" class="office_header">Great Yarmouth Office</a>
                </p>
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

              <div class="telephone">
                <a href="#" class="h3">01493 60 32 04</a>
              </div>

              <button type="button" name="button" class="view_btn btn btn-secondary btn-soft">View More</button>

              </div>
          </div>
          <div class="yarmouth" id="map3">
            </div>
        </div>

        </div>
      </div>

    </div>


    <div class="container">
      <div class="row contact_row">

        <div class="col-lg-4 col-lg-pull-4">

        <div class="details_con">
          <p>Email us on:</p>
          <p><a href="#" class="net_email">sales@netmatters.com</a></p>
          <p class="bus_hrs">Business Hours</p>
          <p class="opening">Monday - Friday 7:00 - 18:00</p>
        </div>

            <div class="out-of-hours">
              <div id="question-wrapper" class="hide">
                <h4>
                  <a class="dropdown_link" href="#/">
                    <p id="support-heading">Out of Hours IT Support
                    <em id="arrow" class="fa fa-chevron-down rotate"></em>
                  </p>
                  </a>
                </h4>


            <dv id="answer">
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
        <div class="col-lg-8 col-lg-pull-4">

        <form id="contact_form" action="/includes/upload.php" method="POST">
        <!-- <div id="contact_form"> -->

        <div id="error"></div>
        <!-- <div id="response"></div> -->
        <div class="row">

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <fieldset>
              <label for="name">Your Name</label>
                <input class="form-control field_input" id="name" type="text" name="name">
            </fieldset>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <fieldset>
            <label class="company-label" for="company">Company Name</label>
              <input class="form-control field_input" id="company" type="text" name="company">
            </fieldset>
          </div>
        </div>

        </div>

        <div class="row">

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <fieldset>
            <label for="email">Your Email</label>
              <input class="form-control field_input" id="email" type="text"  name="email" value="">
            </fieldset>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <fieldset>
            <label for="phone">Your Telephone Number</label>
              <input class="form-control field_input" id="phone" type="text" name="phone" value="">
            </fieldset>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <fieldset>
            <label for="subject">Subject</label>
              <input class="form-control field_input" id="subject" type="text" name="subject" value="">
            </fieldset>

          </div>
        </div>
      </div>

        <div class="row">
        <div class="col-12">
          <div class="form-group">
            <fieldset>
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="10" cols="50"></textarea>
            </fieldset>
          </div>
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
            <button class="enquire" id="submit_enquire" type="submit" name="submit">Send Enquiry</button>
          </fieldset>

        </div>
      </form>
    </div>
    </div>

    </div>
    </div><!-- middle end  -->

    <?php
    include 'inc/footer.php';
    ?>
    </div><!-- main-inner end  -->
  </div><!-- main-outer end  -->
  <?php
  include 'inc/sidebar.php';
  ?>
  </div>
  </div>
  </div> <!-- main  -->


  </div> <!-- top container  -->

    <script src="js/contact.js"></script>
    <script src="js/office.js"></script>
    <script src="js/side.js"></script>
    <script src="js/scroll.js"></script>

</body>
</html>
