<?php

require('../includes/db_connect.php');
session_start();


$email=$_SESSION['email'];

$user = $conn->query("SELECT id, city_id FROM users WHERE email='$email'");
if($user->num_rows > 0){
    while ($row=$user->fetch_assoc()){
        $userid=$row['id'];
        $usercity = $row['city_id'];
    }
}


if(isset($_POST['postbody'])) {

    $postbody = $_POST['postbody'];
    $postbody = stripslashes($_POST['postbody']); // removes backslashes
    $postbody = mysqli_real_escape_string($conn, $postbody); //escapes special characters in a string


}


    $postcountry = $_POST['postcountry'];




        if (isset($_POST['postcity'])) {
            if (!empty($_POST['postcity'])) {

                $postcity = $_POST['postcity'];
                $postcity = stripslashes($_POST['postcity']); // removes backslashes
                $postcity = mysqli_real_escape_string($conn, $postcity); //escapes special characters in a string


                $city_check = $conn->query("SELECT id, city FROM cities WHERE city='$postcity'");
                if ($city_check->num_rows == 0) {

                    $conn->query("INSERT INTO cities (id, city) VALUES (DEFAULT, '$postcity')");

                } else {
                    while ($rowcity = $city_check->fetch_assoc()) {

                        $cityid = $rowcity['id'];
                    }

                }

            } else {

                $cityid = $usercity;
            }


            
        }


    if(isset($_POST['postlink'])) {

     $link = $_POST['postlink'];




        $conn->query("INSERT INTO posts (id, body, added_at, added_by, posted_to, post_city, post_country, post_cat, post_privacy, post_hide, post_status) VALUES (DEFAULT, '$postbody', now(), $userid, $userid, $cityid, $postcountry, 6, 1, 0, 0)");

        $conn->query("INSERT INTO linkposts (id, linkpost_src, post_id) VALUES(DEFAULT, '$link', LAST_INSERT_ID())");


        header("location: ../user_timeline.php?u=" . $userid);
}




?>