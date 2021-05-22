<html>
    <head>
        <meta charset="utf-8" />
        <title>Tarea Online 7 - Alejandro Blanco</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
        <link rel="stylesheet" href="../dist/leaflet-routing-machine.css" />
        <!--<link rel="stylesheet" href="index.css" />-->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <!--
        <div class="min-h-screen bg-white">
            <nav class="h-screen flex flex-col w-64 bg-gray-50">
                <div class="p-4">
                    <svg width="217.99999999999997" height="28" xmlns="http://www.w3.org/2000/svg"><g>
  <path stroke="#000" id="svg_4" d="m9.62051,8.86278c0.00061,-0.23376 0.20986,-1.66697 0.46515,-3.18493c0.79605,-4.73327 0.80776,-4.75416 1.81846,-3.24556l0.59798,0.89255l1.74877,-0.88278c2.31308,-1.16763 5.07312,-1.59958 7.61024,-1.19099c1.07698,0.17345 2.21973,0.45536 2.53946,0.62647c0.63477,0.33971 0.59408,0.63145 -0.41763,2.99431c-0.5545,1.29504 -0.60772,1.33195 -1.56555,1.08573c-1.63026,-0.41905 -4.2848,-0.28706 -5.56642,0.27678l-1.20164,0.52868l0.84346,0.88039c0.46391,0.48422 0.72671,0.95256 0.58401,1.04075c-0.14271,0.08819 -1.87898,0.26009 -3.85837,0.38197c-2.96976,0.18289 -3.59873,0.14734 -3.59792,-0.20337l0,0l0,0zm15.29192,13.0506l-1.28647,-1.7039l1.17134,-1.13268c1.20558,-1.16576 2.07506,-2.80248 2.45812,-4.6272l0.2186,-1.0413l-1.26081,0.2016c-0.69344,0.1109 -1.26507,0.09649 -1.27028,-0.032c-0.02435,-0.5999 3.27261,-6.51352 3.59307,-6.44477c0.50389,0.10809 5.61613,4.53587 5.61613,4.86418c0,0.14654 -0.53728,0.35235 -1.19394,0.45735l-1.19394,0.19091l-0.11784,2.03599c-0.15114,2.61123 -1.52711,5.62494 -3.44284,7.54067c-0.7673,0.7673 -1.53224,1.39508 -1.69987,1.39508c-0.16764,0 -0.88371,-0.76677 -1.59127,-1.70392l0,-0.00001zm-11.61301,4.77594c0,-0.18841 0.20211,-0.73339 0.44914,-1.21108c0.44818,-0.86669 0.44558,-0.87089 -1.22527,-1.98028c-2.61418,-1.73571 -4.5573,-4.8165 -5.16849,-8.19457l-0.20038,-1.10748l1.42869,-0.19582c2.94506,-0.40366 2.97196,-0.39146 3.56178,1.61577c0.39801,1.35449 0.88753,2.1662 1.94276,3.22142c0.77586,0.77587 1.51907,1.34367 1.65157,1.26178c0.1325,-0.08188 0.32427,-0.56573 0.42617,-1.07523c0.1019,-0.50949 0.31438,-0.92635 0.47218,-0.92635c0.36229,0 3.77394,5.37927 3.8281,6.0359c0.03617,0.43855 -1.80807,1.19787 -6.61447,2.72336c-0.30647,0.09727 -0.55178,0.02285 -0.55178,-0.16742l0,0z" fill="#74ed98"/>
  <path stroke="#000" id="svg_1" d="m11.38554,21.02222c-1.44296,-0.64762 -1.92238,-2.57034 -1.94002,-4.17362c-0.19553,-1.18712 1.03393,-2.06025 0.62918,-3.28091c-0.1536,-1.80452 0.32914,-3.59183 1.0505,-5.18196c0.02281,-1.02166 0.76425,-1.4182 1.57206,-1.36005c2.61003,-0.37481 5.26724,-0.38532 7.87827,-0.03121c1.55818,0.32709 2.79994,1.53547 4.11768,2.44816c0.81736,0.68632 1.77157,1.13847 2.5937,1.79813c0.88792,0.84421 1.7221,1.78587 2.33737,2.90575c0.22137,1.11952 0.51853,2.23259 0.67066,3.3595c0.30884,1.05452 -0.32339,1.71781 -0.80165,2.45041c-0.72634,0.99897 -2.10084,1.39314 -3.14106,0.85675c-0.72249,-0.29832 -0.9884,-1.56582 -1.8121,-1.4782c-3.10548,-0.05241 -6.21095,-0.10482 -9.31643,-0.15722c-0.71943,1.06843 -1.7141,2.2361 -3.01472,2.06982c-0.28261,-0.02676 -0.56044,-0.10629 -0.82344,-0.22537l0,0z" fill="#4c76c9"/>
  <text font-style="normal" font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="18" stroke-width="0" id="svg_2" y="20.9003" x="105.75918" stroke="#000" fill="#000000">Alejandro B</text>
  <text font-style="normal" font-weight="normal" xml:space="preserve" text-anchor="start" font-family="'Montserrat'" font-size="20" stroke-width="0" id="svg_3" y="20.91047" x="44.14657" stroke="#000" fill="#000000">Rutas</text>
 </g></svg>
                </div>
                <ul class="p-2 space-y-2 flex-1 overflow-auto" style="scrollbar-width: thin;">
                    <li>
                        <a href="#" class="flex space-x-2 items-center text-gray-600 p-2 bg-gray-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h7v-5h4v5h7v-10h3zm-5 8h-3v-5h-8v5h-3v-10.26l7-6.912 7 6.99v10.182z"/></svg>
                            <span class="text-gray-900">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex space-x-2 items-center text-gray-600 p-2 hover:bg-gray-200 rounded-lg hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                            <span>Ruta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex space-x-2 items-center text-gray-600 p-2 hover:bg-gray-200 rounded-lg hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                            <span>Administración</span>
                        </a>
                    </li>

                </ul>

                <div class="p-2 flex items-center border-t-2 border-gray-300 space-x-4">
                    <div class="relative inline-flex">

                        <img class='w-8 h-8 object-cover rounded-full' alt='User avatar' src='https://blaron.com/wp-content/uploads/2021/01/yo2.jpg' />
                    </div>
                    <div>
                        <h3 class="font-semibold tracking-wide text-gray-800">
                            Alejandro Blanco
                        </h3>
                        <p class="text-sm text-gray-700">
                            <a href="https://blaron.com" target="_blank">Visita mi web</a>
                        </p>
                    </div>
                </div>
            </nav>

        </div>
        -->



        


        <main class="flex w-full h-screen">
            <aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
                <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
                    <div class="text-sm">
                        <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">Menú</div>
                        <div id="inicio" class="bg-gray-700 text-blue-300 p-2 rounded mt-2 cursor-pointer">
                            <button id="inicio" class="flex space-x-2 items-centerp-2rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 fill-current" width="24" height="24" viewBox="0 0 24 24" stroke="#FFFFFF"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h7v-5h4v5h7v-10h3zm-5 8h-3v-5h-8v5h-3v-10.26l7-6.912 7 6.99v10.182z"/></svg>
                                <span>Inicio</span>
                            </button>
                        </div>
                        <div id="rutas" class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-purple-400 hover:text-blue-300">
                            <button id="rutas" class="flex space-x-2 items-centerp-2rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                                <span>Rutas</span>
                            </button>
                        </div>
                        <div id="admin" class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-purple-400 hover:text-blue-300">
                            <button id="admin" class="flex space-x-2 items-centerp-2rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                                <span>Administración</span>
                            </button>
                        </div>
                    </div>
                    <div class="p-2 flex items-center border-t-2 border-gray-300 space-x-4">
                    <div class="relative inline-flex">

                        <img class='w-8 h-8 object-cover rounded-full' alt='User avatar' src='https://blaron.com/wp-content/uploads/2021/01/yo2.jpg' />
                    </div>
                    <div>
                        <h3 class="font-semibold tracking-wide text-white">
                            Alejandro Blanco
                        </h3>
                        <p class="text-sm text-blue-300">
                            <a href="https://blaron.com" target="_blank">Visita mi web</a>
                        </p>
                    </div>
                </div>
                </div>
            </aside>

            <section class="w-full p-4">
                <div id="contenido" class="w-full h-full border-dashed border-4 p-4 text-md">
                    <iframe class="w-full h-full rounded-md" src="./userList.php"></iframe>

                </div></div>
            </section>

        </main>

        <script src="controlador.js"></script>

    </body>
</html>
