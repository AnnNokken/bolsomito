<?php
include("ver_sessaoRestrito.php");
include("conectar.php");

if ($conn) {
    $db = mysqli_select_db($conn, "loja_musical");
    $sql = "SELECT count(id) FROM produtos";
    $contador = mysqli_query($conn, $sql) or die("Não foi possível executar o comando SQL");
    $resl = mysqli_fetch_row($contador);
    $num = $resl[0];
    echo "<center> Quantidade de registros: <font color='purple' size='6'>" . $num . "</font></center><hr>";

    $sql1 = "SELECT * FROM produtos";
    $resultado = mysqli_query($conn, $sql1) or die("Não foi possível executar o comando SQL");
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
            background-color: #cc9d29; /* roxo escuro */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #e6e6fa; /* roxo claro */
        }
        tr:nth-child(odd) {
            background-color: #f8f8ff; /* branco quebrado */
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
            background-color: #cc9d29; /* roxo escuro */
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #917d4c; /* roxo mais escuro */
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
        <th>Nome do Produto</th>
        <th>Marca</th>
        <th>Usado/Seminovo</th>
        <th>Quantidade</th>
        <th>Data de Cadastro</th>
    </tr>

<?php
    while ($conteudo = mysqli_fetch_array($resultado)) {
        $codigo = $conteudo['0'];
        $nome_item = $conteudo['1'];
        $marca = $conteudo['2'];
        $uso = $conteudo['3'];
        $quantidade = $conteudo['4'];
        $data_cadastro = $conteudo['5'];
       
        echo "<tr>
                <td>$codigo</td>
                <td>$nome_item</td>
                <td>$marca</td>
                <td>$uso</td>
                <td>$quantidade</td>
                <td>$data_cadastro</td>
              </tr>";
    }
} else {
    echo "Não houve conexão com o banco de dados";
}
?>
  <input type="button" value="Voltar" onClick="javascript:history.back()">
</table>
</body>
</html>
