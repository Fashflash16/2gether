<?php
$email=$_SESSION['email'];
$fname= $row['first_name'];
$lname= $row['last_name'];
$name = $fname . "" . $lname;

$queryuser = $conn->query("SELECT id FROM users WHERE email='$email'");

if ($queryuser->num_rows > 0) {

while($rowuser = $queryuser->fetch_assoc()) {

$user=$rowuser['id'];
$sessionid=$user;

}
}

?>
        <!-- Fixed navbar -->
        <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu"
                       class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1"
                       class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
                    <a class="navbar-brand" href="index.php"><img src="images/2gether-white.png"
                                                                  style="width: 100px; margin: 10px 0 0 30px"/></a>
                </div>



                <!-- Collect the nav links, forms, and other content for toggling -->


                <div class="collapse navbar-collapse" id="main-nav">



                    <!-- Search -->
                    <form class="navbar-form margin-none navbar-left">
                        <div class="search-1">
                            <div class="input-group">

                                <span class="input-group-addon">
                                    <button data-toggle="tk-modal-demo" data-modal-options="slide-left" data-dialog-options="sidebar sidebar-size-3 sidebar-size-xs-1 sidebar-offset-0 left" class="btn btn-primary" style="background-color: transparent; border-color: transparent">
                                    <i class="icon-search fa-lg"></i></button></span>
                                <!--<input type="text" class="form-control form-control-w-150" placeholder="Search...">-->
                            </div>
                        </div>
                    </form>

                    <!-- SEARCH MODAL START-->




                    <script id="tk-modal-demo" type="text/x-handlebars-template">
                        <div class="modal fade{{#if modalOptions}} {{ modalOptions }}{{/if}}" id="{{ id }}">
                            <div class="modal-dialog{{#if dialogOptions}} {{ dialogOptions }}{{/if}}" style="background-color: #8f9fb5">
                                <div class="v-cell">
                                    <div class="modal-content{{#if contentOptions}} {{ contentOptions }}{{/if}}">
                                        <div class="modal-header" style="background-color: #8f9fb5">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title text-center" style="color: ghostwhite">Meet people</h4>
                                        </div>
                                        <div class="modal-body" style="background-color: #8f9fb5">

                                            <div class="media-left">
                                                <div class="messages-list">
                                                    <div class="panel panel-default" style="background-color: #ecf4fc">

                                                        <div class="chat-search form-group">
                                                            <input type="text" id="myMessages1" onkeyup="myFunction1()" class="form-control" placeholder="Search" style="background-color: ghostwhite;"/>
                                                        </div>


                                                        <ul class="list-group" id="myUL1" style="background-color: #ecf4fc">

                <?php
                $search = $conn->query("SELECT id, first_name, last_name, avatar FROM users WHERE email!='$email'");
                if($search->num_rows > 0){
                    while ($rowsearch=$search->fetch_assoc()){ ?>



                                                            <li class="list-group-item" style="padding-top:5px; padding-bottom:5px">
                                                                <a href="friend_profile.php?u=<?php echo $rowsearch['id'] ?>">

                                                                        <div class="media-left">
            <img src="<?php echo $rowsearch['avatar'] ?>" width="40" alt="" class="media-object" />
                                                                        </div>
                                                                    <div class="media-body">
                                                                        <span><?php echo $rowsearch['first_name']." ".$rowsearch['last_name']  ?></span>
                                                                    </div>
                                                                </a>
                                                            </li>

                        <?php
                    }
                }
                ?>

                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>




                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </script>

                    <!-- SEARCH MODAL END-->






                    <!-- // END search -->


                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-xs">
                            <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                        <!-- User -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                <img src="<?php echo $row['avatar'] ?>" alt="Bill" class="img-circle" /> <?php echo $row['first_name'] ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php if ($p == 'profile') echo "class='active'"; ?>><?php echo '<a href="user_profile.php?u=', urlencode($sessionid), '">' ?>
                                    My Profile<i class="fa fa-user pull-right"></i></a></li>
                                <li <?php if ($p == 'timeline') echo "class='active'"; ?>><?php echo '<a href="user_timeline.php?u=', urlencode($sessionid), '">' ?>
                                    My Timeline<i class="fa fa-trello pull-right"></i> </a></li>
                                <li <?php if ($p == 'settings') echo "class='active'"; ?>><?php echo '<a href="user_settings.php?u=', urlencode($sessionid), '">' ?>
                                    Settings<i class="fa fa-wrench pull-right"></i> </a></li>
                                <li><a href="parse/logout.php">Logout<i class="fa fa-sign-out pull-right"></i> </a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <!-- notifications -->
                        <li class="dropdown notifications updates">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge badge-danger">4</span>
                            </a>
                            <ul class="dropdown-menu" role="notification"  style="max-height:500px; overflow-y: scroll;">
                                <li class="dropdown-header">Notifications</li>

                                <?php
$not1 = $conn->query("SELECT id, added_by, post_cat, added_at FROM posts WHERE posted_to=$sessionid AND added_by!=$sessionid AND post_status=0 ORDER BY added_at DESC");
if($not1->num_rows > 0) {

    while($rownot1 = $not1->fetch_assoc()) {
        $person = $conn->query("SELECT first_name, last_name, avatar FROM users WHERE users.id=".$rownot1['added_by']."");
        if($person->num_rows > 0) {

            while ($rowper = $person->fetch_assoc()){ ?>



        <li class="media">
            <div class="pull-right">
                <span id="<?php echo $rownot1['id'] ?>" class="postnot label label-danger">New</span>
            </div>
            <div class="media-left">
                <img src="<?php echo $rowper['avatar'] ?>" alt="people" class="img-circle"
                     width="30">
            </div>
            <div class="media-body">
                <a href="#"><?php echo $rowper['first_name']?></a>
                <?php if($rownot1['post_cat']==1) { ?>
                    wrote<a href="user_timeline.php?u=<?php echo $sessionid ?>"> somethnig</a>
                <?php } else if ($rownot1['post_cat']==2) { ?>
                    posted<a href="user_timeline.php?u=<?php echo $sessionid ?>"> a photo</a>
                    <?php } else if ($rownot1['post_cat']==3) { ?>
                    posted<a href="user_timeline.php?u=<?php echo $sessionid ?>"> a video</a>
                    <?php } else { ?>
                    posted<a href="user_timeline.php?u=<?php echo $sessionid ?>"> a link</a>
                    <?php } ?>
                    on your timeline.
                <br/>
                <span class="text-caption text-muted">at <?php echo $rownot1['added_at'] ?></span>
            </div>
        </li>


  <?php  }
}
                                }
                                }

       $not2 = $conn->query("SELECT comments_posts.id AS comid, com_at, com_by, post_id, post_cat, posted_to FROM comments_posts INNER JOIN posts ON posts.id=post_id WHERE com_by!=$sessionid AND posted_to=$sessionid AND com_status=0");
if($not2->num_rows > 0) {
    while($rownot2=$not2->fetch_assoc()){
        $per2 = $conn->query("SELECT id, first_name, last_name, avatar FROM users WHERE users.id=".$rownot2['com_by']."");
        if($per2->num_rows > 0){
            while($rowper2 = $per2->fetch_assoc()){ ?>


                                <li class="media">
                                    <div class="pull-right">
                                        <span id="<?php echo $rownot2['comid'] ?>" class="comnot label label-danger">New</span>
                                    </div>
                                    <div class="media-left">
                                        <img src="<?php echo $rowper2['avatar'] ?>" alt="people" class="img-circle"
                                             width="30">
                                    </div>
                                    <div class="media-body">
                                        <a href="friend_profile.php?u=<?php echo $rowper2['id'] ?>"><?php echo $rowper2['first_name']?></a> commented a post on <a
                                                href="user_timeline.php?u<?php echo $sessionid ?>">your</a> timeline.
                                        <br/>
                                        <span class="text-caption text-muted"><?php echo $rownot2['com_at'] ?></span>
                                    </div>
                                </li>

            <?php          }

        }

    }

}


                                $not3 = $conn->query("SELECT likes_posts.id AS likepostid, liked_by, post_id FROM likes_posts INNER JOIN posts ON posts.id=post_id WHERE liked_by!=$sessionid AND posted_to=$sessionid AND like_status=0");
                                if($not2->num_rows > 0) {
                                    while($rownot3=$not3->fetch_assoc()){
                                        $per3 = $conn->query("SELECT id, first_name, last_name, avatar FROM users WHERE users.id=".$rownot3['liked_by']."");
                                        if($per3->num_rows > 0){
                                            while($rowper3 = $per3->fetch_assoc()){ ?>


                                                <li class="media">
                                                    <div class="pull-right">
                                                        <span id="<?php echo $rownot3['likepostid'] ?>" class="likenotpost label label-danger">New</span>
                                                    </div>
                                                    <div class="media-left">
                                                        <img src="<?php echo $rowper3['avatar'] ?>" alt="people" class="img-circle"
                                                             width="30">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="friend_profile.php?u=<?php echo $rowper3['id'] ?>"><?php echo $rowper3['first_name']?></a> liked a post on <a
                                                                href="user_timeline.php?u<?php echo $sessionid ?>">your</a> timeline.

                                                    </div>
                                                </li>

                                            <?php          }

                                        }

                                    }

                                }

                                $not4 = $conn->query("SELECT likes_com_posts.id As likecompostid, liked_by, comment_id FROM likes_com_posts INNER JOIN comments_posts ON comments_posts.id=comment_id WHERE liked_by!=$sessionid AND com_by=$sessionid AND like_status=0");
                                if($not4->num_rows > 0) {
                                    while($rownot4=$not4->fetch_assoc()){
                                        $per4 = $conn->query("SELECT id, first_name, last_name, avatar FROM users WHERE users.id=".$rownot4['liked_by']."");
                                        if($per4->num_rows > 0){
                                            while($rowper4 = $per4->fetch_assoc()){ ?>


                                                <li class="media">
                                                    <div class="pull-right">
                                                        <span id="<?php echo $rownot4['likecompostid'] ?>" class="likenotcom label label-danger">New</span>
                                                    </div>
                                                    <div class="media-left">
                                                        <img src="<?php echo $rowper4['avatar'] ?>" alt="people" class="img-circle"
                                                             width="30">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="friend_profile.php?u=<?php echo $rowper4['id'] ?>"><?php echo $rowper4['first_name']?></a> liked a comment of <a
                                                                href="user_timeline.php?u<?php echo $sessionid ?>">you</a> on your timeline.

                                                    </div>
                                                </li>

                                            <?php          }

                                        }

                                    }

                                }

                                ?>

                            </ul>
                        </li>
                        <!-- // END notifications -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- messages -->
                        <li class="dropdown notifications">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>

     <?php  $count = $conn->query("SELECT * FROM messages WHERE opened=0 AND msg_to=$sessionid");
                                iF($count->num_rows > 0) {
                                $countmsg = $count->num_rows;
                                if($countmsg > 0) { ?>


                                <span class="badge badge-danger" style="background-color: red; color:white"><?php echo $countmsg ?></span>
                                <?php }

                                } ?>
                            </a>
                            <ul class="dropdown-menu" style="max-height:500px; overflow-y: scroll;">
                                <li class="dropdown-header" style="color: #9e1f63">Messages</li>
<?php
$unread = $conn->query("SELECT users.id AS userid, first_name, last_name, avatar, message, sent_at FROM messages INNER JOIN users ON msg_from=users.id WHERE msg_to=$sessionid AND opened=0 GROUP BY msg_from ORDER BY sent_at DESC");
if($unread->num_rows > 0) {
    while($rowunread=$unread->fetch_assoc()) { ?>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="friend_profile.php?u=<?php echo $rowunread['userid'] ?>">
                                            <img class="media-object thumb" src="<?php echo $rowunread['avatar'] ?>"
                                                 alt="people">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="pull-right">
       <?php
       $new = $conn->query("SELECT * FROM messages WHERE msg_from=".$rowunread['userid']." AND msg_to=$sessionid");
       $rowcount=0;
       if($rownew=$new->num_rows){
           $newcount=$new->num_rows;
       }

       ?>



                                            <div class="redirect">
                                            <a href="user_messages.php?u=<?php echo $sessionid ?>">

                     <span id="readspan" class="label label-danger">read</span>

                                            </a></div>
                                        </div>
                                        <a href="friend_profile.php?u=<?php echo $rowunread['userid'] ?>">
                                            <h5 class="media-heading"><?php echo $rowunread['first_name']; echo " "; echo $rowunread['last_name'] ?></h5></a>

                                        <p class="margin-none"><?php echo substr($rowunread['message'], 0, 90) .((strlen($rowunread['message']) > 90)?'...':''); ?></p>
                                    </div>
                                </li>


    <?php    }
} else { ?>

    <li class="media">


        <div class="media-body">
    You have no imcoming messages at this time.
        </div>
    </li>
<?php }

?>


                            </ul>
                        </li>
                        <!-- // END messages -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- notifications -->
                        <li class="dropdown notifications updates">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa-lg md-group-add"></i>

                                <?php include ('parse/requests_count.php'); ?>

                            </a>
                            <ul class="dropdown-menu" role="notification" style="max-height:500px; overflow-y: scroll;">
                                <li class="dropdown-header" style="color: #9e1f63">Friend requests</li>

                        <?php include ('parse/get_requests.php'); ?>

                            </ul>
                        </li>



                        <!-- // END notifications -->
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </div>
        </div>





        <div class="sidebar sidebar-chat right sidebar-size-3 sidebar-offset-0 chat-skin-white sidebar-visible-mobile"
             id=sidebar-chat>
            <div class="split-vertical">
                <div class="chat-search">
                    <input type="text" class="form-control" placeholder="Search"/>
                </div>

                <?php
                $lgg = $conn->query("SELECT id, user_id, online FROM sessions WHERE user_id=$sessionid");

                if($lgg->num_rows > 0) {
                    while ($rowlgg = $lgg->fetch_assoc()) {
                        $online = $rowlgg['online'];
                    }
                }

                ?>

                <ul class="chat-filter nav nav-pills">
                    <li class="active"><a href="#" data-target="li">All</a></li>
                    <li><a href="#" data-target=".online">Online</a></li>
                    <li><a href="#" data-target=".offline">Offline</a></li>
                    <form name="online" action="parse/online_chat.php" method="post" class="navbar-form navbar-right" style="margin-top: 0px">
                            <input type="checkbox" data-toggle="switch-checkbox" id="switch" data-size="mini" name="switch" <?php if ($online==1) { echo "checked"; } ?> onchange="this.form.submit();" />
                    </form>

                </ul>
                <div class="split-vertical-body">
                    <div class="split-vertical-cell" style="max-height:500px; overflow-y: scroll;">
                        <div data-scrollable>
                            <ul class="chat-contacts">

                                <?php
                                $list1 = $conn->query("SELECT users.id AS userid, first_name, last_name, avatar FROM users INNER JOIN relationship ON users.id=user1_id OR users.id=user2_id WHERE (user1_id=$sessionid OR user2_id=$sessionid) AND status=1 AND users.id!=$sessionid GROUP BY users.id");
                                if($list1->num_rows > 0){
                                while ($rowlist1 = $list1->fetch_assoc()) {

                                    $login = $conn->query("SELECT id, user_id, online FROM sessions WHERE user_id=".$rowlist1['userid']."");
                                    if($login->num_rows == 0) {

                                    ?>
                                    <li class="offline" data-user-id="<?php echo $rowlist1['userid']; ?>">
                                        <a href="#">

                                            <div class="media">
                                                <div class="pull-left">
                                                    <span class="status"></span>
                                                    <img src="<?php echo $rowlist1['avatar'] ?>" width="40" class="img-circle"/>
                                                </div>
                                                <div class="media-body">
                                                    <div class="contact-name"><?php echo $rowlist1['first_name'];
                                                        echo "&nbsp;";
                                                        echo $rowlist1['last_name']; ?></div>

                                    <?php
                                    $chat1 = $conn->query("SELECT sent_at, opened, recipient_del, sender_del, users.first_name, avatar, msg_to, msg_from, message, messages.id AS messageid FROM messages INNER JOIN users ON users.id=msg_from WHERE ((msg_from=$sessionid AND msg_to=".$rowlist1['userid'].") OR (msg_from=".$rowlist1['userid']." AND msg_to=$sessionid)) GROUP BY message ORDER BY sent_at ASC");

                                    if($chat1->num_rows > 0) {
                                        while($rowchat1=$chat1->fetch_assoc()) { ?>

                                            <span class="hidden">
    <span class="message" class="hidden"><?php echo "&#10687; [".$rowchat1['first_name']."]: ".$rowchat1['message'].PHP_EOL; ?></span>
</span>


<?php } } ?>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                        <?php } else {
                                        while($rowlog=$login->fetch_assoc()) {
                                            if($rowlog['online']==0) { ?>

                                                <li class="online away" data-user-id="<?php echo $rowlist1['userid']; ?>">
                                                    <a href="#">

                                                        <div class="media">
                                                            <div class="pull-left">
                                                                <span class="status"></span>
                                                                <img src="<?php echo $rowlist1['avatar'] ?>" width="40" class="img-circle"/>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="contact-name"><?php echo $rowlist1['first_name'];
                                                                    echo "&nbsp;";
                                                                    echo $rowlist1['last_name']; ?></div>

                                                                <?php
                                                                $chat1 = $conn->query("SELECT sent_at, opened, recipient_del, sender_del, users.first_name, avatar, msg_to, msg_from, message, messages.id AS messageid FROM messages INNER JOIN users ON users.id=msg_from WHERE ((msg_from=$sessionid AND msg_to=".$rowlist1['userid'].") OR (msg_from=".$rowlist1['userid']." AND msg_to=$sessionid)) GROUP BY message ORDER BY sent_at ASC");

                                                                if($chat1->num_rows > 0) {
                                                                    while($rowchat1=$chat1->fetch_assoc()) { ?>

                                                                        <span class="hidden">
    <span class="message" class="hidden"><?php echo "&#10687; [".$rowchat1['first_name']."]: ".$rowchat1['message'].PHP_EOL; ?></span>
</span>


                                                                    <?php } } ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>



                                         <?php    } else { ?>

                                                <li class="online" data-user-id="<?php echo $rowlist1['userid']; ?>">
                                                    <a href="#">

                                                        <div class="media">
                                                            <div class="pull-left">
                                                                <span class="status"></span>
                                                                <img src="<?php echo $rowlist1['avatar'] ?>" width="40" class="img-circle"/>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="contact-name"><?php echo $rowlist1['first_name'];
                                                                    echo "&nbsp;";
                                                                    echo $rowlist1['last_name']; ?></div>

                                                                <?php
                                                                $chat1 = $conn->query("SELECT sent_at, opened, recipient_del, sender_del, users.first_name, avatar, msg_to, msg_from, message, messages.id AS messageid FROM messages INNER JOIN users ON users.id=msg_from WHERE ((msg_from=$sessionid AND msg_to=".$rowlist1['userid'].") OR (msg_from=".$rowlist1['userid']." AND msg_to=$sessionid)) GROUP BY message ORDER BY sent_at ASC");

                                                                if($chat1->num_rows > 0) {
                                                                    while($rowchat1=$chat1->fetch_assoc()) { ?>

                                                                        <span class="hidden">
    <span class="message" class="hidden"><?php echo "&#10687; [".$rowchat1['first_name']."]: ".$rowchat1['message'].PHP_EOL; ?></span>
</span>


                                                                    <?php } } ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>


                                     <?php       }

                                       }

                                    } ?>








                                <?php } } ?>
                            </ul>

                            <script id="chat-window-template" type="text/x-handlebars-template">

                                <div class="panel panel-default">
                                    <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
                                        <a href="#" class="close"><i class="fa fa-times"></i></a>
                                        <a href="#">
            <span class="pull-left">
                    <img src="{{ user_image }}" width="40">
                </span>
                                            <span class="contact-name">{{user}}</span>
                                        </a>
                                    </div>

                                    <?php
                                    $var ="{{user_message}}";

                                    ?>
                                    <div class="panel-body" id="chat-bill">
                                        <div class="media">

                                            <div class="media-body">
                                                <span class=""><?php  echo nl2br($var); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="text" class="form-control" placeholder="Type message..." />
                                </div>

                            </script>










                            <!--       <li class="online away" data-user-id="2">
                                       <a href="#">

                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/woman-5.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Mary A.</div>
                                                   <small>"Feeling Groovy"</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="online" data-user-id="3">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left ">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/guy-3.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Adrian D.</div>
                                                   <small>Busy</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="offline" data-user-id="4">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <img src="images/people/110/woman-6.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Michelle S.</div>
                                                   <small>Offline</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="offline" data-user-id="5">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <img src="images/people/110/woman-7.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Daniele A.</div>
                                                   <small>Offline</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="online" data-user-id="6">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/guy-4.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Jake F.</div>
                                                   <small>Busy</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="online away" data-user-id="7">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/woman-6.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Jane A.</div>
                                                   <small>"Custom Status"</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="offline" data-user-id="8">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/woman-8.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Sabine J.</div>
                                                   <small>"Offline right now"</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="online away" data-user-id="9">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/woman-9.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Danny B.</div>
                                                   <small>Be Right Back</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="online" data-user-id="10">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/woman-8.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">Elise J.</div>
                                                   <small>My Status</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>
                                   <li class="online" data-user-id="11">
                                       <a href="#">
                                           <div class="media">
                                               <div class="pull-left">
                                                   <span class="status"></span>
                                                   <img src="images/people/110/guy-3.jpg" width="40" class="img-circle"/>
                                               </div>
                                               <div class="media-body">
                                                   <div class="contact-name">John J.</div>
                                                   <small>My Status #1</small>
                                               </div>
                                           </div>
                                       </a>
                                   </li>-->


                        </div>
                    </div>
                </div>
            </div>
        </div>





