<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">listado de Productos
                        <a href="<?php echo BASE_URL;?>nuevo-producto">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus"></i> Agregar Nuevo Producto
                        </button>
                        </a>
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <div class="card card-primary m-2">
        <div class="card-header">
            <h3 class="card-title">Productos</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <div class="card-body" style="display: block;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
           <tr>
            <th>Nro</th>
            <th>codigo</th>
            <th >Nombre</th>
            <th>stock</th>
            <th>categoria</th>
            <th>proveedor</th>
            <th>Acciones</th>
           </tr>
        </thead>
        <tbody id="tbl_producto" style="font-family: 'Times New Roman', Times, serif;" style="font-family: 'Times New Roman', Times, serif;">
            
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>
</div>
</div>