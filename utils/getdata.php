<!DOCTYPE html>
<html>    
   <style>
    table {    
        border: 1px solid black;
        width: 100%;
        font-family: sans-serif;
        text-align: center;
        background-color: #b3b3ff;
    }

    td{
        border: 3px solid #dddddd;
        text-align: center;
        padding: 8px;
        border: 3px solid #73AD21;
        border-bottom: 1px solid #ddd; 
        text-shadow: 1px 1px red;   
    }
td:hover{
    background-color: white;
    color: #004d00;
    text-shadow: 1px 1px black;
    font-size: 20px;
    cursor: wait;
}
    th {
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

<?php 
    include "../indexBackend.php";
    
    $query = "SELECT * FROM post";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<table>
            <tr>
            <th> Past Posts </th>
            </tr>
            <tr>
            <td>";
            echo "<p>";
            echo"Date and Time of Post     " . $row['PostTime'] ;
            echo "<br>";
            echo "Post ID  ".$row['Post_id'];
            echo "<br>";
            echo "Post Content :  ".$row['Post_content'];
            echo "</p>";
            echo "</td>
            </tr>
            </table>";
        }

    } else {
        echo "<h1> No posts found! </h1>";
    }
?>