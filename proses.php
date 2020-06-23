<?php


$mysqli = new mysqli('localhost','root','','crud') or die (mysqli_error($mysqli));



if(isset($_POST['save'])){
    $name       = $_POST['name'];
    $kelas       = $_POST['kelas'];
    $mapel   = $_POST['mapel'];
    $nama_guru  = $_POST['nama_guru'];

    $mysqli->query("INSERT INTO data (name, kelas, mapel, nama_guru) VALUES('$name','$kelas','$mapel','$nama_guru')") or 
            die ($mysqli->error); 


    header("location: Input.php");
        
}   


    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id");

    header("location: Input.php");
}


    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        
        $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die ($mysqli->error());
        if(count($result)==1){
            $row=$result->fetch_array();
            $name=$row['name'];
            $kelas=$row['kelas'];
            $mapel=$row['mapel'];
            $nama_guru=$row['nama_guru'];
        }     
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $kelas = $_POST['kelas'];
        $mapel = $_POST['mapel'];
        $nama_guru = $_POST['nama_guru'];
        $mysqli->query("UPDATE data SET name='$name', kelas='$kelas', mapel='$mapel', nama_guru='$nama_guru' WHERE id=$id") or die ($mysqli->error);

        header("location: Input.php");

        }
