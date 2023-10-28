function displayForm(){
    const form = document.getElementById("user__infor-form");
    

    if(form.style.display == "block"){
        form.style.display = "none";
    }
    else {
        form.style.display = "block";
    }
    
}