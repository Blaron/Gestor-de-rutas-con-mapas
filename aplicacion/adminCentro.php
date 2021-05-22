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
         conexionDB('centros');
        ?>
        
        <script>
 
            const AddCentro = document.getElementById('addCentro');

            AddCentro.addEventListener("click", (event) => {

                const cuerpo = document.body;

                cuerpo.innerHTML = `
         <form action='config.php' method='post'>
            <div class='min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12'>
            <div class='relative py-3 sm:max-w-xl sm:mx-auto'>
            <div class='relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10'>
            <div class='max-w-md mx-auto'>
             <div class='flex items-center space-x-5'>
              <div class='h-14 w-14 bg-purple-200 rounded-full flex flex-shrink-0 justify-center items-center text-purple-500 text-2xl font-mono'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9'/><path d='M9 22V12h6v10M2 10.6L12 2l10 8.6'/></svg></div>
              <div class='block pl-2 font-semibold text-xl self-start text-gray-700'>
                <h2 id='nombreh1' class='leading-relaxed'></h2>
              </div>
              </div>
              <div class='divide-y divide-gray-200'>
                <div class='py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7'>
                 <div class='flex flex-col'>
                  <label class='leading-loose'>Nombre:</label>
                  <input id='nombretip' type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Nombre' name='nombre' required>
                </div>

                <div class='flex flex-col'>
                 <label class='leading-loose'>Dirección:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Apellidos' name='direccion' required>
               </div>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Ciudad:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Ciudad' name='ciudad' required>
               </div>

            <div class='flex items-center space-x-4'>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Número:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='numero'>
               </div>

               <div class='flex flex-col'>
                 <label class='leading-loose'>Código Postal:</label>
                 <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='cPostal' required>
                 <input type='hidden' name='id' value=''>
               </div>

            </div>
             </div>
             <div class='pt-4 flex items-center space-x-4'>
                 <button type='submit' name='addCentro' value='enviar' class='bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none'>Modificar</button>
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
                sNombre.addEventListener("keyup", (event) => {
                    const evento = event.target;
                    oNombre.textContent = evento.value;
                });
                     });
                         </script>
    </body>
</html>
