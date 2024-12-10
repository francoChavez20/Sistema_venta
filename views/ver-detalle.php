<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">lista de ventas
                        <a href="<?php echo BASE_URL;?>nueva-venta">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus"></i> Agregar Nueva venta
                        </button>
                        </a>
                    </h1>
                </div>

            </div>
        </div>
    </div>
    <div class="card card-primary m-2">
        <div class="card-header">
            <h3 class="card-title">Ventas</h3>

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
            <th>fecha y hora</th>
            <th>cliente</th>
            <th>vendedor</th>
            <th>Acciones</th>
           </tr>
        </thead>
        <tbody id="tbl_ventas" style="font-family: 'Times New Roman', Times, serif;">
            
        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_venta.js"></script>
</div>
</div>