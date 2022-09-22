<?php
header("Content-type:text/html; charset=utf8");
// quantidade de tempo necessário





$nomeLivro = "";
$nomeUser = "";
$date = "";
$dinheiro = 0;
$Type="";
$errologin="";


if (isset($_POST["Livro"]) && isset($_POST["Tipo"]) && isset($_POST["Nome"])&& isset($_POST["Data"])) {
  $nomeLivro = $_POST["Livro"];
  $Type= $_POST["Tipo"];
  $nomeUser = $_POST["Nome"];
  $date = date_create($_POST["Data"]);
  $devolucao = date_create($_POST["Data"]);
  $devolucaoA = date_create($_POST["Data"]);

} else {

    header("Location:emprestimo.php");
}



$errologin="";


date_add($devolucao,date_interval_create_from_date_string("10 days"));
///echo date_format($devolucao,"Y-m-d");


date_add($devolucaoA,date_interval_create_from_date_string("3 days"));
///echo date_format($devolucao,"Y-m-d");


switch ($Type) {

   case 'P': // testa
    echo "<br>O livro escolhido é :".$nomeLivro."<br>O nome do usuário:".$nomeUser."<br>A data de emprestimo é:".date_format($date,"Y-m-d")."<br>A data de devolução é : ". date_format($devolucao,"Y-m-d");

break;

      case 'A': // testa

  echo "<br>O livro escolhido é :".$nomeLivro."<br>O nome do usuário:".$nomeUser."<br>A data de emprestimo é:".date_format($date,"Y-m-d")."<br>A data de devolução é : ". date_format($devolucaoA,"Y-m-d");

break;

 default:
  echo 'Empréstimo Inválido';
  break;
}


?>
<!DOCTYPE html>
<html>
<head> 
    <title>Biblioteca</title>
    <meta charset="utf-8">
    <meta name="viewport"  content="widht-device-widht, initial-scale-1">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </head>
 <body>
  <?php echo $errologin; ?>
 </body>
</html>
