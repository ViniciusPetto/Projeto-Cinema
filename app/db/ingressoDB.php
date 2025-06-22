<?php

    session_start();

    require_once 'connection.php';

    try{

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $sigla_filme = $_POST['sigla_filme'];
        $horario = $_POST['horario'];
        $assento = $_POST['assento'];
        $n_ingresso = $_POST['n_ingresso'];


        $_SESSION['nome'] = $nome;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['sigla_filme'] = $sigla_filme;
        $_SESSION['horario'] = $horario;
        $_SESSION['assento'] = $assento;
        $_SESSION['n_ingresso'] = $n_ingresso;

        if($assento == ""){

            echo "<script>

                    alert('Selecione seu assento antes de progredir com sua reserva!');

                    setTimeout(function() {
                        window.location.href = '../../index.php';
                    }, 1000);

                </script>
                ";

        }
        else if($nome == ""){

            echo "<script>

                    alert('Preencha seu nome antes de progredir com sua reserva!');

                    setTimeout(function() {
                        window.location.href = '../../index.php';
                    }, 1000);

                </script>
                ";

        }
        else if($cpf == ""){

            echo "<script>

                    alert('Preencha seu CPF antes de progredir com sua reserva!');

                    setTimeout(function() {
                        window.location.href = '../../index.php';
                    }, 1000);

                </script>
                ";

        }
        else if($telefone == ""){

            echo "<script>

                    alert('Preencha seu telefone antes de progredir com sua reserva!');

                    setTimeout(function() {
                        window.location.href = '../../index.php';
                    }, 1000);

                </script>
                ";

        }
        else{

            $stmt = $pdo->prepare("insert into reservas (nome,cpf,telefone,sigla_filme,horario,assento,n_ingresso) values (:nome,:cpf,:telefone,:sigla_filme,:horario,:assento,:n_ingresso)");

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':sigla_filme', $sigla_filme);
            $stmt->bindParam(':horario', $horario);
            $stmt->bindParam(':assento', $assento);
            $stmt->bindParam(':n_ingresso', $n_ingresso);
    
            $stmt->execute();
    
            echo "<script>

                    alert('Ingresso registrado com sucesso! Guarde as informações a seguir!');

                    setTimeout(function() {
                        window.location.href = '../view/ingresso.php';
                    }, 1000);

                </script>
                ";

        }

    }
    catch(Exception $e) {

        echo 'Error: ' . $e->getMessage();

    }

?>