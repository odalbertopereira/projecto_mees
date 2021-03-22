<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $crud = new CRUD();
                    if (isset($_REQUEST['codigo']) && $_REQUEST['codigo'] != null) {
                        $codig = base64_decode($_REQUEST['codigo']);
                        $sql = $crud->select('noticias_id,anexo,caminho,dtReg', 'tb_noticias', 'WHERE noticias_id=?', array($codig));
                        while ($lin = $sql->fetch(PDO::FETCH_ASSOC)) {
                            $ficheiro = $lin['anexo'];
                            $imagem = $lin['caminho'];
                            $explode = explode('.', $ficheiro);
                            $tipo = strtolower(end($explode));
                            ?>
                            <div class="col-lg-12 row">
                                <div class="file-box" style="width: 50%; height: 40%;">
                                    <div class="file" style="width: 100%; height: 100%;">
                                        <?php
                                        if ($tipo == 'pdf') {
                                            ?>
                                            <a href="view/visualizar_anexo_noticia.php?codigo=<?php echo $_REQUEST['codigo']; ?>">
                                                <span class="corner"></span>

                                                <div class="image" style="width: 100%; height: 100%; background-size: cover">
                                                    <img alt="image" class="img-fluid" src="Ficheiros/Noticias/imagens/<?php echo $imagem; ?>" >
                                                </div>
                                                <div class="file-name" style="width: 100%; height: 100%;">
                                                    <p><?php echo $ficheiro; ?></p>
                                                    <br/>
                                                    <small>Adicionado em: <?php echo $lin['dtReg']; ?></small>
                                                </div>
                                            </a>
                                        <?php } else if ($tipo == 'doc' || $tipo == 'docx') { ?>
                                            <a href="Ficheiros/Noticias/anexos/<?php echo $ficheiro; ?>">
                                                <span class="corner"></span>

                                                <div class="image" style="width: 100%; height: 100%; background-size: cover">
                                                    <img alt="image" class="img-fluid" src="Ficheiros/Noticias/imagens/<?php echo $imagem; ?>" >
                                                </div>
                                                <div class="file-name" style="width: 100%; height: 100%;">
                                                    <p><?php echo $ficheiro; ?></p>
                                                    <br/>
                                                    <small>Adicionado em: <?php echo $lin['dtReg']; ?></small>
                                                </div>
                                            </a>
                                        <?php } else { ?>
                                            <a href="#">
                                                <span class="corner"></span>

                                                <div class="image" style="width: 100%; height: 100%; background-size: cover">
                                                    <img alt="image" class="img-fluid" src="Ficheiros/Noticias/imagens/<?php echo $imagem; ?>" >
                                                </div>
                                                <div class="file-name" style="width: 100%; height: 100%;">
                                                    <p>Para está notícia não existe anexo associado!.</p>
                                                    <br/>
                                                    <small>Adicionado em: <?php echo $lin['dtReg']; ?></small>
                                                </div>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>