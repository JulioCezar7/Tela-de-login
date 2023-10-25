<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
    margin: 0;
    font-family: 'Poppins';
}
.main-login{
    width: 100vw;
    height: 100vh;
    background-color: #063d84;
    display: flex;
    justify-content: center;
    align-items: center;
}
.left-login{
    width: 50vw;
    height: 60vh;
    display: flex;
    justify-self: center;
    align-items: center;
    flex-direction: column;
}
.left-login > h1{
    color: white
    
}
.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-self: center;
    align-items: center;
}
.card-login{
    width: 40%;
    display: flex;
    justify-self: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 45px;
    background: white;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #585b5f;
}
.card-login > h1{
    color: #063d84;
    font-weight: 800;
    margin: 0;
}
.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px;
}
.textfield > input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 16px;
    background: white;
    color: #063d84;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #585b5f;
    outline: none;
    box-sizing: border-box;
}
.textfield > label{
    color: #585b5f;
    margin-bottom: 10px;
}

.textfield > input::placeholder{
    color: #063d84;
}
.text-senha{
    font-size: 12px;
    color: #585b5f;
    cursor: pointer;
}
.btn-login{
    width: 60%;
    padding: 18px 5px;
    margin: 30px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
    color: #585b5f;
    background: white;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #585b5f;
}
.btn-cadastro{
    width: 60%;
    padding: 18px 5px;
    margin: 30px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
    color: #585b5f;
    background: white;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #585b5f;
}
</style>
<body>
    <div class="main-login">

        <div class="left-login"><h1>Faça Login! <br>E junte-se a nós.
        <img src="Server-amico.svg" class="left-img" alt="Server-amico"></div></h1>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="testelogi.php" method="POST">
                    <div class="textfield">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" placeholder="usuario">
                    </div>
                    <div class="textfield">
                        <label for="password">Senha:</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <input class="btn-login" type="submit" name="submit" value="Login">
                    <button class="btn-cadastro"><a href="formulario.php"> Cadastre </a></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>