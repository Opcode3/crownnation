const handburger = document.querySelector('#handburger');
const faq_items = document.querySelectorAll('.faq_items');
const singleTestimony = document.querySelectorAll('.singleTestimony');

if(handburger){
    handburger.addEventListener('click', ()=>{
        document.querySelector('#navList').classList.toggle('showNav');
    });
}

if(faq_items){ // FAQs element
    for(let k = 0; k < faq_items.length; k++){
        faq_items[k].addEventListener('click', function(e){ 
            this.classList.toggle('faq_active');
            this.querySelector('.description_faq').classList.toggle('faq_show');
            this.querySelector('.btn_faq svg').classList.toggle('faq_btn_toggle');


            // faq_btn_toggle
        });
    }
}


if(singleTestimony){
    let onElement = -1;
    for(let m = 0; m < singleTestimony.length; m++){
        singleTestimony[m].addEventListener('click', function(){
            this.parentNode.querySelector('p').classList.add('active');

            if(onElement != -1){
                singleTestimony[onElement]
                    .parentNode.querySelector('p')
                        .classList.remove('active');
            }
            onElement = m;

        })
    }

    document.addEventListener('click', (e) => {
        const isClickArea = document.querySelector("#cover").contains(e.target); 
        if(isClickArea == false){
            if(onElement != -1){
                singleTestimony[onElement]
                    .parentNode.querySelector('p')
                        .classList.remove('active');
                onElement = -1;
            }
        }
    })
}


document.addEventListener('DOMContentLoaded', ()=>{
    setTimeout(()=>{
        const preloader = document.querySelector(".preloader");
        preloader.remove();
    }, 500)
})


