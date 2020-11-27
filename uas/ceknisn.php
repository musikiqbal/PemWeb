<?php
$nisn = $_POST['nisn_cek']; //menerima input dengan nama dan nis
header('location:index.php?halaman=input_nilai&nisn=' . $nisn); //mengalihkan halaman dengan mengirim variabel nis dengan get
