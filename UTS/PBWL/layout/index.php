<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik UIN Sumatera Utara Medan</title>
    <link rel="stylesheet" href="layout/asssets/css/style.css" type=text/css">
</head>
<body>
    <main>
    <header>
        <img src="layout/assets/image/musik.jpg" alt="IMG" >
        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">Home</a> 
            </li>
            <li>
                <a href="index.php?page=login_form ">login</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_index.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 Ryan Affandi Damanik
    </footer>
      
   
    </main>
</body>
</html>