<?php
require_once('inc/connection.php');

// Remove resources from the website
$websitePath = 'C:\xampp\htdocs\new arrivals\ums'; // Update this with the correct directory path
$dateRange = strtotime('-2 weeks');

$files = scandir($websitePath);
// $currentDate = date('Y-m-d');


foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $filePath = $websitePath . '/' . $file;
        if (filemtime($filePath) < $dateRange) {
            unlink($filePath);
        }
    }
}

// Remove resources from the database
$dateRange = date('Y-m-d', $dateRange);

$query = "DELETE FROM new_arrivals WHERE addDate < '{$dateRange}'";
echo "Today's date is: " . $dateRange;
$result = mysqli_query($connection, $query);

if ($result) {
    // echo "Resources older than two weeks have been deleted.";
} else {
    echo "Error deleting resources: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
