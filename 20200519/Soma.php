<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de dois números</title>
    <script>
        function Soma(num1, num2){
            resultado = parseInt(num1) + parseInt(num2);
            document.form.result.value=resultado;
        }
    </script>
    <style>
        fieldset{
            text-align: center;
            background-image: URL(fundo.webp);
            background-position: 25% 75%;
        }
    </style>
</head>
<body>
    <fieldset>
    <h1>Calculadora de dois números - Atividade da quarentena<h2>
    <form name="form">
            <input type="text" name="num1" placeholder="Operador 1..."/>
            +
            <input type="text" name="num2" placeholder="Operador 2..."/>
            =
            <input type="number" name="result" value=" " disabled placeholder="Resultado"/>
        <input type="reset" value="Limpar"/>
        <input type="button" value="Calcular" onclick="Soma(document.form.num1.value, document.form.num2.value);"/>
    </form>
    </fieldset>
</body>
</html>