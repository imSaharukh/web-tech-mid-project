$.get("../controller/users.controller.php", function name(data) {
  data = JSON.parse(data);
  console.log(data);

  //admin
  $.each(data[0].admins, function (i, value) {
    $("#admin").append(`
   <div class="container">
           <img src="https://i.pravatar.cc/100" alt="Avatar" style="width:90px">
           <p><span>Name: ${value.firstName} ${value.lastName}</span> username: ${value.username}</p>
           <p>email: ${value.email}</p>
           <button style="display: flex;" class = "button" onclick="updateAdmin('${value.username}');">EDIT</button>
           </div>


   </div>
   
   `);
  });

  //doctor
  $.each(data[1].doctors, function (i, value) {
    $("#doctor").append(`
   <div class="container">
           <img src="https://i.pravatar.cc/100" alt="Avatar" style="width:90px">
           <p><span>Name: ${value.firstName} ${value.lastName}</span> department: ${value.department}</p>
           <p>REG: ${value.regnumber}</p>
           <button style="display: flex;" class = "button" onclick="updateDoctor('${value.id}');">EDIT</button>
           </div>


   </div>
   
   `);
  });

  //shopmanager

  //doctor
  $.each(data[2].shopmanager, function (i, value) {
    $("#shopmanager").append(`
   <div class="container">
           <img src="https://i.pravatar.cc/100" alt="Avatar" style="width:90px">
           <p><span>NAME: ${value.firstName} ${value.lastName}</span></p>
           <p>address: ${value.address}</p>
           <p>phone: ${value.phone}</p>
           <p> licenseNumber: ${value.licenseNumber}</p>
           </div>


   </div>
   
   `);
  });

  //patients

  $.each(data[3].patients, function (i, value) {
    $("#patients").append(`
   <div class="container">
           <img src="https://i.pravatar.cc/100" alt="Avatar" style="width:90px">
           <p><span>NAME: ${value.firstName}</span> age: ${value.age}</p>
           <p>address: ${value.address}</p>
           <p>phone: ${value.phone}</p>
           <p>email: ${value.email}</p>
           </div>


   </div>
   
   `);
  });
});

function updateAdmin(username) {
  console.log(username);

  window.location.href =
    "../view/editadmin.view.php?username=" + username.trim();
}

function getAdmin() {
  //https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());
  console.log(params);

  $.get(
    `../controller/handeleditadmin.controller.php?username=${params.username}`,
    function foo(data) {
      data = JSON.parse(data);
      console.log(data);
      $("#firstName").val(data.firstName);
      $("#lastName").val(data.lastName);
      $("#username").val(data.username);
      $("#email").val(data.email);
      $("#password").val(data.password);
    }
  );
}

function editAdmin() {
  var firstName = $("#firstName").val();
  var lastName = $("#lastName").val();
  var username = $("#username").val();
  var email = $("#email").val();
  var password = $("#password").val();

  var msg = "";
  var isValid = true;
  if (firstName == "") {
    msg += "First name is required\n";
    isValid = false;
  }
  if (lastName == "") {
    msg += "Last name is required\n";
    isValid = false;
  }
  if (username == "") {
    msg += "Username is required\n";
    isValid = false;
  }
  if (email == "") {
    msg += "Email is required\n";
    isValid = false;
  }
  if (password == "") {
    msg += "Password is required\n";
    isValid = false;
  }

  if (!isValid) {
    return alert(msg);
  }

  const data = {
    firstName: firstName,
    lastName: lastName,
    username: username,
    email: email,
    password: password,
  };
  console.log(data);
  $.post(
    "../controller/handeleditadmin.controller.php",
    JSON.stringify(data),
    function onsuccess(res) {
      if (res == "success") {
        alert("succesfully updated");
        location.reload();
      } else {
        alert(res);
      }
      console.log(res);
    }
  );
}

function addNewADMIN() {
  window.location.href = "admin-form.php";
}

// doctor

function getDoctor() {
  //https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());
  console.log(params);

  $.get(
    `../controller/handeleditdoctor.controller.php?id=${params.id}`,
    function foo(data) {
      data = JSON.parse(data);
      console.log(data);
      $("#firstName").val(data.firstName);
      $("#lastName").val(data.lastName);
      $("#department").val(data.department);
      $("#email").val(data.email);
      $("#visitingFee").val(data.visitingFee);
    }
  );
}

function updateDoctor(id) {
  console.log(id);

  window.location.href = "../view/editdoctor.view.php?id=" + id.trim();
}

function editDoctor() {
  var firstName = $("#firstName").val();
  var lastName = $("#lastName").val();
  var department = $("#department").val();
  var email = $("#email").val();
  var visitingFee = $("#visitingFee").val();

  var msg = "";
  var isValid = true;
  if (firstName == "") {
    msg += "First name is required\n";
    isValid = false;
  }
  if (lastName == "") {
    msg += "Last name is required\n";
    isValid = false;
  }
  if (department == "") {
    msg += "Department is required\n";
    isValid = false;
  }
  if (email == "") {
    msg += "email is required\n";
    isValid = false;
  }
  if (visitingFee == "") {
    msg += "visitingFee is required\n";
    isValid = false;
  }

  if (!isValid) {
    return alert(msg);
  }
  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());
  const data = {
    firstName: firstName,
    lastName: lastName,
    department: department,
    visitingFee: visitingFee,
    email: email,
    id: params.id,
  };
  console.log(data);
  $.post(
    "../controller/handeleditdoctor.controller.php",
    JSON.stringify(data),
    function onsuccess(res) {
      if (res == "success") {
        alert("succesfully updated");
        location.reload();
      } else {
        alert(res);
      }
      console.log(res);
    }
  );
}
