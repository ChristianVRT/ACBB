<?php
include 'database.php';

session_start();

//  if (!isset($_SESSION['email'])) 
//  {
//      header("Location: login.php");
//      exit();
//  }


$user_email = $_SESSION['email'];
// $sql = "SELECT * FROM users WHERE email = ?";
// $stmt = mysqli_prepare($connection, $sql);
// mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);
// $user = mysqli_fetch_assoc($result);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_name'])) {
        $_SESSION['user_name'] = filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = $_SESSION['user_name'];
        $sql = "UPDATE users SET name='$name' WHERE email='$user_email'";
        if (mysqli_query($connection, $sql)) {
            $_SESSION['user_name'] = $name;
            echo "Nome atualizado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
        }
    } elseif (isset($_POST['update_email'])) {
        $email = $_SESSION['email'];
        $sql = "UPDATE users SET email='$email' WHERE id='$user_id'";
        if (mysqli_query($connection, $sql)) {
            echo "Email atualizado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
        }
    } elseif (isset($_POST['update_password'])) {
        $_SESSION['password'] = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_SESSION['password'];
        $sql = "UPDATE users SET password='$password' WHERE email='$user_email'";
        if (mysqli_query($connection, $sql)) {
            echo "Senha atualizada com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
        }
    } elseif (isset($_POST['update_profile_pic'])) {
        $profile_pic = $_FILES['profile_pic']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($profile_pic);

        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file)) {
            $sql = "UPDATE users SET profile_pic='$profile_pic' WHERE id='$user_id'";
            if (mysqli_query($connection, $sql)) {
                $_SESSION['profile_pic'] = $profile_pic;
                echo "Foto de perfil atualizada com sucesso!";
            } else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
            }
        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM users WHERE email='$user_email'";
        if (mysqli_query($connection, $sql)) {
            session_destroy();
            header("Location: register.php");
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($connection);
        }
    }
}

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
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
            <h2>Perfil</h2>
            <div class="text-center mb-4">
                <img src="../uploads/<?php echo $_SESSION['profile_pic']; ?>" alt="Foto de Perfil" class="profile-pic">
                <h3><?php echo $_SESSION['user_name']; ?></h3>
                <p><?php echo $_SESSION['email']; ?></p>
            </div>
            <form method="POST" action="profile.php" enctype="multipart/form-data" id="updatecontrol">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['user_name']; ?>" required>
                    <button onclick="" type="submit" name="update_name" class="btn btn-primary mt-2">Alterar Nome</button>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Nova Senha</label>
                    <input type="password" class="form-control" id="password" name="password" >
                    <button type="submit" name="update_password" class="btn btn-primary mt-2">Alterar Senha</button>
                </div>
                <div class="mb-3">
                    <label for="profile_pic" class="form-label">Foto de Perfil</label>
                    <input type="file" class="form-control" id="profile_pic" name="profile_pic" accept="image/*">
                    <button type="submit" name="update_profile_pic" class="btn btn-primary mt-2">Alterar Foto de Perfil</button>
                </div>
                <button onclick="" type="submit" name="delete" class="btn btn-danger mt-3">Deletar Conta</button>
            </form>
        </div>
    </main>
    <script src="../js/update.js"></script>
</body>
</html>