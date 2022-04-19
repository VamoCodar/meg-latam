//Scroll Effect

let eventEffectDigitText = 0;
window.onscroll = () =>{

    barNavFixed();

    if (document.querySelector('#principalHeader h1') !== null){
    
        const PrincipalTextHeader = document.querySelector('#principalHeader h1');


        if (document.documentElement.scrollTop && eventEffectDigitText === 0 > 400 || window.pageYOffset && eventEffectDigitText == 0 > 400){
            EffectDigitText(PrincipalTextHeader, PrincipalTextHeader.innerText);
            eventEffectDigitText=1;
            PrincipalTextHeader.innerText = '';
    
        }
    }
    /*

    if (document.documentElement.scrollTop > t_sponsors.getBoundingClientRect().y + 400 && sponsors_options_t === 0){
        sponsors_option_t = 1;
        t_sponsors_options.forEach((e, i)=>{
            setTimeout(()=>{
                e.style.display = 'inline-block';
            }, 280*i);
        })
    }
    */
}

const EffectDigitText = (id, text) =>{
    for (let i = 0; i<text.length; i++){
            setTimeout(()=>{
                if (text[i] === ' '){
                    id.innerHTML += `<br>`;
                }else{
                    id.innerHTML += `${text[i]}`;
                }
            }, 100*i);
    }

}

const barNavFixed = () =>{
    if (document.documentElement.scrollTop > 100 || window.pageYOffset > 100){  
        document.getElementById('nav-principal').classList.add('nav-fixed-top');
    }else{
        document.getElementById('nav-principal').classList.remove('nav-fixed-top');
    }
}
/*
const t_sponsors_options = document.querySelectorAll('#sponsors .container-sponsors figure img');
const t_sponsors = document.querySelector('#sponsors .container-sponsors');
t_sponsors_options.forEach((i)=>{
    i.style.display = 'none';
});
let sponsors_options_t = 0;

*/




const links = document.querySelectorAll('#nav-header a');
links.forEach((i, k)=>{
    const url = location.href;
    const href = i.href;

    const urlAux = url+'.php';
    if (urlAux.includes('/page-loading.php')){
        if(url === href){
            i.classList.add('btActive');
        }
    }else{    
        if (url.includes(href) && k > 0){
            i.classList.add('btActive');

            if(url.includes('loading')){
                document.querySelector('footer').innerHTML = '';
                document.querySelector('#directors').style.padding = 0;
                document.querySelector('#header').style.height = "100vh";
                document.querySelector('.logo-site').innerHTML = `
                    <div class="animation-loading">
                        <div class="animation-loading-bar">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        
                        <div class="progress-animation-loading">
                            <p class="font-family-bender font-color-white font-size-24">0%</p>
                        </div>
                    </div>
                `
            }
        }
    }
})



        
AOS.init();
