<?php include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
        Datos del Empleado
    </div>
    <div class="card-body">

       <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="primernombre" class="form-label">Nombre</label>
          <input type="text"
            class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="">
            <label for="primernombre" class="form-label"></label>
          
          
        </div>
        <div class="mb-3">
          <label for="apellidos" class="form-label">Apellidos</label>
          <input type="text"
            class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="">
            <label for="apellidos" class="form-label"></label>

          
        </div>

        <div class="mb-3">
          <label for="foto" class="form-label">Foto:</label>
          <input type="file"
            class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="">
          
        </div>

        <div class="mb-3">
          <label for="cv" class="form-label">Currículum:</label>
          <input type="file"
            class="form-control" name="foto" id="cv" aria-describedby="helpId" placeholder="">
          
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Puesto:</label>
            <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                <option selected>Elige Uno</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>

<div class="mb-3">
  <label for="" class="form-label">Fecha de Ingreso:</label>
  <input type="date"
    class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
  
</div>

<button type="submit" class="btn btn-success">Agregar Registro</button>
<a name="" id="" class="btn btn-primary" href="index.php">Cancelar</a>

       </form> 
    </div>
   
</div>

<?php include("../../templates/footer.php");?>