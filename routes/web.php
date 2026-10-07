<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Indra Nur Wahyu Saputra",
        "nim" => "13242520026",
        "prodi" => "Teknologi Informasi",
        "image" => "11....jpg"
    ]);
});

$data_berita = [
    [
        "judul" => "MBG mas burhan gunawan",
        "slug" => "mbg-mas-burhan-gunawan",
        "penulis" => "Admin DRA Website",
        "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, reprehenderit, aspernatur corporis sequi ducimus architecto beatae quisquam obcaecati quod adipisci minus eum, incidunt consectetur sint perferendis accusamus reiciendis soluta deleniti? Odit expedita voluptates repudiandae eligendi amet, quibusdam cupiditate nulla enim nobis voluptatem qui culpa inventore aut laboriosam temporibus delectus natus non debitis eius nam quae eos. Fugit voluptates impedit quasi eveniet, fugiat ut aspernatur excepturi earum mollitia modi ipsum ex ab libero voluptate dignissimos odit nisi culpa amet eum inventore. Beatae rem ratione laboriosam provident unde? Ex culpa fuga necessitatibus, ad accusantium harum, tempora nisi eum magnam porro quasi, quod atque dicta adipisci cumque animi iusto? Praesentium autem ex fugiat laborum distinctio voluptas consectetur harum doloremque. Nam laborum molestias aliquid laudantium consequuntur optio dolor? Necessitatibus recusandae natus beatae magnam tempora temporibus, consequatur, dolorum suscipit culpa corrupti voluptatibus nostrum quibusdam deleniti impedit ipsa molestiae aperiam laborum earum nulla pariatur numquam doloribus?",      
    ],
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Admin",
        "isi" => "Consectetur adipisicing elit. Voluptates repudiandae eligendi amet, quibusdam cupiditate nulla enim nobis voluptatem qui culpa inventore aut laboriosam temporibus delectus natus non debitis eius nam quae eos.",
    ]
];

Route::get('/berita', function () use ($data_berita) {
    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});









/// routing untuk handling 1 berita
Route::get('berita/{slug}', function($slug) {

$data_berita = [
    [
        "judul" => "MBG mas burhan gunawan",
        "slug" => "mbg-mas-burhan-gunawan",
        "penulis" => "Admin Tir Website",
        "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, reprehenderit, aspernatur corporis sequi ducimus architecto beatae quisquam obcaecati quod adipisci minus eum, incidunt consectetur sint perferendis accusamus reiciendis soluta deleniti? Odit expedita voluptates repudiandae eligendi amet, quibusdam cupiditate nulla enim nobis voluptatem qui culpa inventore aut laboriosam temporibus delectus natus non debitis eius nam quae eos. Fugit voluptates impedit quasi eveniet, fugiat ut aspernatur excepturi earum mollitia modi ipsum ex ab libero voluptate dignissimos odit nisi culpa amet eum inventore. Beatae rem ratione laboriosam provident unde? Ex culpa fuga necessitatibus, ad accusantium harum, tempora nisi eum magnam porro quasi, quod atque dicta adipisci cumque animi iusto? Praesentium autem ex fugiat laborum distinctio voluptas consectetur harum doloremque. Nam laborum molestias aliquid laudantium consequuntur optio dolor? Necessitatibus recusandae natus beatae magnam tempora temporibus, consequatur, dolorum suscipit culpa corrupti voluptatibus nostrum quibusdam deleniti impedit ipsa molestiae aperiam laborum earum nulla pariatur numquam doloribus?",      
    ],
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Admin",
        "isi" => "Consectetur adipisicing elit. Voluptates repudiandae eligendi amet, quibusdam cupiditate nulla enim nobis voluptatem qui culpa inventore aut laboriosam temporibus delectus natus non debitis eius nam quae eos.",
    ]
];

    foreach ($data_berita as $berita) {
        if ($berita['slug'] === $slug) {
            return view('beritatunggal', [
                "title" => $berita['judul'],
                "berita" => $berita
            ]);
        }
    }
});