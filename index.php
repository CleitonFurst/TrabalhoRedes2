<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REDES DE COMPUTADORES II</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos para o modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">           
            <img class="containerImageLogo" src="image/Udesc_Ceart_vertical_branca_fundo_transparente.png" alt="Logo">
            <span>REDES DE COMPUTADORES </span> <span class="number">II</span>            
        </div>
        <div class="menu">
            <!-- <a href="#"><img src="image/HomeOrange.png" alt="Home Icon">Home</a> -->
            <a href="#" id="btnArquivos"><img src="image/DocumentOrange.png" alt="Arquivos Icon">Arquivos</a>
        </div>
        <!-- <a href="#" class="login">CADASTRE-SE</a>
        <a href="#" class="login">LOGIN</a> -->
    </div>
    <div class="container">
    </div>
    
    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Arquivos</h2>
            <ul id="fileList">
                <?php
                    $directory = './Arquivos'; // Substitua pelo caminho da sua pasta

                    if (is_dir($directory)) {
                        $files = array_diff(scandir($directory), array('.', '..'));
                        foreach ($files as $file) {
                            echo '<li><a href="'.$directory . '/' . htmlspecialchars($file).'" download>'. htmlspecialchars($file).'</a></li>';
                        }
                    } else {
                        echo '<li>Diretório não encontrado</li>';
                    }
                ?>
            </ul>
        </div>
    </div>

    <script>
        // Obtém o modal
        var modal = document.getElementById("myModal");

        // Obtém o botão que abre o modal
        var btn = document.getElementById("btnArquivos");

        // Obtém o elemento <span> que fecha o modal
        var span = document.getElementsByClassName("close")[0];

        // Quando o usuário clicar no botão, abre o modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Quando o usuário clicar no <span> (x), fecha o modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Quando o usuário clicar em qualquer lugar fora do modal, fecha o modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
