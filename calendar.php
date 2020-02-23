<?php include('./header.php'); ?>

<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="./">Home</a></li>
                    <li class="active">Calendar</li>
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
                <h1><i class="fa fa-google-plus pull-right"></i>Calendar of Events</h1>
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
                <div class="col-md-12">
                    <div id='loading'>loading...</div>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php'); ?>

<script src='plugins/fullcalendar/lib/moment.min.js'></script>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/helper-plugins.js"></script> <!-- Plugins -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/waypoints.js"></script> <!-- Waypoints -->
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer -->
<script src='plugins/fullcalendar/jquery-ui.custom.min.js'></script>
<script src='plugins/fullcalendar/fullcalendar.min.js'></script>
<script src='plugins/fullcalendar/gcal.js'></script> <!-- Google Calendar -->
<script>

    $(document).ready(function () {

        $('#calendar').fullCalendar({

            // THIS KEY WON'T WORK IN PRODUCTION!!!
            // To make your own Google API key, follow the directions here:
            // http://fullcalendar.io/docs/google_calendar/
            googleCalendarApiKey: 'AIzaSyBIXBso5Hscakr2c_Vh6Glsw3n8iRqiJws',

            // US Holidays
            events: 'fm06kljukhiupdtmbqmidlfsgg@group.calendar.google.com',

            eventClick: function (event) {
                // opens events in a popup window
                window.open(event.url, 'gcalevent', 'width=700,height=600');
                return false;
            },

            loading: function (bool) {
                $('#loading').toggle(bool);
            }

        });

    });

</script>
</body>
</html>



