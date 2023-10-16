<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin-top: 10%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .form-group input[type="checkbox"] {
            margin-top: 10px;
        }
        .form-group .form-text {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #777;
        }
        .form-group .error {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #ff0000;
        }
        .form-group button {
            background-color:blue;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
        }
        .judul{
            text-align: center;

        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="judul">Admin Login</h3>
        <form>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" required autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <button href="/dashboard" type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH C:\Users\User\Desktop\kelompok\resources\views/login.blade.php ENDPATH**/ ?>