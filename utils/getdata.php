
<?php 
    include "../indexBackend.php";
/*<!DOCTYPE html>
<html>

    
   <style>
    table {
    
     border: 1px solid black;
    width: 100%;
    }

    td{
    border: 3px solid #dddddd;
    text-align: left;
    padding: 8px;
     border-bottom: 1px solid #ddd;
    
    }

    th{
    height: 50px;
    border: 10px solid #dddddd;
    text-align: left;
    padding: 5px;
     border-bottom: 1px solid #ddd;
    }
    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
    }
</style>
</html>
    >?*/
    $query = "SELECT * FROM POST";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           
            echo"Past Posts";
            echo "<p>";
            echo"Date and Time of Post     " . $row['PostTime'] ;
            echo "<br>";
            echo "Post ID  ".$row['Post_id'];
            echo "<br>";
            echo "Post Content   ".$row['Post_content'];
            echo "</p>";

            /*<table>
            <tr>
            <th>echo"Past Posts"</th>
            </tr>
            <tr>
            <td>
            echo "<p>";
            echo"Date and Time of Post     " . $row['PostTime'] ;
            echo "<br>";
            echo "Post ID  ".$row['Post_id'];
            echo "<br>";
            echo "Post Content   ".$row['Post_content'];
            echo "</p>";
            </td>
            </tr>
            </table>*/
        }

    } else {
        echo "<h1> No posts found! </h1>";
    }
    