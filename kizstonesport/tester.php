
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="GeniusOcean">
      <meta name="csrf-token" content="jWRp4DRrag3RyDIlogt3n3YxEqbFmpK87Opw93Du">
    <!-- Title -->
    <title>Genius Cart</title>
    <!-- favicon -->

    <!-- Bootstrap -->
    <link href="https://geniuscart.royalscripts.com/assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Sidemenu Css -->
    <link href="https://geniuscart.royalscripts.com/assets/admin/plugins/fullside-menu/css/dark-side-style.css" rel="stylesheet" />
    <link href="https://geniuscart.royalscripts.com/assets/admin/plugins/fullside-menu/waves.min.css" rel="stylesheet" />

    


    <!-- Main Css -->

    <!-- stylesheet -->
    



    <link href="https://geniuscart.royalscripts.com/assets/admin/css/common.css" rel="stylesheet" />

    
    





  </head>
  <body>
    <div class="page">
      <div class="page-main">
        <!-- Header Menu Area Start -->
        <div class="header">
          <div class="container-fluid">
            <div class="d-flex justify-content-between">
              <a class="admin-logo" href="https://geniuscart.royalscripts.com" target="_blank">
                <img src="https://geniuscart.royalscripts.com/assets/images/1571567292logo.png" alt="">
              </a>
              <div class="menu-toggle-button">
                <a class="nav-link" href="javascript:;" id="sidebarCollapse">
                  <div class="my-toggl-icon">
                      <span class="bar1"></span>
                      <span class="bar2"></span>
                      <span class="bar3"></span>
                  </div>
                </a>
              </div>

              <div class="right-eliment">
                <ul class="list">

                  <input type="hidden" id="all_notf_count" value="https://geniuscart.royalscripts.com/admin/all/notf/count">

                  <li class="bell-area">
                    <a id="notf_conv" class="dropdown-toggle-1" target="_blank" href="https://geniuscart.royalscripts.com">
                    <i class="fas fa-globe-americas"></i>
                    </a>
                  </li>


                  <li class="bell-area">
                    <a id="notf_conv" class="dropdown-toggle-1" href="javascript:;">
                      <i class="far fa-envelope"></i>
                      <span id="conv-notf-count">0</span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdownmenu-wrapper" data-href="https://geniuscart.royalscripts.com/admin/conv/notf/show" id="conv-notf-show">
                    </div>
                    </div>
                  </li>

                  <li class="bell-area">
                    <a id="notf_product" class="dropdown-toggle-1" href="javascript:;">
                      <i class="icofont-cart"></i>
                      <span id="product-notf-count">0</span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdownmenu-wrapper" data-href="https://geniuscart.royalscripts.com/admin/product/notf/show" id="product-notf-show">
                    </div>
                    </div>
                  </li>

                  <li class="bell-area">
                    <a id="notf_user" class="dropdown-toggle-1" href="javascript:;">
                      <i class="far fa-user"></i>
                      <span id="user-notf-count">0</span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdownmenu-wrapper" data-href="https://geniuscart.royalscripts.com/admin/user/notf/show" id="user-notf-show">
                    </div>
                    </div>
                  </li>

                  <li class="bell-area">
                    <a id="notf_order" class="dropdown-toggle-1" href="javascript:;">
                      <i class="far fa-newspaper"></i>
                      <span id="order-notf-count">0</span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdownmenu-wrapper" data-href="https://geniuscart.royalscripts.com/admin/order/notf/show" id="order-notf-show">
                    </div>
                    </div>
                  </li>

                  <li class="login-profile-area">
                    <a class="dropdown-toggle-1" href="javascript:;">
                      <div class="user-img">
                        <img src="https://geniuscart.royalscripts.com/assets/images/admins/1556780563user.png" alt="">
                      </div>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdownmenu-wrapper">
                          <ul>
                            <h5>Welcome!</h5>
                              <li>
                                <a href="https://geniuscart.royalscripts.com/admin/profile"><i class="fas fa-user"></i> Edit Profile</a>
                              </li>
                              <li>
                                <a href="https://geniuscart.royalscripts.com/admin/password"><i class="fas fa-cog"></i> Change Password</a>
                              </li>
                              <li>
                                <a href="https://geniuscart.royalscripts.com/admin/logout"><i class="fas fa-power-off"></i> Logout</a>
                              </li>
                            </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Header Menu Area End -->
        <div class="wrapper">
          <!-- Side Menu Area Start -->
          <nav id="sidebar" class="nav-sidebar">
            <ul class="list-unstyled components" id="accordion">
              <li>
                <a href="https://geniuscart.royalscripts.com/admin" class="wave-effect"><i class="fa fa-home mr-2"></i>Dashboard</a>
              </li>
                            <li>
        <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i>Orders</a>
        <ul class="collapse list-unstyled" id="order" data-parent="#accordion" >
               <li>
                <a href="https://geniuscart.royalscripts.com/admin/orders"> All Orders</a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/orders/pending"> Pending Orders</a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/orders/processing"> Processing Orders</a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/orders/completed"> Completed Orders</a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/orders/declined"> Declined Orders</a>
            </li>

        </ul>
    </li>
    <li>
        <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-cart"></i>Products
        </a>
        <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products/types"><span>Add New Product</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products"><span>All Products</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products/deactive"><span>Deactivated Product</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products/catalogs"><span>Product Catalogs</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#affiliateprod" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-cart"></i>Affiliate Products
        </a>
        <ul class="collapse list-unstyled" id="affiliateprod" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products/import/create"><span>Add Affiliate Product</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products/import/index"><span>All Affiliate Products</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-user"></i>Customers
        </a>
        <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/users"><span>Customers List</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/users/withdraws"><span>Withdraws</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/user/default/image"><span>Customer Default Image</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#vendor" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-ui-user-group"></i>Vendors
        </a>
        <ul class="collapse list-unstyled" id="vendor" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/vendors"><span>Vendors List</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/vendors/withdraws"><span>Withdraws</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/vendors/subs"><span>Vendor Subscriptions</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/vendor/color"><span>Default Background</span></a>
            </li>

        </ul>
    </li>

    <li>
        <a href="#vendor1" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="icofont-verification-check"></i>Vendor Verifications
        </a>
        <ul class="collapse list-unstyled" id="vendor1" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/verificatons"><span>All Verifications</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/verificatons/pendings"><span>Pending Verifications</span></a>
            </li>
        </ul>
    </li>


    <li>
        <a href="https://geniuscart.royalscripts.com/admin/subscription" class=" wave-effect"><i class="fas fa-dollar-sign"></i>Vendor Subscription Plans</a>
    </li>

    <li>
        <a href="#menu5" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-sitemap"></i>Manage Categories</a>
        <ul class="collapse list-unstyled
        " id="menu5" data-parent="#accordion" >
                <li class="">
                    <a href="https://geniuscart.royalscripts.com/admin/category"><span>Main Category</span></a>
                </li>
                <li class="">
                    <a href="https://geniuscart.royalscripts.com/admin/subcategory"><span>Sub Category</span></a>
                </li>
                <li class="">
                    <a href="https://geniuscart.royalscripts.com/admin/childcategory"><span>Child Category</span></a>
                </li>
        </ul>
    </li>

    <li>
        <a href="https://geniuscart.royalscripts.com/admin/products/import"><i class="fas fa-upload"></i>Bulk Product Upload</a>
    </li>

    <li>
        <a href="#menu4" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-speech-comments"></i>Product Discussion
        </a>
        <ul class="collapse list-unstyled" id="menu4" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/ratings"><span>Product Reviews</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/comments"><span>Comments</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/reports"><span>Reports</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="https://geniuscart.royalscripts.com/admin/coupon" class=" wave-effect"><i class="fas fa-percentage"></i>Set Coupons</a>
    </li>
    <li>
        <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i>Blog
        </a>
        <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/blog/category"><span>Categories</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/blog"><span>Posts</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#msg" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i>Messages
        </a>
        <ul class="collapse list-unstyled" id="msg" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/tickets"><span>Tickets</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/disputes"><span>Disputes</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#general" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-cogs"></i>General Settings
        </a>
        <ul class="collapse list-unstyled" id="general" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/logo"><span>Logo</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/favicon"><span>Favicon</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/loader"><span>Loader</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/shipping"><span>Shipping Methods</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/package"><span>Packagings</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/pickup"><span>Pickup Locations</span></a>
            </li>
            <li>
            <a href="https://geniuscart.royalscripts.com/admin/general-settings/contents"><span>Website Contents</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/footer"><span>Footer</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/affilate"><span>Affiliate Information</span></a>
            </li>

            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/popup"><span>Popup Banner</span></a>
            </li>


            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/error-banner"><span>Error Banner</span></a>
            </li>


            <li>
                <a href="https://geniuscart.royalscripts.com/admin/general-settings/maintenance"><span>Website Maintenance</span></a>
            </li>

        </ul>
    </li>

    <li>
        <a href="#homepage" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-edit"></i>Home Page Settings
        </a>
        <ul class="collapse list-unstyled" id="homepage" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/slider"><span>Sliders</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/service"><span>Services</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/page-settings/best-seller"><span>Right Side Banner1</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/page-settings/big-save"><span>Right Side Banner2</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/top/small/banner"><span>Top Small Banners</span></a>
            </li>

            <li>
                <a href="https://geniuscart.royalscripts.com/admin/large/banner"><span>Large Banners</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/bottom/small/banner"><span>Bottom Small Banners</span></a>
            </li>

            <li>
                <a href="https://geniuscart.royalscripts.com/admin/review"><span>Reviews</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/partner"><span>Partners</span></a>
            </li>


            <li>
                <a href="https://geniuscart.royalscripts.com/admin/page-settings/customize"><span>Home Page Customization</span></a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#menu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i>Menu Page Settings
        </a>
        <ul class="collapse list-unstyled" id="menu" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/faq"><span>FAQ Page</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/page-settings/contact"><span>Contact Us Page</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/page"><span>Other Pages</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#emails" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-at"></i>Email Settings
        </a>
        <ul class="collapse list-unstyled" id="emails" data-parent="#accordion">
            <li><a href="https://geniuscart.royalscripts.com/admin/email-templates"><span>Email Template</span></a></li>
            <li><a href="https://geniuscart.royalscripts.com/admin/email-config"><span>Email Configurations</span></a></li>
            <li><a href="https://geniuscart.royalscripts.com/admin/groupemail"><span>Group Email</span></a></li>
        </ul>
    </li>
    <li>
        <a href="#payments" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i>Payment Settings
        </a>
        <ul class="collapse list-unstyled" id="payments" data-parent="#accordion">
            <li><a href="https://geniuscart.royalscripts.com/admin/payment-informations"><span>Payment Information</span></a></li>
            <li><a href="https://geniuscart.royalscripts.com/admin/paymentgateway"><span>Payment Gateways</span></a></li>
            <li><a href="https://geniuscart.royalscripts.com/admin/currency"><span>Currencies</span></a></li>
        </ul>
    </li>
    <li>
        <a href="#socials" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-paper-plane"></i>Social Settings
        </a>
        <ul class="collapse list-unstyled" id="socials" data-parent="#accordion">
                <li><a href="https://geniuscart.royalscripts.com/admin/social"><span>Social Links</span></a></li>
                <li><a href="https://geniuscart.royalscripts.com/admin/social/facebook"><span>Facebook Login</span></a></li>
                <li><a href="https://geniuscart.royalscripts.com/admin/social/google"><span>Google Login</span></a></li>
        </ul>
    </li>
    <li>
        <a href="#langs" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-language"></i>Language Settings
        </a>
        <ul class="collapse list-unstyled" id="langs" data-parent="#accordion">
                <li><a href="https://geniuscart.royalscripts.com/admin/languages"><span>Website Language</span></a></li>
                <li><a href="https://geniuscart.royalscripts.com/admin/adminlanguages"><span>Admin Panel Language</span></a></li>

        </ul>
    </li>
    <li>
        <a href="#seoTools" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-wrench"></i>SEO Tools
        </a>
        <ul class="collapse list-unstyled" id="seoTools" data-parent="#accordion">
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/products/popular/30"><span>Popular Products</span></a>
            </li>
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/seotools/analytics"><span>Google Analytics</span></a>
            </li
            >
            <li>
                <a href="https://geniuscart.royalscripts.com/admin/seotools/keywords"><span>Website Meta Keywords</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="https://geniuscart.royalscripts.com/admin/staff" class=" wave-effect"><i class="fas fa-user-secret"></i>Manage Staffs</a>
    </li>

    <li>
        <a href="https://geniuscart.royalscripts.com/admin/subscribers" class=" wave-effect"><i class="fas fa-users-cog mr-2"></i>Subscribers</a>
    </li>

        <li>
            <a href="https://geniuscart.royalscripts.com/admin/role" class=" wave-effect"><i class="fas fa-user-tag"></i>Manage Roles</a>
        </li>
        <li>
            <a href="https://geniuscart.royalscripts.com/admin/cache/clear" class=" wave-effect"><i class="fas fa-sync"></i>Clear Cache</a>
        </li>
        <!--<li>-->
        <!--    <a href="#sactive" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">-->
        <!--        <i class="fas fa-cog"></i>System Activation-->
        <!--    </a>-->
        <!--    <ul class="collapse list-unstyled" id="sactive" data-parent="#accordion">-->

        <!--        <li><a href="https://geniuscart.royalscripts.com/admin/activation"> Activation</a></li>-->
        <!--        <li><a href="https://geniuscart.royalscripts.com/admin/generate/backup"> Generate Backup</a></li>-->
        <!--    </ul>-->
        <!--</li>-->              
            </ul>
                    <p class="version-name"> Version: 2.0</p>
                    </nav>
          <!-- Main Content Area Start -->
          
<div class="content-area">
  <div class="mr-breadcrumb">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="heading">Physical Product <a class="add-btn"
            href="https://geniuscart.royalscripts.com/admin/products/types"><i class="fas fa-arrow-left"></i> Back</a>
        </h4>
        <ul class="links">
          <li>
            <a href="https://geniuscart.royalscripts.com/admin">Dashboard </a>
          </li>
          <li>
            <a href="javascript:;">Products </a>
          </li>
          <li>
            <a href="https://geniuscart.royalscripts.com/admin/products">All Products</a>
          </li>
          <li>
            <a href="https://geniuscart.royalscripts.com/admin/products/types">Add Product</a>
          </li>
          <li>
            <a href="https://geniuscart.royalscripts.com/admin/products/physical/create">Physical Product</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <form id="geniusform" action="https://geniuscart.royalscripts.com/admin/products/store" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="jWRp4DRrag3RyDIlogt3n3YxEqbFmpK87Opw93Du">  
  <div class="row">
    <div class="col-lg-8">
      <div class="add-product-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-description">
              <div class="body-area">
    
                <div class="gocover"
                  style="background: url(https://geniuscart.royalscripts.com/assets/images/1564224329loading3.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                </div>
    
                  <div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <p class="text-left"></p> 
      </div>
      <div class="alert alert-danger validation" style="display: none;">
      <button type="button" class="close alert-close"><span>×</span></button>
            <ul class="text-left">
            </ul>
      </div>    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Product Name* </h4>
                        <p class="sub-heading">(In Any Language)</p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <input type="text" class="input-field" placeholder="Enter Product Name"
                        name="name" required="">
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Product Sku* </h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <input type="text" class="input-field" placeholder="Enter Product Sku"
                        name="sku" required=""
                        value="OTd9504Fbb">
    
                      <div class="checkbox-wrapper">
                        <input type="checkbox" name="product_condition_check" class="checkclick"
                          id="conditionCheck" value="1">
                        <label for="conditionCheck">Allow Product Condition</label>
                      </div>
    
                    </div>
                  </div>
    
                  <div class="showbox">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="left-area">
                          <h4 class="heading">Product Condition*</h4>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <select name="product_condition">
                          <option value="2">New</option>
                          <option value="1">Used</option>
                        </select>
                      </div>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Category*</h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <select id="cat" name="category_id" required="">
                        <option value="">Select Category</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/4"
                          value="4">Electronic</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/5"
                          value="5">Fashion &amp; Beauty</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/6"
                          value="6">Camera &amp; Photo</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/7"
                          value="7">Smart Phone &amp; Table</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/8"
                          value="8">Sport &amp; Outdoor</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/9"
                          value="9">Jewelry &amp; Watches</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/10"
                          value="10">Health &amp; Beauty</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/11"
                          value="11">Books &amp; Office</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/12"
                          value="12">Toys &amp; Hobbies</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/13"
                          value="13">Books</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/15"
                          value="15">Automobiles &amp; Motorcycles</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/16"
                          value="16">Home decoration &amp; Appliance</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/17"
                          value="17">Portable &amp; Personal Electronics</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/18"
                          value="18">Outdoor, Recreation &amp; Fitness</option>
                                                <option data-href="https://geniuscart.royalscripts.com/admin/load/subcategories/19"
                          value="19">Surveillance Safety &amp; Security</option>
                                              </select>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Sub Category*</h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <select id="subcat" name="subcategory_id" disabled="">
                        <option value="">Select Sub Category</option>
                      </select>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Child Category*</h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <select id="childcat" name="childcategory_id" disabled="">
                        <option value="">Select Child Category</option>
                      </select>
                    </div>
                  </div>
    
    
                  <div id="catAttributes"></div>
                  <div id="subcatAttributes"></div>
                  <div id="childcatAttributes"></div>
    
    
    
      
    
    
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
    
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <ul class="list">
                        <li>
                          <input class="checkclick1" name="shipping_time_check" type="checkbox"
                            id="check1" value="1">
                          <label for="check1">Allow Estimated Shipping Time</label>
                        </li>
                      </ul>
                    </div>
                  </div>
    
    
    
                  <div class="showbox">
    
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="left-area">
                          <h4 class="heading">Product Estimated Shipping Time* </h4>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <input type="text" class="input-field"
                          placeholder="Estimated Shipping Time" name="ship">
                      </div>
                    </div>
    
    
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
    
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <ul class="list">
                        <li>
                          <input name="size_check" type="checkbox" id="size-check" value="1">
                          <label for="size-check">Allow Product Sizes</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="showbox" id="size-display">
                    <div class="row">
                      <div class="col-lg-12">
                      </div>
                      <div class="col-lg-12">
                        <div class="product-size-details" id="size-section">
                          <div class="size-area">
                            <span class="remove size-remove"><i class="fas fa-times"></i></span>
                            <div class="row">
                              <div class="col-md-4 col-sm-6">
                                <label>
                                  Size Name :
                                  <span>
                                    (eg. S,M,L,XL,XXL,3XL,4XL)
                                  </span>
                                </label>
                                <input type="text" name="size[]" class="input-field"
                                  placeholder="Size Name">
                              </div>
                              <div class="col-md-4 col-sm-6">
                                <label>
                                  Size Qty :
                                  <span>
                                    (Number of quantity of this size)
                                  </span>
                                </label>
                                <input type="number" name="size_qty[]" class="input-field"
                                  placeholder="Size Qty" value="1" min="1">
                              </div>
                              <div class="col-md-4 col-sm-6">
                                <label>
                                  Size Price :
                                  <span>
                                    (This price will be added with base price)
                                  </span>
                                </label>
                                <input type="number" name="size_price[]" class="input-field"
                                  placeholder="Size Price" value="0" min="0">
                              </div>
                            </div>
                          </div>
                        </div>
    
                        <a href="javascript:;" id="size-btn" class="add-more"><i
                            class="fas fa-plus"></i>Add More Size </a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
    
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <ul class="list">
                        <li>
                          <input class="checkclick1" name="color_check" type="checkbox" id="check3"
                            value="1">
                          <label for="check3">Allow Product Colors</label>
                        </li>
                      </ul>
                    </div>
                  </div>
    
                  <div class="showbox">
    
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="left-area">
                          <h4 class="heading">
                            Product Colors*
                          </h4>
                          <p class="sub-heading">
                            (Choose Your Favorite Colors)
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="select-input-color" id="color-section">
                          <div class="color-area">
                            <span class="remove color-remove"><i class="fas fa-times"></i></span>
                            <div class="input-group colorpicker-component cp">
                              <input type="text" name="color[]" value="#000000"
                                class="input-field cp" />
                              <span class="input-group-addon"><i></i></span>
                            </div>
                          </div>
                        </div>
                        <a href="javascript:;" id="color-btn" class="add-more mt-4 mb-3"><i
                            class="fas fa-plus"></i>Add More Color </a>
                      </div>
                    </div>
    
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
    
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <ul class="list">
                        <li>
                          <input class="checkclick1" name="whole_check" type="checkbox"
                            id="whole_check" value="1">
                          <label for="whole_check">Allow Product Whole Sell</label>
                        </li>
                      </ul>
                    </div>
                  </div>
    
                  <div class="showbox">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="left-area">
    
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="featured-keyword-area">
                          <div class="feature-tag-top-filds" id="whole-section">
                            <div class="feature-area">
                              <span class="remove whole-remove"><i
                                  class="fas fa-times"></i></span>
                              <div class="row">
                                <div class="col-lg-6">
                                  <input type="number" name="whole_sell_qty[]"
                                    class="input-field"
                                    placeholder="Enter Quantity" min="0">
                                </div>
    
                                <div class="col-lg-6">
                                  <input type="number" name="whole_sell_discount[]"
                                    class="input-field"
                                    placeholder="Enter Discount Percentage"
                                    min="0" />
                                </div>
                              </div>
                            </div>
                          </div>
    
                          <a href="javascript:;" id="whole-btn" class="add-fild-btn"><i
                              class="icofont-plus"></i> Add More Field</a>
                        </div>
                      </div>
                    </div>
                  </div>
    
                  <div class="row" id="stckprod">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Product Stock*</h4>
                        <p class="sub-heading">(Leave Empty will Show Always Available)</p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <input name="stock" type="text" class="input-field"
                        placeholder="e.g 20">
                      <div class="checkbox-wrapper">
                        <input type="checkbox" name="measure_check" class="checkclick"
                          id="allowProductMeasurement" value="1">
                        <label
                          for="allowProductMeasurement">Allow Product Measurement</label>
                      </div>
                    </div>
                  </div>
    
    
    
                  <div class="showbox">
    
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="left-area">
                          <h4 class="heading">Product Measurement*</h4>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <select id="product_measure">
                          <option value="">None</option>
                          <option value="Gram">Gram</option>
                          <option value="Kilogram">Kilogram</option>
                          <option value="Litre">Litre</option>
                          <option value="Pound">Pound</option>
                          <option value="Custom">Custom</option>
                        </select>
                      </div>
                      <div class="col-lg-6 hidden" id="measure">
                        <input name="measure" type="text" id="measurement" class="input-field"
                          placeholder="Enter Unit">
                      </div>
                    </div>
    
                  </div>
    
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">
                          Product Description*
                        </h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="text-editor">
                        <textarea class="nic-edit-p" name="details"></textarea>
                      </div>
                    </div>
                  </div>
    
    
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">
                          Product Buy/Return Policy*
                        </h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="text-editor">
                        <textarea class="nic-edit-p" name="policy"></textarea>
                      </div>
                    </div>
                  </div>
    
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="checkbox-wrapper">
                        <input type="checkbox" name="seo_check" value="1" class="checkclick"
                          id="allowProductSEO" value="1">
                        <label for="allowProductSEO">Allow Product SEO</label>
                      </div>
                    </div>
                  </div>
    
    
    
                  <div class="showbox">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="left-area">
                          <h4 class="heading">Meta Tags *</h4>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <ul id="metatags" class="myTags">
                        </ul>
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="left-area">
                          <h4 class="heading">
                            Meta Description *
                          </h4>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="text-editor">
                          <textarea name="meta_description" class="input-field"
                            placeholder="Meta Description"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
    

    
    
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <button class="addProductSubmit-btn"
                        type="submit">Create Product</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="add-product-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-description">
              <div class="body-area">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Feature Image *</h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-body">
                          <div class="span4 cropme text-center" id="landscape"
                            style="width: 100%; height: 285px; border: 1px dashed #ddd; background: #f1f1f1;">
                            <a href="javascript:;" id="crop-image" class=" mybtn1" style="">
                              <i class="icofont-upload-alt"></i> Upload Image Here
                            </a>
                          </div>
                        </div>
                    </div>
                  </div>
    
                  <input type="hidden" id="feature_photo" name="photo" value="">
    
                  <input type="file" name="gallery[]" class="hidden" id="uploadgallery" accept="image/*"
                    multiple>

                  <div class="row mb-4">
                    <div class="col-lg-12 mb-2">
                      <div class="left-area">
                        <h4 class="heading">
                          Product Gallery Images *
                        </h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <a href="#" class="set-gallery" data-toggle="modal" data-target="#setgallery">
                        <i class="icofont-plus"></i> Set Gallery
                      </a>
                    </div>
                  </div>

    
              
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">
                          Product Current Price*
                        </h4>
                        <p class="sub-heading">
                          (In USD)
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <input name="price" type="number" class="input-field"
                        placeholder="e.g 20" step="0.01" required="" min="0">
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Product Previous Price*</h4>
                        <p class="sub-heading">(Optional)</p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <input name="previous_price" step="0.01" type="number" class="input-field"
                        placeholder="e.g 20" min="0">
                    </div>
                  </div>
    
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Youtube Video URL*</h4>
                        <p class="sub-heading">(Optional)</p>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <input name="youtube" type="text" class="input-field"
                        placeholder="Enter Youtube Video URL">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
    
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="featured-keyword-area">
                        <div class="left-area">
                          <h4 class="heading">Feature Tags</h4>
                        </div>
                        <div class="feature-tag-top-filds" id="feature-section">
                          <div class="feature-area">
                            <span class="remove feature-remove"><i class="fas fa-times"></i></span>
                            <div class="row">
                              <div class="col-lg-6">
                                <input type="text" name="features[]" class="input-field"
                                  placeholder="Enter Your Keyword">
                              </div>
    
                              <div class="col-lg-6">
                                <div class="input-group colorpicker-component cp">
                                  <input type="text" name="colors[]" value="#000000"
                                    class="input-field cp" />
                                  <span class="input-group-addon"><i></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
    
                        <a href="javascript:;" id="feature-btn" class="add-fild-btn"><i
                            class="icofont-plus"></i> Add More Field</a>
                      </div>
                    </div>
                  </div>
    
    
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="left-area">
                        <h4 class="heading">Tags *</h4>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <ul id="tags" class="myTags">
                      </ul>
                    </div>
                  </div>
                  <input type="hidden" name="type" value="Physical">
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  
</div>

<div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Image Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="top-area">
          <div class="row">
            <div class="col-sm-6 text-right">
              <div class="upload-img-btn">
                <label for="image-upload" id="prod_gallery"><i
                    class="icofont-upload-alt"></i>Upload File</label>
              </div>
            </div>
            <div class="col-sm-6">
              <a href="javascript:;" class="upload-done" data-dismiss="modal"> <i
                  class="fas fa-check"></i> Done</a>
            </div>
            <div class="col-sm-12 text-center">( <small>You can upload multiple Images.</small>
              )</div>
          </div>
        </div>
        <div class="gallery-images">
          <div class="selected-image">
            <div class="row">


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          <!-- Main Content Area End -->
          </div>
        </div>
      </div>

            <script type="text/javascript">
        var mainurl = "https://geniuscart.royalscripts.com";
        var admin_loader = 1;
        var whole_sell = 6;
        var getattrUrl = 'https://geniuscart.royalscripts.com/admin/getattributes';
        var curr = {"id":1,"name":"USD","sign":"$","value":"1","is_default":"1"};
        // console.log(curr);
      </script>

    <!-- Dashboard Core -->
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/vendors/vue.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/vendors/bootstrap.min.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/jqueryui.min.js"></script>
    <!-- Fullside-menu Js-->
    <script src="https://geniuscart.royalscripts.com/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/plugins/fullside-menu/waves.min.js"></script>

    <script src="https://geniuscart.royalscripts.com/assets/admin/js/plugin.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/Chart.min.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/tag-it.js"></script>
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/nicEdit.js"></script>
        <script src="https://geniuscart.royalscripts.com/assets/admin/js/bootstrap-colorpicker.min.js"></script>
        <script src="https://geniuscart.royalscripts.com/assets/admin/js/notify.js"></script>

        <script src=""></script>

    <script src="https://geniuscart.royalscripts.com/assets/admin/js/load.js"></script>
    <!-- Custom Js-->
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/custom.js"></script>
    <!-- AJAX Js-->
    <script src="https://geniuscart.royalscripts.com/assets/admin/js/myscript.js"></script>



<script type="text/javascript">
  // Gallery Section Insert

  $(document).on('click', '.remove-img', function () {
    var id = $(this).find('input[type=hidden]').val();
    $('#galval' + id).remove();
    $(this).parent().parent().remove();
  });

  $(document).on('click', '#prod_gallery', function () {
    $('#uploadgallery').click();
    $('.selected-image .row').html('');
    $('#geniusform').find('.removegal').val(0);
  });


  $("#uploadgallery").change(function () {
    var total_file = document.getElementById("uploadgallery").files.length;
    for (var i = 0; i < total_file; i++) {
      $('.selected-image .row').append('<div class="col-sm-6">' +
        '<div class="img gallery-img">' +
        '<span class="remove-img"><i class="fas fa-times"></i>' +
        '<input type="hidden" value="' + i + '">' +
        '</span>' +
        '<a href="' + URL.createObjectURL(event.target.files[i]) + '" target="_blank">' +
        '<img src="' + URL.createObjectURL(event.target.files[i]) + '" alt="gallery image">' +
        '</a>' +
        '</div>' +
        '</div> '
      );
      $('#geniusform').append('<input type="hidden" name="galval[]" id="galval' + i +
        '" class="removegal" value="' + i + '">')
    }

  });

  // Gallery Section Insert Ends
</script>

<script type="text/javascript">
  $('.cropme').simpleCropper();
</script>




  </body>

</html>
