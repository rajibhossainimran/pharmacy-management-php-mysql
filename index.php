 <!-- import images  -->
 <?php 
    //   include('/asstes/images/login_background.avif');
      $img = './asstes/images/login-bg.png';
      $logo = './asstes/images/Pharmanest1.png';
      $background = './asstes/images/login-background.jpg';
     ?>
<?php 
    // include database and set connection 
    include_once "./config/config.php";
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(! $db){
        throw new Exception('Database connection failed: ' . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>login</title>
    <style>
        .main-container{
            background: linear-gradient(to left, rgba(255,255,255,0) 40%,
              rgba(255,255,255,1)), url('<?php echo $background; ?>');
            background-size: cover;       /* Makes the image cover the entire element */
            background-position: center;  /* Centers the image */
            background-repeat: no-repeat; /* Prevents tiling */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
    </style>
</head>
<body>
   
<div class="main-container bg-opacity-20">
    
<section style="box-shadow: rgba(0,0,0,0.3)2px 3px 10px 3px; border-radius: 25px;padding:30px 10px;" class="container flex justify-center align-middle mx-auto">

<div class="form-container flex justify-center align-middle mx-auto">
    <form action="" method="post">
    <img src="<?php echo $logo; ?>" alt="logo" width="450vh" height="auto">
        <!-- select user part start  --> 
            <label class="input input-bordered flex items-center gap-2 border-teal-600 text-teal-900 text-xl">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="h-6 w-6 opacity-90">
                <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
            </svg>
            <select name="user-roll" class="select select-bordered w-full border-2 border-teal-600 rounded-md text-teal-900 text-xl focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <option value="admin">Admin</option>
                    <option value="managers">Manager</option>
                    <option value="salesmans">Salesman</option>
                    </select>
            </label>

        

        <!-- email part start  -->
             <label class="text-xl font-medium my-3 block" for="email">Email</label>           
            <label class="input input-bordered flex items-center gap-2 border-teal-600 text-teal-900 text-xl">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="h-6 w-6 opacity-90 text-teal-900">
                <path
                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                <path
                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
            </svg>
            <input type="text" class="grow text-xl font-semibold" placeholder="Email" name="email" />
            </label>
            <!-- password part start  -->
            <label class="text-xl font-medium my-3 block" for="password">Password</label>
            <label class="input input-bordered flex items-center gap-2 border-teal-600 text-teal-900 text-xl">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="h-6 w-6 opacity-90 text-teal-900">
                <path
                fill-rule="evenodd"
                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                clip-rule="evenodd" />
            </svg>
            <input type="password" class="grow text-xl font-semibold" placeholder="password" name="password"/>
            </label>
            <button class="btn bg-teal-900 hover:bg-teal-600 text-white px-8 my-4 rounded-3xl" type="submit" name="btnLogin">SIGNIN</button>
    </form>
</div>
<!-- medicine image container  -->
<div class="image-container">
<img src="<?php echo $img; ?>" alt="Login Background" style="width: 100%; height: auto;">
</div>
</section>
</div>

</body>
</html>