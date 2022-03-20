<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header style="background-color: gainsboro">
<nav style="display: flex; align-items: center; padding: 10px; border-bottom: 1px solid black">
        <ul style="margin-right: 50px; display: flex; list-style-type: none; gap: 10px">
          <li>
            <i class="bi bi-square-fill"></i>
            <a>Belanja Online</a>
          </li>
        </ul>
</nav>
</header>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			 <span class="badge badge-default"><h4>Form Nilai</h4></span>
		</div>
	</div>
</div>
    <div class="container">
        <form class="form-horizontal mt-5" method="POST" action="form_nilai.php">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="select">Mata Kuliah</label> 
                <div class="col-8">
                <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <footer style="display: flex; align-items: center; padding: 10px; border-bottom: 1px solid black">

</footer>
        </form>
        <br>
        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama_lengkap'];
            $mata_kuliah = $_POST['mata_kuliah'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

           
            $persentase_uts = (30 * $nilai_uts) / 10;
           

            $persentase_uas = (35 * $nilai_uas) / 10; 
          

            $persentase_tugas = (35 * $nilai_tugas) / 10;
            
            $nilai_total =($persentase_uts + $persentase_uas + $persentase_tugas) / 10;

            echo 'Nama : ' . $nama;
            echo '<br />Mata Kuliah : ' . $mata_kuliah;
            echo '<br />Nilai UTS : ' . $nilai_uts;
            $grade_uts = '';
            if ($nilai_uts >= 90) {
                echo "<br />Nilai UTS anda cukup";
                
            } else {
                ($grade_uts <= 55);
                echo "<br />Nilai UTS tidak cukup";
            }

            
            echo '<br />Nilai UAS : ' . $nilai_uas;
            $grade_uas = '';
            if ($nilai_uas >= 55) {
                echo "<br />Nilai UAS anda cukup";
            } else {
                ($grade_uas <= 55);
                echo "<br />Nilai UAS anda tidak cukupi";
            }

            

            echo '<br />Nilai Tugas : ' . $nilai_tugas;
           
            if ($nilai_tugas >= 55) {
                echo "<br />Nilai TUGAS anda cukup";
            } else {
                ($nilai_tugas <= 55 );
                echo "<br />Nilai TUGAS anda tidak cukup";
            }

            echo '<br />Nilai Total : ' . $nilai_total;

            $grade_total = '';
            if ($nilai_total>85)
            echo("<br/>Hasil : A");
            elseif ($nilai_total>70)
            echo("<br/>Hasil : B");
            elseif ($nilai_total>56)
            echo("<br/>Hasil : C");
            elseif ($nilai_total>36)
            echo("<br/>Hasil : D");
            elseif ($nilai_total<35)
            echo("<br/>Hasil : E");
             else
            echo("<br/>Hasil : I");
            

          
            switch ($grade_total) {
                case 'A';
                    echo '<br />Predikat nilai : Sangat Memuaskan';
                    break;

                case 'B';
                    echo '<br />Predikat nilai : Memuaskan';
                    break;
                
                case 'C';
                    echo '<br />Predikat nilai : Cukup';
                    break;

                case 'D';
                    echo '<br />Predikat nilai : Kurang';
                    break;

                case 'E';
                echo '<br />Predikat nilai : Sangat Kurang';
                break;
                
                default:
                    echo '<br />Predikat nilai : TIDAK LULUS';
                    break;
            }
        }
        ?>
    </div>
</body>
</html>