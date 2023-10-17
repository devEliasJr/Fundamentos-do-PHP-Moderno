<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>

  <main>
    <h1>Conversor de Moedas v1.0</h1>
    <p>
      <?php
      $cotacaoDolar = 5.43;
      
      $number = $_REQUEST["number"] ?? 0;

      $convertido = $number / $cotacaoDolar;

      // Formatação de moedas com internacionalização
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "Seus " . numfmt_format_currency($padrao, $number, "BRL") . 
      " equivalem a " . numfmt_format_currency($padrao, $convertido, "USD") . "<br>";

      echo "Cotação fixa de " . numfmt_format_currency($padrao, $cotacaoDolar, "USD");
      ?>
    </p>

    <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
  </main>
</body>

</html>