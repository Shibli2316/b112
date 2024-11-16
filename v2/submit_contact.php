<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>


<?php 

include("_partials/_dbconn.php");

$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    
    $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $insert = true;
    } else {
        echo "try again";
    }
}

?>

<div class="p-6">
    <?php
        if($insert){
            echo "
            <div class='flex items-center p-4 mb-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800' role='alert'>
    <svg aria-hidden='true' class='flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-400 mr-2' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
        <path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm-1.293-7.293a1 1 0 111.414-1.414L10 10.586l1.293-1.293a1 1 0 011.414 1.414L11.414 12l1.293 1.293a1 1 0 01-1.414 1.414L10 13.414l-1.293 1.293a1 1 0 01-1.414-1.414L8.586 12 7.293 10.707a1 1 0 010-1.414z' clip-rule='evenodd'></path>
    </svg>
    <span class='sr-only'>Success</span>
    <div>
        <span class='font-semibold'>Success alert!</span> Message sent. You will be redirected.
    </div>
</div>
            ";
            echo "<meta http-equiv='refresh' content='3;url=contactus.php' />";
        }
    ?>




