<?php 
include './link_calendar.php';
?>
<div id="wrapper">
    <div class="wrapper wrapper-content">
        <div class="page-wrapper" style="background: #fff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 border-right p-r-0">
                        <div class="card-body border-bottom">
                            <h4 class="card-title m-t-10">Arrastar e soltar evento</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="calendar-events" class="">
                                        <div class="calendar-events m-b-20" data-class="bg-info"><i class="fa fa-circle text-info m-r-10"></i>Evento Um</div>
                                        <div class="calendar-events m-b-20" data-class="bg-success"><i class="fa fa-circle text-success m-r-10"></i>Evento dois</div>
                                        <div class="calendar-events m-b-20" data-class="bg-danger"><i class="fa fa-circle text-danger m-r-10"></i>Evento Três</div>
                                        <div class="calendar-events m-b-20" data-class="bg-warning"><i class="fa fa-circle text-warning m-r-10"></i>Evento quatro</div>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="drop-remove">
                                        <label class="custom-control-label" for="drop-remove">Remover após soltar</label>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#ModalAddd" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                        <i class="ti-plus"></i> Adicionar novo evento
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 text-center">
                        <div id="calendar" class="">
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <!-- Modal -->
                <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="form-horizontal" method="POST" action="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Criar Eventos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Assunto</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="title" class="col-lg-12" rows="10" id="title" placeholder="Assunto" required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="color" class="col-sm-2 control-label">Cor</label>
                                        <div class="col-sm-10">
                                            <select name="color" class="form-control" id="color">
                                                <<option value="">Escolha</option>
                                                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul escuro</option>
                                                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                                <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
                                                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarelo</option>
                                                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Laranja</option>
                                                <option style="color:#FF0000;" value="#FF0000">&#9724; Vermelho</option>
                                                <option style="color:#000;" value="#000">&#9724; Preto</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="start" class="col-sm-4 control-label">Data Inicio</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="start" class="form-control" id="start" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="end" class="col-sm-4 control-label">Data Termino</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="end" class="form-control" id="end" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="ModalAddd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="form-horizontal" method="POST" action="./calendario/addEvent.php">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Criar Eventos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Assunto</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="title" class="col-lg-12" rows="10" id="title" placeholder="Assunto" required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="color" class="col-sm-2 control-label">Cor</label>
                                        <div class="col-sm-10">
                                            <select name="color" class="form-control" id="color">
                                                <<option value="">Escolha</option>
                                                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul escuro</option>
                                                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                                <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
                                                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarelo</option>
                                                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Laranja</option>
                                                <option style="color:#FF0000;" value="#FF0000">&#9724; Vermelho</option>
                                                <option style="color:#000;" value="#000">&#9724; Preto</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="start" class="col-sm-4 control-label">Data Inicio</label>
                                        <div class="col-sm-10">
                                            <input type="datetime-local" name="start" class="form-control" id="start" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="end" class="col-sm-4 control-label">Data Termino</label>
                                        <div class="col-sm-10">
                                            <input type="datetime-local" name="end" class="form-control" id="end">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="form-horizontal" method="POST" action="./calendario/editEventTitle.php">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Editar/Apagar Eventos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Assunto</label>
                                        <div class="col-sm-10">
                                            <!--<input type="text" name="title" class="form-control" id="title" placeholder="Assunto" required="true">-->
                                            <textarea type="text" name="title" class="col-lg-12" rows="10" id="title" placeholder="Assunto" required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="color" class="col-sm-2 control-label">Cor</label>
                                        <div class="col-sm-10">
                                            <select name="color" class="form-control" id="color">
                                                <option value="">Escolha</option>
                                                <option style="color:#0071c5;" value="#0071c5">&#9724; Azul escuro</option>
                                                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                                                <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
                                                <option style="color:#FFD700;" value="#FFD700">&#9724; Amarelo</option>
                                                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Laranja</option>
                                                <option style="color:#FF0000;" value="#FF0000">&#9724; Vermelho</option>
                                                <option style="color:#000;" value="#000">&#9724; Preto</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label class="text-danger"><input type="checkbox"  name="delete"> Apagar evento</label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" class="form-control" id="id">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="ModalVer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="form-horizontal" method="POST" action="#">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix m-r-10"></i> Ver Eventos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Assunto</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="title" class="col-lg-12" rows="10" id="title" placeholder="Assunto" required="true" readonly="readonly" style="border: none;"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" class="form-control" id="id">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php 
include './script_calendar.php';
?>