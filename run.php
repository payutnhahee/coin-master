//readline("Total : --> ");
<?php 
if (isset($_POST['submit'])) {

	require 'api-coinmaster.php';
	$class = new coinmaster;
	popen('cls', 'w');  
	echo "\e[91m================================== [ Nobi-Cheat COMEBACK ] ==================================\e[0m\n";
	$link = $_POST['link'];
	$count = $_POST['count'];
	popen('cls', 'w');
	echo "\e[91m------------------ [ 0/".$count." ] ------------------\e[0m\n";
	$bossnz = preg_match_all('/~[^}]*?s=m/', $link, $a);
	if ($bossnz == NULL) {
		$bossnz = preg_match_all('/~[^}]*/', $link, $a);
		$edit1 = str_replace('~', '', $a[0]);
		$edit2 = str_replace('', '', $edit1[0]);
		$code = $edit2;
	}else{
		$edit1 = str_replace('~', '', $a[0]);
		$edit2 = str_replace('?s=m', '', $edit1[0]);
		$code = $edit2;
	}
	if (empty($code)) {
		echo "ERROR : TryAgain";
		exit();
	}
	for ($i=0; $i < $count; $i++) {
		$start = $class->addspin($link);
		$number = $i+1;
		popen('cls', 'w');
	echo "\e[92mGame COIN MASTER | SPIN Nobi-Cheat \e[0m\n";
		print_r("[ ".$number."/".$count." ] - Code : ".$code."\n");
	}

?> 

