<?php  
$angka = $_POST['cek'];
$arr = str_split($angka);
$tamp = array();
for ($i=0; $i <sizeof($arr); $i++) { 
	for ($b=0; $b <$i ; $b++) { 
		if ($arr[$i]===$arr[$b]) {
				$tamp[] = $arr[$i];
			}	
	}
}
print_r($tamp[0]);
?>