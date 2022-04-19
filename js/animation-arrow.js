

const initAnimationArrow = (groupLine, arrow, decrease) =>{

    if(groupLine !== null){
        setInterval(()=>{

            if(groupLine[arrow-1] !== undefined){
                groupLine[arrow-1].classList.remove('lineSelect');
                if(arrow === 7 && decrease === false){
                    decrease = true;
                }else if(arrow === 1 && decrease === true){
                    decrease = false;
                }
            
                if(decrease === false){
                    arrow++;
                }else if(decrease === true){
                    arrow--;
                }

                groupLine[arrow-1].classList.add('lineSelect');
            }
        }, 200);
    }
}

/*
const groupLine = document.querySelectorAll('.container-line div');
let arrow = 4;
let decrease = false;
*/


initAnimationArrow(document.querySelectorAll('.contents-right .animation-arrow .container-line div'), 4, false);
initAnimationArrow(document.querySelectorAll('.contents-left .animation-arrow .container-line div'), 4, false);
initAnimationArrow(document.querySelectorAll('.container-header-info .animation-arrow .container-line div'), 4, false);