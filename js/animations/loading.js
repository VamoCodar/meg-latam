
//console.log(loadingAnimation);



const loadAnimationLoading = (a, b, limit, max) =>{
    let indice = 0;
    let valueInitial = 0.2;
    let delay = 1;
    let progress = 0;

    setInterval(()=>{

        if (progress > 99){
            progress = 0;
        }
        progress+= 3.671428571428571;
        b.innerText = `${ Math.floor(progress)}%`;

        if(indice < limit){
            a[indice].style.opacity = valueInitial;
            valueInitial+=0.1;
        }else if (indice < max){
            for (let i = indice; i>=0; i--){
                if(valueInitial > 0.2){
                    a[i].style.opacity = valueInitial;
                    valueInitial-=0.1;
                }else{
                    a[i].style.opacity = valueInitial;
                }
            }
            valueInitial = 1;
        }else if(indice - 9 < 18){
            valueInitial = 0.1;
            for (let i = (indice - 9); i < max; i++){
                a[i].style.opacity = valueInitial;
                valueInitial += 0.1;
            }
        }else if (indice - 9 === 18){
            delay = 5
        }else{
            indice = -1;
            delay = 1;
            valueInitial = 0.2;

        }

        indice++;
        
    }, 100 * delay);
}


if (document.querySelectorAll('.animation-loading .animation-loading-bar div') !== null && document.querySelector('.animation-loading .progress-animation-loading p') !== null){
    
    const loadingAnimation = document.querySelectorAll('.animation-loading .animation-loading-bar div');
    const loadingProgress = document.querySelector('.animation-loading .progress-animation-loading p');

    loadAnimationLoading(loadingAnimation, loadingProgress, 9, loadingAnimation.length);


}