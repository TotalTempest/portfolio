// This is how you do canvas stuff
// https://www.w3schools.com/html/html5_canvas.asp
// https://www.w3schools.com/tags/ref_canvas.asp
// https://developer.mozilla.org/en-US/docs/Web/API/HTMLCanvasElement/getContext

// Animation stuff
// https://www.youtube.com/watch?v=YkPyedMS6s4

const c = document.getElementById("preview-animation");
const ctx = c.getContext("2d");

function headerLine(Xstart,Yend){
    this.Xstart = Xstart;
    this.Yend = Yend;
    this.color = "#BBADFF";
    this.DYend = getRndInteger(-5,5);

    this.draw = function(){
        ctx.moveTo(this.Xstart, 0);
        ctx.lineTo(this.Xend, this.Yend);
        ctx.strokeStyle = this.color;
        ctx.stroke();

        ctx.beginPath();
        ctx.arc(this.Xend, this.Yend, 5, 0, 2 * Math.PI);
        ctx.fillStyle = this.color;
        ctx.fill();
    }
    this.animate = function(){
        // The speed
        this.Yend += this.DYend;

        this.Xend = this.Xstart;

        // If the speed is 0, keep re-rolling until it is not
        if (this.DYend == 0){
            this.DYend = getRndInteger(-5,5);
        }

        // Reverse the speed when it goes too far
        if (this.Yend >= Yend+100){
            this.DYend = -this.DYend;
        }
        if (this.Yend <= Yend-100){
            this.DYend = -this.DYend;
        }

        // Make the thing
        this.draw();
    }
}
lines=[];

lines[0] = new headerLine(50,500);
lines[1] = new headerLine(150,300);
lines[2] = new headerLine(250,400);

lines[3] = new headerLine(1350,300);
lines[4] = new headerLine(1450,500);
lines[5] = new headerLine(1550,400);

function Update () {
    ctx.clearRect(0,0,1600,1000);

    for (let i=0; i < lines.length; i++){
        lines[i].animate();
    }
    requestAnimationFrame(Update);
}

let whiteout = getRndInteger(0,lines.length);
lines[whiteout].color = "#FFFFFF";

Update();

// https://www.w3schools.com/JS/js_random.asp
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}