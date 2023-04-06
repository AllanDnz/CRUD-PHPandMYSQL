
<?php
include('config.php');

$zipname = 'lista_medicos.zip';

$zip = new ZipArchive;

if ($zip->open($zipname, ZipArchive::CREATE) === TRUE) {
    
    $sql = "SELECT * FROM medicos";
    $res = $connect->query($sql);

    while ($row = $res->fetch_object()) {
        $data = array($row->nome, $row->crm, $row->telefone, $row->especialidadeUm, $row->especialidadeDois);
        $zip->addFromString($row->nome.'.csv', implode(',', $data));
    }

    $zip->close();

    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename='.$zipname);
    header('Content-Length: ' . filesize($zipname));
    readfile($zipname);
} else {
    echo 'Erro ao criar arquivo ZIP';
}
?>
