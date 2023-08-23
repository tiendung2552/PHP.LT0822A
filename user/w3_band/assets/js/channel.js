//  none/block but-footer
function showul(){
    var x = document.getElementById("show-ul")
    if(x.style.display == "block"){
        x.style.display = "none"; 
        document.getElementById("chevron").style.transform = "rotate(-90deg)";
    }else{
        x.style.display = "block";
        document.getElementById("chevron").style.transform = "rotate(0deg)";
    }
}
function showul1(){
    var x = document.getElementById("show-ul1")
    if(x.style.display == "block"){
        x.style.display = "none"; 
        document.getElementById("chevron1").style.transform = "rotate(0deg)";
    }else{
        x.style.display = "block";
        document.getElementById("chevron1").style.transform = "rotate(90deg)";
    }
}
function showul2(){
    var x = document.getElementById("show-ul2")
    if(x.style.display == "block"){
        x.style.display = "none"; 
        document.getElementById("chevron2").style.transform = "rotate(0deg)";
    }else{
        x.style.display = "block";
        document.getElementById("chevron2").style.transform = "rotate(90deg)";
    }
}
function showinp(){
    var x = document.getElementById("show-inp")
    if(x.style.display == "block"){
        x.style.display = "none"; 
    }else{
        x.style.display = "block";
    }
}