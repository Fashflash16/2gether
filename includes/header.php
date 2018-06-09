

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is a social network that connects peoople">
  <meta name="author" content="Dimitrios Vergados">
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
  <title>gether</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/vendor/all.css" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
<!--   <link href="css/vendor/bootstrap.css" rel="stylesheet">
   <link href="css/vendor/font-awesome.css" rel="stylesheet"> 
   <link href="css/vendor/picto.css" rel="stylesheet"> 
   <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet">
   <link href="css/vendor/datepicker3.css" rel="stylesheet">
   <link href="css/vendor/jquery.minicolors.css" rel="stylesheet">
   <link href="css/vendor/bootstrap-slider.css" rel="stylesheet"> 
   <link href="css/vendor/railscasts.css" rel="stylesheet"> 
    <link href="css/vendor/jquery-jvectormap.css" rel="stylesheet"> 
   <link href="css/vendor/owl.carousel.css" rel="stylesheet"> 
   <link href="css/vendor/slick.css" rel="stylesheet"> 
   <link href="css/vendor/morris.css" rel="stylesheet"> 
   <link href="css/vendor/ui.fancytree.css" rel="stylesheet"> 
  <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> 
   <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> 
   <link href="css/vendor/select2.css" rel="stylesheet"> -->

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "social-2" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "social-2" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "social-2" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/social-2/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/app/app.css" rel="stylesheet">
    <link href="http://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
   <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <!-- If you'd like to support IE8 -->


 <!--Favicon-->
    	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/> 
    
  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/player.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/timeline.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/cover.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/chat.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-calendar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-progress-bars.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/ui.css" rel="stylesheet" /> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>-->

    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <style>

        #back_result {

            background-color: whitesmoke;
            border: 1px solid silver;
            padding: 10px;
            margin: 0 auto;
            display: none;
        }
    #pic {
        vertical-align: middle;
    }

    </style>


<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>


   <!--ΕΝΕΡΓΟΠΟΙΗΜΕΝΟ <script type="text/javascript">

        function chk() {
            var post = document.getElementById('post').value;
            var user = document.getElementById('user').value;
            var dataString = 'post='+ post + '&user='+ user;
                $.ajax({
                    type: "post",
                    url: "parse/send_post.php",
                    data: dataString,
                    cache: false,
                    success: function (html) {
                        $('#mssg').html(html);
                        $('#post').val('');
                    }



                });

            return false;
        }

    </script>-->


    <!-- ΕΝΕΡΓΟΠΟΙΗΜΕΝΟ <script type="text/javascript">

        function myFunction() {
            var post = document.getElementById('posts').value;
            var user = document.getElementById('users').value;
            var comment = document.getElementById('comment').value;
            var dataString = 'post='+ posts + '&user='+ users + '&comment' + comment;
            $.ajax({
                type: "post",
                url: "parse/send_comment.php",
                data: dataString,
                cache: false,
                success: function (html) {

                    $('#comment').val('');
                }



            });

            return false;
        }

    </script>-->


    <!--<script>


        function send_post() {
             var hr = new XMLHttpRequest();
             var url = "http://localhost:80/2016-17/2gether/parse/send_post.php";
             var fn = document.getElementById("post").value;
             var vars = "post="+fn;
             hr.open("POST", url, true);
             hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             hr.onreadystatechange = function () {
                 if(hr.readyState = 4 && hr.status == 200) {
                     var return_data = hr.responseText;
                     document.getElementById("status").innerHTML = return_data;
                 }
             }

             hr.send(vars);
             document.getElementById("status").innerHTML = "processing...";


         }
    </script>-->


    <!--<script type="text/javascript" src="js/jquery.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#comment').focus();
            $('#comment').keypress(function (event) {
                var key = (event.keyCode ? event.keyCode : event.which);

                if (key == 13) {
                    var comment =$('#comment').val();
                    var post =$('#post').val();
                    var user =$('#user').val();
                    $.ajax({
                        method: "POST",
                        url: "parse/send_comment.php",
                        data: {comment: comment, post: post, user: user},
                        success: function (status) {
                            $('#result').html(status);
                            $('#comment').val('');


                        }

                    });

                };
            });
        });



    </script>-->


<!--<script type="text/javascript">
    $('form.ajax').om.('submit', function () {

        var that = $(this),
            url = that.attr('action'),
            method = that.attr('method'),
            data = {};

        that.find('[name]').each(function (index, value) {
           var that = $(this),
               name = that.attr('name'),
               value = that.val();

           data[name] = value;
        });

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response) {
                console.log(response);
            }

        });

        return false;
    });





</script>-->

    <!--<script type="text/javascript">
        $(document).ready(function () {
           $("#submit_post").click(function () {
               var post = $("#post").val();

               $.Ajax({
                   url : "parse/send_post.php",
                   type : "POST",
                   async : false,
                   data : {

                       "post" = post

                   },
                   success: function (data) {
                       $("#post").val('');
                   }
               })
           });

        });



    </script>-->


    <!--<script>
        $(document).ready(function(){
            $('#comment').keypress(function(e) {
                if(e.which == 13) {
                    $('#form')[0].submit();
                    // this.form.submit();
                    // document.getElementById("form").submit();

                    console.log('log me!');
                    e.preventDefault(); // Stops enter from creating a new line
                }
            });
        });
    </script>-->

    <!--<script type="text/javascript">
        function setReqObj() {
            var nAjax;
            if(window.XMLHttpRequest) {
                nAjax = new XMLHttpRequest();
            } else {
                nAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }
            return nAjax;
        }

        function myFunction() {
            var xmlhttp = setReqObj();

            if(xmlhttp) {
                xmlhttp.onreadystatechange=function() {
                    if(xmlhttp.readyState == 4) {
                        document.forms["comment_form"].reset();


                        document.location.href = "#redirect";
                    }
                }


                xmlhttp.open("POST", "parse/send_comment.php", true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send($ajData);
            } else {
                document.forms["comment_form"].submit();
            }
        }
    </script>-->



   <!--ΕΝΕΡΓΟΠΟΙΗΜΕΝΟ <script>

        $(document).ready(function () {
            $('#searchbox').keyup(function () {
                var string = $(this).val();
                $.post('parse/search_friends.php', {string: string}, function (data) {

                    $('div#back_result').css({'display':'block'});
                    $('div#back_result').html(data);

                });
            });

        });



    </script>-->



</head>