window.onload = ()=>{
    IngresarImagen();
}

function IngresarImagen(){
    let formElement = document.querySelector("#FormIMG");
    
    formElement.onsubmit = async (e) =>{
        e.preventDefault()
        let formData =  new FormData(formElement);
        let url = "http://localhost/GestorImagen_EmilioGonzalez/BackEND/Controller/ControllerIMG.php?function=IngresarImagen";

        let config = {
            method: 'POST',
            body: formData
        }
        
        let respuesta = await fetch(url, config);
        let datos = await respuesta.json();
        console.log(datos);
        
}
}