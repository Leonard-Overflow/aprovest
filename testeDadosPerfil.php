<?php
// Simulando dados do banco de dados
$userData = [
    'username' => 'Leonardo de Castro',
    'email' => 'leonardo.rafael@email.com',
    'phone' => '(11) 12375-8293',
    'avatarInitials' => 'LR'
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <style>
         {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            padding: 20px;
        }

        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 15px;
        }

        .profile-info {
            display: grid;
            gap: 15px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .info-label {
            font-weight: bold;
            color: #555;
        }

        .info-value {
            color: #333;
        }

        .email {
            color: #007bff;
        }

        .phone {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-avatar"><?php echo $userData['avatarInitials']; ?></div>
            <h1>Perfil do Usuário</h1>
        </div>
        
        <div class="profile-info">
            <div class="info-item">
                <span class="info-label">Nome de Usuário:</span>
                <span class="info-value"><?php echo htmlspecialchars($userData['username']); ?></span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Email:</span>
                <span class="info-value email"><?php echo htmlspecialchars($userData['email']); ?></span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Telefone:</span>
                <span class="info-value phone"><?php echo htmlspecialchars($userData['phone']); ?></span>
            </div>
        </div>
    </div>
</body>
</html>