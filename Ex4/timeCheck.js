function timeCheck(){
    var d = new Date();
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var monthName = months[d.getMonth()];
    var dayName = days[d.getDay()];
    
    document.getElementById("time").innerHTML=dayName + "-" + monthName + " " + d.getDate() + "-" + d.getFullYear() + "    " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    
    window.setTimeout(timeCheck,1000);
}
