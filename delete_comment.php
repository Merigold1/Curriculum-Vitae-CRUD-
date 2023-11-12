<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cvId = $_POST['cv_id'];



    include 'config.php'; 
    
  
    $query = "DELETE FROM comments WHERE cv_id = $cvId";
    $result = mysqli_query($conn, $deleteQuery);
    if ($result) {
        echo 'Komen berhasil dihapus';
    } else {
        echo 'Terjadi kesalahan saat menghapus komen ' . mysqli_error($conn);
    }
} else {
    echo 'request method invalid';
}

mysqli_close($conn);
?>