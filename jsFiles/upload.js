function validateForm() {
    var fileInput = document.getElementsByName("my_image")[0];
    var textInput = document.getElementsByName("textbox")[0];
    var checkboxInput = document.getElementById("eule");
    var submitButton = document.getElementsByName("submit")[0];
    
    if (fileInput.value === "" || textInput.value === "" || !checkboxInput.checked) {
        submitButton.disabled = true;
    } else {
        submitButton.disabled = false;
    }
}