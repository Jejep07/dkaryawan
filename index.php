<?php
date_default_timezone_set("Asia/Jakarta");
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUDUL</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary border navbar-expand-sm fixed-top">
    <a class="navbar-brand" href="#">JUDUL</a>
    <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href=""><i class=""></i> Menu1 </a></li>
        <li class="nav-item active"><a class="nav-link" href=""><i class=""></i> Menu2 </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page="><i class=""></i> Menu3 </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page="><i class=""></i> Menu4 </a></li>
    </ul>
</nav>

<div class="container" style="margin-top:100px;margin-bottom:100px">
    <?php

        // pengaturan menu
        $page = isset($_GET['page']) ? $_GET['page'] : "";
        $action = isset($_GET['action']) ? $_GET['action'] : "";

        if ($page==""){
            include "welcome.php";
        }elseif ($page==""){
            if ($action==""){
                include "";
            }else{
                include "";
            }
        }else{
          
        }
    ?>
</div>

    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script>
       $(document).ready(function () {
           $('#myTable').dataTable();
       });
    </script>

    <script src="assets/js/chosen.jquery.min.js"></script>
    <script>
     $(function() {
       $('.chosen').chosen();
     });
    </script>

</body>
</html>