<?=
session_start();
require_once("../daos/userDao.php");
$result = getUser($_SESSION["email"]);
if($result->num_rows > 0){
  $row = $result->fetch_assoc();
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="edit_user.php"> <?= $row["name"] ?> </a>
            <a class="navbar-brand" href="http://www.matematicas.uady.mx/static/">FMAT</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../views/index.php">Inicio</a>
                </li>
                <li>
                    <a href="../views/devices.php">Dispositivos</a>
                </li>
                <li>
                  <a href="#"></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraciones <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="edit_user.php">Editar mi información</a>
                        </li>
                        <li>
                            <a href="../controllers/logout.php">Iniciar Sesión/Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
