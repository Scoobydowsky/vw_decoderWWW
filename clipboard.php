// create new array
var codeArr = [];
//adding values to array
for (i = 1 ; i <= codeamnt ; i++){
  //var currentCode = i + 1 ; // show actualy doed code
  codeArr[i] = document.getElementById("code"+ i).value;// load data for array
}
// store the target area to a variable to keep things neat
var targetArea = document.getElementById("tableDiv");
// create our <p> element
var p = document.createElement("p");
// create a text node inside the <p>, note that we're
//  using a variable "p" here
var snippet = document.createTextNode(codeArr[15]);
// insert our generated paragraph into the DOM
//p.appendChild(snippet);
//targetArea.appendChild(p);
//KOD POBIERAJACY DANE Z FORMULARZA
//for(var i = 1 ; i <= codeamnt ; i++){
//  var nowaDługosc = codeArr.push(document.getElementById("code"+ i));

//  }

2gie podejscie
var code[];
for (b = 0 ; b <= codeamnt; b++){
  var code[b] = sessionStorage.getItem("savedCode"+ b);
  // store the target area to a variable to keep things neat
  var targetCodeb = document.getElementById("testCode");
  // create our <p> element
  var paragraphCodeb = document.createElement("p");
  // create a text node inside the <p>, note that we're
  //  using a variable "p" here
  var snippetb = document.createTextNode(code[3]);
  // insert our generated paragraph into the DOM
  paragraphCodeb.appendChild(snippetb);
  targetCodeb.appendChild(paragraphCodeb);
}


3cie
for (var b = 1 ; b <= codeamnt; b++){
  var codeNo = b ;
  var codeNoHelper= "savedCode" + codeNo;
  var carCode[codeNo] = sessionStorage.getItem(codeNoHelper);
  // store the target area to a variable to keep things neat
  var targetCodeb = document.getElementById("testCode");
  // create our <p> element
  var paragraphCodeb = document.createElement("p");
  // create a text node inside the <p>, note that we're
  //  using a variable "p" here
  var snippetb = document.createTextNode(b);
  // insert our generated paragraph into the DOM
  paragraphCodeb.appendChild(snippetb);
  targetCodeb.appendChild(paragraphCodeb);
}
