<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
<link rel="stylesheet" href="css/common.css">

</head>
<body>

<?php include("navbar.componrnt.php") ?>



<div id="feedback"></div>




<?php include ('../view/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $.get("../controller/feedback.controller.php", function(data){

        data = JSON.parse(data);
        console.log(data);
        $.each(data, function(index, value){
            $("#feedback").append(`
                <hr>
                <h3>Doctor: ${value.doctorName}</h3>
                <h3>Patient: ${value.patientName}</h3>
                <h4>Feedback: ${value.feedback}</h4>
                <button class = "button" onclick="updateFeedback(${value.id});">Checked</button>
                `)
    });}
    );



    function updateFeedback(id){
        id = JSON.stringify({id: id});
        console.log(id);
        $.post("../controller/updateFeedback.controller.php",id, function(data){
        console.log(data);
        if (data == "success"){
            alert("Feedback checked");
            window.location.reload();
        }
        else{
            alert("Something went wrong");
        }
            
        
    });
}


</script>



</body>
</html>