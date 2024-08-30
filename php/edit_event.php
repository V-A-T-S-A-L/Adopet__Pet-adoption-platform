<?php
session_start();

    include("db.php");

    $user_id = $_SESSION['user_id'];

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM events WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $ans = mysqli_fetch_assoc($result);
    $defTitle = $ans['title'];
    $defDesc = $ans['description'];
    $defDate = $ans['date'];

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $title = $_POST['title'];
        $descr = $_POST['descr'];
        $date = $_POST['date'];

        $query = "UPDATE events SET title='$title', description='$descr', date='$date' WHERE id='$id'";

        $result = mysqli_query($conn, $query);
        
        if($result) {
            header("Location: events.php");
        }
    }
?>
<link rel="stylesheet" type="text/css" href="../css/MStudentLogin.css">
</head>
<body>
  <div class="wrapper">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
      <h1>Edit Event</h1>
      <br>
      <h2><?php echo $defTitle;?></h2>
      <div class="input-box">
        <input type="text" name="title" value="<?php echo htmlspecialchars($defTitle); ?>" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" name="descr" value="<?php echo htmlspecialchars($defDesc); ?>" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="date" name="date" value="<?php echo htmlspecialchars($defDate); ?>" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn">Login</button><br><br>
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

h2 {
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