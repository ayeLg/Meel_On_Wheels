<?php
// headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

//initializing our api 
include_once('../../core/initialize.php');

// instantiate post
$caregiver = new Caregiver($db);


// get raw posted data 
$data = json_decode(file_get_contents("php://input"));

$caregiver->id = $data->id;
$caregiver->caregiver_id = $data->caregiver_id;




// create post
if($caregiver->acceptMember()){
    echo json_encode(
        array('message' => 'Caregiver will accept member.')
    );
} else {
    echo json_encode(
        array('message' => 'Caregiver will accept member.')
    );
}

