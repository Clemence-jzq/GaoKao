<?php
include_once 'config.php';

$sql = "SELECT * FROM Province ORDER BY name_pinyin";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

echo json_encode($data);