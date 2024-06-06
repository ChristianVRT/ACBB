<?php
ob_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE email= ?";
    
    $stmt = mysqli_prepare($connection, $check);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if ($password == $user['password']) {
                    setcookie('user_id', $user['id'], time() + 3600, "/"); // 1 hora de duração
                    setcookie('email', $user['email'], time() + 3600, "/");
                    setcookie('user_name', $user['name'], time() + 3600, "/");
                    setcookie('profile_pic', $user['profile_pic'], time() + 3600, "/");
                    header("Location: ../index.php");
                    exit();
                } else {
                    echo "Senha incorreta.";
                }
            } else {
                echo "Usuário não encontrado.";
            }
        } else {
            echo "Erro ao obter o resultado: " . $connection->error;
        }
        $stmt->close();
    } else {
        echo "Erro ao preparar a consulta: " . $connection->error;
    }
}
mysqli_close($connection);
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <h2>Login</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="control">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="../index.php" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </main>
    
    <script src="../js/login.js"></script>
</body>
</html>