var fieldCount = 0;

function addField() {
  var container = document.getElementById("container");
  
  var optionLabel = document.createElement("label");
  optionLabel.innerHTML = "Option Name: ";
  var optionInput = document.createElement("input");
  optionInput.type = "text";
  optionInput.name = "option" + fieldCount;
  
  var descriptionLabel = document.createElement("label");
  descriptionLabel.innerHTML = "Description: ";
  var descriptionInput = document.createElement("input");
  descriptionInput.type = "text";
  descriptionInput.name = "description" + fieldCount;
  
  var optionPriceLabel = document.createElement("label");
  optionPriceLabel.innerHTML = "Option Price: ";
  var optionPriceInput = document.createElement("input");
  optionPriceInput.type = "text";
  optionPriceInput.name = "optionPrice" + fieldCount;
  
  var file1Label = document.createElement("label");
  file1Label.innerHTML = "File 1: ";
  var file1Input = document.createElement("input");
  file1Input.type = "file";
  file1Input.name = "file1" + fieldCount;
  
  var file2Label = document.createElement("label");
  file2Label.innerHTML = "File 2: ";
  var file2Input = document.createElement("input");
  file2Input.type = "file";
  file2Input.name = "file2" + fieldCount;

  container.appendChild(optionLabel);
  container.appendChild(optionInput);
  container.appendChild(descriptionLabel);
  container.appendChild(descriptionInput);
  container.appendChild(optionPriceLabel);
  container.appendChild(optionPriceInput);
  container.appendChild(file1Label);
  container.appendChild(file1Input);
  container.appendChild(file2Label);
  container.appendChild(file2Input);

  fieldCount++;
}
