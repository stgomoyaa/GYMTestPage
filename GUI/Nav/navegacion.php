<div class="nav-bg">
    <nav class="navegacion-principal contenedor">

    <?php
                if (isset($_SESSION['usuario'])) {
                    echo '
                    <a href="../../../PROYECTO/index.php">Inicio</a>
                    <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                    <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                    <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                    <a href="../../../PROYECTO/GUI/Membresia/membresia.php">Membresía</a>
                    <a href="../../../PROYECTO/CTL/logout.php">Cerrar Sesión</a>
                ';
                } elseif(isset($_SESSION['registrado'])){
                    echo '
                    <a href="../../../PROYECTO/index.php">Inicio</a>
                    <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                    <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                    <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                    <a href="../../../PROYECTO/GUI/Login/login.php">Iniciar Sesión</a>
                ';
                }else{
                    echo '
                    <a href="../../../PROYECTO/index.php">Inicio</a>
                    <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                    <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                    <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                    <a href="../../../PROYECTO/GUI/Login/login.php">Iniciar Sesión</a>
                    <a href="../../../PROYECTO/GUI/Register/register.php">Registrate</a>
                ';
                }
                ?>
    </nav>
</div>

<hr>