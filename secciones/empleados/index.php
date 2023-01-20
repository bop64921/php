<?php include("../../templates/header.php");?>

<br/>
<h3>Empleados</h3>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">
            Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre y Apellidos</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Inscripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class="">
                        <td scope="row">David Bernal</td>
                        <td>David.jpg</td>
                        <td>CV.txt</td>
                        <td>Programador</td>
                        <td>14/11/1990</td>
                        <td>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a> -
                        <a name="" id="" class="btn btn-secondary" href="#" role="button">Editar</a> - 
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>
<?php include("../../templates/footer.php");?>