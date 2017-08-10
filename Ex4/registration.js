
function checkEntry(){
    var info = {
            firstName: document.getElementById("fn").value,
            lastName: document.getElementById("ln").value,
            email: document.getElementById("ea").value,
            phone: document.getElementById("pn").value,
            pass: document.getElementById("initial").value,
            compass: document.getElementById("confirm").value
    };
    
    for(var i in info){
        if(info[i]==""){
            alert("Please fill all the information in the boxes below");
            return 0;
        }
    }
    
    if(info.pass!=info.compass){
        alert("Your passwords do not match");
        return 0;
    }
    
    if(info.pass.length < 8 || info.compass.length < 8){
        alert("Your password must be 8 characters minimum");
        return 0;
    }
    
    alert("You have been registered");
    //document.getElementById("fn").value="";
    //document.getElementById("ln").value="";
    //document.getElementById("ea").value="";
    //document.getElementById("pn").value="";
    //document.getElementById("initial").value="";
    //document.getElementById("confirm").value="";
    
    return 1;
}

function checkLogin(){
    var email = document.getElementById("ema").value;
    var pass = document.getElementById("pass").value;
    
    if (pass == "" || ema == ""){
        alert("Please fill all the information in the boxes below");
        return 0;
    }
    
    return 1;
}

