var fieldCount = 0;

function addField() {
  var container = document.getElementById("container");

  var optionLabel = document.createElement("label");
  optionLabel.innerHTML = "Option Name: ";
  var optionInput = document.createElement("input");
  optionInput.type = "text";
  optionInput.name = "option" + fieldCount;
  
  var optionTypeLabel = document.createElement("label");
  optionTypeLabel.innerHTML = "Option Type: ";
  var optionTypeInput = document.createElement("input");
  optionTypeInput.type = "text";
  optionTypeInput.name = "optionType" + fieldCount;
  
  var descriptionLabel = document.createElement("label");
  descriptionLabel.innerHTML = "Description: ";
  var descriptionInput = document.createElement("input");
  descriptionInput.type = "text";
  descriptionInput.name = "description" + fieldCount;
  
  var priceLabel = document.createElement("label");
  priceLabel.innerHTML = "Option Price: ";
  var priceInput = document.createElement("input");
  priceInput.type = "text";
  priceInput.name = "price" + fieldCount;
  
  var file1Label = document.createElement("label");
  file1Label.innerHTML = "Image 1: ";
  var file1Input = document.createElement("input");
  file1Input.type = "file";
  file1Input.name = "image1" + fieldCount;
  
  var file2Label = document.createElement("label");
  file2Label.innerHTML = "Image 2: ";
  var file2Input = document.createElement("input");
  file2Input.type = "file";
  file2Input.name = "image2" + fieldCount;

  container.appendChild(optionLabel);
  container.appendChild(optionInput);
  container.appendChild(optionTypeLabel);
  container.appendChild(optionTypeInput);
  container.appendChild(descriptionLabel);
  container.appendChild(descriptionInput);
  container.appendChild(priceLabel);
  container.appendChild(priceInput);
  container.appendChild(file1Label);
  container.appendChild(file1Input);
  container.appendChild(file2Label);
  container.appendChild(file2Input);

  fieldCount++;
}
