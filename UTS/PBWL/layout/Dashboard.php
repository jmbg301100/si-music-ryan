<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik UIN Sumatera Utara Medan</title>
    <link rel="stylesheet" href="layout/assets/css/style.css" type="text/css">
</head>
<body>
    <main>
    <header>
        <img src="layout/assets/image/musik.jpg" alt="IMG" >
        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">Dashboard</a> 
            </li>
            <li>
                <a href="indexa.php">Artist</a> 
            </li><li>
                <a href="index1.php">Album</a> 
            </li><li>
                <a href="index2.php">Played</a> 
            </li><li>
                <a href="index3.php">Track</a> 
            </li>
            <li>
                <a href="login_logout.php ">logout</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 Ryan Affandi Damanik
    </footer>
      
   
    </main>
</body>
</html>