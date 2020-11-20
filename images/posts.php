<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include_once "../config/database.php";
$pp = new Posts();
$result = $pp->post();
//Get row count 
$num = $result->rowCount();
if($num > 0){
$post_data = array(
    'data' => array()
);


while($data = $result->fetch(PDO::FETCH_ASSOC)){
    extract($data);
    $item = array(
    "post_id" => $post_id,
    "post_title" =>$post_title,
    "post_img" =>$post_img,
    "m_one"=>$m_one,
    "m_tow"=>$m_tow,
    "m_three" =>$m_three,
    "post_author" =>$post_author
    );
     array_push($post_data["data"],$item);
    };
    $json_data = json_encode($post_data);
    echo $json_data;


}else{
echo json_encode(array('msg'=>'POST NOT FOUND'));
}
?> 