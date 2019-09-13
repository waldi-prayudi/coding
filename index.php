<?php
//membuat public property
//membuat class mahasiswa
//membuat objek dari atribut mahasiswa
//menampilkam method
//fungsi dari function construct akan mengambil data pada method 

    class Mahasiswa{
      public $Nim , $Nama , $Jurusan , $AsalSma , $AsalS1;
      public function __construct($Nim = "Nim" , $Nama = "Nama", $Jurusan = "Jurusan", $AsalSma = "AsalSma", $AsalS1 = "AsalS1"){
        $this->Nim = $Nim;
        $this->Nama = $Nama;
        $this->Jurusan = $Jurusan;
        $this->AsalSma = $AsalSma;
        $this->AsalS1 = $AsalS1;
      }
      public function getInfoMahasiswa(){
//membuat public method
//menambahkan objek method pada dolar mhs
// dan menampilkannya pada return
	
		$mhs = "Nim : {$this->Nim},<br>
		 		Nama : {$this->Nama},<br>
		  		Jurusan : {$this->Jurusan},<br>
		   		AsalSma : {$this->AsalSma},<br>
		   		AsalS1 : {$this->AsalS1}"; 

		return $mhs;
	
      }
    }

    class MahasiswaStrataSatu extends Mahasiswa {
//membuat objek atau class baru
//menambahkan fugsi method 
//menampilkan dolar mahasiswa 1
      public function getInfoMahasiswa(){
        $mhs = "Mahasiswa 1 : <br><br>".parent::getInfoMahasiswa();
        return $mhs;
      }
    }

    class MahasiswaStrataDua extends Mahasiswa{
//membuat objek atau class baru
//menambahkan fungsi objek mahasiwa 2
//membuat public property
//membuat public method function
      public $AsalS1;
      public function __construct ($Nim, $Nama, $Jurusan, $AsalSma , $AsalS1){
        parent:: __construct($Nim, $Nama, $Jurusan, $AsalSma, $AsalS1);
        $this->AsalS1 = $AsalS1;
      }
      public function getInfoMahasiswa(){

        $mhs = "Mahasiswa 2 : <br><br>".parent::getInfoMahasiswa();
        return $mhs;
      }
    }
//buat objek dari class mahasiswa 
//menampilkan objek mahasiswa 1 dan mahasiswa 2
    $mahasiswa1 = new MahasiswaStrataSatu("F1G118051", "waldi prayudi", "ilmu komputer", "SMAN 1 Lasolo", "UHO");
    $mahasiswa2 = new MahasiswaStrataDua("F1G118051", "waldi prayudi", "ilmu komputer", "SMAN 1 Lasolo", "UHO");
//tampilkan property 
//tampilkan method
	  echo $mahasiswa1->getInfoMahasiswa();
	   echo "<br>";
      echo "<br>";
      echo $mahasiswa2->getInfoMahasiswa();

 ?>
