<?php
/**
 * Created by PhpStorm.
 * User: Ewerton
 * Date: 11/02/2019
 * Time: 11:05
 */


function top($pagetitle){
    echo "
                <!DOCTYPE html>
                <html lang='pt-br'>
                <head>
                    <title>$pagetitle</title>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                    <meta name='description' content=''>
                    <meta name='author' content='Ewerton H Marschalk'>
                    <link rel='icon' href='https://png.icons8.com/nolan/50/000000/musical-notes.png'>
                    <!-- Bootstrap CSS -->
                    <link href='css/bootstrap.min.css' rel='stylesheet'>
                </head>
                <body>";
}

function bottom(){
    echo "</body>";
    footer();

    echo "
                <!-- Jquery JS -->	
                <script src=''></script>
                <!-- Bootstrap JS -->
                <script src='js/bootstrap.min.js'></script>
                <script src='js/bootstrap.bundle.min.js'
                <!-- Popper JS -->
                <script src=''></script>
                </html>
                ";
}