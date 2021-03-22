<div class="modal inmodal" id="ModalEditarNoticia" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Editar Noticias</h4>
            </div>
            <form id="formeditarnoticia" name="formeditarnoticia" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="ctituloedit">Titulo <strong style="color: red;">*</strong></label> 
                                <input type="text" id="ctituloedit" name="ttituloedit" placeholder="Digite um Titulo" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 b-r">
                            <div class="form-group">
                                <label for="cimg_ant">Imagem Antiga</label> 
                                <input type="text" id="cimg_ant" name="timg_ant" class="form-control" value="" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="canexoedit_ant">Anexo Antigo</label> 
                                <input type="text" id="canexoedit_ant" name="tanexoedit_ant" class="form-control" value="" readonly="">
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="cnewimgedit">Nova Imagem</label> 
                                <input type="file" id="cnewimgedit" name="tnewimgedit" placeholder="Adicionar Anexo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="canexoedit">Anexo</label> 
                                <input type="file" id="canexoedit" name="tanexoedit" placeholder="Adicionar Anexo" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="cdescredit">Descrição <strong style="color: red;">*</strong></label> 
                                <textarea id="cdescredit" rows="10" name="tdescredit" placeholder="Digite uma Descrição" class="form-control"></textarea>
                            </div>
                        </div>
                        <input id="reg_id" name="reg_id" type="hidden" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btn_edit_noticia">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal inmodal" id="ModalEditarUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Editar Usuário</h4>
            </div>
            <form id="formeditaruser" name="formeditaruser" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="cusernameedit">User Name <strong style="color: red;">*</strong></label> 
                                <input type="text" id="cusernameedit" name="tusernameedit" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 b-r">
                            <div class="form-group">
                                <label for="cemailedit">Email <strong style="color: red;">*</strong></label> 
                                <input type="email" id="cemailedit" name="temailedit" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cemailaltedit">Email Alernativo</label> 
                                <input type="email" id="cemailaltedit" name="temailaltedit" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cfotoedit">Foto Antiga</label> 
                                <input type="text" id="cfotoedit" name="tfotoedit" class="form-control" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="cnewfotoedit">Nova Foto</label> 
                                <input type="file" id="cnewfotoedit" name="tnewfotoedit" placeholder="Adicionar Anexo" class="form-control">
                            </div>
                        </div>
                        <input id="regf_id" name="regf_id" type="hidden" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btn_edit_user">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal inmodal" id="ModalEditarVideo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Editar Video</h4>
            </div>
            <form id="formeditarvideo" name="formeditarvideo" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="clegendedit">Legenda <strong style="color: red;">*</strong></label> 
                                <input type="text" id="clegendedit" name="tlegendedit" placeholder="" class="form-control">
                            </div>
                        </div>
<!--                        <div class="col-lg-6 b-r">
                            <div class="form-group">
                                <label for="cimg_ant_edit">Imagem Antiga <strong style="color: red;">*</strong></label> 
                                <input type="text" id="cimg_ant_edit" name="timg_ant_edit" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cnew_imgedit">Imagem Nova</label> 
                                <input type="file" id="cnew_imgedit" name="tnew_imgedit" placeholder="" class="form-control">
                            </div>
                        </div>-->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="clink_edit">Link <strong style="color: red;">*</strong></label> 
                                <input type="url" id="clink_edit" name="tlink_edit" class="form-control" >
                            </div>
                        </div>
                        <input id="reh_id" name="reh_id" type="hidden" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btn_edit_video">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal inmodal" id="ModalEditarSlide" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Editar Slide</h4>
            </div>
            <form id="formeditarslide" name="formeditarslide" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="clegend_slidedit">Legenda </label> 
                                <input type="text" id="clegend_slidedit" name="tlegend_slidedit" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 b-r">
                            <div class="form-group">
                                <label for="cimg_slidedit">Imagem Antiga<strong style="color: red;">*</strong></label> 
                                <input type="text" id="cimg_slidedit" name="timg_slidedit" placeholder="" class="form-control" readonly="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cnew_imgslidedit">Imagem Nova</label> 
                                <input type="file" id="cnew_imgslidedit" name="tnew_imgslidedit" placeholder="" class="form-control">
                            </div>
                        </div>
                        <input id="rehs_id" name="rehs_id" type="hidden" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btn_edit_slide">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
