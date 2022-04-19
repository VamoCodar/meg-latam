
const loadingDigits = (context, x, y, text, font, color) =>{
    context.beginPath();
    context.font = font;
    context.fillStyle = color;
    context.fillText(text, x, y);
}

const addDigits = (context, digit1, digit2, imax, y, k, font, top) =>{
    for (let i = 0; i<imax; i++){
        loadingDigits(context, 0, y, `${digit1} ${digit2.toFixed(3)}`, font, 'rgba(0, 255, 255, 0.25)');
        digit1 = Math.floor(Math.random() * 1000);
        digit2 = (Math.random() * 100.123456789);
        y+=top;
    }
    if (k === true){
        loadingDigits(context, 0, y, " --- ----", font, 'rgba(0, 255, 255, 0.25)');
    }
}






const Digits = (id, font,top) =>{
    if (document.getElementById(id) !== null){
        
        const canvasDigits = document.getElementById(id);
        const contextDigits = canvasDigits.getContext("2d");

        setInterval(()=>{
            contextDigits.clearRect(0, 0, canvasDigits.width, canvasDigits.height);
            // contextDigits2.clearRect(0, 0, canvasDigits2.width, canvasDigits2.height);
        
            loadingDigits(contextDigits, 0, 24, Math.floor(Math.random() * 9000), font, 'rgba(0, 255, 255, 0.25)');
            // loadingDigits(contextDigits2, 0, 24, Math.floor(Math.random() * 9000), "24px Bender", 'rgba(0, 255, 255, 0.25)');
        
            addDigits(contextDigits,  Math.floor(Math.random() * 9000), (Math.random() * 100.123456789), 5, 90, true, font,top);
            addDigits(contextDigits, Math.floor(Math.random() * 9000), (Math.random() * 100.123456789), 9, 210, true, font,top);
            addDigits(contextDigits, Math.floor(Math.random() * 9000), (Math.random() * 100.123456789), 6, 410, false, font,top);
        
            //addDigits(contextDigits2,  Math.floor(Math.random() * 9000), (Math.random() * 100.123456789), 5, 90, true);
            //addDigits(contextDigits2, Math.floor(Math.random() * 9000), (Math.random() * 100.123456789), 9, 210, true);
            //addDigits(contextDigits2, Math.floor(Math.random() * 9000), (Math.random() * 100.123456789), 6, 410, false);
        }, 200);
        
    }
}

Digits('digits-animated', "24px Bender", 20);
Digits('digits-animated2', "24px Bender",20);
Digits('01-digits', "12px Bender",12);
Digits('02-digits', "12px Bender", 12);
Digits('03-digits', "12px Bender", 12);
Digits('04-digits', "12px Bender", 12);
