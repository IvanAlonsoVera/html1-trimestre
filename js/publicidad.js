function publicidad() {
let rand = Math.floor(Math.random() * 5);
let cambia_imagen = new Array();
cambia_imagen[0] = "../imagenes/anunciantes/0.jpg";
cambia_imagen[1] = "../imagenes/anunciantes/1.jpg";
cambia_imagen[2] = "../imagenes/anunciantes/2.jpg";
cambia_imagen[3] = "../imagenes/anunciantes/3.jpg";
cambia_imagen[4] = "../imagenes/anunciantes/4.jpg";
cambia_imagen[5] = "../imagenes/anunciantes/5.jpg";
document.getElementById("publicidad_img").src = cambia_imagen[rand];
}
