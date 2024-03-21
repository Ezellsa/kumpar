<?php //Tag pembuka yang menandakan awal kode PHP.
class Logout extends JI_Controller// Mendefinisikan kelas bernama Logout yang memperluas kelas JI_Controller. Ini berarti Logout mewarisi properti dan metode dari JI_Controller.
{
    public function __construct()// Metode konstruktor, dipanggil ketika objek dari kelas dibuat. Metode ini memanggil konstruktor dari kelas induk (JI_Controller) menggunakan parent::__construct().
    {
        parent::__construct();
    }
    public function index()//Metode bernama index, yang berfungsi sebagai metode default yang biasanya dipanggil ketika kelas diakses. Tidak mengambil parameter.
    {
        $data = array();//Deklarasi array kosong yang diberi nama $data.
        $sess = $this->getKey();//Memanggil metode getKey() pada objek saat ini ($this). Hasilnya diberikan ke variabel $sess.
        if (!is_object($sess)) {
            $sess = new stdClass();//Memeriksa apakah $sess bukan objek. Jika benar, membuat instansi baru dari kelas stdClass dan memberikannya ke $sess.
        }
        $sess->user = new stdClass();//Membuat instansi baru dari kelas stdClass dan memberikannya ke properti user dari objek $sess.
        $this->setKey($sess);//Memanggil metode setKey() pada objek saat ini ($this) dan meneruskan $sess sebagai argumen.
        redir(base_url("login"), 0);//Mengalihkan pengguna ke URL yang ditentukan oleh base_url("login") dengan penundaan 0 detik.
    }
}