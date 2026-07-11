<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

// =====================
// HALAMAN UTAMA
// =====================
Route::get('/', function () {
    return view('utama');
});

// =====================
// LOGIN
// =====================

Route::get('/login', function () {
    return view('login_siswa');
})->name('login');

Route::get('/login/siswa', function () {
    return view('login_siswa');
});

Route::post('/login/siswa', [AuthController::class, 'login_siswa']);

Route::get('/login/guru', function () {
    return view('login_guru');
})->name('login.guru');

Route::post('/login/guru', [AuthController::class, 'login_guru']);
// Route::get('/login', function () {
//     return view('login_siswa');
// })->name('login');

// Route::post('/login/siswa', [AuthController::class, 'login_siswa']);

// Route::get('/login/guru', function () {
//     return view('login_guru');
// })->name('login.guru');

// Route::post('/login/guru', [AuthController::class, 'login_guru']);

// Route::get('/login/guru', function () {
//     return view('login_guru');
// })->name('login.guru');

// Route::post('/login/guru', [AuthController::class, 'login_guru']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =====================
// DASHBOARD SISWA
// =====================
Route::get('/dashboard/siswa', function () {

    $user_id = Auth::id();

    // =========================
    // NILAI KUIS
    // =========================
    $nilai = DB::table('hasil_kuis')
        ->where('user_id', $user_id)
        ->pluck('nilai', 'materi_id');

    // =========================
    // PROGRESS BELAJAR
    // =========================
    $progress = DB::table('progress_belajar')
        ->where('user_id', $user_id)
        ->get();

    // =========================
    // HITUNG PROGRESS
    // =========================
    $selesai = 0;

    foreach ($progress as $p) {

        if ($p->video) $selesai++;
        if ($p->materi) $selesai++;
        if ($p->kuis) $selesai++;
    }

    // total aktivitas
    $totalAktivitas = 4 * 3;

    // persen
    $persentase = round(($selesai / $totalAktivitas) * 100);

    // =========================
    // HITUNG MATERI SELESAI
    // =========================
    $materiSelesai = DB::table('progress_belajar')
        ->where('user_id', $user_id)
        ->where('video', 1)
        ->where('materi', 1)
        ->where('kuis', 1)
        ->count();

    // =========================
    // VIEW
    // =========================
        $user = Auth::user();

        $jam = floor($user->total_waktu / 3600);

        $menit = floor(($user->total_waktu % 3600) / 60);

        $waktuBelajar = $jam . 'j ' . $menit . 'm';

        return view('dashboard_siswa', compact(
            'nilai',
            'persentase',
            'materiSelesai',
            'waktuBelajar'
        ));

})->name('dashboard.siswa')->middleware('auth');

Route::get('/dashboard/guru', function () {

    // TOTAL SISWA
    $totalSiswa = DB::table('users')
        ->where('role', 'siswa')
        ->count();

    // TOTAL MATERI
    $totalMateri = 10;

    // TOTAL SISWA LULUS KUIS
    $lulusKuis = DB::table('hasil_kuis')
        ->where('nilai', '>=', 70)
        ->count();

    // =========================
    // HITUNG AVG PROGRESS
    // =========================

    $progress = DB::table('progress_belajar')->get();

    $totalProgress = 0;

    foreach ($progress as $p) {

        $selesai = 0;

        if ($p->video) $selesai++;
        if ($p->materi) $selesai++;
        if ($p->kuis) $selesai++;

        $persen = ($selesai / 3) * 100;

        $totalProgress += $persen;
    }

    $avgProgress = 0;

    if ($progress->count() > 0) {

        $avgProgress = round(
            $totalProgress / $progress->count()
        );
    }

    // DATA NILAI
    $data = DB::table('hasil_kuis')
        ->join('users', 'users.id', '=', 'hasil_kuis.user_id')
        ->select(
            'users.name',
            'hasil_kuis.materi_id',
            'hasil_kuis.nilai'
        )
        ->get();

    // DATA KELAS
    $kelas = DB::table('classes')->get();

    return view('dashboard_guru', compact(
        'totalSiswa',
        'totalMateri',
        'lulusKuis',
        'avgProgress',
        'data',
        'kelas'
    ));

})->name('dashboard.guru');

// =====================
// MATERI
// =====================
Route::get('/materi1/detail', function () {
    DB::table('progress_belajar')->updateOrInsert(
        [
            'user_id' => Auth::id(),
            'materi_id' => 1
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi1');
});

Route::get('/materi2/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 2
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi2');
});

Route::get('/materi3/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 3
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi3');
});

Route::get('/materi4/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 4
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi4');
});

Route::get('/materi5/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 5
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi5');
});
Route::get('/materi6/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 6
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi6');
});
Route::get('/materi7/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 7
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi7');
});
Route::get('/materi8/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 8
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi8');
});
Route::get('/materi9/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 9
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi9');
});
Route::get('/materi10/detail', function () {
DB::table('progress_belajar')->updateOrInsert(

        [
            'user_id' => Auth::id(),
            'materi_id' => 10
        ],

        [
            'video' => true,
            'materi' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]

    );

    return view('materi10');
});
// =====================
// KUIS
// =====================
Route::get('/kuis/{materi_id}', [AuthController::class, 'kuis'])->name('kuis');
Route::post('/kuis/{materi_id}', [AuthController::class, 'submitKuis']);

// =====================
// KELAS
// =====================
Route::get('/buat-kelas', function () {
    return view('buat_kelas');
});

Route::post('/buat-kelas', [AuthController::class, 'buatKelas']);


Route::post('/join-kelas', [AuthController::class, 'joinKelas'])->name('join.kelas');
Route::post('/keluar-kelas', [AuthController::class, 'keluarKelas'])->name('keluar.kelas');
Route::get('/hapus-kelas/{id}', [AuthController::class, 'hapusKelas'])->name('hapus.kelas');
Route::get('/kelas/{id}', [AuthController::class, 'detailKelas'])->name('kelas.detail');
Route::get('/kelas/{id}/download', [AuthController::class, 'downloadNilai'])
    ->name('kelas.download');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
