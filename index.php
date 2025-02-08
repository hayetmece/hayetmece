<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playwrite+IN:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for you</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   <center>
     <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2> For youu..</h2>
            <img src= "Dark Purple and Yellow Cute Illustration Online Shop Logo.png" alt="lo" width="450px" >
             <input type="text" name='name'>
             <br>
             <input type="text" name='price'>
             <br>
             <input type="file" id="file" name='image' style='display:none;'>
             <label for="file">اختيار صورة للمنتج </label>
             <button name='upload'> رفع المنتج</button>
             <br><br>
             <a href="product.php"> Show all products</a>
         </form>

     </div>
<p>
    Developer By  Meceggeum 
</p>



   </center>
</body>
</html>
