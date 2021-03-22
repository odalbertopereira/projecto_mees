<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Formulario de Adicionar Slides</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <form id="form_slides" name="form_slides" role="form" class="form-control" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="clegend_slid">Legenda </label> 
                                    <input type="text" id="clegend_slid" name="tlegend_slid" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="cimg_slid">Imagem <strong style="color: red;">*</strong></label> 
                                    <input type="file" id="cimg_slid" name="timg_slid[]" placeholder="" class="form-control" multiple="">
                                </div>
                            </div>
                            <div>
                                <input class="btn btn-sm btn-primary float-right m-t-n-xs" type="button" value="Guardar" id="btn_add_slid">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Tabela de Slides</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Imagem</th>
                                                <th>Legenda</th>
                                                <th>Estado</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $crud = new CRUD();
                                            $sql_selec = $crud->select('slide_id,legenda,fotos,Estado', 'tb_slides', '', array());
                                            while ($linha = $sql_selec->fetch(PDO::FETCH_ASSOC)) {
                                                $dados = $linha['slide_id'] . "||" . $linha['legenda'] . "||" . $linha['fotos'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $linha['slide_id']; ?></td>
                                                    <td><img src="Ficheiros/Slides/<?php echo $linha['fotos']; ?>" style="width: 100px; height: 50px; border-radius: 5px;"/></td>
                                                    <td><?php echo utf8_encode($linha['legenda']); ?></td>
                                                    <td>
                                                        <?php if ($linha['Estado'] == 'ACTIVO') { ?>
                                                            <span class="label label-primary">ACTIVO</span>
                                                        <?php } else { ?>
                                                            <span class="label label-danger">INACTIVO</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-outline btn-primary btn-circle" data-toggle="modal" data-target="#ModalEditarSlide" onclick="getSlideEdit('<?php echo $dados; ?>')" type="button" title="Editar"><i class="fa fa-edit"></i></a>
                                                        <?php if ($linha['Estado'] == 'ACTIVO') { ?>
                                                            <a class="btn btn-outline btn-dark btn-circle" type="button" title="Inactivar" onclick="update_estado_slide('<?php echo base64_encode($linha['slide_id']); ?>');"><i class="fa fa-check"></i></a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-outline btn-success btn-circle" type="button" title="Activar" onclick="update_estado_slide('<?php echo base64_encode($linha['slide_id']); ?>');"><i class="fa fa-check"></i></a>
                                                        <?php } ?>
                                                            <a class="btn btn-outline btn-danger btn-circle" title="Eliminar" onclick="delete_slide('<?php echo base64_encode($linha['slide_id']); ?>')"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

