@extends('layout')
    @section('konten')
        <h3>Nur Azizah</h3>
        <div class="row">
            <div class="col-sm-6">
                <img src="/foto/g4.webp" alt="" width="90%">
                <h5>Hello!!</h5>
        <?php foreach ($Data_Diri as $row) :?>
            {{$row}} <br>
            <?php endforeach; ?>

            </div>
            <div class="col-sm-6">
                <p>
                    Name                   : Nur Azizah 
                <p>
                    Tempat Tanggal Lahir   : Muara Bengkal, 02 Juli 2001
                <p>
                     Agama                 : Islam
                <p>
                      Status               : Mahasiswi
                </p>
                <p>
                Nama saya Nur Azizah. Dikenal dengan panggilan Azizah. Umur saya 22thn. Saya masih menjadi Mahasiswi di salah satu Universitas Swasta di Jawa Tengah. Keseharian saya selain menjadi mahasiswa, saya juga mengikuti sebuah pekerjaan yang dikenal dengan kata freelancer. Namun selain menjadi freelancer, saya juga memiliki sebuah usaha yang terlah terdaftar dalam usaha UMKM yang dikenal dengan nama CHIN'S SNACK. Usaha ini adalah usaha UMKM yang menyediakan seperti makanan dan snack, salah satu makanan yang best seller adalah "ayam kemangi". Selain itu kami pun menyediakan hampers lebaran ataupun hampers untuk moment bahagia tertentu yang ingin kalian rayakan. Chin's pun mempunyai cemilan best seller yaitu "pisang keju".
                </p>
                <p>
                Foto Produk :
                <p>
                <img src="/foto/prod.jpg" alt="" width="30%">
                <img src="/foto/keju.jpg" alt="" width="30%">
                <img src="/foto/ham.png" alt="" width="30%">
                    
            </div>
    
        </div>
        
    @endsection

   