<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
// Get the image and convert into string
// include_once "koneksi.php";
echo "Silahkan Copy Hasil <br>";

  if(isset($_POST['submit'])){
      $nama = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];	
      move_uploaded_file($file_tmp, $nama);
      $s = file_get_contents($nama);
      $data = base64_encode($s);
      $src = 'data:'.mime_content_type($nama).';base64,'.$data;
      echo "<textarea id='w3review' name='w3review' rows='10' cols='50'>".$src."</textarea> <br>";
      
  }
  
// $img = mysqli_query($koneksi,"SELECT img_name FROM upload ORDER BY id DESC LIMIT 1");
// $d = mysqli_fetch_array($img);
// $s = file_get_contents($d['img_name']);
      
//     // Encode the image string data into base64
//     $data = base64_encode($s);
//     $src = 'data:'.mime_content_type($d['img_name']).';base64,'.$data;
//     // Display the output
//     echo "silahkan copy code berikut <br>";
//     echo "<textarea id='w3review' name='w3review' rows='10' cols='50'>".$src."</textarea> <br>";
      echo "<a href='input.php'>Kembali</a> <br>";
//     echo "<img src=".$d['img_name']." alt='hello' width='500' height='600'>";