<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
    <header>To Do List</header>
    <div class="inputField">
      <input type="text" placeholder="Ajoutez vos taches">
      <button><i class="fas fa-plus"></i></button>
    </div>
    <ul class="todoList">

    </ul>
    <div class="footer">
      <span>Vous avez <span class="pendingTasks"></span> tache(s)</span>
      <button>Supprimez tout</button>
    </div>

<script src="script.js"></script>
    <a href="logout.php">Déconnexion</a>
    </div>
  </body>
</html>