const xhttp = new XMLHttpRequest();

function getRequest(url, callback) {
  xhttp.onload = function () {
    console.log(this.responseText);
    const response = JSON.parse(this.responseText);
    callback(response);
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}

function postRequest(url, data, callback) {
  xhttp.onload = function () {
    console.log(this.responseText);
    // const response = JSON.parse(this.responseText);
    callback(this.responseText);
  };
  xhttp.open("POST", url, true);
  xhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
  xhttp.send(JSON.stringify(data));
}

function sendFormData(action, formData, callback) {
  let xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    callback(this.responseText);
  };

  xhttp.open("POST", action);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(formData);
}
