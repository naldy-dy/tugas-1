<?php 

	class Hewan{

	}


// class kucing
	class Kucing{
		function bersuara(){
		return $this->jumlah_kaki;
		}
	}


	// input kucing
	$momo = new Kucing;
	$momo->jumlah_kaki = 4;
	echo "$momo->bersuara()";


 ?>