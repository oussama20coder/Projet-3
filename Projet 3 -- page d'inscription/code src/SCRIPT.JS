function tak() {
    var text1=document.getElementById("input1").value;
    var text2=document.getElementById("input2").value;
    var text3=document.getElementById("input3").value;
    var text4=document.getElementById("input4").value;
 

    document.getElementById("result").innerHTML+="<b>Nom :<b>&nbsp"+text1+"<br>";
    document.getElementById("result").innerHTML+="<b>Prénom:<b>&nbsp "+text2+"<br>";
    document.getElementById("result").innerHTML+="<b>Tel:<b>&nbsp"+text3+"<br>";
    document.getElementById("result").innerHTML+="<b>Email:<b>&nbsp"+text4+"<br> <hr>" ;
    

}