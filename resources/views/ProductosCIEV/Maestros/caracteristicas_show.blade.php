@extends('layouts.dashboard')

@section('page_title', 'Maestros (Caracteristicas)')

@section('module_title', 'Caracteristicas')

@section('subtitle', 'Es la máxima particularización de las lineas, con ellas se da un detalle mayor de las piezas.')

@section('breadcrumbs')
    {{ Breadcrumbs::render('Prod_ciev_maestros_caracteristicas') }}
@stop

@section('content')
    @inject('Lineas','App\Services\Lineas')
    <div class="col-lg-4">
        <div class="form-group">
            <a class="btn btn-primary" href="javascript:void(0)" id="CrearCaracteristica">Nuevo</a>
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
                                    <th>Linea</th>
                                    <th>Sublinea</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
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

    <div class="modal fade" id="caracteristicamodal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="caracteristicaForm" name="caracteristicaForm" class="form-horizontal">
                        <input type="hidden" name="caracteristica_id" id="caracteristica_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Linea:</label>
                            <div class="col-sm-12">
                                <select class="custom-select" name="car_lineas_id" id="car_lineas_id">
                                    @foreach ( $Lineas->get() as $index => $Linea)
                                        <option value="{{ $index }}" {{ old('car_lineas_id') == $index ? 'selected' : ''}}>
                                            {{ $Linea }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Sublinea:</label>
                            <div class="col-sm-12">
                                <select class="custom-select" name="car_sublineas_id" id="car_sublineas_id"></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Codigo de Caracteristica:</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="cod" name="cod" placeholder="Enter Name" value="" maxlength="50" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Nombre de Caracteristica:</label>
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
        <script type="text/javascript" src="/JsGlobal/Codificador/Maestros/Caracteristicas.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    @endpush
@endsection
