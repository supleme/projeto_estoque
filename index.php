<?php


require_once("conexao.php");







?>

<!DOCTYPE html>

<html>

<head>

    <title>Faça seu Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <script src="js/jquery.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->



    <meta charset='UTF-8'>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/tesla.svg" type="image/x-icon">

    <link rel="icon" href="img/tesla.svg" type="image/x-icon">



    <link rel="stylesheet" href="css/login.css">

    </style>




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">


</head>

<body>







    <div class="login">

        <div align="center" class="mb-4">

            <h1 style="font-family: 'Staatliches', cursive; font-size: 500%;">ESTOQUE</h1>

        </div>

        <form method="post" action="autenticar.php">

            <input class="input" type="text" name="user" placeholder="Usuário" required="required" />

            <input class="input" type="password" name="senha" placeholder="Senha" required="required" />

            <button type="submit" class="btn btn-light btn-block btn-large">Logar</button>

        </form>

    </div>







    </script>

</body>

</html>











<!-- Modal -->

<div class="modal fade" id="modalRecuperar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="staticBackdropLabel">Recuperar Senha</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <form method="POST" id="form">

                <div class="modal-body">

                    <div class="form-group">

                        <label>Seu Email</label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">

                    </div>



                    <small>

                        <div id="mensagem">



                        </div>

                    </small>



                </div>

                <div class="modal-footer">

                    <button id="btn-fechar" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                    <button type="submit" class="btn btn-info">Recuperar</button>

                </div>

            </form>

        </div>

    </div>

</div>







<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM OU SEM IMAGEM -->

<script type="text/javascript">
    $("#form").submit(function() {



        event.preventDefault();

        var formData = new FormData(this);



        $.ajax({

            url: "recuperar.php",

            type: 'POST',

            data: formData,



            success: function(mensagem) {

                $('#mensagem').removeClass()

                if (mensagem.trim() == "Sua senha foi Enviada para seu Email!") {

                    //$('#nome').val('');

                    //$('#btn-fechar').click();

                    $('#mensagem').addClass('text-success')

                } else {

                    $('#mensagem').addClass('text-danger')

                }

                $('#mensagem').text(mensagem)

            },



            cache: false,

            contentType: false,

            processData: false,

            xhr: function() { // Custom XMLHttpRequest

                var myXhr = $.ajaxSettings.xhr();

                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload

                    myXhr.upload.addEventListener('progress', function() {

                        /* faz alguma coisa durante o progresso do upload */

                    }, false);

                }

                return myXhr;

            }

        });

    });
</script>