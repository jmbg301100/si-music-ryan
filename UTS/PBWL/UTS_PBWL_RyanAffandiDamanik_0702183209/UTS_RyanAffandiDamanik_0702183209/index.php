<?php

 require_once "app/artist.php";

 $musik = new musik();
 $rows = $musik->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $musik->hapus($id);
     header("location:index.php");

 }

 ?>
 <a href="index.php">Artist</a> |
 <a href="index1.php">Album</a> |
 <a href="index2.php">Played</a> |
 <a href="index3.php">Track</a> |
 <br>
 <a href="input.php">Tambah Artist</a> |

 <table border= "1" >
 <tr>
 <td>ID</td>
 <td>NAMA</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>
 
 

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['artist_id']; ?></td>
 <td><?php echo $row['artist_name']; ?></td>
<td><a href="edit.php?id=<?php echo $row['artist_id'];?>">Edit</a></td>
<td><a href="index.php?hapus=<?php echo $row['artist_id'];?>">Hapus</a></td>
 </tr>

 <?php } ?>
 </table>