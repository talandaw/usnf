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
                <h1>Contact USNF</h1>
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
                        <h2 class="post-title">Send a Message</h2>
                        <p>Your message will be sent to the President & Executive Secretary and may be forwarded to the
                            appropriate contact if deemed necessary.</p>
                    </header>
                    <div class="post-content">
                        <div class="row">
                            <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                                <div class="col-md-6 margin-15">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Name*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message*" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Send!">
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div id="message"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 margin-15">
                        <hr>
                        <h4>Notes:</h4>
                        <ul class="chevrons">
                            <li><i class="icon"></i>
                                Looking for specific regional federation contacts? Please visit their individual
                                websites under "Regional Federations".
                            </li>
                            <li><i class="icon"></i>
                                Found an issue with the website that you'd like to report? Please use the Feedback icon.
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php'); ?>
<?php include('./scripts.php'); ?>


