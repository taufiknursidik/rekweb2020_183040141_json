<?php 

$mahasiswa = [
    [
         "nama" => "Taufik Nur Sidik",
        "nrp" => "183040141",
        "email" => "sidik.183040141@mail.unpas.ac.id"
    ],
    [
        "nama" => "Andi Rachman Zulfikri",
        "nrp" => "183040142",
        "email" => "zulfikri.183040142@mail.unpas.ac.id"
    ]
];

$data = json_encode($mahasiswa);
echo $data;

?>