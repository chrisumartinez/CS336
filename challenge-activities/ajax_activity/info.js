function getInfo(){
    
    var url = "https://newton.now.sh";
    var number = document.getElementById("number").value;
    console.log("Number: " + number);
    var type = document.getElementById("type").value;
    console.log("Type: " + type);
    
    var fullURL = url + "/" + number + "/" + type;
    
    var ajax;
    if (window.XMLHttpRequest) {
         ajax= new XMLHttpRequest();
     }
    ajax.open("GET", fullURL, true );
    ajax.send();
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // alert(ajax.responseText);  //displays value retrieved from PHP program
        $("#results").empty();
         var data = JSON.parse(ajax.responseText);
         var div = document.getElementById("results");
         div.innerHTML += "Operation: " + data["operation"] + "<br>";
         div.innerHTML += "Expression: " + data["expression"] + "<br>";
         div.innerHTML += "result: "  + data["result"];
       }
     }
}