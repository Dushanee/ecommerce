var fieldCount = 0;

function addField() {
  var container = document.getElementById("container");
  
  var optionLabel = document.createElement("label");
  optionLabel.innerHTML = "Option Name: ";
  var optionInput = document.createElement("input");
  optionInput.type = "text";
  optionInput.name = "option" + fieldCount;
  
  var optionTypeLabel = document.createElement("label");
  optionTypeLabel.innerHTML = "Option Type (Indoor/Outdoor): ";
  var optionTypeInput = document.createElement("input");
  optionTypeInput.type = "text";
  optionTypeInput.name = "optionType" + fieldCount;



  var optioncapacityLabel = document.createElement("label");
  optioncapacityLabel.innerHTML = "Guest Count: ";
  var optioncapacityInput = document.createElement("input");
  optioncapacityInput.type = "text";
  optioncapacityInput.name = "capacity" + fieldCount;




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
  file1Input.name = "file" + fieldCount + "1";
  
  var file2Label = document.createElement("label");
  file2Label.innerHTML = "File 2: ";
  var file2Input = document.createElement("input");
  file2Input.type = "file";
  file2Input.name = "file" + fieldCount + "2";

  var file3Label = document.createElement("label");
  file3Label.innerHTML = "File 3: ";
  var file3Input = document.createElement("input");
  file3Input.type = "file";
  file3Input.name = "file" + fieldCount + "3";

  var file4Label = document.createElement("label");
  file4Label.innerHTML = "File 4: ";
  var file4Input = document.createElement("input");
  file4Input.type = "file";
  file4Input.name = "file" + fieldCount + "4";

  container.appendChild(optionLabel);
  container.appendChild(optionInput);
  container.appendChild(optionTypeLabel);
  container.appendChild(optionTypeInput);
  container.appendChild(optioncapacityLabel);
  container.appendChild(optioncapacityInput);
  container.appendChild(descriptionLabel);
  container.appendChild(descriptionInput);
  container.appendChild(optionPriceLabel);
  container.appendChild(optionPriceInput);
  container.appendChild(file1Label);
  container.appendChild(file1Input);
  container.appendChild(file2Label);
  container.appendChild(file2Input);
  container.appendChild(file3Label);
  container.appendChild(file3Input);
  container.appendChild(file4Label);
  container.appendChild(file4Input);
  

  document.getElementById("num_of_options").value = fieldCount;

  fieldCount++;
}
