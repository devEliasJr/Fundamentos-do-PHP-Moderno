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
          $inicio = date("m-d-Y", strtotime("-7 days"));
          $fim = date("m-d-Y");
          
          $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=\''.$inicio.'\',dataFinalCotacao=\''.$fim.'\')?$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
          
          $dados = json_decode(file_get_contents($url), true);
          
          $cotacaoDolar = $dados["value"][0]["cotacaoCompra"];

          $number_noformt = (int) $_REQUEST["number"];
          $number = $number_noformt !== 0 ? $number_noformt : 1;
          
          $convertido = $number / $cotacaoDolar;

          // Formatação de moedas com internacionalização
          $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

          echo "Seus " . numfmt_format_currency($padrao, $number, "BRL") . 
          " equivalem a " . numfmt_format_currency($padrao, $convertido, "USD") . "<br>";

          echo "Cotação fixa de " . numfmt_format_currency($padrao, $cotacaoDolar, "USD") . "<br>";

          echo "Cotação do dolar obtida em tempo real diretamente do <strong>Banco Central do Brasil.</strong>"
      ?>
    </p>

    <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
  </main>
</body>

</html>