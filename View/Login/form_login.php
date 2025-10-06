<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Sistema Nutricional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-box">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <div class="forgot-link">
                    <a href="#">Esqueceu a senha?</a>
                </div>
                <button type="submit" class="bottom">Entrar</button>
            </form>
        </div>

        <div class="form-box register">
            <form method="POST">
                <h1>Cadastro</h1>
                <div class="input-box">
                    <input type="text" name="nome" placeholder="Nome Completo" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input-box">
                    <input type="password" name="senha" placeholder="Senha (mín. 6 caracteres)" required>
                </div>
                <button type="submit" class="bottom">Cadastrar</button>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <div class="toggle-content">
                    <h1>Seja bem-vindo!</h1>
                    <p>Não tem uma conta?</p>
                    <button class="bottom register-bottom">Cadastre-se</button>
                </div>
            </div>

            <div class="toggle-panel toggle-right">
                <div class="toggle-content">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Já tem uma conta?</p>
                    <button class="bottom login-bottom">Login</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const container = document.querySelector('.container');
        const registerBtn = document.querySelector('.register-bottom');
        const loginBtn = document.querySelector('.login-bottom');

        registerBtn.addEventListener('click', () => {
            container.classList.add('active');
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove('active');
        });
    </script>
</body>
</html>