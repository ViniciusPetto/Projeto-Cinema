<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require_once 'structure/header.php' ?>
        <link rel="icon" href="images/film-solid.ico">
        <link rel="stylesheet" href="../public/css/style.css">
        <title>CineHome - Reserva</title>
    </head>
    <body>
        <?php 
        
            include_once 'structure/navbar.php'; 
            
            session_start();

            $_SESSION['assento'] = $_POST['assento'];
            
            $cod_ingresso = random_int(10000, 99999);
        
        ?>

        <h4 style="color: white;">Confirmação de Ingresso</h4>
		<br>

        <div class="centered-div">

            <form action="../db/ingressoDB.php" method="POST">

                <div class="row form-ingresso">
                    Nome: <input type="text" name="nome" placeholder="Digite o seu nome" required>
                    CPF: <input type="text" name="cpf" placeholder="Digite o seu CPF" required><br>
                </div>

                <div class="row form-ingresso">
                    Telefone: <input type="text" name="telefone" placeholder="Digite o seu telefone" required><br>
                    Sigla do Filme: <input type="text" name="sigla_filme" value="<?php echo $_SESSION['sigla_filme'] ?>" readonly><br>
                </div>

                <div class="row form-ingresso">
                    Horário do Filme: <input type="text" name="horario" value="<?php echo $_SESSION['horario'] ?>" readonly>
                    Assento Selecionado: <input type="text" name="assento" value="<?php echo $_SESSION['assento'] ?>" readonly><br>
                </div>

                <div class="row form-ingresso">
                    Código do Ingresso: <input type="text" name="n_ingresso" value="<?php  echo $cod_ingresso ?>" readonly>
                </div>
                
                <div class="d-grid gap-2 col-8 mx-auto button-confirmacao-ingresso">
                    <button class="btn btn-danger">Confirmar Ingresso</button>
                </div>

            </form>
    
        </div>

        

        <?php require_once 'structure/footer-scripts.php' ?>
    </body>
</html>