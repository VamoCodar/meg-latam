
let eventEffectDigitText = 0;
const EffectDigitText = (text) =>{
    for (let i = 0; i<text.length; i++){
            setTimeout(()=>{
                if (text[i] === ' '){
                    PrincipalTextHeader.innerHTML += `<br>`;
                }else{
                    PrincipalTextHeader.innerHTML += `${text[i]}`;
                }
            }, 100*i);
    }

}


const EffectDigitSlideX = (e) =>{
    
    let value = -200;
    let opacity = 0;


    let i = setInterval(()=>{
        value++;
        
        if (opacity < 1){
            opacity+=0.01;
        }

        e.style.marginLeft = `${value}px`;
        e.style.opacity = opacity;
        if(value === 0){
            clearInterval(i);
        }
    }, 0.01);

}



window.onscroll = () =>{
    if (document.documentElement.scrollTop && eventEffectDigitText == 0 > 400 || window.pageYOffset && eventEffectDigitText == 0 > 400){
        EffectDigitText(PrincipalTextHeader.innerText);
        eventEffectDigitText++;
        PrincipalTextHeader.innerText = '';

    }

    if (document.documentElement.scrollTop > t_sponsors.getBoundingClientRect().y + 200 && sponsors_options_t === 0){
        sponsors_option_t = 1;
        t_sponsors_options.forEach((e, i)=>{
            setTimeout(()=>{
                e.style.display = 'inline-block';
            }, 200*i);
        })
    }

}

const PrincipalTextHeader = document.querySelector('#principalHeader h1');

const t_sponsors_options = document.querySelectorAll('#sponsors .container-sponsors figure img');
const t_sponsors = document.querySelector('#sponsors .container-sponsors');
t_sponsors_options.forEach((i)=>{
    i.style.display = 'none';
});
let sponsors_options_t = 0;



/*

//Container do About Us
const t_aboutUs = document.querySelector('#about-us');
let about_us_h2_t = 0;
t_aboutUs.style.opacity = 0;
t_aboutUs.style.marginLeft = '-400px';



//Containei do h2 presente no Sponsors
const t_sponsors_h2 = document.querySelector('#sponsors h2');
t_sponsors_h2.style.opacity = 0;
t_sponsors_h2.style.marginLeft = '-400px';
let sponsors_h2_t = 0;


//Container do Contact
const t_contact_h2 = document.querySelector("#contact h2");
t_contact_h2.style.opacity = 0;
t_contact_h2.style.marginLeft = '-400px';
let contact_h2_t = 0;

const t_contact_grid = document.querySelector("#contact .grid-contact");
t_contact_h2.style.opacity = 0;
t_contact_h2.style.gap = '2000';
console.log(t_contact_h2);
let contact_grid_t = 0;*/