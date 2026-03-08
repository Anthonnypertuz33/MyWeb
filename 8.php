<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Carta</title>

<style>

body{
margin:0;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:#ffb6c1;
font-family:Arial, Helvetica, sans-serif;
flex-direction:column;
}

/* Cuenta regresiva */

#countdown{
font-size:100px;
color:white;
font-weight:bold;
}

/* Sobre */

.envelope{
display:none;
position:relative;
width:420px;
height:260px;
background:#ff7aa2;
border-radius:8px;
overflow:hidden;
}

/* Frente del sobre */

.front{
position:absolute;
bottom:0;
width:100%;
height:60%;
background:#ff7aa2;
z-index:2;
}

/* Solapa */

.flap{
position:absolute;
top:0;
width:100%;
height:100%;
background:#ff5c8a;
clip-path:polygon(0 0, 50% 55%, 100% 0);
transform-origin:top;
z-index:3;
}

.flap.open{
animation:openFlap 1.5s forwards;
}

/* Carta */

.letter{
position:absolute;
width:80%;
left:10%;
top:120%;
background:white;
border-radius:8px;
padding:25px;
box-sizing:border-box;
text-align:center;
font-size:20px;
line-height:1.6;

opacity:0;
transition:all 1s ease;

z-index:4;
}

/* Carta visible */

.letter.show{
opacity:1;
top:10%;
}

/* Texto de instrucción */

#hint{
display:none;
margin-top:20px;
font-size:20px;
color:white;
font-weight:bold;
cursor:pointer;
}

/* Imagen sorpresa */

#photo{
display:none;
position:fixed;
top:50%;
left:50%;
transform:translate(-50%,-50%) scale(0.8);
max-width:90%;
max-height:90%;
border-radius:12px;
box-shadow:0 10px 40px rgba(0,0,0,0.4);
z-index:9999;
opacity:0;
transition:all 0.5s ease;
}

#photo.show{
opacity:1;
transform:translate(-50%,-50%) scale(1);
}

/* Animación solapa */

@keyframes openFlap{
0%{transform:rotateX(0deg);}
100%{transform:rotateX(-180deg);}
}

</style>
</head>

<body>

<div id="countdown">5</div>

<div class="envelope" id="envelope">

<div class="letter" id="letter">
Gracias por ser la mujer maravillosa que eres y por llenar mis días de amor.
<br><br>
Hoy celebro a la mujer que amo y admiro. ❤️
</div>

<div class="front"></div>
<div class="flap" id="flap"></div>

</div>

<div id="hint">👆 Toca la pantalla para ver una sorpresa</div>

<img id="photo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-zC3f6gGa4THavaDW9fouBg0-Z7KnIpSwe5WZr43ilQ&s=10">

<script>

let time = 5

const countdown = document.getElementById("countdown")
const envelope = document.getElementById("envelope")
const flap = document.getElementById("flap")
const letter = document.getElementById("letter")
const hint = document.getElementById("hint")
const photo = document.getElementById("photo")

const timer = setInterval(()=>{

time--
countdown.textContent = time

if(time === 0){

clearInterval(timer)

countdown.style.display="none"
envelope.style.display="block"

/* abrir solapa */

flap.classList.add("open")

setTimeout(()=>{

envelope.style.overflow="visible"
letter.classList.add("show")

/* mostrar texto */

hint.style.display="block"

},1500)

}

},1000)

/* mostrar foto */

document.body.addEventListener("click", ()=>{

if(hint.style.display === "block"){

photo.style.display="block"

setTimeout(()=>{
photo.classList.add("show")
},10)

hint.style.display="none"

}

})

</script>

</body>
</html>

