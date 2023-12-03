function displayAvatarFromInputLink(val, elementId) {
    const selectedImage = document.getElementById(elementId);
    if (val == '') {
        val = "https://mdbootstrap.com/img/Photos/Others/placeholder.jpg";
    }
    selectedImage.src = val;

}



function ajaxCategorySelection(val) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("producttype").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "../controller/controller.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('valueCustomerTypeSelected=' + val);
}

// thuc hien nut enable input nhap so luong san pham o trang inventory
function enableInputs_number_of_stocks_inventory(type_name) {

    var form = document.querySelector(`.inventoryFormFor${type_name}`);

    var inputs = form.querySelectorAll(`.inputFor${type_name}`);

    inputs.forEach(function (input) {
        input.removeAttribute('disabled');
    });

    var submitBtn = form.querySelector(`#submit${type_name}`);
    var enableBtn = form.querySelector(`#enable${type_name}`);

    submitBtn.removeAttribute('disabled');
    enableBtn.setAttribute('disabled', 'disabled');

}

function disableInputs_number_of_stocks_inventory(type_name) {

    var form = document.querySelector(`.inventoryFormFor${type_name}`);

    var submitBtn = form.querySelector(`#submit${type_name}`);
    var enableBtn = form.querySelector(`#enable${type_name}`);

    if (submitBtn.getAttribute('disabled') != null && enableBtn.getAttribute('disabled') != null){
        alert("Hai nut dang bi khoa");
        return;
    }

    var inputs = form.querySelectorAll(`.inputFor${type_name}`);

    inputs.forEach(function (input) {
        input.setAttribute('disabled', 'disabled');
    });

    submitBtn.setAttribute('disabled', 'disabled');
    enableBtn.removeAttribute('disabled');
}

function trigger_disable_button_id(btnId){
    var btn = document.querySelector(`#${btnId}`);

    if (btn.getAttribute('disabled') != null){
        btn.setAttribute('disabled', 'disabled');
        return;
    }else{
        btn.removeAttribute('disabled');
        return;
    }
}
