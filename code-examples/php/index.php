<?php
$upload = FALSE;
$error = '';
if (isset($_FILES['archivo'])) {
    $cantidadDeArchivos = count($_FILES['archivo']['name']);
    for ($i = 0; $i < $cantidadDeArchivos; $i++) {
        $temporal = $_FILES['archivo']['tmp_name'][$i];
        $subidaOk = $_FILES['archivo']['error'][$i] == UPLOAD_ERR_OK;
        $exten = substr($_FILES['archivo']['type'][$i] , 6);

        if ($subidaOk) {
            $upload= move_uploaded_file($temporal, "upload/" .  $_FILES['archivo']['name'][$i]  );
        }else {
            $error = $_FILES['archivo']['error'];
        }
    }
}
?>
<html>

<head>
    <title>Subir archivos</title>
</head>

<body>
S    <h1><?php echo $upload ? "Se subio el archivo de modo correcto" : ''; ?></h1>
    <h2><?php echo $error; ?></h2>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="archivo[]" />
        <input type="file" name="archivo[]" />
        <input type="file" name="archivo[]" />
        <input type="submit" value="Subir archivo" />
    </form>
</body>

</html>