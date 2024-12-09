<?php
include("ver_sessaoRestrito.php");
include("conectar.php");

if ($conn) {
    $db = mysqli_select_db($conn, "loja_musical");
    $sql = "SELECT count(id) from pedidos";
    $contador = mysqli_query($conn, $sql) or die("não foi possível executar o comando Sql");
    $resl = mysqli_fetch_row($contador);
    $num = $resl[0];
    echo "<center> Quantidade de registros:<font color='purple' size='6'>" . $num;
    echo "</font><hr>";

    $sql1 = "SELECT * from pedidos";
    $resultado = mysqli_query($conn, $sql1) or die("não foi possível executar o comando Sql");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SurrounD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #cc9d29;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #e6e6fa;
        }
        tr:nth-child(odd) {
            background-color: #f8f8ff;
        }
        form {
            margin: 20px auto;
            width: 60%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"], input[type="button"] {
            padding: 10px;
            margin: 10px 0;
            width: calc(100% - 22px);
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"], input[type="button"] {
            background-color: #cc9d29;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #917d4c;
        }
        input[type="button"] {
            width: 32%;
            display: inline-block;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Código</th>
        <th>Nome Completo</th>
        <th>Celular</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Complemento</th>
        <th>E-mail</th>
        <th>Quantidade</th>
        <th>Instrumento</th>
        <th>Data do Pedido</th>

<?php
    while ($conteudo = mysqli_fetch_array($resultado)) {
        $codigo = $conteudo[0];
        $nomCompl = $conteudo[1];
        $celular = $conteudo[2];
        $ende = $conteudo[3];
        $bairro =$conteudo[4];
        $comple = $conteudo[5];
        $email =$conteudo[6];
        $quantidade = $conteudo[7];
        $instrumento = $conteudo[8];
        $dtpdds = $conteudo[9];
       
        echo "<tr>
                <td>$codigo</td>
                <td>$nomCompl</td>
                <td>$celular</td>
                <td>$ende</td>
                <td>$bairro</td>
                <td>$comple</td>
                <td>$email</td>
                <td>$quantidade</td> 
                <td>$instrumento</td>  
                <td>$dtpdds</td>   
              </tr>";
    }
} else {
    echo "Não houve conexão com o banco de dados";
}
?>
 <input type="button" value="Voltar ao anterior" name="retornar" onClick="javascript:history.back(-1)">
</table>
</body>
</html>
