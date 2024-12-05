<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">listado de Proveedores
                        <a href="<?php echo BASE_URL;?>nueva-persona">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus"></i> Agregar Nuevo Proveedor
                        </button>
                        </a>
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <div class="card card-primary m-2">
        <div class="card-header">
            <h3 class="card-title">Proveedores</h3>

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
            <th>nro_identidad</th>
            <th>razon_social</th>
            <th>telefono</th>
            <th>correo</th>
            <th>departamento</th>
            <th>provincia</th>
            <th>distrito</th>
            <th>cod_postal</th>
            <th>direccion</th>
            <th>rol</th>
            
            <th>Acciones</th>
           </tr>
        </thead>
        <tbody id="tbl_usuario" style="font-family: 'Times New Roman', Times, serif;">
            
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_personas.js"></script>
</div>
</div>