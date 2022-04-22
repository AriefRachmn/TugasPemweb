<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>P4-OOP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <h1 style="text-align: center;font-family: InsaniBurger">OOP</h1>   
              <br><h1>Class & Lingkaran dan Mahasiswa</h1>   

              <?php 
class Lingkaran {
    private $r;
    const PHI = 3.14;

    public function __construct($r) {
        $this->r = $r;
    }

    public function getLuas() {
        return self::PHI * $this->r * $this->r;
    }

    public function getKeliling() {
        return 2 * self::PHI * $this->r;
    }
}
?>

<?php 
class Mahasiswa{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;//this

    function __construct($nim,$nama,$ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0) return "NIM : ".$this->nim."<br>Nama : ".$this->nama."<br>Predikat : Cukup";
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0) return "NIM : ".$this->nim."<br>Nama : ".$this->nama."<br>Predikat : Baik";
        elseif($this->ipk >= 3.0 && $this->ipk < 3.75) return "NIM : ".$this->nim."<br>Nama : ".$this->nama."<br>Predikat : Memuaskan";
        elseif($this->ipk >= 3.75 && $this->ipk <= 4) return "NIM : ".$this->nim."<br>Nama : ".$this->nama."<br>Predikat : Cum Laude";
    }
}
?>

<?php 


echo "Nilai PHI : " . Lingkaran::PHI . "<br>";
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "Luas Lingkaran 1: " . $lingkaran1->getLuas() . "<br>";
echo "Luas Lingkaran 2: " . $lingkaran2->getLuas() . "<br>";
echo "<hr>";
echo "Keliling Lingkaran 1: " . $lingkaran1->getKeliling() . "<br>";
echo "Keliling Lingkaran 2: " . $lingkaran2->getKeliling() . "<br>";
?>

<?php 

$mahasiswa = new Mahasiswa(12345, "Budi",3.0);
echo $mahasiswa->predikat_ipk();

?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
include_once 'footer.php';
?>

