<!DOCTYPE html>
<html lang="en">

<head>
     <title>Home</title>
     <meta name="format-detection" content="telephone=no" />
     <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta charset="utf-8" />
     <script src="../../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
     <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->

     <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400&amp;display=swap" />
     <link rel="stylesheet" href="css/bootstrap.css" />
     <link rel="stylesheet" href="css/style.css" />
</head>

<body>
     <!-- Page-->
     <div class="page">
          <div id="page-loader">
               <div class="cssload-container">
                    <div class="cssload-speeding-wheel"> </div>
               </div>
          </div>
          @include('User.header')
          <!-- Swiper-->
          <section class="swiper-form-wrap">
               <div class="swiper-container swiper-slider swiper-slider_fullheight" data-simulate-touch="false"
                    data-loop="true" data-autoplay="5500">
                    <div class="swiper-wrapper">
                         <div class="swiper-slide bg-gray-darker text-center"
                              data-slide-bg="/assets/images/slider-slide-1.jpg">
                              <div class="swiper-slide-caption">
                                   <div class="container">
                                        <div class="row justify-content-lg-center">
                                             <div class="col-lg-10 col-xl-7">
                                                  <h6 data-caption-animate="fadeInUpSmall" data-caption-delay="0">WE
                                                       offer lots of</h6>
                                                  <h1 data-caption-animate="fadeInUpSmall" data-caption-delay="100">
                                                       Luxury <br />Amenities</h1>
                                                  <p class="swiper-caption-text" data-caption-animate="fadeInUpSmall"
                                                       data-caption-delay="200">Every property we sell has numerous
                                                       amenities that only add to your<br class="d-none d-md-block" />
                                                       comfort and create a great atmosphere.</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="swiper-slide bg-gray-darker text-center"
                              data-slide-bg="{{ URL::to('/') }}/images/slider-slide-2.jpg">
                              <div class="swiper-slide-caption">
                                   <div class="container">
                                        <div class="row justify-content-lg-center">
                                             <div class="col-lg-10 col-xl-7">
                                                  <h6 data-caption-animate="fadeInUpSmall" data-caption-delay="0">A
                                                       VARIETY OF</h6>
                                                  <h1 data-caption-animate="fadeInUpSmall" data-caption-delay="100">New
                                                       Properties</h1>
                                                  <p class="swiper-caption-text" data-caption-animate="fadeInUpSmall"
                                                       data-caption-delay="200"> We daily update our property catalog
                                                       with new properties of all kinds to help you find your dream
                                                       house.</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="swiper-slide bg-gray-darker text-center"
                              data-slide-bg="{{url('/images/myimage.jpg')}}">
                              <div class="swiper-slide-caption">
                                   <div class="container">
                                        <div class="row justify-content-lg-center">
                                             <div class="col-lg-10 col-xl-7">
                                                  <h6 data-caption-animate="fadeInUpSmall" data-caption-delay="0">We are
                                                       a team of</h6>
                                                  <h1 data-caption-animate="fadeInUpSmall" data-caption-delay="100">
                                                       Qualified Brokers</h1>
                                                  <p class="swiper-caption-text" data-caption-animate="fadeInUpSmall"
                                                       data-caption-delay="200">We employ highly-qualified brokers and
                                                       real estate agents who are always ready to help you achieve your
                                                       commercial real estate goals.</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- Swiper Pagination-->
                    <div class="swiper-pagination"> </div>
               </div>
               <div class="container section-form">
                    <div class="section-form__inner">
                         <div class="section-form__content">
                              <!-- RD Mailform-->
                              <form class="rd-mailform_boxed rd-mailform_modern">
                                   <h4>Find Your Property</h4>
                                   <div class="rd-mailform_boxed__inner">
                                        <div class="box-element box-element_md">
                                             <div class="form-wrap">
                                                  <!-- Select 2-->
                                                  <select class="form-input select-filter" id="location"
                                                       data-placeholder="Choose Location:" name="location"
                                                       data-minimum-results-for-search="Infinity"
                                                       data-constraints="@Required">
                                                       <option value="2">Chicago, IL</option>
                                                       <option value="3">Seattle, WA</option>
                                                       <option value="4">Miami, FL</option>
                                                       <option value="5">Dallas, TX</option>
                                                       <option value="6">Atlanta, GA</option>
                                                       <option value="7">New York, NY</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="box-element box-element_md">
                                             <div class="form-wrap">
                                                  <!-- Select 2-->
                                                  <select class="form-input select-filter" id="property"
                                                       data-placeholder="Property Type:" name="property"
                                                       data-minimum-results-for-search="Infinity"
                                                       data-constraints="@Required">
                                                       <option value="2">Single-Family</option>
                                                       <option value="3">Multi-Unit</option>
                                                       <option value="4">Modular Home</option>
                                                       <option value="5">Townhouse</option>
                                                       <option value="6">Condominium</option>
                                                       <option value="7">Vacation Home</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="box-element box-element_xs">
                                             <div class="form-wrap">
                                                  <!-- Select 2-->
                                                  <select class="form-input select-filter" id="beds"
                                                       data-placeholder="1" name="Beds"
                                                       data-minimum-results-for-search="Infinity"
                                                       data-constraints="@Required">
                                                       <option value="2">2</option>
                                                       <option value="3">3</option>
                                                       <option value="4">4</option>
                                                       <option value="5">5</option>
                                                       <option value="6">6</option>
                                                       <option value="7">7</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="box-element box-element_xs">
                                             <div class="form-wrap">
                                                  <!-- Select 2-->
                                                  <select class="form-input select-filter" id="baths"
                                                       data-placeholder="0" name="Baths"
                                                       data-minimum-results-for-search="Infinity"
                                                       data-constraints="@Required">
                                                       <option value="1">1</option>
                                                       <option value="2">2</option>
                                                       <option value="3">3</option>
                                                       <option value="4">4</option>
                                                       <option value="5">5</option>
                                                       <option value="6">6</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="box-element box-element_wide">
                                             <button class="button button-primary button-lg">Search</button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </section>

          <!-- Welcome to the Best Indianapolis Hotel!-->
          <section class="section-lg bg-100">
               <div class="container">
                    <div class="row row-50 justify-content-center text-center">
                         <div class="col-md-11 col-lg-9">
                              <h6>Welcome to the</h6>
                              <h4>Best Real Estate Agency</h4>
                              <p>Estancy is a full-service, luxury real estate brokerage and lifestyle company
                                   representing clients worldwide in a broad spectrum of classes, including residential,
                                   new development, resort real estate, residential leasing and luxury vacation rentals.
                                   Since our inception in 2011, we have redefined the business of real estate,
                                   modernizing and advancing the industry by fostering a culture of partnership, in
                                   which all clients and listings are represented by our agents.</p><a
                                   class="button button-primary" href="about.html">More about us</a>
                         </div>
                    </div>
               </div>
          </section>

          <!-- Plenty of room...-->
          <section class="section-lg bg-default text-center">
               <div class="container">
                    <div class="row justify-content-lg-center">
                         <div class="col-lg-10 col-xl-8">
                              <h4>Featured Properties</h4>
                         </div>
                    </div>
                    <div class="row row-30">
                         <div class="col-sm-6 col-lg-4">
                              <!-- Post-->
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-01-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">$2000/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h5><a href="single-property.html">401 Biscayne Blvd, Miami</a></h5>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>2 Bathrooms</span><span>2 Bedrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </div>
                         <div class="col-sm-6 col-lg-4">
                              <!-- Post-->
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-02-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">$2000/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h5><a href="single-property.html">225 Maywood Dr, San Francisco</a></h5>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>2 Bathrooms</span><span>2 Bedrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </div>
                         <div class="col-sm-6 col-lg-4">
                              <!-- Post-->
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-03-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">$2000/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h5><a href="single-property.html">623 Willow Rd, Dallas</a></h5>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>2 Bathrooms</span><span>2 Bedrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </div>
                         <div class="col-sm-6 col-lg-4">
                              <!-- Post-->
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-04-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">$2000/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h5><a href="single-property.html">923 Folsom St, San Francisco</a></h5>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>2 Bathrooms</span><span>2 Bedrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </div>
                         <div class="col-sm-6 col-lg-4">
                              <!-- Post-->
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-05-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">$2000/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h5><a href="single-property.html">182 3rd St, Seattle</a></h5>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>2 Bathrooms</span><span>2 Bedrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </div>
                         <div class="col-sm-6 col-lg-4">
                              <!-- Post-->
                              <article class="product">
                                   <div class="product-media"><img class="product-img" src="images/home-06-370x290.jpg"
                                             alt="" width="370" height="290" />
                                        <div class="product-price">$2000/mo</div>
                                   </div>
                                   <div class="product-body">
                                        <div class="product-title">
                                             <h5><a href="single-property.html">35 Pond St, New York</a></h5>
                                        </div>
                                        <div class="product-meta">
                                             <div class="group"><span>2 Bathrooms</span><span>2 Bedrooms</span>
                                             </div>
                                        </div>
                                   </div>
                              </article>
                         </div>
                    </div>
               </div>
          </section>

          <section class="section-md bg-100 text-center">
               <div class="container">
                    <h6>Why choose us</h6>
                    <h4>6 Reasons to Choose Estancy</h4>
                    <p><span style="display:inline-block;max-width:850px">Annually, thousands of clients choose Estancy
                              as their real estate agency. Besides having years of experience in real estate industry,
                              there is a variety of reasons why residents over the world choose us. Here are just some
                              of them.</span></p>
                    <div class="row row-30 row-xl-50 row-xxl-80 justify-content-md-center">
                         <div class="col-sm-6 col-md-4">
                              <!-- Box icon-->
                              <article class="blurb blurb-rounded">
                                   <div class="blurb-rounded__icon icon custom-font-broker"></div>
                                   <h6 class="blurb-rounded__title">Professional &amp; Friendly Agents</h6>
                                   <p class="blurb-rounded__text">Our agents are experienced and understanding experts
                                        who deliver fresh and effective solutions.</p>
                              </article>
                         </div>
                         <div class="col-sm-6 col-md-4">
                              <!-- Box icon-->
                              <article class="blurb blurb-rounded">
                                   <div class="blurb-rounded__icon icon custom-font-location"></div>
                                   <h6 class="blurb-rounded__title">Property from Anywhere</h6>
                                   <p class="blurb-rounded__text">With Estancy, you can search for a desired property
                                        from any location.</p>
                              </article>
                         </div>
                         <div class="col-sm-6 col-md-4">
                              <!-- Box icon-->
                              <article class="blurb blurb-rounded">
                                   <div class="blurb-rounded__icon icon custom-font-bedroom"></div>
                                   <h6 class="blurb-rounded__title">Well-furnished Interiors</h6>
                                   <p class="blurb-rounded__text">All our properties are furnished and decorated to meet
                                        your needs and expectations.</p>
                              </article>
                         </div>
                         <div class="col-sm-6 col-md-4">
                              <!-- Box icon-->
                              <article class="blurb blurb-rounded">
                                   <div class="blurb-rounded__icon icon custom-font-customer-support"></div>
                                   <h6 class="blurb-rounded__title">Get support when you need it</h6>
                                   <p class="blurb-rounded__text">Estancy’s support experts are always ready to help you
                                        and answer your questions.</p>
                              </article>
                         </div>
                         <div class="col-sm-6 col-md-4">
                              <!-- Box icon-->
                              <article class="blurb blurb-rounded">
                                   <div class="blurb-rounded__icon icon custom-font-insurance"></div>
                                   <h6 class="blurb-rounded__title">Checked &amp; Pre-inspected Properties</h6>
                                   <p class="blurb-rounded__text">All our properties are inspected to make sure they
                                        meet all standards and state regulations.</p>
                              </article>
                         </div>
                         <div class="col-sm-6 col-md-4">
                              <!-- Box icon-->
                              <article class="blurb blurb-rounded">
                                   <div class="blurb-rounded__icon icon custom-font-wallet"></div>
                                   <h6 class="blurb-rounded__title">Affordable Property Pricing</h6>
                                   <p class="blurb-rounded__text">We offer reasonable pricing policy on all our
                                        residential properties across the USA.</p>
                              </article>
                         </div>
                    </div>
               </div>
          </section>
          <!-- Offers-->
          <section class="section-lg bg-default">
               <div class="container">
                    <div
                         class="row row-40 justify-content-center justify-content-lg-between align-items-center text-center text-lg-left">
                         <div class="col-sm-8 col-md-6 col-lg-5 col-xxl-6">
                              <div class="img-max-width-1"><img class="img-shadow mt-4 mt-md-0"
                                        src="images/home-07-500x530.jpg" alt="" width="500" height="530" />
                              </div>
                         </div>
                         <div class="col-md-6">
                              <h6>Featured offer</h6>
                              <h4>Rent a New Apartment <br />Get FREE Furniture</h4>
                              <p>That's correct! We're so determined to make your experience at our properties better
                                   that we will even provide you with free furniture from the store of your choice!</p>
                              <h5>Prices start at</h5>
                              <div class="price"><span class="price__aside-top">$</span><span
                                        class="price__main">249</span><span class="price__aside-bottom">/month</span>
                              </div><a class="button button-primary" href="single-property.html">Rent now!</a>
                         </div>
                    </div>
               </div>
          </section>

          <!-- Testimonials-->
          <section class="section-md bg-accent-secondary context-dark text-center">
               <div class="container">
                    <h6>WHAT OUR CLIENTS SAY</h6>
                    <h4>Testimonials</h4>
                    <div class="owl-carousel" data-autoplay="true" data-items="1" data-stage-padding="15"
                         data-loop="true" data-margin="30" data-dots="false">
                         <div class="quote-default">
                              <div class="quote-default__image"><img src="images/person-01-100x100.jpg" alt=""
                                        width="100" height="100" />
                              </div>
                              <div class="quote-default__text">
                                   <p class="q">“I’ve recently rented an apartment through your site, and have been
                                        looked after by James Thompson. He provided me with the utmost support on every
                                        property issue. I will surely recommend your services to my friends!”</p>
                              </div>
                              <p class="quote-default__cite heading-5">Jane Wilson</p>
                         </div>
                         <div class="quote-default">
                              <div class="quote-default__image"><img src="images/person-05-100x100.jpg" alt=""
                                        width="100" height="100" />
                              </div>
                              <div class="quote-default__text">
                                   <p class="q">“Your property managers have been active in their response to repairs
                                        and always patient with our frustrations. You have always found us wonderful
                                        tenants. Thank you for the amazing customer service!”</p>
                              </div>
                              <p class="quote-default__cite heading-5">Mark Simmons</p>
                         </div>
                         <div class="quote-default">
                              <div class="quote-default__image"><img src="images/person-06-100x100.jpg" alt=""
                                        width="100" height="100" />
                              </div>
                              <div class="quote-default__text">
                                   <p class="q">“I have always found your team to be extremely prompt and professional
                                        with all dealings I have had with them. You always keep me updated on the
                                        progress of my apartment’s rental. Thank you!”</p>
                              </div>
                              <p class="quote-default__cite heading-5">Peter Smith</p>
                         </div>
                    </div>
               </div>
          </section>
          <!-- Offers-->
          <section class="section-lg bg-default">
               <div class="container">
                    <div
                         class="row row-40 flex-md-row-reverse justify-content-center justify-content-lg-between align-items-center text-center text-md-left">
                         <div class="col-sm-8 col-md-6 col-lg-5 col-xxl-6">
                              <div class="img-max-width-1"><img class="img-shadow mt-4 mt-md-0"
                                        src="images/home-08-500x530.jpg" alt="" width="500" height="530" />
                              </div>
                         </div>
                         <div class="col-md-6 col-xxl-5">
                              <h6>From the blog</h6>
                              <h4>Recent Posts</h4>
                              <ul class="list-md">
                                   <li>
                                        <!-- Post inline-->
                                        <article class="post-inline">
                                             <div class="post-inline__header"><a
                                                       class="post-inline__author meta-author link-inherit"
                                                       href="single-post.html">by Calvin Fitzgerald</a><span
                                                       class="post-inline__time">Jun 12, 2020</span></div>
                                             <h5 class="post-inline__link"><a href="single-post.html">Home Inspections:
                                                       How They Can Benefit Home Buyers and Sellers</a></h5>
                                        </article>
                                   </li>
                                   <li>
                                        <!-- Post inline-->
                                        <article class="post-inline">
                                             <div class="post-inline__header"><a
                                                       class="post-inline__author meta-author link-inherit"
                                                       href="single-post.html">by Calvin Fitzgerald</a><span
                                                       class="post-inline__time">Jun 12, 2020</span></div>
                                             <h5 class="post-inline__link"><a href="single-post.html">Useful Tips for
                                                       Buying and Selling A Home During the World Pandemic</a></h5>
                                        </article>
                                   </li>
                                   <li>
                                        <!-- Post inline-->
                                        <article class="post-inline">
                                             <div class="post-inline__header"><a
                                                       class="post-inline__author meta-author link-inherit"
                                                       href="single-post.html">by Calvin Fitzgerald</a><span
                                                       class="post-inline__time">Jun 12, 2020</span></div>
                                             <h5 class="post-inline__link"><a href="single-post.html">What Should You
                                                       Consider When Refinancing Your Mortgage?</a></h5>
                                        </article>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </section>
          @include('User.footer')

     </div>
     <!-- Global Mailform Output-->
     <div class="snackbars" id="form-output-global"></div>
     <!-- Javascript-->
     <script src="js/core.min.js"> </script>
     <script src="js/script.js"></script>
</body>

</html>