<?php include 'header.php'; ?>

<style>
  .top-bar-wrapper {
    display: none !important
  }

  .image-card {
    height: 150px;
    width: 150px;
    border-radius: 8px;
  }
</style>

<section class="design-system-wrapper mb-5">

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> swiper </h1>
    </div>

    <div class="container">

      <!-- Slider main container -->
      <div class="swiper example-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
        </div>
        <!-- If we need pagination -->
        <div class="example-swiper-pagination swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="example-swiper-button-prev swiper-button-prev"></div>
        <div class="example-swiper-button-next swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="example-swiper-scrollbar swiper-scrollbar"></div>
      </div>

    </div>


  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Select 2 </h1>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label> Default select </label>
            <select class="form-control mb-3">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <label> Select2 single </label>
          <select class="select2 w-100">
            <option value="AL">Brazil</option>
            <option value="WY">Canada</option>
            <option value="CA">France</option>
            <option value="TX">Germany</option>
            <option value="FL">Italy</option>
            <option value="NY">Japan</option>
            <option value="IL">Kenya</option>
            <option value="GA">Mexico</option>
            <option value="OH">Nigeria</option>
            <option value="MI">Spain</option>
          </select>
        </div>

        <div class="col-md-4">
          <label> Select2 multiple </label>
          <select class="select2 w-100" multiple="multiple">
            <option value="AL">Brazil</option>
            <option value="WY">Canada</option>
            <option value="CA">France</option>
            <option value="TX">Germany</option>
            <option value="FL">Italy</option>
            <option value="NY">Japan</option>
            <option value="IL">Kenya</option>
            <option value="GA">Mexico</option>
            <option value="OH">Nigeria</option>
            <option value="MI">Spain</option>
          </select>
        </div>



      </div>
    </div>
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Containers </h1>
    </div>

    <div class="container-fluid bg-gray mb-3">
      <p class="m-0 text-center h3"> .container-fluid </p>
    </div>

    <div class="container bg-gray mb-3">
      <p class="m-0 text-center h3"> .container </p>
    </div>

    <div class="container-md bg-gray mb-3">
      <p class="m-0 text-center h3"> .container-md </p>
    </div>

    <div class="container-sm bg-gray mb-5">
      <p class="m-0 text-center h3"> .container-sm </p>
    </div>
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Custom icons </h1>
      <!-- https://codepen.io/waleedhd1/pen/poMWGgN -->
    </div>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-2">
          <i class="icon icon-box icon-sm"></i>
        </div>

        <div class="col-md-2">
          <i class="icon icon-box"></i>
        </div>

        <div class="col-md-2">
          <i class="icon icon-box icon-lg"></i>
        </div>

        <div class="col-md-2">
          <i class="icon icon-box icon-xl"></i>
        </div>

        <div class="col-md-2">
          <i class="icon icon-box icon-xxl"></i>
        </div>


        <div class="col-md-2">
          <i class="icon icon-box icon-xxxl"></i>
        </div>



      </div>
    </div> <!-- container -->
  </section>
  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Progress Circle </h1>
      <!-- https://codepen.io/waleedhd1/pen/poMWGgN -->
    </div>

    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <div class="progress-circle" data-finished="80" data-type="danger"></div>
          <p class="h3 text-capitalize mt-2"> danger </p>
        </div>
        <div class="col-md-4">
          <div class="progress-circle" data-finished="90" data-type="success"></div>
          <p class="h3 text-capitalize mt-2"> success </p>
        </div>
        <div class="col-md-4">
          <div class="progress-circle" data-finished="70" data-type=""></div>
          <p class="h3 text-capitalize mt-2"> other </p>
        </div>
      </div>
    </div> <!-- container -->
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Buttons </h1>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-md-2">
          <p class="m-0 mt-3 lead"> Normal </p>
        </div>

        <div class="col-md-10">
          <div class="d-flex mb-5">
            <button type="button" class="me-2 btn btn-primary">Primary</button>
            <button type="button" class="me-2 btn btn-secondary">Secondary</button>
            <button type="button" class="me-2 btn btn-success">Success</button>
            <button type="button" class="me-2 btn btn-danger">Danger</button>
            <button type="button" class="me-2 btn btn-warning">Warning</button>
            <button type="button" class="me-2 btn btn-info">Info</button>
            <button type="button" class="me-2 btn btn-dark">Dark</button>
            <button type="button" class="me-2 btn btn-gray"> gray </button>
            <button type="button" class="me-2 btn btn-light"> light </button>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-2">
          <p class="m-0 mt-3 lead"> Disabled </p>
        </div>
        <div class="col-md-10">
          <div class="d-flex mb-5 ">
            <button type="button" disabled class="me-2 btn btn-primary">Primary</button>
            <button type="button" disabled class="me-2 btn btn-secondary">Secondary</button>
            <button type="button" disabled class="me-2 btn btn-success">Success</button>
            <button type="button" disabled class="me-2 btn btn-danger">Danger</button>
            <button type="button" disabled class="me-2 btn btn-warning">Warning</button>
            <button type="button" disabled class="me-2 btn btn-info">Info</button>
            <button type="button" disabled class="me-2 btn btn-dark">Dark</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <p class="m-0 mt-3 lead"> Outline Normal </p>
        </div>
        <div class="col-md-10">
          <div class="d-flex mb-5 ">
            <button type="button" class="me-2 btn btn-outline-primary">Primary</button>
            <button type="button" class="me-2 btn btn-outline-secondary">Secondary</button>
            <button type="button" class="me-2 btn btn-outline-success">Success</button>
            <button type="button" class="me-2 btn btn-outline-danger">Danger</button>
            <button type="button" class="me-2 btn btn-outline-warning">Warning</button>
            <button type="button" class="me-2 btn btn-outline-info">Info</button>
            <button type="button" class="me-2 btn btn-outline-dark">Dark</button>
            <button type="button" class="me-2 btn btn-outline-light">light</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <p class="m-0 mt-3 lead"> Outline Disabled </p>
        </div>
        <div class="col-md-10">
          <div class="d-flex mb-5 ">
            <button type="button" disabled class="me-2 btn btn-outline-primary">Primary</button>
            <button type="button" disabled class="me-2 btn btn-outline-secondary">Secondary</button>
            <button type="button" disabled class="me-2 btn btn-outline-success">Success</button>
            <button type="button" disabled class="me-2 btn btn-outline-danger">Danger</button>
            <button type="button" disabled class="me-2 btn btn-outline-warning">Warning</button>
            <button type="button" disabled class="me-2 btn btn-outline-info">Info</button>
            <button type="button" disabled class="me-2 btn btn-outline-dark">Dark</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <p class="m-0 mt-1 lead"> Action buttons </p>
        </div>

        <div class="col-md-10">
          <div class="mb-3">
            <a href="#" class="btn btn-action btn-primary"> <i class="fa fa-check"></i> </a>
            <a href="#" class="btn btn-action btn-secondary"> <i class="fa fa-check"></i> </a>
            <a href="#" class="btn btn-action btn-success"> <i class="fa fa-check"></i> </a>
            <a href="#" class="btn btn-action btn-danger"> <i class="fa fa-check"></i> </a>
            <a href="#" class="btn btn-action btn-warning"> <i class="fa fa-check"></i> </a>
            <a href="#" class="btn btn-action btn-info"> <i class="fa fa-check"></i> </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <p class="m-0 mt-3 lead"> Sizes </p>
        </div>
        <div class="col-md-5">

          <div class="mb-5">

            <div class="mb-3">
              <button type="button" class="me-2 btn btn-primary btn-sm">Primary small </button>
              <button type="button" class="me-2 btn btn-primary">Primary normal </button>
              <button type="button" class="me-2 btn btn-primary btn-lg">Primary large </button>
            </div>

            <div class="mb-5">
              <button type="button" class="me-2 btn btn-primary w-100">Primary full width </button>
            </div>

          </div>
        </div>


      </div>

    </div>
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Forms </h1>
    </div>
    <div class="container mb-5">

      <div class="row">

        <div class="col-md-3">

          <div class="form-group">
            <label> Text input </label>
            <input type="text" class="form-control" placeholder="placeholder">
          </div>

        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">
            <label> Password </label>
            <input type="password" class="form-control" placeholder="Password">
          </div>
        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">
            <label> Email Input </label>
            <input type="email" class="form-control" placeholder="Your Email">
          </div>
        </div> <!-- col-md-3 -->

        <div class="col-md-3">

          <div class="form-group">

            <label> Phone Number </label>

            <div class="relative">

              <input type="text" class="form-control input-with-country-code" placeholder="Phone Number" required="">

              <div class="country-code-container">

                <select class="d-none" name="country" id="country">
                  <option value="001"> 001 </option>
                  <option value="002"> 002 </option>
                  <option selected value="003"> 003 </option>
                </select>

                <div class="dropdown">
                  <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown">
                    <img alt="" src="assets/images/flag-kuwait.png" /> +001
                    <i class="fa fa-chevron-down"></i>
                  </button>

                  <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                    <a data-value="1" class="dropdown-item" href="#"><img alt="" src="assets/images/flag-kuwait.png" /> +001 </a>
                    <a data-value="2" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-ksa.png" /> +002 </a>
                    <a data-value="3" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-uae.png" /> +003 </a>
                  </div>
                </div> <!-- dropdown -->

              </div><!-- country-code-container -->

              <div class="end-content">
                <a href="#" class="link link-primary"> Edit </a>
              </div>

            </div>

          </div><!-- form-group  -->

        </div> <!-- col-md-3 -->

        <div class="col-md-3">

          <div class="form-group">
            <label> Disabled Text input </label>
            <input type="text" class="form-control disabled" placeholder="placeholder" disabled>
          </div>

        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">
            <label> Password </label>
            <input type="password" class="form-control disabled" placeholder="Password" disabled>
          </div>
        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">
            <label> Email Input </label>
            <input type="email" class="form-control disabled" placeholder="Your Email" disabled>
          </div>
        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">

            <label>Your phone</label>

            <div class="relative">

              <input type="text" class="form-control input-with-country-code disabled" disabled placeholder="Phone Number" required="">

              <div class="country-code-container">

                <select class="d-none" name="country" id="country">
                  <option value="001"> 001 </option>
                  <option value="002"> 002 </option>
                  <option selected value="003"> 003 </option>
                </select>

                <div class="dropdown">
                  <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown">
                    <img alt="" src="assets/images/flag-kuwait.png" /> +001
                    <i class="fa fa-chevron-down"></i>
                  </button>

                  <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                    <a data-value="1" class="dropdown-item" href="#"><img alt="" src="assets/images/flag-kuwait.png" /> +001 </a>
                    <a data-value="2" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-ksa.png" /> +002 </a>
                    <a data-value="3" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-uae.png" /> +003 </a>
                  </div>
                </div> <!-- dropdown -->

              </div><!-- country-code-container -->

            </div>

          </div><!-- form-group  -->
        </div> <!-- col-md-3 -->

        <div class="col-md-3">

          <div class="form-group">
            <label> Text input </label>
            <input type="text" class="form-control is-invalid" placeholder="placeholder">
            <small class="form-text invalid-feedback">wrong username</small>
          </div>

        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">
            <label> Password </label>
            <input type="password" class="form-control is-invalid" placeholder="Password">
            <small id="emailHelp" class="form-text invalid-feedback">invalid password</small>
          </div>
        </div> <!-- col-md-3 -->

        <div class="col-md-3">
          <div class="form-group">
            <label> Email Input </label>
            <input type="email" class="form-control is-invalid" placeholder="Your Email">
            <small id="emailHelp" class="form-text invalid-feedback">invalid email</small>
          </div>
        </div> <!-- col-md-3 -->


        <div class="col-md-3">

          <div class="form-group">

            <label>Your phone</label>

            <div class="relative">

              <input type="text" class="form-control input-with-country-code is-invalid" placeholder="Phone Number" required="">

              <small id="emailHelp" class="form-text invalid-feedback">Invalid phone number</small>

              <div class="country-code-container">
                <select class="d-none" name="country" id="country">
                  <option value="001"> 001 </option>
                  <option value="002"> 002 </option>
                  <option selected value="003"> 003 </option>
                </select>
                <div class="dropdown">
                  <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="" src="assets/images/flag-kuwait.png" /> +001
                  </button>
                  <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                    <a data-value="1" class="dropdown-item" href="#"><img alt="" src="assets/images/flag-kuwait.png" /> +001 </a>
                    <a data-value="2" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-ksa.png" /> +002 </a>
                    <a data-value="3" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-uae.png" /> +003 </a>
                  </div>
                </div> <!-- dropdown -->
              </div><!-- country-code-container -->

            </div>

          </div><!-- form-group  -->

        </div> <!-- col-md-3 -->

      </div> <!-- row -->

      <br />
      <hr> <br />

      <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <label> Text small input </label>
            <input type="text" class="form-control form-control-sm" placeholder="placeholder form-control-sm">
          </div>
        </div> <!-- col-md-4 -->

        <div class="col-md-6">
          <div class="form-group">
            <label> Text large input </label>
            <input type="text" class="form-control form-control-lg" placeholder="placeholder form-control-lg">
          </div>
        </div> <!-- col-md-4 -->

        <div class="col-md-4">

          <div class="form-group">
            <label> Text rounded input </label>
            <input type="text" class="form-control  rounded-pill" placeholder="placeholder">
          </div>

        </div> <!-- col-md-4 -->

        <div class="col-md-4">

          <div class="form-group input-with-start-icon">
            <label> Text input with start icon </label>
            <div class="relative">
              <input type="text" class="form-control" placeholder="placeholder">
              <i class="fa fa-search start-icon"></i>
            </div>
          </div>

        </div> <!-- col-md-4 -->

        <div class="col-md-4">
          <div class="form-group">
            <label> Text Gray input </label>
            <input type="text" class="form-control gray" placeholder="placeholder">
          </div>
        </div> <!-- col-md-4 -->

      </div> <!-- row -->

      <br />
      <hr> <br />

      <div class="row">

        <div class="col-md-12">

          <div class="input-with-start-label-wrapper mb-4">

            <label class="m-0"> Radio inline </label>

            <div class="form-group m-0">

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                <label class="custom-control-label" for="customRadioInline1">Toggle radio</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Or toggle other radio</label>
              </div>


            </div> <!-- form-group -->

          </div> <!-- input-with-start-label-wrapper -->

        </div> <!-- col-md-12 -->

        <div class="col-md-12">

          <div class="input-with-start-label-wrapper mb-4">

            <label class="m-0"> Checkbox inline </label>

            <div class="form-group m-0">

              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                <label class="custom-control-label" for="customCheck1">Check this checkbox</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Check this checkbox</label>
              </div>


            </div>

          </div>

        </div> <!-- col-md-12 -->

        <div class="col-md-6 mb-5">

          <label> Radio </label>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input" checked>
            <label class="custom-control-label" for="customRadio1">Toggle radio</label>
          </div>

          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Or toggle other radio</label>
          </div>

        </div>

        <div class="col-md-6 mb-5">

          <label> Radio Large </label>
          <div class="custom-control custom-radio custom-radio-lg">
            <input type="radio" id="customRadio11" name="customRadio11" class="custom-control-input" checked>
            <label class="custom-control-label" for="customRadio11">Toggle radio</label>
          </div>

          <div class="custom-control custom-radio custom-radio-lg">
            <input type="radio" id="customRadio21" name="customRadio11" class="custom-control-input">
            <label class="custom-control-label" for="customRadio21">Or toggle other radio</label>
          </div>

        </div>

        <div class="col-md-6 mb-5">

          <label> Checkbox </label>


          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck10" checked>
            <label class="custom-control-label" for="customCheck10">Check this checkbox</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck20">
            <label class="custom-control-label" for="customCheck20">Check this checkbox</label>
          </div>

        </div>

        <div class="col-md-6">


          <!-- https://codepen.io/designcouch/pen/BaJOJg?editors=1100 -->



        </div>


        <div class="col-md-6">

          <div class="d-flex">
            <div class="custom-checkbox-wrapper me-2">
              <input type="checkbox" name="checkbox1" id="checkbox1" class="custom-checkbox" checked />
              <label for="checkbox1" class="checkbox-label"></label>
            </div>
          </div>

        </div>

        <div class="col-md-6"></div>

      </div> <!-- row -->

    </div> <!-- container -->
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Lists </h1>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <ul class="links-list list-sm">

            <?php foreach (range(0, 5) as $i) { ?>

              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="link-title-wrapper">
                    <i class="fa fa-check color-primary me-2"></i>
                    Link
                  </div>
                  <div class="link-icon-wrapper">
                    <i class="fa fa-chevron-right fa-sm color-primary"></i>
                  </div>
                </a>
              </li>

            <?php } ?>

          </ul>
        </div>


        <div class="col-md-4">
          <ul class="links-list">

            <?php foreach (range(0, 5) as $i) { ?>
              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="link-title-wrapper">
                    <i class="fa fa-check color-primary me-2"></i>
                    Link
                  </div>
                  <div class="link-icon-wrapper">
                    <i class="fa fa-chevron-right fa-sm color-primary"></i>
                  </div>
                </a>
              </li>

            <?php } ?>

          </ul>
        </div>



        <div class="col-md-4">
          <ul class="links-list list-lg">

            <?php foreach (range(0, 5) as $i) { ?>
              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="link-title-wrapper">
                    <i class="fa fa-check color-primary me-2"></i>
                    Link
                  </div>
                  <div class="link-icon-wrapper">
                    <i class="fa fa-chevron-right fa-sm color-primary"></i>
                  </div>
                </a>
              </li>

            <?php } ?>

          </ul>
        </div>




      </div>
    </div>
  </section>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Gray background </h1>
    </div>
    <div class="container">
      <div style="height: 300px;" class="d-flex justify-content-center align-items-center bg-gray mb-4">
        <h3> background gray </h3>
      </div>
    </div>
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Tabs </h1>
    </div>
    <div class="container">
      <div class="custom-tabs-wrapper only-laptop">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="shared-posts-tab" data-toggle="tab" data-target="#shared-posts"> Shared Posts </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="my-posts-tab" data-toggle="tab" data-target="#my-posts"> My posts </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="liked-posts-tab" data-toggle="tab" data-target="#liked-posts"> Liked Posts </button>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="shared-posts" role="tabpanel" aria-labelledby="shared-posts-tab">
            <div class="posts-warpper">
              <div class="row no-gutters p-2">

                <?php foreach (range(1, 10) as $i) { ?>
                  <div class="col-xl-w-20 col-lg-3 col-sm-4 col-6 p-1">
                    <div class="post-item">
                      <div class="shimmer"></div>
                    </div>
                  </div>
                <?php } ?>

                <?php foreach (range(1, end: 9) as $i) { ?>
                  <div class="col-xl-w-20 col-lg-3 col-sm-4 col-6 p-1">
                    shared-html/post-style-1
                  </div><!-- col -->
                <?php } ?>

              </div><!-- row -->
            </div><!-- posts-warpper -->

          </div>

          <div class="tab-pane fade" id="my-posts" role="tabpanel" aria-labelledby="my-posts-tab">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>

          <div class="tab-pane fade" id="liked-posts" role="tabpanel" aria-labelledby="liked-posts-tab">
            <p> Lorem Ipsum is simply dummy text of </p>
          </div>

        </div>

      </div> <!-- custom-tabs-wrapper -->
    </div>
  </section>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Typography </h1>
    </div>

    <div class="container mb-5">

      <h1 class="font-weight-200"> h1 ExtraLight - Lorem ipsum dolor sit</h1>

      <h1 class="font-weight-300"> h1 Light - Lorem ipsum dolor sit</h1>

      <h1 class="font-weight-400"> h1 Regular - Lorem ipsum dolor sit</h1>

      <h1 class="font-weight-500"> h1 Medium - Lorem ipsum dolor sit</h1>

      <h1 class="font-weight-700"> h1 Bold - Lorem ipsum dolor sit</h1>


      <hr>


      <h2 class="font-weight-200"> h2 ExtraLight - Lorem ipsum dolor sit</h2>

      <h2 class="font-weight-300"> h2 Light - Lorem ipsum dolor sit</h2>

      <h2 class="font-weight-400"> h2 Regular - Lorem ipsum dolor sit</h2>

      <h2 class="font-weight-500"> h2 Medium - Lorem ipsum dolor sit</h2>

      <h2 class="font-weight-700"> h2 Bold - Lorem ipsum dolor sit</h2>



      <hr>


      <h3 class="font-weight-200"> h3 ExtraLight - Lorem ipsum dolor sit</h3>

      <h3 class="font-weight-300"> h3 Light - Lorem ipsum dolor sit</h3>

      <h3 class="font-weight-400"> h3 Regular - Lorem ipsum dolor sit</h3>

      <h3 class="font-weight-500"> h3 Medium - Lorem ipsum dolor sit</h3>

      <h3 class="font-weight-700"> h3 Bold - Lorem ipsum dolor sit</h3>


      <hr>


      <h4 class="font-weight-200"> h4 ExtraLight - Lorem ipsum dolor sit</h4>

      <h4 class="font-weight-300"> h4 Light - Lorem ipsum dolor sit</h4>

      <h4 class="font-weight-400"> h4 Regular - Lorem ipsum dolor sit</h4>

      <h4 class="font-weight-500"> h4 Medium - Lorem ipsum dolor sit</h4>

      <h4 class="font-weight-700"> h4 Bold - Lorem ipsum dolor sit</h4>



      <hr>


      <h5 class="font-weight-200"> h5 ExtraLight - Lorem ipsum dolor sit</h5>

      <h5 class="font-weight-300"> h5 Light - Lorem ipsum dolor sit</h5>

      <h5 class="font-weight-400"> h5 Regular - Lorem ipsum dolor sit</h5>

      <h5 class="font-weight-500"> h5 Medium - Lorem ipsum dolor sit</h5>

      <h5 class="font-weight-700"> h5 Bold - Lorem ipsum dolor sit</h5>

      <hr>


      <h6 class="font-weight-200"> h6 ExtraLight - Lorem ipsum dolor sit</h6>

      <h6 class="font-weight-300"> h6 Light - Lorem ipsum dolor sit</h6>

      <h6 class="font-weight-400"> h6 Regular - Lorem ipsum dolor sit</h6>

      <h6 class="font-weight-500"> h6 Medium - Lorem ipsum dolor sit</h6>

      <h6 class="font-weight-700"> h6 Bold - Lorem ipsum dolor sit</h6>

      <hr>

      <div class="row">

        <div class="col-md-4">

          <h1> Base .small </h1>

          <p class="small font-weight-200"> p - Lorem ipsum dolor sit 14px </p>

          <p class="small font-weight-300"> p - Lorem ipsum dolor sit 14px </p>

          <p class="small font-weight-400"> p - Lorem ipsum dolor sit 14px </p>

          <p class="small font-weight-500"> p - Lorem ipsum dolor sit 14px </p>

          <p class="small font-weight-700"> p - Lorem ipsum dolor sit 14px </p>

        </div>


        <div class="col-md-4">

          <h1> Base </h1>

          <p class="font-weight-200"> p -Light sit 16px </p>

          <p class="font-weight-300"> p -Light sit 16px </p>

          <p class="font-weight-400"> p - Lorem ipsum dolor sit 16px </p>

          <p class="font-weight-500"> p - Lorem ipsum dolor sit 16px </p>

          <p class="font-weight-700"> p - Lorem ipsum dolor sit 16px </p>

        </div>


        <div class="col-md-4">

          <h1> Base .lead </h1>

          <p class="lead font-weight-200"> p - Lorem ipsum dolor sit 20px </p>

          <p class="lead font-weight-300"> p - Lorem ipsum dolor sit 20px </p>

          <p class="lead font-weight-400"> p - Lorem ipsum dolor sit 20px </p>

          <p class="lead font-weight-500"> p - Lorem ipsum dolor sit 20px </p>

          <p class="lead font-weight-700"> p - Lorem ipsum dolor sit 20px </p>

        </div>

      </div>

    </div>

  </section>

  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>

  <section>

    <div class="headline-wrapper">
      <h1 class="headline"> Logo </h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          logo
        </div>
      </div>
    </div>
  </section>
  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> الأنشطة والفعاليات </h1>
    </div>

    <div class="container">
      <div class="row">

        <?php foreach (range(0, 2) as $i) { ?>
          <div class="col-md-4">
            shared-html/user-style-1
          </div>
        <?php } ?>

      </div>
    </div>

  </section>
  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> دور النشر </h1>
    </div>

    <div class="container">
      <div class="row">

        <?php foreach (range(0, 2) as $i) { ?>
          <div class="col-md-4">
            shared-html/user-style-1
          </div>
        <?php } ?>

      </div>
    </div>

  </section>
  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> الكتب </h1>
    </div>

    <div class="container">
      <div class="row">

        <?php foreach (range(0, 2) as $i) { ?>
          <div class="col-md-4">
            shared-html/user-style-1
          </div>
        <?php } ?>

      </div>
    </div>

  </section>
  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> المؤلفين </h1>
    </div>

    <div class="container">
      <div class="row">

        <?php foreach (range(0, 2) as $i) { ?>
          <div class="col-md-4">
            shared-html/user-style-1
          </div>
        <?php } ?>

      </div>
    </div>

  </section>
  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> رعاة المعرض </h1>
    </div>

    <div class="container">
      <div class="row">

        <?php foreach (range(0, 2) as $i) { ?>
          <div class="col-md-4">
            shared-html/user-style-1
          </div>
        <?php } ?>

      </div>
    </div>

  </section>
  <hr>


</section>


<?php include 'footer.php'; ?>


<script>
  $(function() {
    $('.select2').select2();
  });
</script>