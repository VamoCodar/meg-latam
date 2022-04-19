
const drawLine = (context, xi, yi, xf, yf, width,color) =>{
    context.beginPath();
    context.moveTo(xi, yi);
    context.lineTo(xf, yf);
    context.lineWidth = width;
    context.strokeStyle = color;
    context.stroke();
}

const drawText = (context, x, y, text, font, color) =>{
    context.beginPath();
    context.font = font;
    context.fillStyle = color;
    context.fillText(text, x, y);
}

const firstLine = (context, width, color) =>{
    drawLine(context, 10, 40, 20, 49, width, color);
    drawLine(context, 20, 49, 30, 49, width, color);
    drawLine(context, 30, 49, 50, 20, width, color);
    drawLine(context, 50, 20, 55, 53, width, color);
    drawLine(context, 55, 53, 70, 49, width, color);
    drawLine(context, 70, 49, 80, 49, width, color);
    drawLine(context, 80, 49, 100, 55, width, color);
    drawLine(context, 100, 55, 122, 50, width, color);
    drawLine(context, 122, 50, 150, 40, width, color);
    drawLine(context, 150, 40, 180, 49, width, color);
}

const drawLineGraphic = (context, pontos, width, color) =>{

    for (let i = 0; i < pontos.length - 1; i++){
        drawLine(context, pontos[i].x, pontos[i].y, pontos[i+1].x, pontos[i+1].y, width, color);
    }

    pontos.forEach((i) => {
        i.y = 20 + Math.floor(Math.random() * 40);
    });
}

const tableBackground = (context, width, color) =>{
    for(let x = 0; x <= 200; x+=20){
        for(let y=0; y<=100; y+=20){
            drawLine(context, x, y, x, y+20, width, color);
        }
    }

    for(let x = 0; x <= 200; x+=20){
        for(let y=0; y<=100; y+=20){
            drawLine(context, x, y, x+20, y, width, color);
        }
    }
}


const drawGraphic = (id, graphic1, graphic2) =>{
    let canvas = document.getElementById(id);
    let context = canvas.getContext('2d');

    const widthGraphic = canvas.clientWidth;
    const heightGraphic = canvas.clientHeight;

    setInterval(()=>{
        context.clearRect(0, 0, widthGraphic, heightGraphic);
        
        tableBackground(context, 1, 'rgba(0, 255, 255, 0.25)');

        drawLineGraphic(context, graphic1,2,'#00FFFF');
        drawLineGraphic(context, graphic2,2,'#00FFFF');

        
        drawText(context,20, 80, "LAT", "12px Bender", '#00FFFF');
        drawText(context,100, 80, Math.random().toFixed(7), "12px Bender", '#00FFFF');
        drawText(context,20, 95, "LON", "12px Bender", '#00FFFF');
        drawText(context,100, 95, Math.random().toFixed(7), "12px Bender", '#00FFFF');
    }, 170)
}
/*

*/
const graphicLine1 = [
    {   
        x: 10,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {   
        x: 20,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {   
        x: 30,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 50,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 55,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 70,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 80,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 100,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 122,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 150,
        y: 20 + Math.floor(Math.random() * 40),
    },
    {
        x: 180,
        y: 20 + Math.floor(Math.random() * 40),
    }
]

const graphicLine2 = [
    {   
        x: 10,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {   
        x: 30,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {   
        x: 59,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 92,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 110,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 110,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x:130,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 160,
        y:  20 + Math.floor(Math.random() * 40),
    },
    {
        x: 180,
        y:  20 + Math.floor(Math.random() * 40)
    }
]

drawGraphic ('graphic', graphicLine1, graphicLine2);



