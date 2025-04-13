<?php
$nome = "João Silva";
$profissao = "Desenvolvedor Web";
$sobre = "Sou um apaixonado por tecnologia e desenvolvimento de software. Trabalho com PHP, JavaScript e banco de dados.";
$foto = "lucas.jpeg"; // Coloque sua imagem na mesma pasta com esse nome
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Apresentação Pessoal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lucas.jpeg" >
        <h1><?php echo $nome; ?></h1>
        <h2><?php echo $profissao; ?></h2>
        <p><?php echo $sobre; ?></p>
    </div>
</body>
</html>



