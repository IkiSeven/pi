<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4 mb-4">
            <div class="col-8">
                <p>
                    O [nome do app] é um aplicativo inovador desenvolvido para aprimorar a comunicação e a inclusão de pessoas com deficiência auditiva.
                    Utilizando tecnologia avançada de reconhecimento de sinais e tradução automática,
                    o [nome do app] permite que usuários se comuniquem de forma eficiente com aqueles que não estão familiarizados com a Língua de Sinais.
                    O aplicativo oferece uma interface intuitiva onde os usuários podem traduzir sinais em texto e vice-versa,
                    além de fornecer recursos de legendagem em tempo real para vídeos e conversas ao vivo.
                </p>
            </div>
        </div>
        <div class="row mt-4 mb-4 justify-content-center ">
            <div class="col-8">
                <button type="button" class="btn btn-primary mb-4" id="btnLogin">Entrar</button><br>
                <button type="button" class="btn btn-outline-primary" id="btnRegister">Registrar</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLogin">Bem-vindo!</h1>
                <button type="button" class="btn-close" id="btnLoginClose"></button>
            </div>
            <div class="modal-body">
                <form action="processarUsuario.php" method="post">
                    <label for="formLogin">Usúario: </label>
                    <input type="text" class="form-control" name="formLogin" id="formLogin" placeholder="Digite seu nome de usúario...">
                    <label for="formSenha">Senha: </label>
                    <input type="text" class="form-control" name="formSenha" id="formSenha" placeholder="Digite sua senha...">
                    <a href="#">Esqueceu a senha?</a>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>