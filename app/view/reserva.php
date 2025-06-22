<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once 'structure/header.php' ?>
    <link rel="icon" href="images/film-solid.ico">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>CineHome - Assentos</title>
</head>
<body>

    <?php 

        include_once 'structure/navbar.php'; 
        require_once '../db/connection.php';
        
        session_start();

        $_SESSION['horario'] = $_POST['horario'];
        
        $sigla_filme = $_SESSION['sigla_filme'];
        $horario = $_SESSION['horario'];

        try {

            $stmt = $pdo->prepare("select assento from reservas where horario = :horario and sigla_filme = :sigla_filme");
            $stmt->bindParam(':horario', $horario);
            $stmt->bindParam(':sigla_filme', $sigla_filme);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $assentosOcupados = array_column($resultados, 'assento');

            function disable_Assento($assento, $assentosOcupados) {

                if (in_array($assento, $assentosOcupados)) {

                    echo 'class="assento-desativado" disabled';

                }

            }

        }
        catch (Exception $e) {

            echo "Erro: " . $e->getMessage();

        }
        
    ?>

    
    <h4 style="color: white;">Mapa de Assentos</h4>
    <br>

    <div class="centered-div">

        <div class="tela d-grid gap-2 col-6 mx-20 mt-0">

            <div class="info-tela">
                TELA
            </div>

        </div>

        <form action="confirmacao_reserva.php" method="POST">

            <div class="centered-div-fileira">
                <input name="assento" type="radio" id="A1" value="A1" <?php disable_Assento("A1", $assentosOcupados); ?>>
                <label for="A1">A1</label>
                <input name="assento" type="radio" id="A2" value="A2" <?php disable_Assento("A2", $assentosOcupados); ?>>
                <label for="A2">A2</label>
                <input name="assento" type="radio" id="A3" value="A3" <?php disable_Assento("A3", $assentosOcupados); ?>>
                <label for="A3">A3</label>
            </div>

            <div class="centered-div-fileira">
                <input name="assento" type="radio" id="A1" value="B1" <?php disable_Assento("B1", $assentosOcupados); ?>>
                <label for="B1">B1</label>
                <input name="assento" type="radio" id="A2" value="B2" <?php disable_Assento("B2", $assentosOcupados); ?>>
                <label for="B2">B2</label>
                <input name="assento" type="radio" id="A3" value="B3" <?php disable_Assento("B3", $assentosOcupados); ?>>
                <label for="B3">B3</label>
            </div>

            <div class="centered-div-fileira">
                <input name="assento" type="radio" id="A1" value="C1" <?php disable_Assento("C1", $assentosOcupados); ?>>
                <label for="C1">C1</label>
                <input name="assento" type="radio" id="A2" value="C2" <?php disable_Assento("C2", $assentosOcupados); ?>>
                <label for="C2">C2</label>
                <input name="assento" type="radio" id="A3" value="C3" <?php disable_Assento("C3", $assentosOcupados); ?>>
                <label for="C3">C3</label>
            </div>

            <div class="d-grid gap-4 col-4 mx-auto button-assento">
                <button class="btn btn-danger">Confirmar Assento</button>
            </div>

        </form>

    </div>

    <?php require_once 'structure/footer-scripts.php' ?>
</body>
</html>