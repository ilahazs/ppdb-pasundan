<?php
    require "connect_db.php";
    $query_siswa = mysqli_query($conn, "SELECT * FROM siswa_diterima");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>transaction</title>
</head>
<body>
    <div class="container-fluid my-5">

        <!-- form -->
        <div class="copy-container form">
            <select class="form-select form-item pilih-kelas" id='pilihKelas' aria-label="Default select example" onchange="showTables()">
                <option id='selectedOptClass' selected>Pilih Kelas</option>
                <option value="1a">1A</option>
                <option value="1b">1B</option>
                <option value="1c">1C</option>
            </select>
            <select class="form-select form-item pilih-tahun-ajaran" aria-label="Default select example">
                <option selected>Pilih Tahun ajaran</option>
                <option value="1">2020 / 2021</option>
                <option value="2">2021 / 2022</option>
                <option value="3">2022 / 2023</option>
                <option value="3">...</option>
            </select>
        </div>
        <div class="copy-container">

            <!-- heading -->
            <div class="table-headings d-flex">
                <div class="table-heading d-flex">
                    <p>No</p>
                    <p>Nama Lengkap</p>
                </div>
                <div class="table-heading d-flex">
                    <p>No</p>
                    <p>Nama Lengkap</p>
                </div>
            </div>

            
            <div class="tables tables d-flex">

                <!-- table list siswa yang diterima -->
                <div class="table">
                    <?php $i = 1; ?>
                    <?php foreach($query_siswa as $siswa) : ?>
                        <div class="table-item" draggable="true">
                            <p><?= $i ?></p>
                            <p><?= $siswa['nama_lengkap'] ?></p>
                        </div>
                        <?php $i++?>
                    <?php endforeach; ?>
                </div>

                <!-- table kelas -->
                <div class="table"></div>
            </div>
                
        </div>
            
    </div>
    <script>
    // drag and drop script (display only & not perfect yet)
    const students = document.querySelectorAll('.table-item');
    const containers = document.querySelectorAll('.table');

    students.forEach(student => {
        student.addEventListener('dragstart', () => {
            student.classList.add('dragging')
        })
        student.addEventListener('dragend', () => {
            student.classList.remove('dragging')
        })
    })


    containers.forEach(container => {
        container.addEventListener('dragover', e => {
            e.preventDefault()
            const student = document.querySelector('.dragging')
            container.appendChild(student)
        })
    })




</script>
</body>

</html>