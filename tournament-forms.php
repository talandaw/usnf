<?php include('./header.php'); ?>
<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="./">Home</a></li>
                    <li class="active">Tournament Forms</li>
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
                <h1>Tournament Forms</h1>
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
                <div class="col-sm-12">
                    <h3 class="text-primary">Details</h3>
                    <p>
                        The following forms may be downloaded or printed for both regional and national tournaments for
                        engi, individual and group tournament.
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-primary">Recording Forms</h3>
                    <a href="./files/engi-match.pdf" class="btn btn-primary" download>Download PDF - Engi Match
                        <i class="fas fa-download"></i>
                    </a><br><br>
                    <a href="./files/individual-shai.pdf" class="btn btn-info" download>Download PDF - Individual Match
                        <i class="fas fa-download"></i>
                    </a><br><br>
                    <a href="./files/team-match.pdf" class="btn btn-warning" download>Download PDF - Team Match
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">

                    <div class="alert alert-warning fade in"><a class="close" data-dismiss="alert" href="#">&times;</a>
                        Your browser may automatically request to download the file. If your browser supports Adobe
                        PDFs, you may also preview the form below.
                    </div>
                    <embed src="./files/engi-match.pdf" type="application/pdf"/>
                    <br><br>
                    <embed src="./files/individual-shai.pdf" type="application/pdf"/>
                    <br><br>
                    <embed src="./files/team-match.pdf" type="application/pdf"/>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php'); ?>
<?php include('./scripts.php'); ?>


