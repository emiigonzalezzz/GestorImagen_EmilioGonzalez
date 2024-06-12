window.onload = ()=>{
    ObtenerImagen();
}

async function ObtenerImagen(){
    let url = "http://localhost/GestorImagen_EmilioGonzalez/BackEND/Connection/Connection.php?function=ObtenerImagen";
    let consulta = await fetch(url);
    let datos = await consulta.json();
    console.log(datos)
    MostrarImagen(datos);
}

function MostrarImagen(datos){
    let divImagenes = document.querySelector("#Imagenes");
    divImagenes.innerHTML = "";
    datos.forEach(element => {
        divImagenes.innerHTML += `
        <div>
            <img src="../../../BackEND/Imagenes/${element.id}.${element.extension}">
            <p>${element.nombre}</p>
        `
    });

}
