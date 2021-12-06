function searchDoctor(text) {
  $.get(`../controller/doctorstats.controller.php?q=${text}`, function (data) {
    console.log(data);
    data = JSON.parse(data);
    console.log(data);
    //clear #tbody
    $("#tbody").empty();
    $.each(data, function (index, value) {
      $("#tbody").append(`
            <tr ${index % 2 == 0 ? 'class="active-row"' : ""}>
            <td>${value.id}</td>
            <td>${value.doctorName}</td>
            <td>${value.revenueLastYear}</td>
            <td>${value.revenueLastMounth}</td>
            <td>${value.totalPatentVisit}</td>
            </tr>

                `);
    });
  });
}
