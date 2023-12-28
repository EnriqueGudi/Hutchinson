<div id="display_ubicaciones" class="container" style="display:none">
    <center><h5 class="mt-4">Ubicación de lugares de la empresa</h5></center>
    <hr>

    <button class="btn btn-primary mb-1" type="button" id="add_ubicacion" data-bs-toggle="modal" data-bs-target="#modal_ubicacion_nueva"><i class="bi bi-plus-lg"></i> Agregar Ubicación</button>
    <div class="card">
        <h5 class="card-header">Lista de Ubicaciones</h5>
        <div class="card-body">
            <button class="btn btn-danger mb-1" type="button" id="delete_ubi" style="display:none;"><i class="bi bi-plus-lg"></i> Eliminar Ubicación</button>
            
            <div class="row mt-2">
                <table id="table_ubicaciones">
                <thead>
                    <tr>
                        <th>Organización</th>
                        <th>Area</th>
                        <th>descripción</th>
                    </tr>
                </thead>
                </table>
            </div>

        </div>
    </div>

    <!-- Modal ubicacion nueva -->
    <div class="modal fade" id="modal_ubicacion_nueva" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Captura de Nueva Ubicación</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row div_form">
                    <div class="col-md-12">
                        <form  id="formuUbicaciones">
                            @csrf
                            <div class="row div_captura">
                                <div class="col-md-4 cont-input">
                                    <div class="form-group">
                                        <label for="area_nueva"> Area </label>
                                        <select class="form-control" name="area_nueva" id="area_nueva">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 cont-input">
                                    <div class="form-group">
                                        <label for="subarea_nueva"> Subarea </label>
                                        <input type="text" name="subarea_nueva" id="subarea_nueva" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 cont-input">
                                    <div class="form-group">
                                        <label for="des_sub_nueva"> Descripción subarea </label>
                                        <input type="text" name="des_sub_nueva" id="des_sub_nueva" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 cont-input">
                                    <div class="form-group">
                                        <label for="url_sub_nueva"> URL Google Maps </label>
                                        <input type="text" name="url_sub_nueva" id="url_sub_nueva" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button id="save_ubicacion" type="button" class="btn btn-primary">Guardar</button>
            </div>
            </div>
        </div>
    </div>


        <!-- Modal ubicaciones -->
        <div class="modal fade" id="modal_ubi_per" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubicación</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row div_form">
                            <div class="col-md-12">
                                <center><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d913.0486312939049!2d-102.17898973043947!3d17.954773274733014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDU3JzE3LjIiTiAxMDLCsDEwJzQyLjEiVw!5e1!3m2!1ses-419!2smx!4v1702276112457!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
                            </div>
                        </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

</div>

<script src={{asset('js/ubicaciones/link.js')}}></script>
<script src={{asset('js/ubicaciones/init.js?v=2')}}></script>
<script src={{asset('js/ubicaciones/dao.js?v=1')}}></script>
<script src={{asset('js/ubicaciones/function.js?v=1')}}></script>