<?php include("cabecalho.php");
?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>

<body>

<h2>100% wide HTML Table</h2>

<table>
  <tr>
    <th >Firstname</th>
    <th>Lastname</th> 
    <th style="width:70%">Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>
    <p>25 anos de efetivo serviço público</p>
    <p>15 anos de carreira</p>
    <p>5 anos no cargo e:</p>
    <p>Homem = 35 anos de contribuição + 60 anos de idade
( Regra 95 - vide quadro abaixo)</p>
<p>Mulher = 30 anos de contribuição + 55 anos de idade
(Regra 85 - vide quadro abaixo)</p>
    </td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>

</body>
</html>



<?php include("rodape.php"); ?>