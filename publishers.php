<?php require_once 'includes/header.php'  ?>

<?php 
require_once 'actions/db_conn.php';

if ($_GET["id"]){
    $id = $_GET['Publisher_ID'];


   echo $sql = "SELECT * FROM publisher WHERE Publisher_ID = $id";
   $result = $connect->query($sql);
   
   $connect->close();
}
?>

<?php
    if ($result->num_rows == 0) {
        echo "hey nothing here";
    } elseif ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
           echo  "<tr>
               <td>" .$row['Publisher_ID']."</td><br>
               <td>" .$row['P_name']."</td><br>
               <td>" .$row['P_address']."</td><br>
               <td>" .$row['P_size']."</td><br>
               <td>" .$row['Media_ID']."</td><br>
               <td>" .$row['title']."</td><br>
               <td>" .$row['image']."</td><br>
               <td>" .$row['ISBN']."</td><br>
               <td>" .$row['descrpt']."</td><br>
               <td>" .$row['publish_date']."</td><br>
               <td>" .$row['mediastyle']."</td><br>
               <td>" .$row['status']."</td><br>
               <td>" .$row['fk_Publisher']."</td><br>
               <td>" .$row['fk_Author']."</td><br>

           </tr>" ;
       
   } else  {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $value) {
        echo  "<tr>
        <td>" .$value['Publisher_ID']."</td><br>
        <td>" .$value['P_name']."</td><br>
        <td>" .$value['P_address']."</td><br>
        <td>" .$value['P_size']."</td><br>
        <td>" .$value['Media_ID']."</td><br>
        <td>" .$value['title']."</td><br>
        <td>" .$value['image']."</td><br>
        <td>" .$value['ISBN']."</td><br>
        <td>" .$value['descrpt']."</td><br>
        <td>" .$value['publish_date']."</td><br>
        <td>" .$value['mediastyle']."</td><br>
        <td>" .$value['status']."</td><br>
        <td>" .$value['fk_Publisher']."</td><br>
        <td>" .$value['fk_Author']."</td><br>

    </tr>" ;
    }
    
   }

?>