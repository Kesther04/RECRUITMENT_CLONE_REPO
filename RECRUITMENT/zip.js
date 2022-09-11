
function bolt(){
document.getElementById('main-div').style.visibility="visible";
}


function rolt(){
    document.getElementById('main-div').style.visibility="hidden";
}

function rock(){
    var forms = document.getElementById('zip-form');
    
    var ina = document.getElementById('ina').value;
    
    var ind = document.getElementById('ind').value;
    
     
    
    if (ina=="NIL") {
    forms.elements['pja'].style.display="none";
    
    forms.elements['pax'].style.display="block";
    }else{
        ina;
        ind;
   }
}


function deck(){
    var forms = document.getElementById('zip-form');
    
    var ink = document.getElementById('ink').value;
    
    var ino = document.getElementById('ino').value;
    
     
    
    if (ink=="NIL") {
    forms.elements['sii'].style.display="none";
    
    forms.elements['sic'].style.display="block";
    }else{
        ink;
        ino;
   }
}


function login(){
    var pass = document.getElementById('p-p-p');
    pass.setAttribute('type','text');
    document.getElementById('aaa').style.display="none";
    document.getElementById('bbb').style.display="block";
}


function lob(){
    var pass = document.getElementById('p-p-p');
    pass.setAttribute('type','password');
    document.getElementById('aaa').style.display="block";
    document.getElementById('bbb').style.display="none";
}

function record(){
    document.getElementById('p-a-t').style.display="block";
}
