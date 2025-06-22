<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require_once 'structure/header.php' ?>
        <link rel="icon" href="images/film-solid.ico">
        <link rel="stylesheet" href="../public/css/style.css">
        <title>CineHome - Horários</title>
    </head>
    <body>
        <?php 

        include_once 'structure/navbar.php';
        
        session_start();

        $_SESSION['sigla_filme'] = $_POST['sigla_filme'];

        ?>



        <h4 style="color: white;">Seleção de Horários para a Sessão</h4>
		<br>

        <div class="centered-div">

            <div class="d-grid col-6 mx-auto horario">

                <div class="d-grid gap-2 col-12 mx-20 mt-0 info-horario">
                    Selecione o horário da sessão:
                </div>
                <br>

                <form action="reserva.php" method="POST">

                    <select class="d-grid col-4 mx-auto" name="horario">
                        <option value="15">15:00</option>
                        <option value="18">18:00</option>
                        <option value="21">21:00</option>
                    </select>
                    <br>

                    <div class="d-grid gap-2 col-8 mx-auto button-horario">
                        <button class="btn btn-danger">Confirmar Horário</button>
                    </div>

                </form>

            </div>
            
        </div>

        

        <?php require_once 'structure/footer-scripts.php' ?>
    </body>
</html>