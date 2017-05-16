<?php  
 require_once 'Views/modules/ventas/conexion.php';
?>
  <div class="modal fade bd-example-modal-lg" id="productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <!--     <span aria-hidden="true">&times;</span> -->
          </button>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-list"> </i> Nuevo Producto</li>
          </ol>
        </div>
        <div class="modal-body">

          <form method="post">
          <div class="row">
            <div class="col-md-6">  
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre Producto:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombreproducto" required="">
              </div>
            </div>
               <div class="col-md-6">  
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Categoria Producto:</label>
      <select class="form-control chosen-select" id="idcategoria" name="idcategoria">
           <option value="0"  required="" >SELECCIONA UNA CATEGORIA</option>
          <?php             
            $consulta = $conexion->query("SELECT * FROM categorias order by nombrecategoria asc");
            while ($fila=$consulta->fetch(PDO::FETCH_OBJ)) {                    
            echo '<option value="'.$fila->idcategoria.'">'.ucwords($fila->nombrecategoria).  '</option> ';
      }?>
    </select>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> 
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Precio Producto :</label>
              <input type="text" class="form-control" id="recipient-name" name="precio" required="">
            </div>
            </div>
            <div class="col-md-6"> 
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Usuario del Sistema:</label>
              <input type="text" class="form-control" id="recipient-name"   value="<?php echo strtoupper($_SESSION['nombreusuario']); ?>" readonly="">
            </div>
          
            </div>
            <?php   $cons = $conexion->query("SELECT * FROM usuarios "); ?>
            <?php foreach ($cons as $key ): ?>
              
            <input type="hidden" name="idusuario" value="<?php echo $key['idusuario']; ?>">
            <?php endforeach ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="agregarProductos">Agregar Productos</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  
$prod = new ProductosController();
$prod->agregarProductosController();
?>