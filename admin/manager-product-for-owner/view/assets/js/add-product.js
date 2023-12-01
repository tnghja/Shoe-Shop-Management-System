function displayAvatarFromInputLink(val, elementId) {
    const selectedImage = document.getElementById(elementId);
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
    xmlhttp.send('valueCustomerTypeSelected='+val);
}