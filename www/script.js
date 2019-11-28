function update_valid(checkboxElem) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "./database/update_valid.php", false);
    xhttp.withCredentials = true;
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("login="+checkboxElem.id);
    console.log(xhttp.response);
    if (xhttp.response == 0) {
        checkboxElem.checked = !checkboxElem.checked;
    }
}

function update_admin(checkboxElem) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "./database/update_admin.php", false);
    xhttp.withCredentials = true;
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("login="+checkboxElem.id);
    console.log(xhttp.response);
    if (xhttp.response == 0) {
        checkboxElem.checked = !checkboxElem.checked;
    }
}