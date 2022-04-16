<div id="modalnadminmntcurso" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document" aria-labelledby="myLargeModalLabel">
        <divn class="modal-content">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nuevo Registro</h6>
            </div>
            <div class="modal-body">
                <form method="post" id="mnt_cursos_form">
                    <input type="hidden" name="id_curso" id="id_curso">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Categoria<span class="tx-danger">*</span></label>
                            <select class="form-control select2" style="width:100%" id="id_categoria" name="id_categoria" data-placeholder="Seleccionar">
                                <option label="Seleccione"></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nombre<span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="nombre_curso" type="text" name="nombre_curso" require>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Descripción<span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="descripcion_curso" type="text" name="descripcion_curso" require>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Fin<span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="fecha_final_curso" type="date" name="fecha_final_curso" require>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Incio<span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="fecha_inicio_curso" type="date" name="fecha_inicio_curso" require>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Instructor<span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="id_instrutor" type="text" name="id_instrutor" require>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium"><i class="fa fa-check"></i>Guardar</button>
                <button type="reset" class="btn btn-outline-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" arial-label="Close" arial-hidden="true" data-dismiss="modal"><i class="fa fa-close"></i>Cancelar</button>
            </div>
        </divn>
    </div>
</div>
</div>