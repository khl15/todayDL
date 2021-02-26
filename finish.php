<?php 
require_once('koneksi.php');
session_start();
if (isset($_GET['jurusan'])) {
    $dt = explode("@",$_GET['jurusan']);
}
$query = "UPDATE `".$dt[0]."` SET `code`=null , `pilih`='".$dt[1]."' WHERE `code`='".$_SESSION['codeId']."'";
mysqli_query($koneksi, $query);
session_unset();
session_destroy();
?>

<script>
setInterval( () => {
    window.location.replace("http://www.pemilufasya.com");
}, 100);
</script>