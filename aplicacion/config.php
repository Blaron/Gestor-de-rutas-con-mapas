<?php

if (isset($_POST['enviarUsuario'])) { 
    $usuario = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $numero = $_POST['numero'];
    $visita = $_POST['visita'];
    $id = $_POST['id'];
    $query = "UPDATE `usuarios` SET `id` = '$id', `nombre` = '$usuario', `apellidos` = '$apellido', `telefono` = '$telefono', `visita` = '$visita', `direccion` = '$direccion', `numero` = '$numero' WHERE `usuarios`.`id` = $id";
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;
    if ($error == null) {
        $resultado = $conectar->query($query);


        $conectar->close();
        echo '<script>alert("Se ha modificado el registro");window.location.replace("adminUsuarios.php");</script>';
    }
}

if (isset($_POST['enviarCentro'])) { 
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $numero = $_POST['numero'];
    $cPostal = $_POST['cPostal'];
    $id = $_POST['id'];
    $query = "UPDATE `centros` SET `id` = '$id', `nombre` = '$nombre', `direccion` = '$direccion', `numero` = '$numero', `cPostal` = '$cPostal', `ciudad` = '$ciudad' WHERE `centros`.`id` = $id";
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;
    if ($error == null) {
        $resultado = $conectar->query($query);


        $conectar->close();
        echo '<script>alert("Se ha modificado el registro");window.location.replace("adminCentro.php");</script>';
    }
}

function conexionDB($tipo) { 
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;

    if ($tipo == "usuarios") {

        $resultado = $conectar->query('SELECT id, nombre, apellidos, telefono, visita, direccion, numero FROM usuarios');

        $stock = $resultado->fetch_object();
        echo "<div class='py-2 px-2 bg-gray-100 flex items-center space-x-4'>";
        echo "<input id='nBuscar' type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='ID A BUSCAR'>";
        echo "<button id='buscador' class='bg-purple-400 flex justify-center items-center w-md text-white px-4 py-2 rounded-md focus:outline-none'>Buscar</button>";
        echo "<button id='addUser' class='bg-green-400 flex justify-center items-center w-md text-white px-4 py-2 rounded-md focus:outline-none'>Añadir</button>";
        echo "<button id='delUser' class='bg-red-400 flex justify-center items-center w-md text-white px-4 py-2 rounded-md focus:outline-none'>Eliminar</button>";
        echo "</div>";

        while ($stock != null) {
            echo "<form action='config.php' method='post'>";
            echo "<div class='min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12'>";
            echo "<div class='relative py-3 sm:max-w-xl sm:mx-auto'>";
            echo "<div class='relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10'>";
            echo "<div class='max-w-md mx-auto'>";
            echo " <div class='flex items-center space-x-5'>";
            echo "  <div class='h-14 w-14 bg-purple-200 rounded-full flex flex-shrink-0 justify-center items-center text-purple-500 text-2xl font-mono'>" . $stock->nombre[0] . $stock->apellidos[0] . "</div>";
            echo "  <div class='block pl-2 font-semibold text-xl self-start text-gray-700'>";
            echo "    <h2 class='leading-relaxed'>$stock->nombre $stock->apellidos</h2>";
            echo "     <input type='hidden' name='id' value='$stock->id'>";
            echo "<p id='$stock->id' class='text-sm text-gray-500 font-normal leading-relaxed'>ID: $stock->id</p>";
            echo "  </div>";
            echo "  </div>";
            echo "  <div class='divide-y divide-gray-200'>";
            echo "    <div class='py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7'>";
            echo "     <div class='flex flex-col'>";
            echo "      <label class='leading-loose'>Nombre:</label>";
            echo "      <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Nombre' name='nombre' value='$stock->nombre'>";
            echo "    </div>";

            echo "    <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Apellidos:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Apellidos' name='apellidos' value='$stock->apellidos'>";
            echo "   </div>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Teléfono:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Teléfono' name='telefono' value='$stock->telefono'>";
            echo "   </div>";
            echo "<div class='flex items-center space-x-4'>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Dirección:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Calle' name='direccion' value='$stock->direccion'>";
            echo "   </div>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Número:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='numero' value='$stock->numero'>";
            echo "   </div>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Recogida:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='visita' value='$stock->visita'>";
            echo "   </div>";

            echo "</div>";
            echo " </div>";
            echo " <div class='pt-4 flex items-center space-x-4'>";
            echo "     <button type='submit' name='enviarUsuario' value='enviar' class='bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none'>Modificar</button>";
            echo " </div>";
            echo " </div>";
            echo "  </div>";
            echo "  </div>";
            echo " </div>";
            echo "</div>";
            echo "</form>";


            $stock = $resultado->fetch_object();
        }


        if ($error != null) {

            echo "<p>Error $error conectando a la base de datos: $conectar->connect_error</p>";
            exit();
        }
        $conectar->close();
    } else if ($tipo == "centros") {

        $resultado = $conectar->query('SELECT id, nombre, direccion, numero, cPostal, ciudad FROM centros');

        $stock = $resultado->fetch_object();
        
        echo "<div class='py-2 px-2 bg-gray-100 flex items-center space-x-4'>";
        echo "<button id='addCentro' class='bg-green-400 flex justify-center items-center w-md text-white px-4 py-2 rounded-md focus:outline-none'>Añadir</button>";
        echo "</div>";
        while ($stock != null) { 
            echo "<form action='config.php' method='post'>";
            echo "<div class='min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12'>";
            echo "<div class='relative py-3 sm:max-w-xl sm:mx-auto'>";
            echo "<div class='relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10'>";
            echo "<div class='max-w-md mx-auto'>";
            echo " <div class='flex items-center space-x-5'>";
            echo "  <div class='h-14 w-14 bg-purple-200 rounded-full flex flex-shrink-0 justify-center items-center text-purple-500 text-2xl font-mono'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9'/><path d='M9 22V12h6v10M2 10.6L12 2l10 8.6'/></svg></div>";
            echo "  <div class='block pl-2 font-semibold text-xl self-start text-gray-700'>";
            echo "    <h2 class='leading-relaxed'>$stock->nombre</h2>";
            echo "  </div>";
            echo "  </div>";
            echo "  <div class='divide-y divide-gray-200'>";
            echo "    <div class='py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7'>";
            echo "     <div class='flex flex-col'>";
            echo "      <label class='leading-loose'>Nombre:</label>";
            echo "      <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Nombre' name='nombre' value='$stock->nombre'>";
            echo "    </div>";

            echo "    <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Dirección:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Apellidos' name='direccion' value='$stock->direccion'>";
            echo "   </div>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Ciudad:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Ciudad' name='ciudad' value='$stock->ciudad'>";
            echo "   </div>";

            echo "<div class='flex items-center space-x-4'>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Número:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='numero' value='$stock->numero'>";
            echo "   </div>";

            echo "   <div class='flex flex-col'>";
            echo "     <label class='leading-loose'>Código Postal:</label>";
            echo "     <input type='text' class='px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600' placeholder='Número' name='cPostal' value='$stock->cPostal'>";
            echo "     <input type='hidden' name='id' value='$stock->id'>";
            echo "   </div>";

            echo "</div>";
            echo " </div>";
            echo " <div class='pt-4 flex items-center space-x-4'>";
            echo "     <button type='submit' name='enviarCentro' value='enviar' class='bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none'>Modificar</button>";
            echo " </div>";
            echo " </div>";
            echo "  </div>";
            echo "  </div>";
            echo " </div>";
            echo "</div>";
            echo "</form>";


            $stock = $resultado->fetch_object();
        }
    } else {

        $resultado = $conectar->query('SELECT id, nombre, apellidos, telefono, visita, direccion, numero FROM usuarios');

        $stock = $resultado->fetch_object();
        echo "<div class='container mx-auto px-4 sm:px-8'>";
        echo "<div class='py-8'>";
        echo "<div>";
        echo "</div>";
        echo "<div class='-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto'>";
        echo "<div class='inline-block min-w-full shadow rounded-lg overflow-hidden'>";
        echo "<table class='min-w-full leading-normal'>";

        echo "<thead>";
        echo "<tr>";
        echo "<th
                                class='px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider'>Nombre";
        echo "</th>";
        echo "<th
                                class='px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider'>Direccion";
        echo "</th>";
        echo "<th
                                class='px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider'>Teléfono";
        echo "</th>";
        echo "<th
                                class='px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider'>Visitar";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";
        while ($stock != null) {
            echo "<tbody>";
            echo "<tr>";

            if ($stock->visita == "SI") {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-green-100 text-sm w-2/5">';
            } else {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-red-100 text-sm w-2/5">';
            }
            echo "<div class='flex items-center'>";
            echo "<div class='flex-shrink-0 w-10 h-10 hidden sm:table-cell'>";

            echo "</div>";
            echo "<div class='ml-3'>";
            echo "<p class='text-gray-900 whitespace-no-wrap'>" . $stock->nombre . " " . $stock->apellidos . "</p>";
            echo "</p>";
            echo "</div>";
            echo "</div>";
            echo "</td>";
            if ($stock->visita == "SI") {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-green-100 text-sm w-2/5">';
            } else {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-red-100 text-sm w-2/5">';
            }
            echo "<p class='text-gray-900 whitespace-no-wrap text-center'>" . $stock->direccion . "</p>";
            echo "</td>";
            if ($stock->visita == "SI") {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-green-100 text-sm w-2/5">';
            } else {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-red-100 text-sm w-2/5">';
            }
            echo "<p class='text-gray-900 whitespace-no-wrap text-center'>" . $stock->telefono . "</p>";

            echo "</td>";
            if ($stock->visita == "SI") {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-green-100 text-sm w-2/5">';
            } else {
                echo '<td class="px-5 py-5 border-b border-gray-200 bg-red-100 text-sm w-2/5">';
            }
            echo "<div class='flex items-center float-right'>";
            echo "<div class='mr-3'>";
            echo "<form id='$stock->id' action='config.php' method='post'>";
            echo "<input type='hidden' name='id' value='$stock->id'>";
            echo "<p class='text-gray-900 whitespace-no-wrap text-right'>";
            echo "<select class='text-gray-900 whitespace-no-wrap text-right' name='visita' onchange='this.form.submit()'>";
            if ($stock->visita == "SI") {
              echo "<option value='SI'>SI</option><option value='NO'>NO</option></select> </p>";
            }else{
                echo "<option value='NO'>NO</option><option value='SI'>SI</option></select> </p>";
            }
            echo "<input style='display:none;' type='submit' name='recogerUsuario' value='Submit'>";
            echo "</form>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";



            $stock = $resultado->fetch_object();
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

if (isset($_POST['addUsuario'])) { 
    $usuario = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $numero = $_POST['numero'];
    $visita = $_POST['visita'];
    $id = $_POST['id'];
    $query = "INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `telefono`, `visita`, `direccion`, `numero`) VALUES (NULL, '$usuario', '$apellido', '$telefono', '$visita', '$direccion', '$numero')";
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;
    if ($error == null) {
        $resultado = $conectar->query($query);


        $conectar->close();
        echo '<script>alert("Se ha añadido el registro");window.location.replace("adminCentro.php");</script>';
    }
}


if (isset($_POST['delUsuario'])) { 

    $id = $_POST['id'];
    $query = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id";
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;
    if ($error == null) {
        $resultado = $conectar->query($query);


        $conectar->close();
        echo '<script>alert("Se ha eliminado el registro");window.location.replace("adminUsuarios.php");</script>';
    }
}


if (isset($_POST['addCentro'])) { 
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $numero = $_POST['numero'];
    $cPostal = $_POST['cPostal'];
    $query = "INSERT INTO `centros` (`id`, `nombre`, `direccion`, `numero`, `cPostal`, `ciudad`) VALUES (NULL, '$nombre', '$direccion', '$numero', '$cPostal', '$ciudad')";
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;
    if ($error == null) {
        $resultado = $conectar->query($query);


        $conectar->close();
        echo '<script>alert("Se ha añadido el registro");window.location.replace("adminUsuarios.php");</script>';
    }
}

if (isset($_POST['visita'])) { 
    $visita = $_POST['visita'];
    $id = $_POST['id'];
    $query = "UPDATE `usuarios` SET `visita` = '$visita' WHERE `usuarios`.`id` = $id";
    @ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
    $error = $conectar->connect_errno;
    if ($error == null) {
        $resultado = $conectar->query($query);


        $conectar->close();
        echo '<script>window.location.replace("userList.php");</script>';
    }
}



?>
