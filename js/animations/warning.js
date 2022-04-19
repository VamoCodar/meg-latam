

const drawImageWarning = (context, x, y, url) =>{
    context.beginPath();
    let baseImg = new Image(62, 56);
    baseImg.src = url;
    baseImg.onload = () =>{
        context.drawImage(baseImg, x, y);
    }
}

const drawCharWarning = (context, x, y, text, count, font, color) =>{
    
    context.beginPath();
        context.font = font;
        context.fillStyle = color;
        context.fillText(text.slice(0, count), x, y);
}

const drawLineWarning = (context, x1, y1, x2, y2, color)=>{
        context.beginPath();
        context.moveTo(x1, y1);
        context.lineTo(x2, y2);
        context.strokeStyle = color;
        context.stroke();
}

const drawScreenWarning = (context, x, y, count, velocity, color) =>{

    if ((count*velocity) < x/2){
        drawLineWarning(context, (x/2) - (count*velocity), y/2, x/2, y/2, color);
        drawLineWarning(context, (x/2), (y/2), x/2, y/2, color);
        drawLineWarning(context, x/2, y/2, (x/2) + (count*velocity), y/2, color);
    }else if (((count-30)*velocity) < y/2){
        drawLineWarning(context,  0, (y/2)-((count-30)*velocity), x, (y/2)-((count-30)*velocity), color);
        drawLineWarning(context,  0, (y/2)+((count-30)*velocity), x, (y/2)+((count-30)*velocity), color);
    }else if(((count-45)*velocity) < (x/2)-20){
        drawLineWarning(context,  0, 0, (x/2)-((count-45)*velocity), 0, color);
        drawLineWarning(context,  (x/2)+((count-45)*velocity), 0, x, 0, color);

        drawLineWarning(context,  x, y, (x/2)-((count-45)*velocity), y, color);
        drawLineWarning(context,  (x/2)+((count-45)*velocity), y, x, y, color);
    }else{
        drawLineWarning(context,  0, 0, 20, 0, color);
        drawLineWarning(context,  0, 0, 0, 20, color);

        drawLineWarning(context,  x-20, 0, x, 0, color);
        drawLineWarning(context,  x, 0, x, 20, color);

        drawLineWarning(context,  0, y, 20, y, color);
        drawLineWarning(context,  0, y, 0, y-20, color);

        drawLineWarning(context,  x-20, y, x, y, color);
        drawLineWarning(context,  x, y, x, y-20, color);
    }

}


const writeTextWarning = (context, textBox, count, font, color) =>{

    if (count/40 < 1){
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
    }else if (count/40 >= 1 && count/40 < 2){
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
        drawCharWarning(context, 10, 20 + (15*1), textBox.p2, count-40, font, color);
    }else if (count/40 >= 2 && count/40 < 3){
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
        drawCharWarning(context, 10, 20 + (15*1), textBox.p2, count, font, color);
        drawCharWarning(context, 10, 20 + (15*2), textBox.p3, count-40*2, font, color);
    }else if (count/40 >= 3 && count/40 < 4){
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
        drawCharWarning(context, 10, 20 + (15*1), textBox.p2, count, font, color);
        drawCharWarning(context, 10, 20 + (15*2), textBox.p3, count, font, color);

        drawCharWarning(context, 120, 80 + (15*0), textBox.p4, count-40*3, font, color);
    }else if (count/40 >= 4 && count/40 < 5){
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
        drawCharWarning(context, 10, 20 + (15*1), textBox.p2, count, font, color);
        drawCharWarning(context, 10, 20 + (15*2), textBox.p3, count, font, color);

        drawCharWarning(context, 120, 80 + (15*0), textBox.p4, count, font, color);
        drawCharWarning(context, 120, 80 + (15*1), textBox.p5, count-40*4, font, color);
    }else if (count/40 >= 5 && count/40 < 6){
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
        drawCharWarning(context, 10, 20 + (15*1), textBox.p2, count, font, color);
        drawCharWarning(context, 10, 20 + (15*2), textBox.p3, count, font, color);

        drawCharWarning(context, 120, 80 + (15*0), textBox.p4, count, font, color);
        drawCharWarning(context, 120, 80 + (15*1), textBox.p5, count, font, color);
        drawCharWarning(context, 120, 80 + (15*2), textBox.p6, count-40*5, font, color);
    }else{
        drawCharWarning(context, 10, 20, textBox.p1, count, font, color);
        drawCharWarning(context, 10, 20 + (15*1), textBox.p2, count, font, color);
        drawCharWarning(context, 10, 20 + (15*2), textBox.p3, count, font, color);

        drawCharWarning(context, 120, 80 + (15*0), textBox.p4, count, font, color);
        drawCharWarning(context, 120, 80 + (15*1), textBox.p5, count, font, color);
        drawCharWarning(context, 120, 80 + (15*2), textBox.p6, count, font, color);
        drawCharWarning(context, 120, 80 + (15*3), textBox.p7, count-40*6, font, color);
    }

}


const textBoxWarning = {
    p1: "Sed ut perspiciatis unde omnis iste natu",
    p2: "accusantium doloremque laudantium, totam",
    p3: "et quasi architecto beatae vitae dicta.",
    p4: "> Nemo enim ipsam",
    p5: "> comander exit()",
    p6: "> Ip skef 002",
    p7: "> this end --p"
}

let countWarning = 0;
let lineTextWarningCount = 0;


const activeWarning = (context, interval) =>{
    context.clearRect(0, 0, 300, 150);
    drawScreenWarning(context, 300, 150, countWarning, 5, 'rgba(0, 255, 255, 0.25)');

    
    if(countWarning > 100){

        writeTextWarning(context, textBoxWarning, lineTextWarningCount, '14px Bender', 'rgba(0, 255, 255, 0.25)');
        drawImageWarning(context, 10, 60, window.location.origin+'/wp-content/themes/meg/assets/icones/warning.png');
        lineTextWarningCount++;
    }
    countWarning++;

    
    if (lineTextWarningCount/40 === 8){
        clearInterval(interval);
    }
}

const BeginWarning = (context) =>{
    const intervalWarning = setInterval(()=>{
        if (document.documentElement.scrollTop > 600){
            activeWarning(context, intervalWarning);
        }
    }, 20);  
}



if (document.getElementById('container-warning')){
    const canvasWarning = document.getElementById('container-warning');
    const contextWarning = canvasWarning.getContext('2d');

    BeginWarning(contextWarning);
}


let iWarning = 0;
let jWarning = 0;
