<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];
    $file = 'collected_data.txt';
    file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
    echo "Data saved successfully";
} else {
    echo "Invalid request method";
}
?>
