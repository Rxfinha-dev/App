<!doctype html>
<html lang="en">
<?php $erro = $erro ?? ''; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistemas Biblioteca - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/View/Login/style.css?v=<?= time() ?>">
</head>

<body>

    <div>

        <h1>Login</h1>

        <form method="post" action="/login" class="p-5">

            <?php if(!empty($erro)): ?>
                <div class="alert-error">
                    <?= $erro ?>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" value="" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="mb-3">
                <input type="checkbox"  name="lembrar" id="lembrar">
                <label for="lembrar" class="form-label">Lembrar meu usuário</label>                
            </div>

            <button type="submit" class="btn btn-success">Entrar</button>

            <div class="text-center mt-3">
                <span class="text-muted">Não tem uma conta?</span>
                <a href="/cadastro" class="link-cadastro">Cadastre-se</a>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>