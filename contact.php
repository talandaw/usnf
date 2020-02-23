<?php include('./header.php'); ?>
<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="./">Home</a></li>
                    <li class="active">Contact USNF</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Nav Backed Header -->
<!-- Start Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Location</h2>
            </header>
            <div class="post-content">

              <div class="row">
                <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                  <div class="col-md-6 margin-15">
                    <div class="form-group">
                      <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                    </div>
                    <div class="form-group">
                      <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                    </div>
                    <div class="form-group">
                      <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                  </div>
                </form>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <div id="message"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar"> 
            <!-- Recent Posts Widget -->
            <div class="widget-recent-posts widget">
              <div class="sidebar-widget-title">
                <h3>Recent Posts</h3>
              </div>
              <ul>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
                </li>
                <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"> </a>
                  <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
                </li>
                  <li class="clearfix"><a href="#" class="media-box post-image">
                          <img src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail">
                      </a>
                      <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti voluptatum
                              deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span>
                      </div>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include('./footer.php'); ?>
<?php include('./scripts.php'); ?>


