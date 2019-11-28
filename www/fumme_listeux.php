<?php require('./processing/session.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./styles.css">
	<title>Intranet Kraken</title>
</head>
<body>
	<?php require("menu.php") ?>
    <div class="main">
    <h1>Fumme Listeux (FL) :</h1>
        <div class="bl">
            <iframe id="gsheet" src="https://docs.google.com/spreadsheets/d/13Qp_5frm1BrfOUm21SnnvJrgh65LJMdwBRlKlEhVQWE/htmlembed/sheet?gid=0"></iframe>
            <div class="ajout_bl">
                <h1>Ajouter un FL</h1>
                <form method="post" id="form_bl">
                    <table>
                        <tr>
                            <th>Date :</th>
                            <th>Volontaires :</th>
                            <th>Coloc (lieux) :</th>
                            <th>Contacts :</th>
                            <th>Demandes :</th>
                            <th rowspan="2"><input type="button" value="add" id="send" onclick="sendform();"></th>
                        </tr>
                        <tr>
                            <td><input type="date" name="date" id="input_90" required></td>
                            <td><input type="text" name="volontaire" id="input_90"></td>
                            <td><input type="text" name="coloc" id="input_90" required></td>
                            <td><input type="text" name="contact" id="input_90"required></td>
                            <td><textarea name="demande" id="input_97" cols="30" rows="2"></textarea></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
function sendform() {
    var form = document.getElementById("form_bl"); 
    var data = new FormData(form);
    if (form[1].value == "" || form[3].value == "" || form[4].value == "") {
        alert("Merci de remplir au moins les champs dats, colos et contacts");
        return;
    }
    date = form[1].value;
    volontaire = form[2].value;
    coloc = form[3].value;
    contact = form[4].value;
    demande = form[5].value;

    arg_date = encodeURIComponent(date);
    arg_volontaire = encodeURIComponent(volontaire);
    arg_coloc = encodeURIComponent(coloc);
    arg_contact = encodeURIComponent(contact);
    arg_demande  = encodeURIComponent(demande);

    uri = 'date=' + arg_date + '&volontaire=' + arg_volontaire + '&coloc=' + arg_coloc + '&contact=' + arg_contact + '&demande=' + arg_demande;
    //console.log(uri);
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "https://script.google.com/macros/s/AKfycbx6wnHJzvTfU3g4DTwCUV9IIMM4aZ87xw2-jTFx9ordLDmcAQI/exec", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //xhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
    xhttp.withCredentials = true;
    try {
        xhttp.send(uri);
    } catch (error) {
        console.error(error);
    }
    form[1].value = "";
    form[2].value = "";
    form[3].value = "";
    form[4].value = "";
    form[5].value = "";
    var iframe = document.getElementById("gsheet");
    iframe.src = iframe.src;
}
</script>