<?php include('./header.php'); ?>
<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="./">Home</a></li>
                    <li class="active">US Gallery</li>
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
            <div class="col-md-6">
                <h1>USNF Gallery</h1>
            </div>
            <div class="col-md-6">
                <div class="gallery-filter">
                    <ul class="nav nav-pills sort-source" data-sort-id="gallery" data-option-key="filter">
                        <li data-option-value="*" class="active"><a href="#"><i class="fa fa-th"></i>
                                <span>Show All</span></a></li>
                        <li data-option-value=".format-image"><a href="#"><i class="fa fa-picture-o"></i>
                                <span>Image</span></a>
                        </li>
                        <li data-option-value=".format-link"><a href="#"><i class="fa fa-link"></i>
                                <span>Link</span></a></li>
                            <li data-option-value=".format-gallery"><a href="#"><i class="fa fa-camera"></i> <span>Slideshow</span></a>
                            </li>
                            <li data-option-value=".format-video"><a href="#"><i class="fa fa-play"></i>
                                <span>Video</span></a></li>
                        </ul>
                    </div>
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
                    <ul class="sort-destination" data-sort-id="gallery">
                        <li class="col-md-4 col-sm-4 grid-item post format-image">
                            <div class="grid-item-inner">
                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-image">
                            <div class="grid-item-inner">
                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-gallery">
                            <div class="grid-item-inner">
                                <div class="media-box">
                                    <div class="flexslider" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="slide" data-pause="yes">
                                        <ul class="slides">
                                            <li class="item">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname]"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            </li>
                                            <li class="item">
                                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[postname]"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-link">
                            <div class="grid-item-inner">
                                <a href="http://www.google.com" target="_blank" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-image">
                            <div class="grid-item-inner">
                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-link">
                            <div class="grid-item-inner">
                                <a href="http://www.google.com" target="_blank" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-video">
                            <div class="grid-item-inner">
                                <a href="https://vimeo.com/19564018" data-rel="prettyPhoto" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-video">
                            <div class="grid-item-inner">
                                <a href="http://youtu.be/NEFfnbQlGo8" data-rel="prettyPhoto" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                        <li class="col-md-4 col-sm-4 grid-item post format-image">
                            <div class="grid-item-inner">
                                <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto" class="media-box">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php include('./footer.php'); ?>
<?php include('./scripts.php'); ?>


