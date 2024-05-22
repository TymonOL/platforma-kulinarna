<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DodanePrzepisy</title>
    <link rel="stylesheet" href="PrzepisyDodane.css">
</head>

<body>
    <header class="flex-container topnav">
        <!-- Logp strony -->
        <img src="Jedzenie.jpg" id="logo" alt="Przepisy">
        <!-- wyszukiwanie bazy danych -->
        <form action="search.php" method="get">
            <!-- pole wyszukiwania -->
            <input type="text" name="search" id="search" placeholder="Wyszukiwanie">
            <!-- button wyszukiwania  -->
            <input type="submit" value="Szukaj">
            </form>

            <!-- przycisk koszyk -->
            <div>
            <a href="Dodane.html">Dodaj Przepis</a>
            </div>
    </header>

<main class="flex-container-wrap">
    



    <?php
      include "display_products.php";
       ?>
     </main>  
</body>

</html>