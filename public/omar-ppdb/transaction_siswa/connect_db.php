<?php
    $conn = mysqli_connect("localhost", "root", "", "ppdb");

    function query($query_siswa) {
        global $conn;
        $query = mysqli_query($conn, $query_siswa);
        $students = [];
        while ($student = mysqli_fetch_assoc($students)) {
            $students[] = $student;

        }
        return $students;
    }
?>