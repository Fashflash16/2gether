<?php

require('../includes/db_connect.php');
session_start();

$email=$_SESSION['email'];

$user = $conn->query("SELECT id FROM users WHERE email='$email'");
if($user->num_rows > 0){
    while ($row=$user->fetch_assoc()){
        $userid=$row['id'];
    }
}

if(isset($_POST['comid'])) {

$comid = $_POST['comid'];

}

$sel = $conn->query("SELECT * FROM likes_com_videos WHERE liked_by=$userid AND comment_id=$comid");
if($sel->num_rows > 0) {

    header("location: ". $_SERVER['HTTP_REFERER']);

} else {

    $like= $conn->query("INSERT INTO likes_com_videos (id, liked_by, comment_id, like_status) VALUES (DEFAULT, $userid, $comid, 0)");

    header("location: ". $_SERVER['HTTP_REFERER']);


}






?>