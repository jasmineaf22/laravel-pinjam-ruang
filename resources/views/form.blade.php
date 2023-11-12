@extends('layout.layout')
@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama Peminjam:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama peminjam">
                  </div>
                  <div class="form-group">
                    <label for="NIM">NIM:</label>
                    <input type="text" name="NIM" class="form-control" id="NIM" placeholder="Masukkan NIM">
                  </div>
                  <div class="form-group">
                    <label for="org">Nama organisasi:</label>
                    <input type="text" name="org" class="form-control" id="org" placeholder="Masukkan nama organisasi">
                  </div>
                  <div class="form-group">
                    <label for="event">Nama kegiatan/acara:</label>
                    <input type="text" name="event" class="form-control" id="event" placeholder="Masukkan nama acara">
                  </div>
                  <div class="form-group">
                    <label for="date">Hari/Tanggal kegiatan:</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Masukkan tanggal">
                  </div>
                  <div class="form-group">
                    <label for="room">Ruangan yang dipinjam:</label>
                    <input type="dropdown" name="room" class="form-control" id="room">
                  </div>
                  <div class="form-group">
                    <label for="qty">Jumlah peserta:</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="Masukkan jumlah peserta">
                  </div>
                  <div class="form-group">
                    <label for="phone">Nomor HP:</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Masukkan nomor HP">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Saya setuju dengan <a href="#snk">Syarat dan ketentuan</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
            </div>
            <!-- /.card -->
            
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          

          
          <div class="col-md-6">
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Syarat dan Ketentuan </h3>
                
              </div>
              <div class="card-body" id="snk">
                <p>A. ATURAN UMUM
                  1.Peminjaman ruangan dilayani selama jam kerja kantor (08.00-16.00 WIB) dan pengguanaan ruangan dimulai setelah ruang kelas selesai digunakan untuk kegiatan perkuliahan (hari kerja : 17.50-21.00 WIB; hari libur = 07.00 – 21.00 WIB)
                  2.Gedung kuliah umum adalah fasilitas ruangan klasikal yang digunakan untuk kegiatan yang bersifat akademik dan keorganisasian (kuliah, rapat dan kegiatan organisasi lainnya).
                  3.Gedung kuliah umum meliputi gedung A, gedung C, gedung E dan gedung F
                  4.Gedung A terdiri dari 3 ruang kelas yang dapat dipinjamkan
                  5.Gedung C terdiri dari 7 ruang kelas yang dapat dipinjamkan
                  6.Gedung E terdiri dari 14 ruang kelas yang dapat dipinjamkan
                  7.Gedung F terdiri dari 12 ruang smart class yang dapat dIpinjamkan, 3 ruang rapat dan 1 aula.
                  8.Area luar gedung meliputi area yang berada didalam lingkungan fakultas teknik Unsoed (pedopo,lapangan,halaman dan area lainnya)
                  9.Pengguna gedung kuliah umum adalah mahasiswa, dosen dan pegawai Fakultas Teknik Universitas Jenderal Soedirman.
                  10.Izin penggunaan ruangan ditujukan kepada Wakil Dekan Umum dan Keuangan Up Koordinator Tata Usaha Up Sub Koordinator Umum dan Keuangan
                  11.Apabila ada dua kegiatan yang bersamaan waktu dan tempat pelaksaannya maka yang diutamakan adalah kegiatan yang berhubungan dengan perkuliahan (KBM)
                  12.Pihak pengelola bisa membatalkan peminjaman dari calon pengguna/peminjam yang sudah dijadwalkan, dikarenakan ada kegiatan/penggunaan ruangan oleh pihak dan untuk kepentingan acara kedinasan Fakultas Teknik Unsoed, selanjutnya pihak pengelola akan menghubungi pengguna/peminjam yang bersangkutan.
                  B. ATURAN KHUSUS
                  Syarat penggunaan ruangan bagi mahasiswa di Lingkungan Fakultas Teknik Unsoed ditentukan sebagai berikut:
                  1.Mahasiswa mengisi form peminjaman ruangan pada link: http://bit.ly/PinjamRuangFTUnsoed disesuaikan dengan jadwal ruangan yang masih kosong. Pemesanan peminjaman ruangan maksimal untuk 30 hari kedepan (jadwal ruangan dapat dilihat pada link: http://bit.ly/PinjamRuangFTUnsoed)
                  2.Mengajukan surat permohonan peminjaman ruangan yang diketahui oleh Wakil Dekan III FT/ Ketua Jurusan/Pembina UKM
                  3.Surat peminjaman yang telah disetujui diserahkan ke bagian Umum dan Keuangan sebagai pengelola ruangan maksimal 5 hari kerja sebelum pelaksanaan kegiatan
                  4.Peminjam menggandakan surat permohonan peminjaman yang terlah didisposisi rangkap 2 dengan rincian sebagai berikut:
                  a.Copy 1 diserahkan kepada verifikator peminjaman ruangan sebagai arsip
                  b.Copy 2 diserahkan kepada penyedia ruangan sebagai pemberitahuan
                  c.Surat asli diserahkan kepada petugas jaga/SATPAM serta menyerahkan KTM saat hari pelaksanaan kegiatan untuk akses penggunaan ruangan
                  C. TATA TERTIB
                  1.Pengguna/peminjam gedung kuliah umum dilarang menggunakan senjata, berkelahi, mengkonsumsi minuman keras, narkoba dan obat-obatan lain yang memabukan.
                  2.Pengguna/peminjam dilarang merusak gedung dan fasilitasnya, corat-coret, merokok, meludah dan membuang sampah sembarangan.
                  3.Pengguna/peminjam bersedia/wajib menjaga keamanan dan ketertiban agar tidak terjadi keributan.
                  4.Pengguna/peminjam bersedia menjaga sopan santun dalam berpakaian dan berperilaku.
                  5.Apabila terjadi kehilangan dan atau kerusakan fasilitas gedung kuliah umum, maka pengguna/peminjam bertanggungjawab atas hal tersebut.
                  6.Pengguna/peminjam tidak diperkenankan memindahkan fasilitas gedung kuliah umum tanpa izin pengelola</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      name, org, event, date, room, qty, phone, snk: {
        required: true
      },
    },
    messages: {
      name, org, event, date, room, qty, phone: {
        required: "Tolong masukkan data yang diperlukan"
      },
      terms: "Baca syarat dan ketentuan terlebih dahulu"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
