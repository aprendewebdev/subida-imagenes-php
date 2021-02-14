var fileInput = document.getElementById("custom-file-input");
var fileStatus = document.querySelector(".file-status");

fileInput.addEventListener('change', function() {
    fileStatus.textContent = this.files[0].name;
});