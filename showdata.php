<?php

$k = $_POST['id'];
$k = trim($k);
$con = mysqli_connect("localhost","root","","onlineexaminationsystem");
$sql = "SELECT * FROM examsetup WHERE examDate='{$k}'";
$res = mysqli_query($con, $sql);
while($rows = mysqli_fetch_array($res)){
?>

<tr>
    <td><?php echo $rows['moduleCode']; ?></td>
    <td><?php echo $rows['answerPaperPDF']; ?></td>
    

</tr>

<?php
}
echo $sql;
?>