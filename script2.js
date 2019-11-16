function postdone(){
    alert("Post Successful");
}

function active_link1(){
    document.getElementById('link1').classList.add('active');
    document.getElementById('link2').classList.remove('active');
     document.getElementById('home').style.display = 'block';
    document.getElementById('yourpostpage').style.display = 'none';
     document.getElementById('readlaterpage').style.display = 'none';
    document.getElementById('link3').classList.remove('active');
}
function readmore1(te){
    
     var temp = "div-"+te;
    var temp1 = "para-"+te;
    if((document.getElementById(temp1)).offsetHeight < 275){
        document.getElementById(te).style.display = 'none';
    }
    if((document.getElementById(temp1)).offsetHeight > 275){
        document.getElementById(temp).style.height = (document.getElementById(temp1).offsetHeight)+20;
        document.getElementById(te).textContent = "Read Less";
    
    }
    else if((document.getElementById(temp).offsetHeight) ==((document.getElementById(temp1).offsetHeight)+20) ){
         document.getElementById(temp).style.height = 275;
         document.getElementById(te).textContent = "Read More";
    }
    
    
  /*  if((document.getElementById(temp).offsetHeight) < 350 || (document.getElementById(temp).offsetHeight) == 275 ){
    document.getElementById(te).textContent = "Read Less";
    document.getElementById(temp).style.height = (document.getElementById(temp1).offsetHeight)+ 20;
        
    }
    else{
        document.getElementById(te).textContent = "Read More";
        document.getElementById(temp).style.height = 275;
        
    }*/
}



var count = 1;

function myFunction() {
    
    if(count===1 || (count%2)!=0){
 document.getElementById('responsivenav').style.display = "block";
        count++;
    }
    else{
        document.getElementById('responsivenav').style.display = "none";
        count++;
    }
}
if(window.screen.width > 780){
    document.getElementById('responsivenav').style.display = "block";
    myfunction();
}

/*var size = $('.textpara');
if((size.offsetHeight) > 550)
    {
     $('.readmore').style.display="inline";
        
    }
else{
   $('.readmore').style.display="none";
}*/