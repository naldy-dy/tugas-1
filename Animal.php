<?php 

	class Hewan{
		public $jumlah_kaki, $terbang, $suara;	
	}
// status kaki
	class kaki{
	}
	$jumlah_kaki = new kaki;
	$jumlah_kaki->kaki2 = "Memiliki kaki sebanyak : 2";
	$jumlah_kaki->kaki4 = "Memiliki kaki sebanyak : 4";

// status terbang
	class terbang{
			}
		$terbang = new terbang;
		$terbang->bisa = "Bisa Terbang";
		$terbang->tidak = "Tidak Bisa Terbang";

// ------------------------------------------------------------------
	class Kucing{
		public function bersuara(){
			return $this->suara;
		}
	}
	// input kucing******************************************
	$momo = new Kucing;
	$momo->nama = ucwords("momo ");
	$momo->suara = " miyau";

	// echo kucing...........................................
	echo $momo->nama. " adalah Kucing <br>";
	echo $jumlah_kaki->kaki2;
	echo "<br>";
	echo $terbang->tidak. "<br>";
	echo $momo->nama." Memiliki suara" .$momo->bersuara();
	echo "<hr>";

// --------------------------------------------------------------
	class Anjing{
		public function bersuara(){
			return $this->suara;
		}
	}
	// input anjing***********************************************
	$doggo = new Anjing;
	$doggo->nama = " Doggo ";
	$doggo->suara = " Auggg Augg ";
	// echo anjing................................................
	echo $doggo->nama." Adalah Anjing <br>";
	echo $jumlah_kaki->kaki4;
	echo "<br>";
	echo $terbang->tidak. "<br>";
	echo $doggo->nama." Memiliki suara" .$doggo->bersuara();
	echo "<hr>";

// --------------------------------------------------------------
	class Elang{
		public function bersuara(){
			return $this->suara;
		}
	}
	// input anjing***********************************************
	$zya = new Elang;
	$zya->nama = " Zya ";
	$zya->suara = " nyiiippp ";
	// echo Elang................................................
	echo $zya->nama." Adalah Elang <br>";
	echo $jumlah_kaki->kaki2;
	echo "<br>";
	echo $terbang->bisa. "<br>";
	echo $zya->nama." Memiliki suara" .$zya->bersuara();
	echo "<hr>";


	// --------------------------------------------------------------
	class Angsa{
		public function bersuara(){
			return $this->suara;
		}
	}
	// input anjing***********************************************
	$Masha = new Angsa;
	$Masha->nama = " Masha ";
	$Masha->suara = " kwaaak ";
	// echo Elang................................................
	echo $Masha->nama." Adalah Angsa <br>";
	echo $jumlah_kaki->kaki2;
	echo "<br>";
	echo $terbang->bisa. "<br>";
	echo $Masha->nama." Memiliki suara" .$Masha->bersuara();
	echo "<hr>";