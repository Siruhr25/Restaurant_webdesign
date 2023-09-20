<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="icon" type="image/x-icon" href="./Assets/newone.png">
    <!--link the CDN link here-->
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    >
     </script>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

         <link rel="stylesheet" type="text/css" href="style.css" />
         <div class="bg">
             <div class="container">
</head>
<body>
    <div class="text-block lg">
    <h2 style="padding-left:25px;">  Your Registration..</h2>    
    <h3 style="color: yellow;">Successfully!!!...</h3>
 </div>
   
    <style>
        .container{
            
            display:block;
            justify-content: center;
            align-items: center;
             width: 70%;
             height: 50%;
             opacity: 180%;
             background-color: rgba(255, 255, 255, 0.5);
         
             
         }
        


        .subscribe-input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .subscribe-button {
            padding: 12px 24px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>

<body>
    
    <div class="subscribe-container">
        <h5>Subscribe to our Website</h5>
        <p>Get the latest updates delivered straight to your inbox.</p>
        <form action="index.html" method="post">
            <input type="email" class="subscribe-input" name="email" placeholder="Enter your email address" required>
            <button type="submit" class="subscribe-button" onclick="alert('Thank you for Subscribing..return home page');">Subscribe</button>
        </form>
    </div>
    </div>





    
</body>
</html>

    

<?php
    $username=$_POST['name'] ;
    $email=$_POST['email'];
    $number=$_POST['num'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];

    //daatabase connection
    $conn = new mysqli('localhost','root','','mydb');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registration(Name,Email,Number,dob,Gender,Address)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss",$username,$email,$number,$dob,$gender,$address);
        $stmt->execute();
        echo '<script>alert("your registration Successfully!!!");</script>';       
        $stmt->close();
    }

 ?>
