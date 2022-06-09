<?php 
// session_start();
include_once'session1.php';
?>

<h2>Session variables that was set on page session1</h2>
<?php 
echo 'The first name is'.$_SESSION['firstname'].'.<br>';
echo'And last name is '.$_SESSION['lastname'].'. <br>';
print_r($_SESSION);
$_SESSION['firstname']='Sabin';
echo'The first name is '.$_SESSION['firstname'].'<br>';

?>
<button><a href="destroy_session.php">log Out</a></button>