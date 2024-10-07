<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Peso Corporal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h1 {
            color: #333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculadora de Peso Corporal</h1>
    <form method="POST" action="">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="peso">Seu peso (kg):</label>
        <input type="number" id="peso" name="peso" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $peso = htmlspecialchars($_POST['peso']);

        echo "<div class='result'>";
        echo "<p>Nome: " . $nome . "</p>";
        echo "<p>Peso: " . $peso . " kg</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>