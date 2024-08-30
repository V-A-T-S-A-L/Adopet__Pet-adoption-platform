<?php
session_start();

    include("db.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $user_name = $_POST['user_id'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $add = $_POST['add'];

        $query = "INSERT INTO users (username, password, email, phone, address) VALUES('$user_name', '$password', '$email', '$phone', '$add')";

        $result = mysqli_query($conn, $query);
        
        if($result) {
            header("Location: login.php");
        }
    }
?>
<link rel="stylesheet" type="text/css" href="../css/MStudentLogin.css">
</head>
<body>
  <div class="wrapper">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
      <h1>Create Account</h1>
      <div class="input-box">
        <input type="text" name="user_id" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Email-id" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" name="phone" placeholder="Contact No." required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" name="add" placeholder="Address" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn">Register</button><br><br>
    </form>
  </div>
</body>
</html> 

<style>
  body {
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../images/back.avif);
  }
  

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-size: cover;
  background-position: center;
}
.wrapper{
  width: 420px;
  background: #FAF9F6;
  
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: black;
  border-radius: 12px;
  padding: 30px 40px;
}
.wrapper h1{
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;

  margin: 30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: black;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: black;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}

.wrapper .btn{
  width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}

.SignUp{
  text-decoration: none;
  color: black;
}
</style>