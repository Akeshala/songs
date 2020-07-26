<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Song Details | Sinhala Song Details</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

    <style>
        .bolder {
            font-weight: bolder;
            color: blue;
            text-decoration: underline;
        }
    </style>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            'use strict';
            jQuery('body').backstretch([
                "images/bg/bg1.jpg",
                "images/bg/bg2.jpg",
                "images/bg/bg3.jpg"
            ], {
                duration: 5000,
                fade: 500
            });

            $("#mapwrapper").gMap({
                controls: false,
                scrollwheel: false,
                markers: [{
                    latitude: 40.7566,
                    longitude: -73.9863,
                    icon: {
                        image: "images/marker.png",
                        iconsize: [44, 44],
                        iconanchor: [12, 46],
                        infowindowanchor: [12, 0]
                    }
                }],
                icon: {
                    image: "images/marker.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0]
                },
                latitude: 40.7566,
                longitude: -73.9863,
                zoom: 14
            });
        });
    </script>
</head>
<!--/head-->

<body>
    <div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><span class="pe-7s-musiclist bounce-in"></span> Sinhala Song Details</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="add-song.php">ADD Song</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><span class="search-trigger"><i class="fa fa-search"></i></span></li>
                </ul>
            </div>
        </div>
        <div id="search-wrapper">
            <div class="container">
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">Search</span>
                        <input type="text" id="search_text" placeholder="Search" name="search_text" class="form-control" />
                    </div>
                </div>
                <div id="result"></div>
            </div>
        </div>
    </header>
    <!--/header-->

    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">Details</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
    </section>
    <!--/#main-slider-->

    <div id="content-wrapper">
        <section id="contact" class="white">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 fade-up">
                        <h4>Name : <em><?php echo $_SESSION['songname']; ?></em></h4>
                        <h4 id="idsongname1">Other Name : <em><?php echo $_SESSION['songname1']; ?></em></h4>
                        <h4 id="idalbum">Album : <em><?php echo $_SESSION['album']; ?></em></h4>
                        <h4>Artist or Band : <em><?php echo $_SESSION['artist']; ?></em></h4>
                        <h4>Lyricist : <em><?php echo $_SESSION['lyricist']; ?></em></h4>
                        <h4>Composer : <em><?php echo $_SESSION['composer']; ?></em></h4>
                        <h4 id="idmusician">Musician :- <em><?php echo $_SESSION['musician']; ?></em></h4>
                        <h4 id="idgenre">Genre : <em><?php echo $_SESSION['genre']; ?></em></h4>
                        <h4>Meaning or background story : <em id="idmeaning"><?php echo $_SESSION['meaning']; ?></em></h4>
                        <!--<h4>Year : </h4>-->
                        <h4 id="idname">Published by : <em><?php echo $_SESSION['name']; ?></em></h4>

                    </div><!-- col -->
                    <div class="col-md-8 fade-up">
                        <h4>Orginal Song (Link) : <a href="<?php echo $_SESSION['link']; ?>" id="idlink"><button class="btn btn-link">View</button></a></h4>
                        <h4 id="idlink1">Remake : <a href="<?php echo $_SESSION['link1']; ?>"><button class="btn btn-link">View</button></a></h4>
                    </div><!-- col -->
                    <div class="col-md-8 fade-up">
                        <p>If you have more information about this song or suggest an edit, plese go to <a href="edit-song.php" class="bolder">this</a> page.</p>
                    </div><!-- col -->
                    <div class="col-md-8 fade-up">
                        <p>All details are user submitted. We try our best to validate information provided by users before publishing. But, there may be mistakes. If there are mistakes please inform us. We are more than happy to correct those mistakes. Your inputs will improve the quality of this database. </p>
                    </div><!-- col -->

                </div><!-- row -->
                <div class="gap"></div>
            </div>
        </section>
    </div>

    <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Our Service</h4>
                        <p>This website is for educational purposes.</p>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Contact us</h4>
                        <address>
                            <strong>aaaaaa</strong><br>
                            bbbb,<br>
                            ccccc, Sri Lanka<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> +94123456789
                        </address>
                    </div>
                    <!--/.col-md-3-->
                    <!--/.col-md-3-->
                </div>
            </div>
        </section>
        <!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        &copy; 2020 Sinhala Song Details. All Rights Reserved.
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li>
                            <!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>
    <script src="myfun.js"></script>
</body>

</html>


<script>
    var vlink = '<?php echo $_SESSION['link']; ?>';
    var vlink1 = '<?php echo $_SESSION['link1']; ?>';
    var vsongname1 = '<?php echo $_SESSION['songname1']; ?>';
    var valbum = '<?php echo $_SESSION['album']; ?>';
    var vgenre = '<?php echo $_SESSION['genre']; ?>';
    var vmeaning = '<?php echo $_SESSION['meaning']; ?>';
    var vname = '<?php echo $_SESSION['name']; ?>';
    var vmusician = '<?php echo $_SESSION['musician']; ?>';
    if (vmusician == "-") {
        document.getElementById("idmusician").innerHTML = "";
    }
    if (vname == "-") {
        document.getElementById("idname").innerHTML = "";
    }
    if (vmeaning == "-") {
        document.getElementById("idmeaning").innerHTML = "---";
    }
    if (vgenre == "-") {
        document.getElementById("idgenre").innerHTML = "";
    }
    if (valbum == "-") {
        document.getElementById("idalbum").innerHTML = "";
    }
    if (vsongname1 == "-") {
        document.getElementById("idsongname1").innerHTML = "";
    }
    if (vlink == "-") {
        document.getElementById("idlink").innerHTML = "---";
    }
    if (vlink1 == "-") {
        document.getElementById("idlink1").innerHTML = "";
    }
</script>
<script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>