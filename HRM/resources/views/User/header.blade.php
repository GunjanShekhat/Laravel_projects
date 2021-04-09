<header class="page-header">
     <!-- RD Navbar-->
     <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
               data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
               data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
               data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
               data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
               data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true"
               data-md-stick-up-offset="150px" data-lg-stick-up-offset="50px">
               <!-- RD Navbar Top Panel-->

               <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                         <button class="rd-navbar-toggle"
                              data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                         <!-- RD Navbar Brand-->
                         <div class="rd-navbar-brand"> <a class="brand__name" href="index-2.html">
                                   <!-- Logo--><img class="logo-image-default" src="images/logo-default-374x103.png"
                                        alt="Estancy" width="187" height="51" /><img class="logo-image-inverse"
                                        src="images/logo-inverse-374x103.png" alt="Estancy" width="187" height="51" />
                              </a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <div class="rd-navbar-nav-wrap">
                         @if(session()->has('user_email'))
                         <ul class="rd-navbar-nav">
                              <li>
                                   <a href="">{{ session()->get('user_name') }}</a>
                                   <ul class="rd-navbar-dropdown">
                                        <li><a href="Profile">Profile</a>
                                        </li>
                                        <li><a href="myHouses">My Houses</a>
                                        </li>
                                        <li><a href="bookedHouses">My Booked Houses</a>
                                        </li>
                                        <li><a href="logout">Logout</a>
                                        </li>
                                   </ul>
                              </li>
                         </ul>
                         @else
                         <div class="rd-navbar-nav-wrap__element"> <a class="button button-primary"
                                   href="login">Login</a>
                         </div>
                         @endif
                         <ul class="rd-navbar-nav">
                              <li><a href="/">Home</a>
                              </li>
                              <!-- <li><a href="properties.html">Properties</a>
                                   <ul class="rd-navbar-dropdown">
                                        <li><a href="single-property.html">Single Property</a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a>
                                        </li>
                                   </ul>
                              </li> -->
                              <li><a href="browse_houses">Browse Houses</a>
                              </li>
                              <!-- <li><a href="blog.html">Blog</a>
                                   <ul class="rd-navbar-dropdown">
                                        <li><a href="single-post.html">Single post</a>
                                        </li>
                                   </ul>
                              </li> -->
                              <!-- <li><a href="#">Pages</a>
                                   <ul class="rd-navbar-megamenu">
                                        <li>
                                             <p class="rd-megamenu-header">General</p>
                                             <ul class="rd-megamenu-list">
                                                  <li><a href="pricing-table.html">Pricing table</a></li>
                                                  <li><a href="amenities.html">Amenities</a></li>
                                                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                             </ul>
                                        </li>
                                        <li>
                                             <p class="rd-megamenu-header">Special pages</p>
                                             <ul class="rd-megamenu-list">
                                                  <li><a href="404-page.html">404 Page</a></li>
                                                  <li><a href="search-results.html">Search Results</a></li>
                                                  <li><a href="coming-soon.html">Coming Soon</a></li>
                                             </ul>
                                        </li>
                                        <li>
                                             <p class="rd-megamenu-header">Elements 1</p>
                                             <ul class="rd-megamenu-list">
                                                  <li><a href="accordion.html">Accordion</a></li>
                                                  <li><a href="tabs.html">Tabs</a></li>
                                                  <li><a href="buttons.html">Buttons</a></li>
                                             </ul>
                                        </li>
                                        <li>
                                             <p class="rd-megamenu-header">Elements 2</p>
                                             <ul class="rd-megamenu-list">
                                                  <li><a href="typography.html">Typography</a></li>
                                                  <li><a href="animated-counter.html">Animated Counter</a>
                                                  </li>
                                                  <li><a href="number-counter.html">Number Counter</a></li>
                                             </ul>
                                        </li>
                                   </ul>
                              </li> -->
                              <li><a href="About">About Us</a>
                              </li>
                              <li><a href="Contact">Contacts</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>
     </div>
</header>