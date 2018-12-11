    <?php  
    
    $nombre = $_POST['user'];
    $password = $_POST['password'];
    
    $conn = new mysqli("localhost", "root", "root", "Caritas");
     
    
    $consulta = mysqli_query ($conn, "SELECT * FROM User WHERE user = '$nombre' AND Pass = '$password' LIMIT 1");  
    
    if(!$consulta){ 
        header("location: index.php");
        echo mysqli_error($mysqli);
       
    } 
    
    
    
    if($user = mysqli_fetch_assoc($consulta)) {
        header("location: redireccionar.php");
    } else {
        header("location: index.php");
    }
<php>