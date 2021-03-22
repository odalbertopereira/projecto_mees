<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Formulario de Adicionar Usuário</h5>
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
                        <form id="form_user" name="form_user" role="form" class="form-control" method="POST" enctype="multipart/form-data" action="javascript:void(0)">

                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="cusername">User Name <strong style="color: red;">*</strong></label> 
                                    <input type="text" id="cusername" name="tusername" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="cemail">Email <strong style="color: red;">*</strong></label> 
                                    <input type="email" id="cemail" rows="5" name="temail" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="cemailalt">Email Alernativo</label> 
                                    <input id="cemailalt" name="temailalt" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 b-r">
                                <div class="form-group">
                                    <label for="cfoto_user">Foto <strong style="color: red;">*</strong></label> 
                                    <input type="file" id="cfoto_user" name="tfoto_user" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div>
                                <input class="btn btn-sm btn-primary float-right m-t-n-xs" type="button" value="Guardar" id="btn_add_user">
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
                                <h5>Tabela de Usuários</h5>
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
                                                <th>User Foto</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Email Alternativo</th>
                                                <th>Estado</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $crud = new CRUD();
                                            $sql_selec = $crud->select('user_id,user_name,user_email,user_email_alter,user_foto,user_estado', 'tb_usuario', '', array());
                                            while ($linha = $sql_selec->fetch(PDO::FETCH_ASSOC)) {
                                                $dados = $linha['user_id'] . "||" . $linha['user_name'] . "||" . $linha['user_email'] . "||" . $linha['user_email_alter']. "||" . $linha['user_foto'];
                                                ?>
                                                <tr>
                                                    <td style="width: 5%;"><?php echo $linha['user_id'] ?></td>
                                                    <td style="width: 10%;"><img src="Ficheiros/PhotoUser/<?php echo $linha['user_foto'] ?>" style="width: 50px; height: 50px; border-radius: 25px;"/></td>
                                                    <td style="width: 20%;"><?php echo utf8_encode($linha['user_name']); ?></td>
                                                    <td style="width: 15%;"><?php echo $linha['user_email'] ?></td>
                                                    <td style="width: 20%;"><?php echo $linha['user_email_alter'] ?></td>
                                                    <td style="width: 10%;">
                                                        <?php if ($linha['user_estado'] == 'ACTIVO') { ?>
                                                            <span class="label label-primary">ACTIVO</span>
                                                        <?php } else { ?>
                                                            <span class="label label-danger">INACTIVO</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a class="btn btn-outline btn-primary btn-circle" data-toggle="modal" data-target="#ModalEditarUser" onclick="getUserEdit('<?php echo $dados; ?>')" type="button" title="Editar"><i class="fa fa-edit"></i></a>
                                                        <?php if ($linha['user_estado'] == 'ACTIVO') { ?>
                                                            <a class="btn btn-outline btn-dark btn-circle" type="button" title="Inactivar" onclick="update_estado_user('<?php echo base64_encode($linha['user_id']); ?>');"><i class="fa fa-check"></i></a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-outline btn-success btn-circle" type="button" title="Activar" onclick="update_estado_user('<?php echo base64_encode($linha['user_id']); ?>');"><i class="fa fa-check"></i></a>
                                                        <?php } ?>
                                                            <a class="btn btn-outline btn-warning btn-circle" title="Voltar a senha padrão" onclick="update_estado_user_senhapdr('<?php echo base64_encode($linha['user_id']); ?>')"><i class="fa fa-asterisk"></i></a>
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