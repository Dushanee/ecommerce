var fieldCount = 0;

function addField() {
  var container = document.getElementById("container");

  var optionNameLabel = document.createElement("label");
  optionNameLabel.innerHTML = "Option Name: ";
  var optionNameInput = document.createElement("input");
  optionNameInput.type = "text";
  optionNameInput.name = "optionName" + fieldCount;
  
  var optionTypeLabel = document.createElement("label");
  optionTypeLabel.innerHTML = "Option Type: ";
  var optionTypeSelect = document.createElement("select");
  optionTypeSelect.name = "optionType" + fieldCount;
  var optionTypeOption1 = document.createElement("option");
  optionTypeOption1.value = "Option 1";
  optionTypeOption1.innerHTML = "select type";
  var optionTypeOption2 = document.createElement("option");
  optionTypeOption2.value = "Option 2";
  optionTypeOption2.innerHTML = "Birthday";
  var optionTypeOption3 = document.createElement("option");
  optionTypeOption3.value = "Option 3";
  optionTypeOption3.innerHTML = "Engagement";
  var optionTypeOption4 = document.createElement("option");
  optionTypeOption4.value = "Option 4";
  optionTypeOption4.innerHTML = "Get together";
  var optionTypeOption5 = document.createElement("option");
  optionTypeOption5.value = "Option 5";
  optionTypeOption5.innerHTML = "Proposal";
  var optionTypeOption6 = document.createElement("option");
  optionTypeOption6.value = "Option 6";
  optionTypeOption6.innerHTML = "Anniversary";
  var optionTypeOption7 = document.createElement("option");
  optionTypeOption7.value = "Option 7";
  optionTypeOption7.innerHTML = "Common Decos";
  var optionTypeOption8 = document.createElement("option");
  optionTypeOption8.value = "Option 8";
  optionTypeOption8.innerHTML = "Other";
  optionTypeSelect.appendChild(optionTypeOption1);
  optionTypeSelect.appendChild(optionTypeOption2);
  optionTypeSelect.appendChild(optionTypeOption3);
  optionTypeSelect.appendChild(optionTypeOption4);
  optionTypeSelect.appendChild(optionTypeOption5);
  optionTypeSelect.appendChild(optionTypeOption6);
  optionTypeSelect.appendChild(optionTypeOption7);
  optionTypeSelect.appendChild(optionTypeOption8);
  
  var descriptionLabel = document.createElement("label");
  descriptionLabel.innerHTML = "Description: ";
  var descriptionInput = document.createElement("input");
  descriptionInput.type = "text";
  descriptionInput.name = "description" + fieldCount;
  
  var priceLabel = document.createElement("label");
  priceLabel.innerHTML = "Price: ";
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

  container.appendChild(optionNameLabel);
  container.appendChild(optionNameInput);
  container.appendChild(optionTypeLabel);
  container.appendChild(optionTypeSelect);
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
