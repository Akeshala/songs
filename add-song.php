<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADD Song | Sinhala Song Details</title>
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
        #message {
            color: red
        }

        #message1 {
            color: red
        }

        .bolder {
            font-weight: bolder;
            color: red
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
                                    <h2 class="main-title">ADD SONG</h2>
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
        <section id="addsongtitle" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                        <p>The Central Environmental Authority (CEA) was established on 12th August 1981, under the
                            provision of the National Environmental Act No:47 of 1980. The Ministry of Environment which
                            was established in December 2001 has the overall responsibility in the affairs of the CEA
                            with the objective of integrating environmental considerations into the development process
                            of the country. The CEA was given wider regulatory powers under the National Environment
                            (Amendment) Acts No:56 of 1988 and No:53 of 2000.</p>


                    </div>
                    <div class="col-md-4 fade-up">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 fade-up">
                        <h3>SONG DETAILS</h3>
                        <br>

                        <form method="post" id="addsong" action="add-song-db.php">
                            <input type="text" name="name" id="name" placeholder="Your Name (Optional)" />

                            <input type="text" name="email" id="email" placeholder="Your Email (Optional)" />

                            <div id="messageSongName" class="bolder"></div>
                            <input type="text" name="songname" id="songname" placeholder="Name of the Song" />

                            <input type="text" name="songname1" id="songname1" placeholder="Other name of the song (if any)" />

                            <input type="text" name="album" id="album" placeholder="Album" />

                            <div id="messageArtistName" class="bolder"></div>
                            <input type="text" name="artist" id="artist" placeholder="Artist or Band" />

                            <div id="messageLyricistName" class="bolder"></div>
                            <input type="text" name="lyricist" id="lyricist" placeholder="Lyricist" />

                            <div id="messageComposerName" class="bolder"></div>
                            <input type="text" name="composer" id="composer" placeholder="Composer" />

                            <input type="text" name="musician" id="musician" placeholder="Musician" />

                            <input type="text" name="link" id="link" placeholder="Orginal Song Link" />

                            <input type="text" name="link1" id="link1" placeholder="Remake Link (If any)" />

                            <input type="text" name="genre" id="genre" placeholder="Genre" />

                            <textarea name="meaning" id="meaning" placeholder="Meaning or background story in short"></textarea>
                            <div id="message" class="bolder"></div>
                            <div id="message1" class="bolder"></div>
                            <br>
                            <input class="btn btn-outlined btn-primary" type="submit" id="my_button" name="add_song" value="Submit" />
                        </form>
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
                    <div class="col-md-3 col-sm-6 about-us-widget">
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
</body>

</html>

<script>
    $('#addsong').submit(validateForm);

    function validateSongName() {
        var u = document.forms["addsong"]["songname"].value
        if (u == null || u == "") {
            return false;
        } else {
            return true;
        }
    }

    function validateArtistName() {
        var u = document.forms["addsong"]["artist"].value
        if (u == null || u == "") {
            return false;
        } else {
            return true;
        }
    }

    function validateLyricistName() {
        var u = document.forms["addsong"]["lyricist"].value
        if (u == null || u == "") {
            return false;
        } else {
            return true;
        }
    }

    function validateComposerName() {
        var u = document.forms["addsong"]["composer"].value
        if (u == null || u == "") {
            return false;
        } else {
            return true;
        }
    }

    function validateCompareNames() {
        var u = document.forms["addsong"]["songname"].value
        var u1 = document.forms["addsong"]["songname1"].value
        if (u == u1 && u != "") {
            return false;
        } else {
            return true;
        }
    }

    function validateForm() {
        var valid = true;

        //call validate song name function
        valid = valid && validateSongName();

        if (validateSongName()) {
            $("#messageSongName").text("");

        } else {
            $("#messageSongName").text("Song name is empty!");
        }

        valid = valid && validateArtistName();

        if (validateArtistName()) {
            $("#messageArtistName").text("");
        } else {
            $("#messageArtistName").text("Artist's name is empty!");
        }

        valid = valid && validateLyricistName();

        if (validateLyricistName()) {
            $("#messageLyricistName").text("");
        } else {
            $("#messageLyricistName").text("Lyricist's name is empty!");
        }

        valid = valid && validateComposerName();

        if (validateComposerName()) {
            $("#messageComposerName").text("");
        } else {
            $("#messageComposerName").text("Composer's name is empty!");
        }

        if (valid !== true) {
            $("#message").text("You left some necessary fields empty!");
        } else {
            $("#message").text("");
        }

        valid = valid && validateCompareNames();

        if (validateCompareNames()) {
            $("#message1").text("");

        } else {
            $("#message1").text("Song name and Other name are equal!");
        }

        return valid
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