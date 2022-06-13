<?php
include('conn.php');
$query = mysqli_query($conn, "SELECT * FROM product_tb");
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $array['id'] = $row['product_id'];
    $array['name'] = $row['product_name'];
    $array['price'] = $row['price'];
    $array['category'] = $row['category'];
    $array['image'] = $row['image'];
    
    array_push($data, $array);
}
echo json_encode($data);
?>