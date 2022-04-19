
const drawTextDecorationSubTitle = (context, x, y, text, font, color) =>{
    context.beginPath();
    context.font = font;
    context.fillStyle = color;
    context.fillText(text, x, y);
}

const drawContentDecorationSubTitle = (context,text, count, indice, font, color) =>{

    for(let i=0; i<indice; i++){
        drawTextDecorationSubTitle(context, 10, 15*(i+1), text[i].p, font, color);
    }

    drawTextDecorationSubTitle(context, 10, 15*(indice+1), text[indice].p.slice(0, count), font, color);

}

const writeDecorationSubTitle = (id, text) =>{
    if (document.getElementById(id) !== null){
        let canvas = document.getElementById(id);
        let context =  canvas.getContext('2d');

        
        const decoration_subtitle_width = canvas.clientWidth;
        const decoration_subtitle_height = canvas.clientHeight;


        let count = 0;
        let indice = 0;
        let intevalDecoration = setInterval(() =>{
            context.clearRect(0, 0, decoration_subtitle_width, decoration_subtitle_height);

            let textsize = text[indice].p.length;

            drawContentDecorationSubTitle(context, text, count,indice,'12px Bender', 'rgba(0, 255, 255, 0.25)');
            if (count === textsize){
                count = 0;
                indice++;
                if(indice === text.length){
                    clearInterval(intevalDecoration);
                }
            }
            count++;
            
        },50)
    }
}


const decoration_subtitle_text = [
    {p: "<exit> = 0xFF & (val_>>>0x00)"},
    {p: "<sys><#rgb['r'] = 0xFF & (to aktivirovat cental zone) >>>0x10"},
    {p: "<Gravity>$Hex2rgb = 0xFF <<there is a probability of collision>> 0x001"},
    {p: "<exit> = 0xFF & (val_>>>0x00)"},
    {p: "<sys><#rgb['r'] = 0xFF & (to aktivirovat cental zone) >>>0x10"},
    {p: "<Gravity>$Hex2rgb = 0xFF <<there is a probability of collision>> 0x001"}
]
writeDecorationSubTitle("decoration-subtitle-contact", decoration_subtitle_text);
writeDecorationSubTitle("decoration-subtitle-sponsors", decoration_subtitle_text);
writeDecorationSubTitle("decoration-subtitle-contents", decoration_subtitle_text);
writeDecorationSubTitle("decoration-subtitle-general-championship", decoration_subtitle_text);
writeDecorationSubTitle("decoration-subtitle-brackets", decoration_subtitle_text);


