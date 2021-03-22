<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Formulario de Adicionar Videos Aulas</h5>
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
                        <form id="form_video" name="form_video" role="form" class="form-control" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="clegenda">Legenda <strong style="color: red;">*</strong></label> 
                                    <input type="text" id="clegenda" name="tlegenda" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="clink_video">Link do video <strong style="color: red;">*</strong></label> 
                                    <input type="url" id="clink_video" name="tlink_video" placeholder="" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="clink_video">Classes <strong style="color: red;">*</strong></label> 
                                    <select id="selclasse" name="selclasse" class="form-control">
                                        <option value="">Seleciona uma Classe?</option>
                                        <option value="Pré-Escolar">Pré-Escolar</option>
                                        <option value="1ª e 2ª Classe">1ª e 2ª Classe</option>
                                        <option value="3ª e 4ª Classe">3ª e 4ª Classe</option>
                                        <option value="5ª e 6ª Classe">5ª e 6ª Classe</option>
                                        <option value="7ª e 8ª Classe">7ª e 8ª Classe</option>
                                        <option value="9ª Classe">9ª Classe</option>
                                        <option value="10ª Classe">10ª Classe</option>
                                        <option value="11ª Classe">11ª Classe</option>
                                        <option value="12ª Classe">12ª Classe</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <input class="btn btn-sm btn-primary float-right m-t-n-xs" type="button" value="Guardar" id="btn_add_video">
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
                                <h5>Tabela das Videos Aulas</h5>
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
                                                <th>Legenda</th>
                                                <th>Link</th>
                                                <th>Clase</th>
                                                <th>Registrado por</th>
                                                <th>Estado</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $crud = new CRUD();
                                            $sql_selec = $crud->select('id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse', 'tb_videos_aulas', '', array());
                                            while ($linha = $sql_selec->fetch(PDO::FETCH_ASSOC)) {
                                                $nomeuser = $crud->retornar_nome_userlog($linha['user_id']);
                                                $dados = $linha['id_video'] . "||" . $linha['legenda_v'] . "||" . $linha['caminho'] . "||" . $linha['link_v'];
                                                ?>
                                                <tr>
                                                    <td style="width: 5%;"><?php echo $linha['id_video']; ?></td>
                                                    <td style="width: 20%;"><?php echo $linha['legenda_v']; ?></td>
                                                    <td style="width: 15%;"><?php echo $linha['link_v']; ?></td>
                                                    <td style="width: 15%;"><?php echo utf8_encode($linha['selclasse']); ?></td>
                                                    <td style="width: 20%;"><?php echo utf8_encode($nomeuser); ?></td>
                                                    <td style="width: 10%;">
                                                        <?php if ($linha['estado'] == 'ACTIVO') { ?>
                                                            <span class="label label-primary">ACTIVO</span>
                                                        <?php } else { ?>
                                                            <span class="label label-danger">INACTIVO</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a class="btn btn-outline btn-primary btn-circle" data-toggle="modal" data-target="#ModalEditarVideo" onclick="getVideoEdit('<?php echo $dados; ?>');" type="button" title="Editar"><i class="fa fa-edit"></i></a>
                                                        <?php if ($linha['estado'] == 'ACTIVO') { ?>
                                                            <a class="btn btn-outline btn-dark btn-circle" type="button" title="Inactivar" onclick="update_estado_video('<?php echo base64_encode($linha['id_video']); ?>');"><i class="fa fa-check"></i></a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-outline btn-success btn-circle" type="button" title="Activar" onclick="update_estado_video('<?php echo base64_encode($linha['id_video']); ?>');"><i class="fa fa-check"></i></a>
                                                        <?php } ?>
                                                        <a class="btn btn-outline btn-danger btn-circle" title="Eliminar" onclick="delete_video('<?php echo base64_encode($linha['id_video']); ?>');"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            unset($crud);
                                            ?>
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