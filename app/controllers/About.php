<?php 


class About {

 public function index( $nama = 'fahnal', $pekerjaan = 'Mahasiswa' )
 {
  echo "Hallo, nama saya $nama, Pekerjaan saya adalah seorang $pekerjaan";
 }

 public function page()
 {
  echo 'about/page';
 }
}
