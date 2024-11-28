<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Open Sans', sans-serif;
    background-color: #f0e4a0;
}
.title-login{
    padding: 10px;
}
.title-login h1{
    align-items: center;
    color: #cf1a02;
    margin-top: 30px;
    text-align: center;
    border: 3px #d63a25;
    background-color: #d63a25;
    border-radius: 8px;
    color: white;
    width: 230px;
    margin-left: 550px;
    padding: 10px;
    font-size: 20px;
    letter-spacing: 0.5px;
}

.form-login{
    width: 580px;
    height: 450px;
    background-color:#FBF2BD;
    align-items: center;
    padding: 15px;
    border: 1.5px solid #cf1a02;
    border-radius: 15px;
    justify-content: center;
    margin-left: 390px;
    margin-top: 20px;
}
.login-txt{
    width: 450px;
    height: 300px;
    align-items: center;
    justify-content: center;
    padding: 10px;
    position: fixed;
    flex-direction: column;
    margin-top: 70px;
    margin-left: 80px;
    margin-right: 50px;
    background-color:#FBF2BD;
}
.login-txt label{
    color: black;
    font-size: 20px;
    letter-spacing: 0.5px;
    font-weight:547;
    text-align: left;
    background-color:#FBF2BD;
}
.login-txt input{
    padding: 7px;
    width: 200px;
    align-items: center;
    background-color:#F0E4A0;
    border-radius: 5px;
    letter-spacing: 0.5px;
    margin-top: 30px;
}
.form-btn{
    background-color:#FBF2BD;
}
.form-btn button{
    margin-top: 30px;
    padding: 9px;
    border-radius: 10px;
    background-color:#d63a25;
    cursor: pointer;
    font-size: 18px;
    text-align: center;
    border: 1px solid #cf1a02;
    margin-left: 100px;
    letter-spacing: 1px;
    width: 170px;
}
.form-btn p{
    font-size: 15px;
    margin-top: 18px;
    color: #cf1a02;
    margin-left: 120px;
    background-color:#FBF2BD;
}
.form-btn small{
    margin-left: 160px;
    margin-top: -40px;
    background-color:#FBF2BD;
}
.check{
    background-color:#FBF2BD;
    align-items:left;
    text-align: left;
}
.check label{
    font-size: 16px;
    position: relative;
    margin-left:-86px;
}
   </style>
</head>
<body>

<div class="title-login">
    <h1>Login</h1>
</div>

<?php 

require_once "LoginControle.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    $login = new Login($user, $senha);

    if ($login->validate()) {
        header("Location: home.php");
        exit;
    } else {
        // Exiba a mensagem de erro
        echo "<p style='color: red;'>".$login->getErrorMessage()."</p>";
    }
}

?>
<div class="form-login">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="login-txt">
        <label for="user">Usuário:</label>
        <input type="text" id="user" name="user" placeholder="Nome de Usuário" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Senha" required>
        <br>
        <div class="check">
            <input type="checkbox" id="salvar" name="salvar" class="checkbox">
            <label for="salvar">Salvar informações de login</label>
        </div>
        <br>
        <div class="form-btn">
            <button>Entrar</button>
            <br>
            <P>Não possui uma conta?</P>
            <a href=""><small>Criar conta</small></a>
    </form>
    </div>
</div>
    
</body>
</html>