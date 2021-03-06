<?php
    // function untuk melakukan koneksi ke database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
        mysqli_select_db($conn, "pw_193040030") or die("Database salah!");
        
        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    // fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        $img = htmlspecialchars($data['img']);
        $merek = htmlspecialchars($data['merek']);
        $ukuran = htmlspecialchars($data['ukuran']);

        $query = "INSERT INTO data_baju
                        VALUES
                        (``, `$merek`, `$img`, `$ukuran`)";
            
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>