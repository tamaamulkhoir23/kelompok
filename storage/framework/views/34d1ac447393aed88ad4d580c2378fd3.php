<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #f7f7f7; font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; min-height: 100vh;">
    <div class="container-fluid" style="display: flex; flex: 1;">
        <div class="col-md-2" style="background-color: black; padding: 20px; color: #fff;">
            <!-- Baris untuk admin info -->
            <div style="text-align: center; margin-bottom: 20px;">
                <div style="font-size: 24px; color: #fff;">
                    <img src="data:image/png;base64,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" style="width: 100px; height: 100px;">
                    Admin <!-- Ganti dengan nama admin yang sesuai -->
                </div>
            </div>

            <nav class="nav flex-column" style="width: 100%;">
                <a class="nav-link active" href="/dashboard" style="color: #fff; font-weight: bold;">Dashboard</a>
                <a class="nav-link" href="/dataperiodik" style="color: #fff;">Data Pemantauan Periodik</a>
                <a class="nav-link" href="/databuah" style="color: #fff;">Data Buah</a>
                <a class="nav-link" href="/datasuhu" style="color: #fff;">Data Suhu</a>
                <a class="nav-link" href="/datagas" style="color: #fff;">Data Gas</a>
            </nav>
        </div>
        <div class="col-md-10" style="background-color: #fff; padding: 20px;">
            <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px; color: black; padding: 10px 20px;"><?php echo $__env->yieldContent('header'); ?></h1>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmM" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\kelompok\resources\views/layout.blade.php ENDPATH**/ ?>