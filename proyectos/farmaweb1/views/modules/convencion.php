<?php include "menu.php"; ?>
<style type="text/css">
  .banner{
  padding-top: 150px;
    padding-left: 200px;
    
}

</style>


<section class="text-center my-5">
  
  <div class="banner">
    <center>
     <?php
        $farma = new CrudController();
        $farma -> editarConvencionController();
        $farma -> actualizarConvencionController();
        $farma -> insertarConvencionController();
        
       
     ?>
    </center>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModalC" >Nueva Convencion</button>
      <center>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="80%" style="color: black;">
      <thead>
          <tr >  
            <th><B>ID</B></th>
            <th><B>CODIGO</B></th>
            <th><B>DESCRIPCION</B></th>
            <th><B></B></th>
            <th><B></B></th>
          </tr>

      </thead>
          
          <tbody>
                        
            <?php

              $farma = new CrudController();
              $farma -> vistaConvencionController();
              $farma -> borrarConvencionController();   
            ?>

          </tbody>

        </table>

      </center>
  </div> 


</section> 

<div class="modal fade" id="myModalC" role="dialog">
  <div class="modal-dialog">
          <!-- Modal content-->
    <div class="modal-content">
                                
      <div class="modal-header bg-purplepage" style="color:#FFFFFF;">
             <h5><strong>Crear Convencion</strong></h5> 
            </div>
              
    <div class="modal-body">
              
      <form method="POST">
    <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right"><font face="Candara" size="4" class="card-text" >Codigo:</font></label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nombreCon" required>
            </div>
        </div>

         <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right"><font face="Candara" size="4" class="card-text" >Descripción:</font></label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="descripcionCon" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                 <button type="submit" class="botoncomi botonescomi1">Crear convencion</button>
            </div>
        </div>
      </form>

    </div>

            <div class="modal-footer">
              <button type="button" class="botonbol botonesbol" data-dismiss="modal">Cerrar</button>
            </div>
    </div>  
  </div>
</div>

<script type="text/javascript">

  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script> 
