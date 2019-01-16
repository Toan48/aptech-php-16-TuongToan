
<style>
th {
    padding: 5px;
}
tr {
    border: 5px solid red;
}

</style>

<table>
    <tr>
    <th>id</th>
    <th>first name</th>
    <th>last name</th>
    <th>email</th>
    <th>role</th>
    </tr>
    <tbody>
<?php
require('./connect.php');
$conn = connectDatabase();

//create sql select
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["fistname"]."</td>";
        echo "<td>".$row["lastname"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["role"]."</td>";
        echo "</tr>";
    }
}
?>
    </tbody>
</table>
