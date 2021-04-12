<?php
    include_once './connection.php';

    $delReg = $_GET['id'];
    echo $delReg;
    mysqli_query($conndb, "DELETE FROM events where idEvent='$delReg';");
?>
<script type="text/javascript">
    window.location="../Redirec/Eventsmgmt.php";
</script>