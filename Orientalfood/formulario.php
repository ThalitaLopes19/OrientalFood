<?php
    
    if(isset($_POST['submit']))
    {
         include_once('config.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
       $sexo = $_POST['genero'];
       $data_nasc = $_POST['data_nascimento'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];
       $pagamento = $_POST['pagamento'];

       $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco,pagamento) VALUES ( '$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco', '$pagamento' )");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0e4a0;
            
        }
        .box{
            color: black;
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #f1e9b8;
            padding: 15px;
            border-radius: 15px;
            width: 700px;
        }
        .box fieldset{
            border: 3px #d63a25;
            position: relative;
        }
        .box legend{
            border: 3px #d63a25;
            padding: 10px;
            text-align: center;
            background-color: #d63a25;
            border-radius: 8px;
            color: white;
            position: relative;
        }
        .inputBox{
            position: relative;
        }
        .inputBox input, select{
            width: 80%;
            border-radius: 10px;
            padding: 15px;
            background-color: #f0e4a0;
            color: black;
            font-size: 12pt;
        }
        .inputUser{
            border: none;
            border-bottom: 1px #d63a25;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #d63a25;

        }
        #data_nacimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: #d63a25;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color: #d63a25;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>Fórmulario de Pagamento</legend>
                <br>
                <div class="inputBox">
                    <input type="nome" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <p>Escolha a forma de pagamento:</p>
                <select name="pagamento" id="pagamento" class="inputUser" required>
                    <option>Crédito</option>
                    <option>Débito</option>
                    <option>Pix</option>
                </select>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>