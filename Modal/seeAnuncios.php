<?php
$id_anuncio = base64_decode($_REQUEST['Codigo']);
$connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
$noticias1 = mysqli_query($connected, "select ID_AN, TITULO_AN, CAMINHO_AN, TEXTO_AN,ESTADO,DATA_REG from view_ver_anuncio  where ID_AN= '$id_anuncio'");
while ($linha = mysqli_fetch_assoc($noticias1)) {
    $ID = $linha['ID_AN'];
    $TITULO = $linha['TITULO_AN'];
    $IMAGEM = $linha['CAMINHO_AN'];
    $TEXTO = $linha['TEXTO_AN'];
    $DATA_REG = $linha['DATA_REG'];
    echo '
<div class="modal fade" id="modalAnunacio" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">' . TITULO_AN . '</h4>
            </div>
            <img class="img-responsive" src="./Admin/Ficheiros/Anuncios/' . $IMAGEM . '" alt="" style="max-width: 150px;">
            <div class="modal-body">
                <p class="justificar_texto">' . $TEXTO . '</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
';
}
?>