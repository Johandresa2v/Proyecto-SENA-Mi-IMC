<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE dni='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Editar Alumno</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--Mis estilos de CSS-->
        <link rel="stylesheet" href="miestilo.css">
        <!--Iconos footer-->
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <!--Iconos Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <link href="css/style.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>


    </head>
    <body >
        <!--Video de fondo-->
        <div class="video">
            <video onloadedmetadata="this.muted=true" autoplay loop>
                <source src="../APPPRUEBAS/videos/WHITE.mp4">
            </video>
        </div>
    
        <!--Menu superior-->
    <header>
        <div class="containernav">
            <div class="navbar">
                <img src="../img/logo.gif" class="logo"><h2>MI IMC</h2> 
                
                <nav>
                    <ul id="menuList">
                        <h3>Editar alumno</h3>
                        <li><a class="btn btn-primary" href="../APPPRUEBAS/ADMIN.PHP">Volver</a></li>
                    </ul>
                </nav>
                <img src="../imgapp/menu.png" class="menu-icon"  onclick="togglemenu()">
            </div>
        </div>   
    </header>


    <div class="container mt-5 justify-content-center" >
        <form action="update.php" method="POST">                               
            <h3>DNI</h3> <input type="hidden" name="dni" value="<?php echo $row['dni']  ?>">                               
            <h5></h5><input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
            <h6>Nombres</h6><input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
            <h6>Apellidos</h6><input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
            <h6>Altura</h6><input type="text" class="form-control mb-3" name="altura" placeholder="Altura" value="<?php echo $row['altura']  ?>">
            <h6>Peso</h6><input type="text" class="form-control mb-3" name="peso" placeholder="Peso" value="<?php echo $row['peso']  ?>">
            <h6>Sexo</h6><input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo" value="<?php echo $row['sexo']  ?>">
            <h6>Edad</h6><input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
            <h6>Grado</h6><input type="text" class="form-control mb-3" name="grado" placeholder="Grado" value="<?php echo $row['grado']  ?>">
            <h6>Imc</h6><input type="text" class="form-control mb-3" name="imc" placeholder="Imc" value="<?php echo $row['imc']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>            
    </div>
    <br>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                <a href="#">
                        <img src="../imgapp/LOGO JOHAN.png" alt="JOHAN DEVELOPER">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>TODO SOBRE JOHAN DEVELOPER</h2>
                <p>Si te gusto esta pagina web comunícate por aquí:</p>
                <p><a style="text-decoration: none;" href="mailto:jhoandres.a2v@gmail.com?Subject=Interesado%20en%20sus%20servicios" class="fa fa-envelope iconosblancos"></a>
                    &nbsp; jhoandres.a2v@gmail.com
                </p>
                <p><a style="text-decoration: none;" href="#" class="fa fa-phone iconosblancos"></a>
                    &nbsp;+57 3196988077
                </p>
            </div>
            <div class="box">
                <h2>SÍGUEME</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/jhoanandres.almeidavelandia/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/johandres.v/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                    <a href="https://wa.me/573196988077" class="fa fa-whatsapp"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Johan Almeida</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    

                

    </body>
</html>