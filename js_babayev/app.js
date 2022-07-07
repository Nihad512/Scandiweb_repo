window.addEventListener('DOMContentLoaded',()=>{
  
    var children=document.getElementById('test').children;
    const Selector=document.getElementById('Selector');
   
    Selector.addEventListener('click',()=>{
        var x = document.getElementById("Selector").selectedIndex;
        var y = document.getElementById("Selector").options;
        for (var i = 0; i < children.length; i++) {
            if(children[i].id==y[x].text){
              children[i].style.display="block"
            }else{
                children[i].style.display="none"
            }
          }
    })

})
