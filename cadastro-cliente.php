
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar-cliente.php">
        Nome:<input type="text"  name="nome"><br><br>

        E-mail:<input type="email" name="email"><br><br>

        Telefone:<input type="tel" name="telefone"><br><br>

        Rua:<input type="text" name="rua"><br><br>

        Número:<input type="text" name="numero"><br><br>

        Bairro:<input type="text" name="bairro"><br><br>

        Complemento:<input type="text" name="complemento"><br><br>

        Cidade:<input type="text" name="cidade"><br><br>

        Estado:
        <select name="estado">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="GP">GP</option>
            <option value="RL">RL</option>
            <option value="GG">GG</option>
            <option value="MT">MT</option>
            <option value="RP">RP</option>
            <option value="AT">AT</option>
            <option value="DR">DR</option>
            <option value="PT">PT</option>
        </select><br><br>

        Data de Nacimento:<input type="date" name="datadenacimento"><br><br>

        CPF:<input type="number" name="cpf"><br><br>

        RG:<input type="number" name="rg"><br><br>

        whatsapp:<input type="tel" name="whatsapp"><br><br>

        Bebida(álcool):    
        <input type="radio" name="bebida" value="Sim">Sim
        <input type="radio" name="bebida" value="Não">Não
        <br><br>

       


        <button type="submit">Salvar cadastro</button>
    </form>
</body>
</html>



