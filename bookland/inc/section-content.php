<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_content();
  }
}
?>

<div class="img_class  text-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/background.png');">
    <div class="container">
      <div class="row py-5 py-lg-5 align-items-center" style="min-height: 60vh;padding-left:20px;">
        <div class="col-lg-6 ">
          <h1 class="fw-light">Financial <b class="fw-bold">Intelligence</b> for <b class="fw-bold">Entrepreneurs</b>
          </h1>
          <p style="text-align: left;">What you really need to know about the numbers.</p>
          <p style="text-align: left;">5% Discount for digital copy Purchase at Google Play</p>
          <p style="text-align: left;">
            <button class="btn btn-warning list-unstyled"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .585.379L2.89 3H15.5a.5.5 0 0 1 .59.598l-1 5a.5.5 0 0 1-.565.501l-9.397.572L5.515 11H13a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.591-.508L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 5l.85 5.579 9.15-.559L13.89 5H3.102zM5 12a2 2 0 1 0 0 5 2 2 0 0 0 0-5zm7 0a2 2 0 1 0 0 5 2 2 0 0 0 0-5zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg> Order the Book!</button>
            <img type="button" class="btn-outline-dark" src="<?php echo get_template_directory_uri();?>/assets/images/google.png" alt="" height="38">
          </p>
        </div>
        <div class="col-lg-6 wrapper">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/book.png">
        </div>
      </div>
    </div>
  </div>


  <!-- sellers deatails -->
  <div class="seller" >
    <div class="container">
      <div class="row py-5 py-lg-5 align-items-center text-center">
        <div class="col-sm-6">
          <div class="d-flex flex-column">
            <h5 class="mb-5">Best sellers on <b class="fw-bold">EVERY TOP BOOK STORES.</b></h5>
            <P class="seller-p"><b class="seller-quatation">"</b>Having worked with vortext lost for a number of years
              now They are
              constantly moving with the times and taking us with them
            </P>
          </div>
          <div class="d-flex align-items-center" style="padding: 0px 0px 50px;">
            <div class="profile-pic">

            </div>
            <h6 style="padding-left: 10px;">Jonathan Plerce</h6>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/seller.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- ATTRACTIVE  INNOVATIVE    EDUCATIVE -->
  <div class="container">
    <div class="row py-5  align-items-center text-center justify-content-evenly">
      <div class="col-lg-3 ">
        <h1 class="background-icons-left titles" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/backincons4.png');">
          ATTRACTIVE
        </h1>
        <p style="text-align: justify;color: gray;">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deleniti aperiam maiores voluptatum soluta?
          Eligendi, alias nihil, excepturi quod hic, sunt aliquam suscipit architecto repudiandae minima nostrum!
          Ipsa, eius vero?
        </p>
      </div>
      <div class="col-lg-3">
        <h1 class="background-icons-left titles" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/backincons2.png');">
          INNOVATIVE
        </h1>
        <p style="text-align: justify;color: gray;">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deleniti aperiam maiores voluptatum soluta?
          Eligendi, alias nihil, excepturi quod hic, sunt aliquam suscipit architecto repudiandae minima nostrum!
          Ipsa, eius vero?
        </p>
      </div>
      <div class="col-lg-3">
        <h1 class="background-icons-left titles" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/backincons3.png');">
          EDUCATIVE
        </h1>
        <p style="text-align: justify;color: gray;">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum deleniti aperiam maiores voluptatum soluta?
          Eligendi, alias nihil, excepturi quod hic, sunt aliquam suscipit architecto repudiandae minima nostrum!
          Ipsa, eius vero?
        </p>
      </div>
    </div>
  </div>


  <div class="container py-5">
    <div class="card-body " style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/form-background.png');height: auto;width: 100%;">
      <div class="d-flex flex-column  align-items-center justify-content-center" style="margin: 50px 0px 0px 0px;">
        <p><b class="fw-bold">Subscribe</b> for special price & latest news</p>
        <form action="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter your email adderss " aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2" style="background-color: goldenrod;"><i type="button" class="bi bi-envelope"> Subscribe</i> </span>
          </div>
        </form>
      </div>

    </div>
  </div>

  <div class="background" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bookbackground2.png');">

    <div class="container" style="color: white;">
      <div class="row align-items-center" style="min-height: 60vh;padding-left:20px;">
        <div class="col-lg-6 ">
          <h1>Best RATINGS</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit dolorem quia quo. Saepe laborum
            dicta dolores at, non quidem necessitatibus!</p>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/rating.png">
        </div>
        <div class="col-lg-6 wrapper">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/book2.png">
        </div>
      </div>
    </div>
  </div>

  <!-- Achivements -->
  <div class="container">
    <div class="row py-5 py-lg-5 align-items-center text-center">
      <div class="col-sm-6">
        <div class="d-flex  flex-column text-start">
          <h1 class="background-icons-left titles" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/backincons1.png');">MELISSA GRIFFIN</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="d-flex align-items-center">
          <div class="achivement-icons">
            <h1 class="bi bi-trophy"></h1>
          </div>
          <div class="d-flex  flex-column text-start " style="padding:10px;">
            <h5>More than 10+ award achieved</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="achivement-icons">
            <h1 class="bi bi-bank"></h1>
          </div>
          <div class="d-flex  flex-column text-start" style="padding:10px;">
            <h5>Practitioners in the famous bank</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="achivement-icons">
            <h1 class="bi bi-mortarboard"></h1>
          </div>
          <div class="d-flex  flex-column text-start" style="padding:10px;">
            <h5>Founder of the institute stratup muda</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 girl">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/GIRL.png">
      </div>
    </div>
    <!-- boxs -->
    <div class="container" style="padding: 50px;">

      <div class="d-flex  align-items-center card-track">
        <div class="card-body d-felx background-icons" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/fd.png');">
          <h5 class="">Free Delivery</h5>
          <p>With every purchase via this site</p>
        </div>
        <hr class="divider">
        <div class="card-body  d-felx background-icons" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/sp.png');">
          <h5>Secure Payment</h5>
          <p>Most trusted online payment</p>
        </div>
        <hr class="divider">
        <div class="card-body  d-felx background-icons " style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/er.png');">
          <h5>Easy Returns</h5>
          <p>Friendly product return system</p>
        </div>
      </div>



    </div>
  </div>
  <div class="rate" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/yellow-pattern.png');" >
    <div class="container py-5">
      <div class="d-flex  flex-column" style="text-align: center;color: white;">
        <h1 class="choices">2 choices! PHYSICAL OR DIGITAL</h1>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda asperiores iusto vero ipsam eaque rerum
          ratione ad mollitia pariatur. Fuga.</P>
        <div class="transbox">
          <div class="d-flex  flex-row   justify-content-center" style="padding: 10px;">

            <h5 class="doller" style="border-right: inset;">$15</h5>


            <h5 class="doller" style="    border-left: hidden;">$10</h5>

          </div>
          <p style="text-align: center;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row py-5 py-lg-5 align-items-center text-center">
      <h3>
        Are you ready <b class="fw-bold">To Success ?</b>
      </h3>
      <p style="text-align:center;color:rgb(255, 147, 6);">Get the book now and get bonus content from boekoe</p>
      <p style="text-align:center;">5% Discount for digital copy Purchase at Google Play</p>
      <p style="text-align: center;">
        <button class="btn btn-warning list-unstyled"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .585.379L2.89 3H15.5a.5.5 0 0 1 .59.598l-1 5a.5.5 0 0 1-.565.501l-9.397.572L5.515 11H13a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.591-.508L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 5l.85 5.579 9.15-.559L13.89 5H3.102zM5 12a2 2 0 1 0 0 5 2 2 0 0 0 0-5zm7 0a2 2 0 1 0 0 5 2 2 0 0 0 0-5zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </svg> Order the Book!</button>
        <img type="button" class="btn-outline-dark" src="<?php echo get_template_directory_uri();?>/assets/images/google.png" alt="" height="38">
      </p>
    </div>
  </div>