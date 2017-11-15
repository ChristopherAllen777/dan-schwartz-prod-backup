<?php
/**
 * Template Name: Splash Page
 *
 * Template for a splash page.
 *
 * @package Base Theme
 */

get_header('opening'); ?>
<meta name="google-site-verification" content="r43DSyjr9MhgK-HJigJq5vb52k8xIg17otorFO1VilI" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

/*body*/

.fa {
  padding: 10px;
  font-size: 24px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
  width: 50px;
}

@media (max-width: 767px) {
  .fa {
    padding: 12px;
    font-size: 24px;
    text-align: center;
    text-decoration: none;
    margin: 5px 22px;
    border-radius: 50%;
    width: 55px;
    color: red;
  }
  .fa-twitter {
    color: red;
  }

  }

.fa:hover {
    color: #CD1331;
}

.fa-facebook {
  border-style: solid;
  color: white;
}

.fa-twitter {
  border-style: solid;
  color: white;
}

.fa-instagram {
  border-style: solid;
  color: white;
}

a {
  color: #fff;
}

a:hover {
  color:#d8d8d8;
}

/* Gravity Form */

ul.gform_fields {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

#description {
    color: #fff;
    font-size: 18px;
    text-align: center;
    border-top: #CD1331;
    border-style: solid;
    border-right: none;
    border-left: none;
    border-bottom: none;
    border-width: 2px;
    padding-top: 15px;
}

@media (max-width: 767px) {
  #description {
      color: #fff;
      font-size: 18px;
      text-align: center;
      border-top: #CD1331;
      border-style: solid;
      border-right: none;
      border-left: none;
      border-bottom: none;
      border-width: 2px;
      padding-top: 15px;
  }
    }

h1 {
  color: #fff;
}

@media (max-width: 767px) {
  .splash {
    padding-bottom:100px;
    padding-left: 0px;
    position: absolute;
    width:100%;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    overflow: auto;
    height:750px;
  }
}
  @viewport {
    width: device-width;
    zoom: .5;
  }
.p-col {
    color:#fff;
    float:right;
    /*width: 41vw;*/
}

h1.splash-header {
    color:#fff;
    text-align:center;
}
.container {
    width: 93%;
    height: 616px;
    background: #001e5f;
    margin-bottom: 24px;
    float: left;
}

@media (max-width: 767px) {
.container {
  margin-top: 20px;
  width:95%;
/*  background: none !important;*/
  height: 682px;
 }
}

.gform_wrapper .gform_footer {
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 0px !important;
    margin: 1em 0 0;
    clear: both;
  }


@media (max-width: 767px) {
  .splash .container {
    top:0;

  }
}
.splash p {
    color:#fff;
    font-size: 20px;
    padding-left: 15px;
    padding-right: 15px;

}
@media (max-width: 767px){
    .splash p {
      font-size: 19px;
    }
}

#head-border {

}

@media (max-width: 767px){

.gform_wrapper input[type=email], .gform_wrapper input[type=number], .gform_wrapper input[type=password], .gform_wrapper input[type=tel], .gform_wrapper input[type=text], .gform_wrapper input[type=url] {
    /*padding: none;*/
  }

}
.footer-splash img.ap-logo {
    margin-left: 140px;
    position: relative;
    top: 18px;
    height: 45px;
    left: 20px;
    cursor:pointer;
}

@media (max-width:736px) {
    .footer-splash img.ap-logo{
        top: -8px;
        height: 6vh;
        left: 150px;
        position:relative;
        float: left;
        margin-left: 0;
     }
}
@media (max-width:736px) {
    .col-md-12.social {
        position: relative;
        right: 210px;
        bottom: 15px;
    }
}
.footer-splash p.ap-paid {
    color: #fff;
    font-size: .5em;
    max-width: 210px;
    position: relative;
    top: 27px;
    text-align: center;
}
@media (max-width:736px) {
    .footer-splash p.ap-paid {
        text-align: center;
        top:25px;
        left:22vw;

    }
}

.col-md-12 .footer-social {
  left: 200px;
    top: 25px;
}

@media (max-width:736px) {
    .col-md-12 .footer-social {
        top:-32px;
        left: 0;
    }
}
}

ul#gform_fields_6 {
    list-style:none;
    padding: 0;
}

form#gform_6 {
    text-align: center;
    width: 400px;
}

@media (max-width: 767px){

  form#gform_6 {
    width: 350px;
  }
}
input#input_6_1, input#input_6_2, input#input_6_3, input#input_6_4,input#gform_submit_button_6  {
    border: 2px solid white;
    background-color: transparent;
    width: 400px;
    color: #fff;
}

@media (max-width:767px) {
input#input_6_1, input#input_6_2, input#input_6_3, input#input_6_4,input#gform_submit_button_6 {
            width: 300px;
    }
}

input#input_6_1::placeholder, input#input_6_2::placeholder, input#input_6_3::placeholder, input#input_6_4::placeholder {
  color:#fff;
  font-size: 1rem;
  font-family: 'montserrat', sans;
  transform: translateX(10px);
  color:#fff;
}

.col-md-12 form {
    /* padding-bottom: 15px; */
    position: relative;
    float: left;
    width: 52%;
    /* top: 0px; */
    bottom: 280px;
}

input#gform_submit_button_1 {
    display: block;
    margin: auto;
    background-color: #CD1331;
    color: #fff;
    width: 82%;
    height: 35px !important;
    font-weight: 600;

}

.donate-button {
     position: relative;
      border: solid;
      border-radius: 5px;
      background-color: #CD1331;
      color: #fff;
      width: 60%;
      height: 45px !important;
      left: 19%;
      font-size: 30px;
      font-weight: 600;
      line-height: 1px;
}

@media (max-width: 767px){
  .donate-button {
       position: relative;
        border: solid;
        border-radius: 5px;
        background-color: #CD1331;
        color: #fff;
        width: 60%;
        height: 45px !important;
        /*margin-left: 60px;*/
        font-size: 30px;
        font-weight: 600;
        line-height: 1px;
  }
}

.row.blue-bg {
   background-color: #001e5f ;
   /*padding-bottom: 25px;*/
}


ul#gform_fields_6 {
   list-style:none;
   padding: 0;
}

form#gform_6 {
   text-align: center;
}

.gform_confirmation_message_6 {
  color:#fff;
}
.col-md-12 form {
   /* padding-bottom: 15px; */
   position: relative;
   float: left;
   width: 52%;
   /* top: 0px; */
   bottom: 280px;
}

  .row.blue-bg img{

   width: 681px;
   position: relative;
   float: right;
  }

  .splash-line {
       margin-top: 20px;
   margin-bottom: 20px;
   border: 0;
   border-top: 7px solid #CD1331 ;
   width:10vw;
}

body .gform_wrapper label.gfield_label+div.ginput_container{
  width: 100% !important;
}
@media(max-width: 767px){
  body .gform_wrapper label.gfield_label+div.ginput_container{
  width: 100% !important;
}

}
.gform_wrapper .top_label input.medium, .gform_wrapper .top_label select.medium {
  width: 100% !important;
  height: 35px !important;
}
@media(max-width: 767px) {
  .gform_wrapper .top_label input.medium, .gform_wrapper .top_label select.medium {
  width: 100% !important;
}
}
/*template*/
.gform_button.button.btn.btn-default {
  position: relative;
    border: none;
    border-radius: 0;
    background-color: #CD1331;
    color: #fff;
    width: 100%;
}

@media (max-width: 767px) {
  .gform_button.button.btn.btn-default {
    width: 100%;
    float:left;
    }
}
.gform_wrapper .top_label .gfield_label{
  color:#fff;
}
.gform_wrapper .gfield_date_day label, .gform_wrapper .gfield_date_month label, .gform_wrapper .gfield_date_year label, .gform_wrapper .gfield_time_ampm label, .gform_wrapper .gfield_time_hour label, .gform_wrapper .gfield_time_minute label, .gform_wrapper .ginput_complex label, .gform_wrapper .instruction {
  color:#fff;
}

/*end template*/
.p-col {
   color:#fff;
   float:right;
   /*width: 41vw;*/
}

h1.splash-header {
    color:#fff;
    text-align:center;
}

@media (max-width:736px) {
   .col-md-12.social {
       position: relative;
       right: 210px;
       bottom: 15px;
   }
}

i.fa.fa-twitter, i.fa.fa-facebook {
    color: white;
    font-size: 3rem;
}

i.fa.fa-twitter {
    left: 2px;
    position: relative;

}
@media (max-width: 767px){
#paid-for-p {
  font-size: 12pt;
  margin-top: 36px;
}
}

@media (max-width: 767px) {
  p {
    font-size: 10px;
    text-align: center;
    padding-top: 28px;
  }
}

/* Chris Allen addition to CSS*/

html {
    margin-top: 0px !important;
}
.logo {
  display: block;
  margin: auto;
  margin-top: 15px;
  width: 60%;
}
.video {
  display: block;
  margin: auto;
}
.wrapper {
  background-color: #5a524f;
}
 .footer {
/*    float: left;
    margin: 0;
    width: 100%;*/

  position:fixed;
   left:0px;
   bottom:0px;
   width:100%;

    background: #001e5f;
    color: #fff;
    font-family: 'montserrat', sans;
}
 @media (max-width: 767px){
  .footer {
    position: unset;
    height: 225px;
/*    background:none !important;*/
    float: left;
    margin: 0;
    width: 100%;

  }
 }
 @media (max-width: 767px) {
  .container {
    float: none;
    margin-bottom: 0px;
  }
 }
 .footer p {
    padding: 19px;
    text-align: center;
    font-family: sans-serif;
}
.pager {
    padding-left: 75px;
}
 @media (max-width: 767px) {
  .pager {
    padding-left: 0px;
  }
 }
 #content {
  padding-top: 10px;
  margin: 20px 0px 20px 0px;
  background: none;
 }
 .row {
    margin-left: 0px;
    margin-right: 0px;
}
body {
    background: none !important;
}

 /*Confirmation Message */

 div#gform_confirmation_message_1 {
    text-align: center;
}
span {
    padding-left: 0px !important;
}
html {
    background-image: url("http://dan4nevadastag.wpengine.com/wp-content/uploads/2017/09/ds-bg-2.jpg");
   /* background-repeat:no-repeat;*/
    background-size:cover;
    height: 100%;
}
</style>

<div id="content" class="row">
    <div class="col-sm-7">
      <img class="logo" src="http://www.danfornevada.com/wp-content/uploads/2017/09/Schwartz_logo_outlines.png">
      <br />
      <div class="dan-picture-frame">
        <img style="width: 80%; height: auto; margin-left: 35px;" src="http://www.danfornevada.com/wp-content/uploads/2017/11/Dan_Nevada-Day-1.png" class="dan-picture"/>
      </div>

      <!-- <iframe class="video" width="80%" height="380px" align="middle" src="https://www.youtube.com/embed/F4-2oh6aa6Y" frameborder="0" allowfullscreen></iframe> -->
    </div>

  <div class="col-sm-5">
    <div class="container">
      <h3 id ="head-border" align="center">Dan Schwartz <br> Conservative for Governor</h3>
        <?php
          // TO SHOW THE PAGE CONTENTS
          while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

          <p class="splash-p"><?php the_content(); ?></p> <!-- Page Content -->

          <?php
          endwhile; //resetting the page loop
          wp_reset_query(); //resetting the page query
          ?>
      <button href="/donate" class="btn btn-sm donate-button" type="button"><a href="/donate" >Donate </a></button>
    </div>
  </div>
 </div> <!-- row -->

  <div class="row">
    <div class="footer">
      <div class="col-xs-12 col-sm-6">
       <p id="paid-for-p">Paid for by Friends of Dan Schwartz</p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div style="text-align: center;" class="pager">
          <a href="https://www.facebook.com/DanForNevada" class="fa fa-facebook"></a>
          <a href="https://twitter.com/Dan4Nevada" class="fa fa-twitter"></a>
        </div>
      </div>
    </div> <!-- footer -->
  </div> <!-- row -->

  <script type="text/javascript">
    console.log("Test ");
  </script>
