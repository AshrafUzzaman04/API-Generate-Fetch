<?php 

$connect = mysqli_connect("localhost", "root", "" , "test_api" );

$check_user = $connect->query( "SELECT * FROM `products`");


$null_array = array();
while ($row = mysqli_fetch_assoc($check_user)) {
    $null_array[] = $row;
}
print_r(json_encode($null_array));



//   {*****************************************************}
//   {****************** create json file *****************}
//   {*****************************************************}

//    while($check = $check_user->fetch_assoc()) {
//    $products[] = $check;
//    }
//   $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
//   file_put_contents('data.json', $encoded_data);

//   {*****************************************************}
//   {************ create json file in postman ************}
//   {*****************************************************}

//   if(isset($_REQUEST['products'])){
//     $check_user = $connect->query( "SELECT * FROM `products`");
//     $fetch = json_encode($check_user->fetch_all());

//     print_r($fetch);
//   }


// while ($row = $check_user->fetch_object()){
//         $id = $row->id;
//         $name = $row->name;
//         $type = $row->type;
//         $image = $row->	image;
//         $expire_date = $row->expire_date;
//         $price = $row->price;
//             $e = array(
//                 "id" => $id,
//                 "name" => $name,
//                 "type" => $type,
//                 "image" => $image,
//                 "expire_date" => $expire_date,
//                 "price" => $price
//             );
//             // array_push($employeeArr["body"], $e);
//         }
//         echo json_encode($e);
?>


