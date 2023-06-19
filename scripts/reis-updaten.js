function reisUpdaten() {
  var selectBox = document.getElementById("countries");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;
  console.log(selectedValue);
  var place = document.getElementById("place");
  async function logJSONData() {
    const response = await fetch(
      "plaatsen_ophalen.php?country_id=" + selectedValue
    );
    const jsonData = await response.json();
    console.log(jsonData);
    var select = document.getElementById("places");
    var length = select.options.length;

    for (i = length - 1; i >= 0; i--) {
      select.options[i] = null;
    }

    console.log(jsonData.length)
    for (i = jsonData.length - 1; i >= 0; i--) {
      console.log(jsonData[i].name);
      const option = new Option(jsonData[i].name, jsonData[i].id);
      // add it to the list
      select.add(option, undefined);
      //select.options[jsonData[i].name] = jsonData[i].name;

    }

    

    //document.getElementById('place').innerText = null;
  }
  result = logJSONData();
  //console.log(result);

  //xhttp.open("POST", "plaatsen_ophalen.php?country_id="+ selectedValue);
  //xhttp.send();
}
