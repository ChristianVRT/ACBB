<?php
include 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "INSERT INTO users (name, email, password, profile_pic) VALUES ('$name', '$email', '$password', 'default.png')";
        if (mysqli_query($connection, $sql)) {
            $_SESSION['user_id'] = mysqli_insert_id($connection);
            $_SESSION['user_name'] = $name;
            $_SESSION['profile_pic'] = "default.png";
            header("Location: ../index.php");
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
        }
    } else {
        echo "As senhas não coincidem.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">
                    <img src="../imagens/logo.png" alt="Logo ACBB" width="30" height="30" class="d-inline-block align-top">
                    ACBB Consultoria
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#team">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#testimonials">Depoimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#contact">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-5 pt-4">
        <div class="container">
            <h2>Registrar</h2>
            <form id="control" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" >
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input oninput="Changer(this)" type="text" class="form-control" id="name" placeholder="Digite seu nome:" name="name" required>
                </div>
                <div class="">
                    <label  class="form-label">Email</label>
                    <input oninput="Changer(this)" type="email" id="email" class="form-control " placeholder="Digite um email válido:" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input oninput="Changer(this)" type="password" class="form-control" id="password" placeholder="Digite sua senha:" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmar Senha</label>
                    <input oninput="Changer(this)" type="password" class="form-control" id="confirm_password" placeholder="Confirme sua senha:" name="confirm_password" required>
                </div>
                <button  type="button" onclick="Register()" class="btn btn-primary">Registrar</button>
                <a href="../index.php" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
        
    </main>
    <script src="../js/register.js"></script>
</body>
</html>