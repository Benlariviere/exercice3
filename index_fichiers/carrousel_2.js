(function(){
    let carrousel_2 =  document.querySelector('.carrousel_2');
    let ctrlCarrousel_2 =  document.querySelector('.ctrl_carrousel');
    let noCtrlCarrousel = 0;

for(const elmCarrou of carrousel_2){





let bout = ctrlCarrousel_2[noCtrlCarrousel].querySelectorAll(".ctrl_carrousel input");
noCtrlCarrousel = noCtrlCarrousel + 1;
console.log(bout.length);

let noBouton = 0;
bout[0].checked =true;
for(const bt of bout){
    bt.value = noBouton++;
    console.log(bt.value)
    
    bt.addEventListener('mousedown', function(){
        console.log(this.value)
        console.log("Passe")
        console.log("translateX(" + (-this.value*100) + "vw)")
        elmCarrou.style.transform = "translateX(" + (-this.value*100) + "vw)"
      })
    }
}


/*
bout1.addEventListener('mousedown', function(){
    carrousel.style.transform = "translateX(0)"
  
})
bout2.addEventListener('mousedown', function(){
    carrousel.style.transform = "translateX(-100vw)"
   
})
bout3.addEventListener('mousedown', function(){
    carrousel.style.transform = "translateX(-200vw)"
  
})*/
}())