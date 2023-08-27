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
// time
window.onload = setInterval(clock,1000);
function clock(){
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth();
    var montharr =["Tháng 1","Tháng 2","tháng 3","Tháng 4","Tháng 5","Tháng 6",
                   "Tháng 7","Tháng 8","Tháng 9","Tháng 10","tháng 11","Tháng 12"];
    month=montharr[month];

    var year = d.getFullYear();
    var day = d.getDay();
    var dayarr =["Chủ Nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7"];
    day=dayarr[day + 1] ;

    document.getElementById("days").innerHTML=day;
    document.getElementById("dates").innerHTML=date+" "+month+" "+year;
}

