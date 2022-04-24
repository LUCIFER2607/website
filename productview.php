<?php
$connection=mysqli_connect("localhost","root","","product");
$r=mysqli_query($connection,"select * from insertion");

echo "<table border='1' align='center' cellspacing=0 cellpadding=10>
 <tr><th>Heading </th>
<th>Description </th>
<th>Cost</th>
<th>Image</th></tr>";

while($row=mysqli_fetch_array($r))
{

    echo "<tr><td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td></tr>";
}
    echo "</table>"
?>