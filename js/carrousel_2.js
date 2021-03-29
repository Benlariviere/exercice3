(function(){

let bout1 = document.getElementById('un')
let bout2 = document.getElementById('deux')
let bout3 = document.getElementById('trois')
let carrousel = document.querySelector('.carrousel')


let bout = document.querySelectorAll();
let carrousel_2 =  document.querySelectorAll('carrousel_2');
let noBouton = -1;
for(cont bt of bout){
    bt.value = noBouton++;
    console.log(bt.value)
    
    bt.addEventListener('mousdown', function(){
        carrousel_2.style.transform = "translateX(" + (-this.value*100) + "vw)"
    })
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