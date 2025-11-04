<?php 
if ($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_FILES ['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK){
        $nomeTemporario = $_FILES ['arquivo']['tmp_name'];
        $nomeDefinitivo = "uploads/" . basename($_FILES["arquivo"]["name"]);

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }
        if (move_uploaded_file ($nomeTemporario, $nomeDefinitivo)){
            echo "<p>Arquivo enviado com sucesso</p>";
        }else {
            echo "<p>Ocorreu um erro.</p>";
        }

    }else{
        echo "<p>nenhum arquivo foi selecionado</p>";
    }}



?>
