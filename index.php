<?php require_once ('template/include.php');?>

<?php 
$conn = BD::connect();
$user = BD::selectOneRow($conn, "SELECT * FROM users WHERE id=1");
		BD::close($conn);
?>

<?php require_once 'template/header.php';?>
<?php require_once 'template/main-section.php';?>

<?php require_once 'template/red-diploma-section.php';?>
<?php require_once 'template/best-client-section.php';?>
<?php require_once 'template/blank-sample-section.php';?>
<?php require_once 'template/instruction-section.php';?>
<?php require_once 'template/blank-section.php';?>
<?php require_once 'template/last-section.php';?>

<?php require_once('template/footer.php');?>
