<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/table.css">
    <title>Doctor Statistics</title>
</head>
<body>

    <?php include("navbar.componrnt.php") ?>


 <table class="styled-table">
    <thead>
        <tr>
            <td>Serial</td>
            <th>Doctor</th>
            <th>Patient</th>
            <th>Fee</th>
            <th>Date</th>

        </tr>
    </thead>
    <tbody id ="tbody">
    </tbody>
</table>


<?php include ('../view/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $.get("../controller/trx.controller.php", function(data){

        data = JSON.parse(data);
        console.log(data);
        $.each(data, function(index, value){
            $("#tbody").append(`
        <tr ${index % 2 == 0 ? 'class="active-row"' : ''}>
            <td>${index + 1}</td>
            <td>${value.doctor}</td>
            <td>${value.patent}</td>
            <td>${value.fee}</td>
            <td>${value.date}</td>
        </tr>

                `)
    });}
    );


</script>
</body>
</html>