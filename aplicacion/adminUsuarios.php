<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
        include_once ('config.php');
        conexionDB('usuarios');
        ?>

        <script>
            const nBuscar = document.getElementById('nBuscar');
            const Buscador = document.getElementById('buscador');
            const AddUser = document.getElementById('addUser');
            const delUser = document.getElementById('delUser');

            Buscador.addEventListener("click", (event) => {
                const buscando = document.getElementById(nBuscar.value).scrollIntoView();
            });

            addUser.addEventListener("click", (event) => {

                const cuerpo = document.body;

                cuerpo.innerHTML = `
         <form action='config.php' method='post'>
            <div class='min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12'>
            <div class='relative py-3 sm:max-w-xl sm:mx-auto'>
            <div class='relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10'>
            <div class='max-w-md mx-auto'>
             <div class='flex items-center space-x-5'>
              <div class='h-14 w-14 bg-purple-200 rounded-full flex flex-shrink-0 justify-center items-center text-purple-500 text-2xl font-mono'></div>
              <div class='block pl-2 font-semibold text-xl self-start text-gray-700'>
                <h2 id='nombreh1' class='leading-relaxed'></h2>
                 <input type='hidden' name='id'>
            <p class='text-sm text-gray-500 font-normal leading-relaxed'></p>
              </div>
              </div>
              <div class='divide-y divide-gray-200'>
                <div class='py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7'>
                 <div class='flex flex-col'>
                  <label class='leading-loose'>Nombre:</label>
                  <input id='nombretip' type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Nombre' name='nombre' required>
                </div>

                <div class='flex flex-col'>
                 <label class='leading-loose'>Apellidos:</label>
                 <input id='nombretip2' type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Apellidos' name='apellidos' required>
               </div>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Teléfono:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Teléfono' name='telefono' required>
               </div>
            <div class='flex items-center space-x-4'>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Dirección:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Calle' name='direccion' required>
               </div>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Número:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='numero'>
               </div>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Recogida:</label>
                 
                     <select class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' name='visita' required>
   <option value="1">SI</option> 
   <option value="2">NO</option> 
    </select>
               </div>

            </div>
             </div>
             <div class='pt-4 flex items-center space-x-4'>
                 <button type='submit' name='addUsuario' value='enviar' class='bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none'>Modificar</button>
             </div>
             </div>
              </div>
              </div>
             </div>
            </div>
            </form>

`;
                const oNombre = document.getElementById('nombreh1');
                const sNombre = document.getElementById('nombretip');
                const sApellido = document.getElementById('nombretip2');


                sNombre.addEventListener("keyup", (event) => {
                    const evento = event.target;
                    oNombre.textContent = evento.value;
                });
                sApellido.addEventListener("keyup", (event) => {
                    const evento = event.target;
                    
                    oNombre.innerHTML = sNombre.value + " " + evento.value;
                });

            });

delUser.addEventListener("click", (event) => {

                const cuerpo = document.body;

                cuerpo.innerHTML = `
         
<form action="config.php" method="post">
            <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
             
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                 <div class="flex flex-col">
                  <label class="leading-loose">ID del usuario a eliminar:</label>
                  <input id="nombretip" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nombre" name="id" required="">
                </div>

             </div>
             <div class="pt-4 flex items-center space-x-4">
                 <button type="submit" name="delUsuario" value="enviar" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Modificar</button>
             </div>
             </div>
              </div>
              </div>
             </div>
            </div>
            </form>

`;
                  });
        </script>
    </body>
</html>