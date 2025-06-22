<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once 'structure/header.php' ?>
    <link rel="icon" href="images/film-solid.ico">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>CineHome - Ingresso</title>
</head>
<body>

    <?php 

        include_once 'structure/navbar.php'; 
        require_once '../db/connection.php';

        session_start();

        $nome = $_SESSION['nome'];
        $cpf = $_SESSION['cpf'];
        $telefone = $_SESSION['telefone'];
        $sigla_filme = $_SESSION['sigla_filme'];
        $horario = $_SESSION['horario'];
        $assento = $_SESSION['assento'];
        $n_ingresso = $_SESSION['n_ingresso'];

        try{

            $stmt = $pdo->prepare("select reservas.sigla_filme, filmes.nome_filme from reservas inner join filmes on reservas.sigla_filme = filmes.sigla_filme where reservas.sigla_filme = :sigla_filme;");
            $stmt->bindParam(':sigla_filme',$sigla_filme);
            $stmt->execute();
            $resultados = $stmt->fetch(PDO::FETCH_ASSOC);

            extract($resultados);

        }
        catch(Exception $e){

            echo 'Error: ' . $e->getMessage();

        }

    ?>

    <h4 style="color: white;">Ingresso</h4>
    <br>

    <div class="centered-div">

        <div class="ingresso d-grid gap-2 col-6 mx-20 mt-0">

            <h5>Suas informações do ingresso</h5> <br><br>

            Nome: <?php echo $nome ?> <br>
            CPF: <?php echo $cpf ?> <br>
            Telefone: <?php echo $telefone ?> <br><br>
            Filme Selecionado: <?php echo $nome_filme ?> <br>
            Horário da Sessão: <?php echo $horario ?>h00 <br>
            Assento: <?php echo $assento ?> <br>
            Código do Ingresso: <?php echo $n_ingresso ?> <br>

            <div class="d-grid gap-2 col-2 mx-auto button-ingresso">

                <a href="../../index.php">
                    <button class="btn btn-danger">Início</button>
                </a>

            </div>

        </div>

    </div>


    <?php require_once 'structure/footer-scripts.php' ?>
</body>
</html>