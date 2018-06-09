 <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "social-2",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        },
        "orange": {
          "primary-color": "#e74c3c"
        },
        "blue": {
          "primary-color": "#4687ce"
        },
        "purple": {
          "primary-color": "#af86b9"
        },
        "brown": {
          "primary-color": "#c3a961"
        },
        "default-nav-inverse": {
          "color-block": "#242424"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="js/vendor/all.js"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/tables/all.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/all.js"></script> -->
  <!-- <script src="js/vendor/player/all.js"></script> -->
  <!-- <script src="js/vendor/charts/all.js"></script> -->
  <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
  <!-- <script src="js/vendor/charts/easy-pie/jquery.easypiechart.js"></script> -->
  <!-- <script src="js/vendor/charts/morris/all.js"></script> -->
  <!-- <script src="js/vendor/charts/sparkline/all.js"></script> -->
  <!-- <script src="js/vendor/maps/vector/all.js"></script> -->
  <!-- <script src="js/vendor/tree/jquery.fancytree-all.js"></script> -->
  <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="js/app/app.js"></script>

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="js/app/essentials.js"></script> -->
  <!-- <script src="js/app/layout.js"></script> -->
  <!-- <script src="js/app/sidebar.js"></script> -->
  <!-- <script src="js/app/media.js"></script> -->
  <!-- <script src="js/app/player.js"></script> -->
  <!-- <script src="js/app/timeline.js"></script> -->
  <!-- <script src="js/app/chat.js"></script> -->
  <!-- <script src="js/app/maps.js"></script> -->
  <!-- <script src="js/app/charts/all.js"></script> -->
  <!-- <script src="js/app/charts/flot.js"></script> -->
  <!-- <script src="js/app/charts/easy-pie.js"></script> -->
  <!-- <script src="js/app/charts/morris.js"></script> -->
  <!-- <script src="js/app/charts/sparkline.js"></script> -->

  <!-- App Scripts CORE [social-2]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  <!-- <script src="js/app/main.js"></script> -->

 <script>

     $("div[id^='myModal']").each(function(){

         var currentModal = $(this);

         //click next
         currentModal.find('.fa-chevron-right').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
         });

         //click prev
         currentModal.find('.fa-chevron-left').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
         });

     });


 </script>

 <script>

     $("div[id^='myModal']").each(function(){

         var currentModal = $(this);

         //click next
         currentModal.find('.glyphicon-chevron-right').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
         });

         //click prev
         currentModal.find('.glyphicon-chevron-left').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
         });

     });


 </script>

 <script>

     $("div[id^='allPics']").each(function(){

         var currentModal = $(this);

         //click next
         currentModal.find('.glyphicon-chevron-right').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='allPics']").nextAll("div[id^='allPics']").first().modal('show');
         });

         //click prev
         currentModal.find('.glyphicon-chevron-left').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='allPics']").prevAll("div[id^='allPics']").first().modal('show');
         });

     });


 </script>


 <script>

     $("div[id^='allsidePics']").each(function(){

         var currentModal = $(this);

         //click next
         currentModal.find('.glyphicon-chevron-right').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='allsidePics']").nextAll("div[id^='allsidePics']").first().modal('show');
         });

         //click prev
         currentModal.find('.glyphicon-chevron-left').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='allsidePics']").prevAll("div[id^='allsidePics']").first().modal('show');
         });

     });


 </script>



 <script>

     $("div[id^='postPics']").each(function(){

         var currentModal = $(this);

         //click next
         currentModal.find('.glyphicon-chevron-right').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='postPics']").nextAll("div[id^='postPics']").first().modal('show');
         });

         //click prev
         currentModal.find('.glyphicon-chevron-left').click(function(){
             currentModal.modal('hide');
             currentModal.closest("div[id^='postPics']").prevAll("div[id^='postPics']").first().modal('show');
         });

     });


 </script>

<script>
    $(document).ready(function(){
        $('#about .aboutbtn i').on('click', function(){
            $('#about').addClass('hidden');
            $('#aboutform').removeClass('hidden');
        });
    });

</script>

 <script>
     $(document).ready(function(){
         $('#close').on('click', function(){
             $('#aboutform').addClass('hidden');
             $('#about').removeClass('hidden');
         });
     });

 </script>


 <script>
     $(document).ready(function(){
         $('#btnst1').on('click', function(){
             $('#btnst1').addClass('hidden');
             $('#st2').removeClass('hidden');
         });
     });

 </script>

 <script>
     $(document).ready(function(){
         $('#btnst2').on('click', function(){
             $('#btnst2').addClass('hidden');
             $('#st3').removeClass('hidden');
         });
     });

 </script>

 <script>
     $(document).ready(function(){
         $('#btnst3').on('click', function(){
             $('#st2').addClass('hidden');
             $('#st3').addClass('hidden');
             $('#st1').removeClass('col-sm-7').addClass('col-sm-8');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#btnwrk1').on('click', function(){
             $('#btnwrk1').addClass('hidden');
             $('#wrk2').removeClass('hidden');
         });
     });

 </script>

 <script>
     $(document).ready(function(){
         $('#btnwrk2').on('click', function(){
             $('#btnwrk2').addClass('hidden');
             $('#wrk3').removeClass('hidden');
         });
     });

 </script>

 <script>
     $(document).ready(function(){
         $('#btnwrk3').on('click', function(){
             $('#wrk2').addClass('hidden');
             $('#wrk3').addClass('hidden');
             $('#wrk1').removeClass('col-sm-7').addClass('col-sm-8');

         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#btnweb1').on('click', function(){
             $('#btnweb1').addClass('hidden');
             $('#web2').removeClass('hidden');
         });
     });

 </script>

 <script>
     $(document).ready(function(){
         $('#btnweb2').on('click', function(){
             $('#btnweb2').addClass('hidden');
             $('#web3').removeClass('hidden');
         });
     });

 </script>

 <script>
     $(document).ready(function(){
         $('#btnweb3').on('click', function(){
             $('#web2').addClass('hidden');
             $('#web3').addClass('hidden');
             $('#web1').removeClass('col-sm-7').addClass('col-sm-8');

         });
     });
 </script>


 <script>

     if($("#infoitem1").length == 0)
     {
         $("#infotit1").hide();
     }
     if($("#infoitem1").length == 0)
     {
         $("#infotit1").hide();
     }

     if($("#infoitem2").length == 0)
     {
         $("#infotit2").hide();
     }

     if($("#infoitem3").length == 0)
     {
         $("#infotit3").hide();
     }

     if($("#infoitem4").length == 0)
     {
         $("#infotit4").hide();
     }

     if($("#infoitem5").length == 0)
     {
         $("#infotit5").hide();
     }

     if($("#infoitem6").length == 1)
     {
         $("#infotit6").hide();
     }

     if($("#infoitem7").length == 0)
     {
         $("#infotit7").hide();
     }

     if($("#infoitem8").length == 0)
     {
         $("#infotit8").hide();
     }

     if($("#infoitem9").length == 0)
     {
         $("#infotit9").hide();
     }
 </script>



<!--<script>
     function selectChange(val)
     {

         $('#1').submit();


     }
 </script>-->

 <!--<script>
     function selectChange(val)
     {

         $('#2').submit();


     }
 </script>-->
<!--<script>

    $(document).on('click',function(){
        $('.collapse').collapse('hide');

    })
</script>-->

 <script type="text/javascript">
     $('.collapse').on('show.bs.collapse', function () {
         $('.collapse.in').each(function(){
             $(this).collapse('hide');

         });
     });
 </script>



 <script>

    function chatboxclicked (elm) {
      var arr =  elm.getElementsByTagName('input');
      var msg_id = arr[0].getAttribute('value');
    console.log(msg_id);
        var dataString = 'msgid='+ msg_id ;
        $.ajax({
            type: "post",
            url: "parse/read_messages.php",
            data: dataString,
            cache: false,
            success: function (html) {
                var spanarray = elm.getElementsByTagName('span');
                for (var i = 0; i < spanarray.length; i++) {
                    if (spanarray[i].getAttribute('id') == 'countmsg') {
                        spanarray[i].innerHTML = "&#10003;";
                        break;
                    }
                }
            }


        });
            }

 </script>


 <script src="js/custom-file-input.js"></script>

 <script>
     function myFunction1() {
         var input, filter, ul, li, a, i;
         input = document.getElementById("myMessages1");
         filter = input.value.toUpperCase();
         ul = document.getElementById("myUL1");
         li = ul.getElementsByTagName("li");
         for (i = 0; i < li.length; i++) {
             a = li[i].getElementsByTagName("a")[0];
             if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                 li[i].style.display = "";
             } else {
                 li[i].style.display = "none";

             }
         }
     }
 </script>




 <script src="js/custom-file-input.js"></script>

 <script>
     function myFunction() {
         var input, filter, ul, li, a, i;
         input = document.getElementById("myMessages");
         filter = input.value.toUpperCase();
         ul = document.getElementById("myUL");
         li = ul.getElementsByTagName("li");
         for (i = 0; i < li.length; i++) {
             a = li[i].getElementsByTagName("a")[0];
             if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                 li[i].style.display = "";
             } else {
                 li[i].style.display = "none";

             }
         }
     }
 </script>


<!--<script>
$('.sendmsg').on('submit', function () {

    var that = $(this),
        url = that.attr('action'),
        method = that.attr('method'),
        data = {};

    that.find([name]).each(function () {
       var that =$(this),
           name= that.attr('name'),
           value = that.val();

       data[name] = value;
    });

    $.ajax({
       url: url,
        type: type,
        data: data,
        success: function (html) {
            $('.sendmsg input').val('');
        }

    });
    return false;

})


</script>-->

<!--<script>
    $('#send').click(function () {

        $.post($("#sendmessage").attr("action"), $("#sendmessage: input").serializeArray(), function (info) {
            $("#result").html(info);
        });
        clearInput();
    });


        $("#sendmessage").submit(function () {
            return false;
        });


        function clearInput(){
            $("#sendmessage:input").each(function () {
               $(this).val('');
            });
        }



</script>-->


 <script>
     $(document).ready(function(){
         $('#btnphoto').on('click', function(){
             $('#posttext').addClass('hidden');
             $('#postphoto').removeClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#photoclose').on('click', function(){
             $('#posttext').removeClass('hidden');
             $('#postphoto').addClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#btnvideo').on('click', function(){
             $('#posttext').addClass('hidden');
             $('#postvideo').removeClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#videoclose').on('click', function(){
             $('#posttext').removeClass('hidden');
             $('#postvideo').addClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#btnyoutube').on('click', function(){
             $('#posttext').addClass('hidden');
             $('#postyoutube').removeClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#youtubeclose').on('click', function(){
             $('#posttext').removeClass('hidden');
             $('#postyoutube').addClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#btnvimeo').on('click', function(){
             $('#posttext').addClass('hidden');
             $('#postvimeo').removeClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#vimeoclose').on('click', function(){
             $('#posttext').removeClass('hidden');
             $('#postvimeo').addClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#btnlink').on('click', function(){
             $('#posttext').addClass('hidden');
             $('#postlink').removeClass('hidden');
         });
     });
 </script>

 <script>
     $(document).ready(function(){
         $('#linkclose').on('click', function(){
             $('#posttext').removeClass('hidden');
             $('#postlink').addClass('hidden');
         });
     });
 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#comment').focus();
         $('#comment').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var comment =$('#comment').val();
                 var postid =$('#postid').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_posts.php",
                     data: {comment: comment, postid: postid},
                     success: function (status) {
                         $('#comment').val('');


                     }

                 });

             };
         });
     });



 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#comment1').focus();
         $('#comment1').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var comment1 =$('#comment1').val();
                 var postid1 =$('#postid1').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_posts.php",
                     data: {comment1: comment1, postid1: postid1},
                     success: function (status) {
                         $('#comment1').val('');


                     }

                 });

             };
         });
     });



 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#comment2').focus();
         $('#comment2').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var comment2 =$('#comment2').val();
                 var postid2 =$('#postid2').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_posts.php",
                     data: {comment1: comment2, postid2: postid2},
                     success: function (status) {
                         $('#comment2').val('');


                     }

                 });

             };
         });
     });



 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#comment3').focus();
         $('#comment3').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var comment3 =$('#comment3').val();
                 var postid3 =$('#postid3').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_posts.php",
                     data: {comment3: comment3, postid3: postid3},
                     success: function (status) {
                         $('#comment3').val('');


                     }

                 });

             };
         });
     });



 </script>

 <script type="text/javascript">
     $(document).ready(function () {
         $('#comment4').focus();
         $('#comment4').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var comment4 =$('#comment4').val();
                 var postid4 =$('#postid4').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_posts.php",
                     data: {comment4: comment4, postid4: postid4},
                     success: function (status) {
                         $('#comment4').val('');


                     }

                 });

             };
         });
     });



 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#comment5').focus();
         $('#comment5').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var comment5 =$('#comment5').val();
                 var postid5 =$('#postid5').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_posts.php",
                     data: {comment5: comment5, postid5: postid5},
                     success: function (status) {
                         $('#comment5').val('');


                     }

                 });

             };
         });
     });



 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#photocomment1').focus();
         $('#photocomment1').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var photocomment1 =$('#photocomment1').val();
                 var photopostid1 =$('#photopostid1').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_photos.php",
                     data: {photocomment1: photocomment1, photopostid1: photopostid1},
                     success: function (status) {
                         $('#photocomment1').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#photocomment2').focus();
         $('#photocomment2').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var photocomment2 =$('#photocomment2').val();
                 var photopostid2 =$('#photopostid2').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_photos.php",
                     data: {photocomment2: photocomment2, photopostid2: photopostid2},
                     success: function (status) {
                         $('#photocomment2').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#photocomment3').focus();
         $('#photocomment3').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var photocomment3 =$('#photocomment3').val();
                 var photopostid3 =$('#photopostid3').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_photos.php",
                     data: {photocomment3: photocomment3, photopostid3: photopostid3},
                     success: function (status) {
                         $('#photocomment3').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#photocomment4').focus();
         $('#photocomment4').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var photocomment4 =$('#photocomment4').val();
                 var photopostid4 =$('#photopostid4').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_photos.php",
                     data: {photocomment4: photocomment4, photopostid4: photopostid4},
                     success: function (status) {
                         $('#photocomment4').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#photocomment5').focus();
         $('#photocomment5').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var photocomment5 =$('#photocomment5').val();
                 var photopostid5 =$('#photopostid5').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_photos.php",
                     data: {photocomment5: photocomment5, photopostid5: photopostid5},
                     success: function (status) {
                         $('#photocomment5').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#videocomment1').focus();
         $('#videocomment1').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var videocomment1 =$('#videocomment1').val();
                 var videoid1 =$('#videoid1').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_videos.php",
                     data: {videocomment1: videocomment1, videoid1: videoid1},
                     success: function (status) {
                         $('#videocomment1').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('#videocomment2').focus();
         $('#videocomment2').keypress(function (event) {
             var key = (event.keyCode ? event.keyCode : event.which);

             if (key == 13) {
                 var videocomment2 =$('#videocomment2').val();
                 var videoid2 =$('#videoid2').val();
                 $.ajax({
                     method: "POST",
                     url: "parse/comments_on_videos.php",
                     data: {videocomment2: videocomment2, videoid2: videoid2},
                     success: function (status) {
                         $('#videocomment2').val('');


                     }

                 });

             };
         });
     });

 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('.likepost').click(function () {
             var postid = $(this).attr('id');


                 $.ajax({
                     method: "POST",
                     url: "parse/likes_on_posts.php",
                     data: {postid: postid},

                 });

             });
         });


 </script>




 <script type="text/javascript">
     $(document).ready(function () {
         $('.likecompost').click(function () {
             var comid = $(this).attr('id');


             $.ajax({
                 method: "POST",
                 url: "parse/likes_on_com_posts.php",
                 data: {comid: comid},

             });

         });
     });


 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('.likephoto').click(function () {
             var photoid = $(this).attr('id');


             $.ajax({
                 method: "POST",
                 url: "parse/likes_on_photos.php",
                 data: {photoid: photoid},

             });

         });
     });


 </script>




 <script type="text/javascript">
     $(document).ready(function () {
         $('.likecompic').click(function () {
             var comid = $(this).attr('id');


             $.ajax({
                 method: "POST",
                 url: "parse/likes_on_com_photos.php",
                 data: {comid: comid},

             });

         });
     });


 </script>

 <script type="text/javascript">
     $(document).ready(function () {
         $('.likevideo').click(function () {
             var videoid = $(this).attr('id');


             $.ajax({
                 method: "POST",
                 url: "parse/likes_on_videos.php",
                 data: {videoid: videoid},

             });

         });
     });


 </script>


 <script type="text/javascript">
     $(document).ready(function () {
         $('.likecomvid').click(function () {
             var comid = $(this).attr('id');


             $.ajax({
                 method: "POST",
                 url: "parse/likes_on_com_videos.php",
                 data: {comid: comid},

             });

         });
     });


 </script>


