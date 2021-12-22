<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<title>Forms</title>
</head>
<!-- <?php
// if (isset($_POST['submit'])) {
//   # code...3
//   $img_name=$_FILES['image']['name'];
//   $tmp_img_name=$_FILES['image']['tmp_name'];
//   move_uploaded_file($tmp_img_name,$img_name);
// }

?> -->
<body>
    <form action="hasil.php" method="post"  enctype='multipart/form-data'>
      <fieldset>
      
        <legend>Your Review:</legend><br>

        <input type="file" name="image">
        <button type="submit" name="submit" value="Submit">Submit Review</button>
      </fieldset>
    </form>

</body>
</html>