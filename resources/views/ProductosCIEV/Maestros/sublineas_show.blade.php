@extends('layouts.dashboard')

@section('page_title', 'Maestros (Sublineas)')

@section('module_title', 'Sublineas')

@section('subtitle', 'División de las lineas que permiten granularizar las características de las piezas.')

@section('breadcrumbs')
    {{ Breadcrumbs::render('Prod_ciev_maestros_sublineas') }}
@stop

@section('content')
    @inject('TipoProductos','App\Services\TipoProductos')
    <div class="col-lg-4">
        <div class="form-group">
            <a class="btn btn-primary" href="javascript:void(0)" id="CrearSubLineas">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped first data-table">
                            <thead>
                                <tr>
                                    <th>Tipo de Producto</th>
                                    <th>Linea</th>
                                    <th>Codigo</th>
                                    <th>Nombre Sublinea</th>
                                    <th>Comentarios</th>
                                    <th>Ultima Actualizacion</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sublineamodal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="sublineaForm" name="sublineaForm" class="form-horizontal">
                        <input type="hidden" name="sublinea_id" id="sublinea_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Tipo Producto:</label>
                            <div class="col-sm-12">
                                <select class="custom-select" name="tipoproductos_id" id="tipoproductos_id">
                                    @foreach( $TipoProductos->get() as $index => $TipoProducto)
                                        <option value="{{ $index }}" {{ old('tipoproductos_id') == $index ? 'selected' : ''}}>
                                            {{ $TipoProducto }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Linea:</label>
                            <div class="col-sm-12">
                                <select class="custom-select" name="lineas_id" id="lineas_id"></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Codigo de Sublinea:</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="cod" name="cod" placeholder="Enter Name" value="" maxlength="50" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Nombre de Sublinea:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Abreviatura:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Enter Name" value="" maxlength="50" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Comentarios:</label>
                            <div class="col-sm-12">
                                <textarea id="coments" name="coments" required="" placeholder="Enter Details" class="form-control"> </textarea>
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="Crear">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('javascript')
        <script type="text/javascript" src="/JsGlobal/Codificador/Maestros/Sublineas.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    @endpush
@endsection
