<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/input.css">
    <title>Doctor Stats</title>
</head>
<body>

<?php include("navbar.componrnt.php") ?>


<div style= "padding-top: 20px;padding-bottom: 20px;"><input id = "search" class = "search by doctor name" style = "width: 100%;margin: auto;" type="text" name="search" placeholder="Search by doctor name.."></div>

<table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Doctor</th>
            <th>Last Year Revinue</th>
            <th>Last Mounth Revinue</th>
            <th>Total Visit</th>
        </tr>
    </thead>
    <tbody id ="tbody">
    </tbody>
</table>


    <?php include ('../view/footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/doctor.js"></script>
<script>
    $.get("../controller/doctorstats.controller.php", function(data){
        console.log(data);
        data = JSON.parse(data);
        console.log(data);
        $.each(data, function(index, value){
            $("#tbody").append(`
            <tr ${index % 2 == 0 ? 'class="active-row"' : ''}>
            <td>${value.id}</td>
            <td>${value.doctorName}</td>
            <td>${value.revenueLastYear}</td>
            <td>${value.revenueLastMounth}</td>
            <td>${value.totalPatentVisit}</td>
        </tr>

                `)
    });
});





$("#search").keyup(function(){

console.log($(this).val());

searchDoctor($(this).val());


}

);
</script>
</body>
</html>