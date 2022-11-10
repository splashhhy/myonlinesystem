<?php

$k = $_POST['id'];
$k = trim($k);
$con = mysqli_connect("localhost","root","","onlineexaminationsystem");
$sql = "SELECT * FROM examoutput WHERE studentNumber='{$k}'";
$res = mysqli_query($con, $sql);
while($rows = mysqli_fetch_array($res)){
?>

<tr>
    <td><?php echo $rows['transactionID']; ?></td>
    <td><?php echo $rows['startTime']; ?></td>
    <td><?php echo $rows['uploadTime']; ?></td>
    <td><?php echo $rows['moduleCode']; ?></td>

</tr>

<?php
}
echo $sql;
?>




