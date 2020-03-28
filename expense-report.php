<?php include('./header.php'); ?>
<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="./">Home</a></li>
                    <li class="active">Expense Report</li>
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
                <h1>Expense Report</h1>
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
                        This Report is to be submitted only by the regional executive secretaries and sent directly to
                        the USNF Executive Secretary and USNF Treasurer at the end or beginning of the year. Use this
                        excel sheet to submit an expense report to the USNF. Include receipts.
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-primary">Form</h3>
                    <a href="./files/expense_report.xlsx" class="btn btn-primary" download>Download Excel Sheet
                        <i class="fas fa-download"></i></a>
                    <hr>
                    <div class="alert alert-warning fade in">
                        Your browser may automatically request to download the file. If your browser supports Microsoft
                        Excel sheets, you may also preview the form below.
                    </div>
                    <embed src="./files/expense_report.xlsx" type="text/plain"/>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./footer.php'); ?>
<?php include('./scripts.php'); ?>


