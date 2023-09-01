let selectedFiles = [];

function openDialog() {
  document.getElementById("dialog").style.display = "block";
}

function closeDialog() {
  document.getElementById("dialog").style.display = "none";
  selectedFiles = [];
}

function addFiles(event) {
  selectedFiles = Array.from(event.target.files);
  renderImagePreviews();
}



function removeFile(index) {
  selectedFiles.splice(index, 1);
  renderImagePreviews();
}

function renderImagePreviews() {
  const imagePreviewContainer = document.getElementById("imagePreview");
  imagePreviewContainer.innerHTML = "";

  selectedFiles.forEach((file, index) => {
    const reader = new FileReader();

    reader.onload = function (e) {
      const img = document.createElement("img");
      img.src = e.target.result;

      const closeButton = document.createElement("span");
      closeButton.classList.add("closeButton");
      closeButton.innerHTML = "&times;";
      closeButton.setAttribute("onclick", `removeFile(${index})`);

      const imageContainer = document.createElement("div");
      imageContainer.classList.add("imageContainer");
      imageContainer.appendChild(img);
      imageContainer.appendChild(closeButton);

      imagePreviewContainer.appendChild(imageContainer);
    };

    reader.readAsDataURL(file);
  });
}
