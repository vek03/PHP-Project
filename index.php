<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <h1>Cadastro Pessoa Física</h1>
        <form action="controller/controllerPessoa.php" method="post">
            <label for="lblNome">Nome:</label><br>
            <input type="text" name="txtNome" id="txtNome">

            <br>
            <br>

            <label for="lblEndereco">Endereço:</label><br>
            <input type="text" name="txtEndereco" id="txtEndereco">

            <br>
            <br>

            <label for="lblBairro">Bairro:</label><br>
            <input type="text" name="txtBairro" id="txtBairro">

            <br>
            <br>

            <label for="lblCep">Cep:</label><br>
            <input type="text" name="txtCep" id="txtCep">

            <br>
            <br>

            <button>Cadastrar</button>
        </form>        
    </body>       
</html>    
