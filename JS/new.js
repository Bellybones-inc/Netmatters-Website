
var xmlhttp = new XMLHttpRequest();
var url = "./data.json";

xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
    myFunction(myArr);
    }
};

xmlhttp.open("GET", url, true);
