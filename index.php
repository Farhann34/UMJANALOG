<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>MPF-ANALOG-UMJ</title>
</head>

<body>
<?php include"inti/header.php"; ?>

<?php
error_reporting(0);

// Fetching and sanitizing the input parameters
$page = isset($_GET['page']) ? basename($_GET['page']) : 'home';
$action = isset($_GET['action']) ? basename($_GET['action']) : '';
$sec = isset($_GET['sec']) ? $_GET['sec'] : '';

// Defining the base directory for pages
$baseDir = 'page/';

// Determine the file to include
if ($action == "") {
    $file = $baseDir . $page . '.php';
} else {
    $file = $baseDir . $page . '-' . $action . '.php';
}

// Checking if the file exists before including
if (file_exists($file)) {
    include $file;
} else {
    // Checking if page is 'sections' and 'sec' is set
    if ($page == 'sections' && $sec !== '') {
        $sectionsFile = 'sections.php';
        // Checking if sections.php exists
        if (file_exists($sectionsFile)) {
            include $sectionsFile;
        } else {
            echo "Halaman tidak ditemukan!";
        }
    } else {
        include $baseDir . 'home.php'; // Fallback to the home page if the file doesn't exist
    }
}
?>



<script type="module" src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include"inti/footer.php";?>
</body>
</html>