<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Formulario de Adicionar Notícias</h5>
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
                        <form id="form_noticia" name="form_noticia" role="form" class="form-control" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="col-sm-12 b-r">
                                        <label for="ctitulo">Titulo <strong style="color: red;">*</strong></label> 
                                        <input type="text" id="ctitulo" name="ttitulo" placeholder="Digite um Titulo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 b-r">
                                        <label for="cdescr">Descrição <strong style="color: red;">*</strong></label> 
                                        <textarea id="cdescr" rows="5" name="tdescr" placeholder="Digite uma Descrição" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 b-r">
                                        <label for="cimg">Imagem <strong style="color: red;">*</strong></label> 
                                        <input type="file" id="cimg" name="timg" placeholder="Adicionar Anexo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 b-r">
                                        <label for="canexo">Anexo</label> 
                                        <input type="file" id="canexo" name="tanexo" placeholder="Adicionar Anexo" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <input class="btn btn-sm btn-primary float-right m-t-n-xs" type="button" value="Guardar" id="btn_add_noticia">
                                </div>
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
                                <h5>Tabelas de Notícias</h5>
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
                                                <th>Titulo</th>
                                                <th>Descrição</th>
                                                <th>Regitrado Por</th>
                                                <th>Estado</th>
                                                <th>Reg em</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $crud = new CRUD();
                                            $sql_selec = $crud->select('noticias_id,assunto,descricao,caminho,anexo,fk_user_reg,Estado,dtReg', 'tb_noticias', '', array());
                                            while ($linha = $sql_selec->fetch(PDO::FETCH_ASSOC)) {
                                                $cod = base64_encode($linha['noticias_id']);
                                                $nomeuser = $crud->retornar_nome_userlog($linha['fk_user_reg']);
                                                $data = $linha['noticias_id'] . "||" . $linha['assunto'] . "||" . $linha['descricao'] . "||" . $linha['caminho'] . "||" . $linha['anexo'];
                                                ?>
                                                <tr>
                                                    <td style="width: 5%;"><?php echo $linha['noticias_id'] ?></td>
                                                    <td style="width: 10%;"><?php echo $linha['assunto'] ?></td>
                                                    <td style="width: 40%;"><textarea rows="5" class="form-control"><?php echo $linha['descricao'] ?></textarea></td>
                                                    <td style="width: 10%;"><?php echo $nomeuser;  ?></td>
                                                    <td style="width: 10%;">
                                                        <?php if ($linha['Estado'] == 'LIBERADO') { ?>
                                                            <span class="label label-primary">ACTIVO</span>
                                                        <?php } else { ?>
                                                            <span class="label label-danger">INACTIVO</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td style="width: 10%;"><?php echo $linha['dtReg'] ?></td>
                                                    <td style="width: 15%;">
                                                        <a class="btn btn-outline btn-primary btn-circle" data-toggle="modal" data-target="#ModalEditarNoticia" onclick="getNoticiaEdit('<?php echo $data; ?>');" type="button" title="Editar"><i class="fa fa-edit"></i></a>
                                                        <?php if(isset($linha['caminho']) && $linha['caminho'] !=NULL){ ?>
                                                        <a class="btn btn-outline btn-info btn-circle" href="?pag=seeAnexo&codigo=<?php echo $cod; ?>" title="Abrir Anexo" target="_blanck"><i class="fa fa-upload"></i></a>
                                                        <?php } ?>
                                                        <?php if ($linha['Estado'] == 'LIBERADO') { ?>
                                                            <a class="btn btn-outline btn-dark btn-circle" type="button" title="Retirar do Ar" onclick="update_estado_noticia('<?php echo $cod; ?>')"><i class="fa fa-check"></i></a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-outline btn-success btn-circle" type="button" title="Voltar ao Ar" onclick="update_estado_noticia('<?php echo $cod; ?>')"><i class="fa fa-check"></i></a>
                                                        <?php } ?>
                                                            <a class="btn btn-outline btn-danger btn-circle" title="Eliminar" onclick="delete_noticia('<?php echo base64_encode($linha['noticias_id']); ?>')"><i class="fa fa-trash-o"></i></a>
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

