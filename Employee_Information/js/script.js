function addRow() {
    var table = document.getElementById("my_table");
    var row = table.insertRow(-1);
    var cellCount = table.rows[1].cells.length;

    for (var i = 0; i < cellCount; i++) {
        var cell = row.insertCell(i);
        var input;

        switch(i) {
            case 0:
                input = document.createElement("input");
                input.name = "employee_id[]";
                break;
            case 1:
                input = document.createElement("input");
                input.name = "name[]";
                break;
            case 2:
                input = document.createElement("input");
                input.name = "email[]";
                input.type = "email";
                break;
            case 3:
                input = document.createElement("select");
                input.name = "gender[]";
                var optionMale = document.createElement("option");
                optionMale.value = "Male";
                optionMale.text = "Male";
                var optionFemale = document.createElement("option");
                optionFemale.value = "Female";
                optionFemale.text = "Female";
                input.add(optionMale);
                input.add(optionFemale);
                break;
            case 4:
                input = document.createElement("input");
                input.name = "phone[]";
                break;
            case 5:
                input = document.createElement("input");
                input.name = "address[]";
                break;
            case 6:
                input = document.createElement("input");
                input.name = "salary[]";
                break;
        }

        input.style.width = "150px";
        input.style.padding = "8px";
        input.style.boxSizing = "border-box";
        input.style.border = "1px solid #ccc";
        input.style.borderRadius = "4px";
        cell.appendChild(input);
    }
}