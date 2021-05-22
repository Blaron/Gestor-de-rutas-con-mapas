
const controlador = document.getElementById('contenido');

window.onload = () => {
    init()
};


function init() {
    console.log("cargado");

    const oBtnInicio = document.getElementById('inicio');
    const oBtnRuta = document.getElementById('rutas');
    const oBtnAdmin = document.getElementById('admin');

    oBtnInicio.addEventListener("click", (event) => {
        console.log("pulsado inicio")
        controlador.innerHTML= `<iframe class="w-full h-full rounded-md" src="./userList.php"></iframe>`;
    });
    oBtnRuta.addEventListener("click", (event) => {
        console.log("pulsado Rutas")
        controlador.innerHTML = `<iframe class="w-full h-full rounded-md" src="./mapa_individual.html"></iframe>`;
    });
    oBtnAdmin.addEventListener("click", (event) => {
        console.log("pulsado Admin")
        controlador.innerHTML = `
<div class="flex flex-col justify-around w-full h-full rounded-md bg-gray-800">
<button id="centros" class="bg-purple-400 flex justify-center  m-5 text-white py-3 focus:outline-none">
                                
                                <span>Administrar Centro</span>
                            </button>
                                <button id="usuarios" class="bg-purple-400 flex justify-center  m-5 text-white py-3 focus:outline-none">
                                    
                                    <span>Administrar usuarios</span>
                                </button>
</div>

`;
        const centros = document.getElementById('centros');
                centros.addEventListener("click",()=>{
            controlador.innerHTML = `<iframe class="w-full h-full rounded-md" src="./adminCentro.php"></iframe>`;
        });
                const usuarios = document.getElementById('usuarios');
                usuarios.addEventListener("click",()=>{
            controlador.innerHTML = `<iframe class="w-full h-full rounded-md" src="./adminUsuarios.php"></iframe>`;
        });
        
    });
}
