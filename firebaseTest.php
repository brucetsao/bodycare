<?php
    require_once 'firebaseLib.php';
    // --- This is your Firebase URL
    $url = 'https://hackntu-c8663.firebaseio.com/';
    // --- Use your token from Firebase here
    $token = 'h1aX3FcGVNUMIxh1dGuqYmUQ7NFuRuaKiMFzsWgt';
    // --- Here is your parameter from the http GET
    $data1 = $_GET['data1'];
    $data2 = $_GET['data2'];
    $data3 = $_GET['data3'];
    // --- $arduino_data_post = $_POST['name'];
    // --- Set up your Firebase url structure here

    /// --- Making calls
    $fb = new fireBase($url, $token);


    $now = (string)date("Ymdhisa");
    echo $now;
    $response = $fb->set("/data/" . $now . "/data1/", $data1);
    $response = $fb->set("/data/" . $now . "/data2/", $data2);
    $response = $fb->set("/data/" . $now . "/data3/", $data3);
    sleep(2);