<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
public function login_siswa(Request $request)
{
    if (Auth::attempt([
        'email' => $request->nis . '@siswa.com',
        'password' => $request->password,
        'role' => 'siswa'
    ])) {
        $request->session()->regenerate();
        DB::table('users')
        ->where('id', Auth::id())
        ->update([
        'mulai_belajar' => now()
        ]);
        return redirect('/dashboard/siswa');
    }
    $request->validate([
    'nis' => 'required',
    'password' => 'required'
]);

    return back()->with('error', 'Login gagal!');
}

    public function login_guru(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'guru'
        ])) {
            $request->session()->regenerate();
            return redirect('/dashboard/guru');
            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'guru'
                ])) 
                return redirect('/dashboard/guru');
                $request->session()->regenerate();        
        }

        return back()->with('error', 'Login gagal!');
    }

public function logout(Request $request)
{
    $user = Auth::user();

    // cek apakah ada waktu mulai belajar
    if ($user && $user->mulai_belajar) {

        // ubah ke timestamp
        $mulai = strtotime($user->mulai_belajar);

        // waktu sekarang
        $sekarang = time();

        // hitung durasi belajar
        $durasi = $sekarang - $mulai;

        // simpan total waktu
        DB::table('users')
            ->where('id', $user->id)
            ->update([

                'total_waktu' =>
                    ($user->total_waktu ?? 0) + $durasi,

                'mulai_belajar' => null
            ]);
    }

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}
    //quizz
public function kuis($materi_id)
{
    // =========================
    // MATERI 1
    // =========================
    if ($materi_id == 1) {

$soal_pg = [
    // =========================
    // C1 (Mengingat)
    // =========================

    [
        'pertanyaan' => 'Komponen engine yang berfungsi menghasilkan percikan api adalah ....',
        'opsi' => [
            'a' => 'Karburator',
            'b' => 'Busi',
            'c' => 'Ring piston',
            'd' => 'Crankshaft'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Komponen yang berfungsi menghubungkan piston dengan crankshaft adalah ....',
        'opsi' => [
            'a' => 'Klep',
            'b' => 'Camshaft',
            'c' => 'Stang piston',
            'd' => 'Flywheel'
        ],
        'jawaban' => 'c'
    ],

    [
        'pertanyaan' => 'Komponen yang berfungsi menahan kebocoran kompresi adalah ....',
        'opsi' => [
            'a' => 'Bearing',
            'b' => 'Ring piston',
            'c' => 'Klep',
            'd' => 'Karburator'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Sistem yang berfungsi mengurangi gesekan antar komponen mesin adalah ....',
        'opsi' => [
            'a' => 'Sistem pendingin',
            'b' => 'Sistem bahan bakar',
            'c' => 'Sistem pengapian',
            'd' => 'Sistem pelumasan'
        ],
        'jawaban' => 'd'
    ],

    // =========================
    // C2 (Memahami)
    // =========================

    [
        'pertanyaan' => 'Mengapa filter udara yang kotor dapat menyebabkan tenaga mesin menurun?',
        'opsi' => [
            'a' => 'Karena oli cepat habis',
            'b' => 'Karena udara yang masuk ke ruang bakar berkurang',
            'c' => 'Karena piston menjadi aus',
            'd' => 'Karena busi menjadi panas'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Apa akibat apabila ring piston mengalami keausan?',
        'opsi' => [
            'a' => 'Mesin lebih irit',
            'b' => 'Kompresi mesin bocor',
            'c' => 'Putaran mesin meningkat',
            'd' => 'Sistem pendinginan terganggu'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Mengapa pemeriksaan visual dilakukan sebelum pembongkaran mesin?',
        'opsi' => [
            'a' => 'Untuk menghemat bahan bakar',
            'b' => 'Untuk menemukan kerusakan yang terlihat',
            'c' => 'Agar mesin cepat dingin',
            'd' => 'Untuk memperbesar kompresi'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Apa tujuan melakukan uji mesin setelah penggantian oli?',
        'opsi' => [
            'a' => 'Mengurangi jumlah oli',
            'b' => 'Membersihkan ruang bakar',
            'c' => 'Memastikan hasil perawatan berhasil',
            'd' => 'Mengganti busi'
        ],
        'jawaban' => 'c'
    ],

    [
        'pertanyaan' => 'Mengapa perawatan berkala perlu dilakukan?',
        'opsi' => [
            'a' => 'Agar ban tidak bocor',
            'b' => 'Untuk mencegah kerusakan engine lebih cepat',
            'c' => 'Agar lampu lebih terang',
            'd' => 'Agar mesin lebih berat'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Mengapa klep masuk harus dapat membuka dengan baik?',
        'opsi' => [
            'a' => 'Agar gas buang keluar',
            'b' => 'Agar campuran udara dan bahan bakar masuk ke silinder',
            'c' => 'Agar oli tetap penuh',
            'd' => 'Agar piston berhenti'
        ],
        'jawaban' => 'b'
    ],

    // =========================
    // C3 (Menerapkan)
    // =========================

    [
        'pertanyaan' => 'Saat servis ditemukan kebocoran oli pada blok mesin. Langkah pertama yang harus dilakukan adalah ....',
        'opsi' => [
            'a' => 'Mengganti ban',
            'b' => 'Melakukan pemeriksaan visual terhadap sumber kebocoran',
            'c' => 'Mengganti busi',
            'd' => 'Menguras tangki bahan bakar'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Setelah busi diganti tetapi mesin masih sulit hidup, tindakan berikutnya adalah ....',
        'opsi' => [
            'a' => 'Mengganti roda',
            'b' => 'Memeriksa lampu',
            'c' => 'Memeriksa sistem bahan bakar',
            'd' => 'Mengganti rantai'
        ],
        'jawaban' => 'c'
    ],

    [
        'pertanyaan' => 'Ketika filter udara sangat kotor, tindakan yang tepat adalah ....',
        'opsi' => [
            'a' => 'Mengganti oli',
            'b' => 'Membersihkan atau mengganti filter udara',
            'c' => 'Mengganti ban',
            'd' => 'Menambah tekanan ban'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Mesin cepat panas walaupun sistem pendingin normal. Pemeriksaan yang tepat adalah ....',
        'opsi' => [
            'a' => 'Memeriksa tekanan ban',
            'b' => 'Memeriksa kondisi oli mesin',
            'c' => 'Memeriksa lampu',
            'd' => 'Memeriksa rem'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Setelah penyetelan klep selesai dilakukan, tindakan berikutnya adalah ....',
        'opsi' => [
            'a' => 'Mematikan kendaraan',
            'b' => 'Mengganti oli',
            'c' => 'Melakukan uji mesin',
            'd' => 'Menguras tangki'
        ],
        'jawaban' => 'c'
    ],

    // =========================
    // C4 (Menganalisis)
    // =========================

    [
        'pertanyaan' => 'Sebuah sepeda motor sulit dihidupkan pada pagi hari. Setelah diperiksa, aki dalam kondisi baik, tetapi busi tidak menghasilkan percikan api. Komponen yang perlu diperiksa terlebih dahulu adalah?',
        'opsi' => [
            'a' => 'Filter udara',
            'b' => 'Sistem pengapian',
            'c' => 'Ring piston',
            'd' => 'Oli mesin'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Motor mengalami gejala tersendat-sendat saat digas. Busi masih dalam kondisi baik. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Filter udara kotor',
            'b' => 'Crankshaft aus',
            'c' => 'Bearing rusak',
            'd' => 'Oli mesin berlebih'
        ],
        'jawaban' => 'a'
    ],

    [
        'pertanyaan' => 'Sebuah motor mengeluarkan asap putih tebal dari knalpot. Kesimpulan yang paling tepat adalah?',
        'opsi' => [
            'a' => 'Campuran bahan bakar terlalu kaya',
            'b' => 'Oli masuk ke ruang bakar',
            'c' => 'Busi tidak bekerja',
            'd' => 'Karburator tersumbat'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Ketika mesin bekerja terdengar suara kasar dari bagian atas mesin, sementara oli masih cukup. Kemungkinan penyebabnya adalah?',
        'opsi' => [
            'a' => 'Filter udara kotor',
            'b' => 'Klep terlalu longgar',
            'c' => 'Karburator terlalu kaya',
            'd' => 'Busi mati'
        ],
        'jawaban' => 'b'
    ],

    [
        'pertanyaan' => 'Seorang teknisi menemukan mesin sulit dihidupkan. Busi dan kompresi dalam kondisi baik. Analisis selanjutnya yang paling tepat adalah memeriksa?',
        'opsi' => [
            'a' => 'Sistem bahan bakar',
            'b' => 'Pelek dan ban',
            'c' => 'Sistem suspensi',
            'd' => 'Sistem rem'
        ],
        'jawaban' => 'a'
    ],

];

$soal_cocok = [
    [
        'pertanyaan' => 'Cocokkan komponen engine dengan fungsinya',
        'kiri' => [
            'Ring piston',
            'Busi',
            'Stang piston',
            'Klep',
            'Crankshaft'
        ],
        'kanan' => [
            'Menahan kebocoran kompresi',
            'Menghasilkan percikan api',
            'Menghubungkan piston dengan crankshaft',
            'Mengatur keluar masuk gas',
            'Mengubah gerak naik turun menjadi putaran'
        ],
        'jawaban' => [0,1,2,3,4]
    ]
];
    }

    // =========================
    // MATERI 2
    // =========================
    elseif ($materi_id == 2) {

        $soal_pg = [
    [
        'pertanyaan' => 'Motor terasa tidak stabil saat dikendarai di jalan lurus. Setelah diperiksa tekanan ban normal, komponen yang perlu dianalisis terlebih dahulu adalah?',
        'opsi' => [
            'a' => 'Segitiga kemudi',
            'b' => 'Busi',
            'c' => 'Karburator',
            'd' => 'Koil'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Saat pengereman terdengar bunyi berdecit. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Kampas rem kotor',
            'b' => 'Ban bocor',
            'c' => 'Rangka bengkok',
            'd' => 'Shock absorber bocor'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika bearing kemudi rusak, gejala yang paling mungkin dirasakan pengendara adalah?',
        'opsi' => [
            'a' => 'Stang terasa berat',
            'b' => 'Lampu redup',
            'c' => 'Mesin cepat panas',
            'd' => 'Motor sulit dihidupkan'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Motor mengalami getaran berlebih pada roda depan saat kecepatan tinggi. Analisis yang paling tepat adalah?',
        'opsi' => [
            'a' => 'Pelek peyang atau ban tidak balance',
            'b' => 'Busi kotor',
            'c' => 'Karburator tersumbat',
            'd' => 'CDI rusak'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika oli shock habis, dampak yang paling mungkin terjadi adalah?',
        'opsi' => [
            'a' => 'Suspensi terasa keras',
            'b' => 'Mesin brebet',
            'c' => 'Rem blong',
            'd' => 'Lampu mati'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Seorang teknisi menemukan retakan pada rangka sepeda motor. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Beban kendaraan berlebih',
            'b' => 'Busi rusak',
            'c' => 'Filter udara kotor',
            'd' => 'Oli mesin habis'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Ban aus hanya pada salah satu sisi. Analisis yang tepat adalah?',
        'opsi' => [
            'a' => 'Tekanan ban tidak sesuai',
            'b' => 'Kampas rem aus',
            'c' => 'Bearing kemudi rusak',
            'd' => 'Shock absorber bocor'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika udara masuk ke sistem rem hidrolik, gejala yang paling mungkin terjadi adalah?',
        'opsi' => [
            'a' => 'Tuas rem terasa terlalu dalam',
            'b' => 'Stang bergetar',
            'c' => 'Motor oleng',
            'd' => 'Ban cepat aus'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Pemeriksaan visual pada sistem sasis bertujuan untuk mendeteksi?',
        'opsi' => [
            'a' => 'Retakan, kebocoran, dan keausan',
            'b' => 'Percikan api busi',
            'c' => 'Tekanan kompresi',
            'd' => 'Waktu pengapian'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika salah satu komponen sasis mengalami kerusakan, dampak yang paling mungkin terjadi adalah?',
        'opsi' => [
            'a' => 'Keselamatan dan kestabilan berkendara terganggu',
            'b' => 'Konsumsi bahan bakar berkurang',
            'c' => 'Tenaga mesin bertambah',
            'd' => 'Putaran mesin meningkat'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Sistem suspensi bekerja dengan memanfaatkan pegas dan oli shock untuk?',
        'opsi' => [
            'a' => 'Menyerap getaran dari jalan',
            'b' => 'Meningkatkan tenaga mesin',
            'c' => 'Menghemat bahan bakar',
            'd' => 'Mempercepat akselerasi'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Saat rem cakram digunakan, komponen yang menjepit cakram adalah?',
        'opsi' => [
            'a' => 'Kampas rem pada kaliper',
            'b' => 'Piston mesin',
            'c' => 'Bearing roda',
            'd' => 'Shock absorber'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika motor oleng saat dikendarai, salah satu komponen yang perlu diperiksa adalah?',
        'opsi' => [
            'a' => 'Segitiga kemudi',
            'b' => 'Karburator',
            'c' => 'CDI',
            'd' => 'Koil'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Tujuan utama melakukan balancing roda adalah?',
        'opsi' => [
            'a' => 'Mengurangi getaran saat kendaraan berjalan',
            'b' => 'Meningkatkan tenaga mesin',
            'c' => 'Menghemat oli mesin',
            'd' => 'Memperbesar torsi'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Perawatan preventif pada sistem sasis dilakukan untuk?',
        'opsi' => [
            'a' => 'Mencegah kerusakan sebelum terjadi',
            'b' => 'Memperbaiki komponen rusak',
            'c' => 'Mengganti seluruh komponen',
            'd' => 'Meningkatkan kecepatan maksimum'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Shock absorber mengalami kebocoran oli. Tindakan yang paling tepat adalah?',
        'opsi' => [
            'a' => 'Mengganti seal shock',
            'b' => 'Mengganti busi',
            'c' => 'Mengganti rantai',
            'd' => 'Menyetel karburator'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Saat melakukan servis sasis, penggunaan APD bertujuan untuk?',
        'opsi' => [
            'a' => 'Menjamin keselamatan kerja teknisi',
            'b' => 'Mempercepat putaran mesin',
            'c' => 'Mengurangi konsumsi bahan bakar',
            'd' => 'Memperhalus suara mesin'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Pengujian akhir setelah perbaikan sasis dilakukan dengan cara?',
        'opsi' => [
            'a' => 'Melakukan test ride',
            'b' => 'Menguras oli mesin',
            'c' => 'Membersihkan filter udara',
            'd' => 'Mengganti busi'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika pelek mengalami kerusakan berupa peyang, dampak yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Muncul getaran pada roda',
            'b' => 'Mesin sulit hidup',
            'c' => 'Rem blong',
            'd' => 'Lampu redup'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Teknisi memeriksa kelonggaran stang dan melumasi bearing kemudi. Kegiatan tersebut termasuk?',
        'opsi' => [
            'a' => 'Perawatan sistem kemudi',
            'b' => 'Perbaikan sistem rem',
            'c' => 'Perawatan mesin',
            'd' => 'Perawatan sistem pengapian'
        ],
        'jawaban' => 'a'
    ]
];

$soal_cocok = [
    [
        'pertanyaan' => 'Cocokkan komponen sasis dengan fungsinya',
        'kiri' => [
            'Rangka',
            'Suspensi',
            'Sistem Rem',
            'Sistem Kemudi',
            'Ban'
        ],
        'kanan' => [
            'Menopang seluruh komponen',
            'Meredam getaran',
            'Menghentikan kendaraan',
            'Mengarahkan kendaraan',
            'Menjaga traksi'
        ],
        'jawaban' => [0,1,2,3,4]
    ]
];
    }
    // =========================
    // MATERI 3
    // =========================
    elseif ($materi_id == 3) {

        $soal_pg = [
    [
        'pertanyaan' => 'Seorang pengendara mengeluhkan motor tidak bertenaga saat akselerasi. Setelah diperiksa, pegas kopling dalam kondisi lemah. Kesimpulan yang paling tepat adalah?',
        'opsi' => [
            'a' => 'Kopling mengalami selip',
            'b' => 'Transmisi rusak',
            'c' => 'Rantai terlalu kencang',
            'd' => 'Gear transmisi aus'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Saat tuas kopling ditarik, apa yang terjadi pada sistem pemindah tenaga?',
        'opsi' => [
            'a' => 'Tenaga mesin diteruskan',
            'b' => 'Tenaga mesin diputus',
            'c' => 'Rantai berputar lebih cepat',
            'd' => 'Torsi bertambah'
        ],
        'jawaban' => 'b'
    ],
    [
        'pertanyaan' => 'Gigi transmisi sering loncat saat digunakan. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Gear transmisi aus',
            'b' => 'Rantai terlalu kencang',
            'c' => 'Kampas kopling baru',
            'd' => 'Oli mesin berlebih'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika rantai penggerak terlalu kendor, dampak yang paling mungkin terjadi adalah?',
        'opsi' => [
            'a' => 'Rantai dapat lepas',
            'b' => 'Motor lebih hemat bahan bakar',
            'c' => 'Torsi bertambah',
            'd' => 'Mesin lebih dingin'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Bunyi kasar pada sistem kopling dapat disebabkan oleh?',
        'opsi' => [
            'a' => 'Rumah kopling aus',
            'b' => 'Busi rusak',
            'c' => 'Rantai terlalu kencang',
            'd' => 'Filter udara kotor'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Pada transmisi manual, gigi rendah digunakan ketika kendaraan membutuhkan?',
        'opsi' => [
            'a' => 'Torsi besar',
            'b' => 'Kecepatan tinggi',
            'c' => 'Putaran rendah',
            'd' => 'Konsumsi bahan bakar sedikit'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Motor terasa tersendat saat berjalan dan ditemukan rantai sudah aus. Analisis yang tepat adalah?',
        'opsi' => [
            'a' => 'Rantai perlu diganti',
            'b' => 'Busi harus dibersihkan',
            'c' => 'Koil harus diganti',
            'd' => 'Karburator perlu disetel'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Pemeriksaan visual pada sistem pemindah tenaga bertujuan untuk mengetahui?',
        'opsi' => [
            'a' => 'Keausan rantai dan sprocket',
            'b' => 'Percikan api busi',
            'c' => 'Kinerja suspensi',
            'd' => 'Tekanan ban'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika shift fork mengalami keausan, gejala yang paling mungkin muncul adalah?',
        'opsi' => [
            'a' => 'Gigi sulit masuk',
            'b' => 'Mesin cepat panas',
            'c' => 'Rem tidak pakem',
            'd' => 'Lampu redup'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Komponen yang menghubungkan sprocket depan dengan sprocket belakang adalah?',
        'opsi' => [
            'a' => 'Rantai',
            'b' => 'Gear',
            'c' => 'Bearing',
            'd' => 'Kampas kopling'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Perawatan berkala pada sistem kopling dilakukan untuk?',
        'opsi' => [
            'a' => 'Menjaga performa kopling',
            'b' => 'Menambah kapasitas mesin',
            'c' => 'Mempercepat putaran roda',
            'd' => 'Mengurangi tekanan ban'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Saat sprocket depan berputar, komponen berikutnya yang bergerak adalah?',
        'opsi' => [
            'a' => 'Rantai',
            'b' => 'Kampas kopling',
            'c' => 'Shift fork',
            'd' => 'Bearing'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika perpindahan gigi terasa keras, penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Setelan kopling tidak tepat',
            'b' => 'Ban kurang angin',
            'c' => 'Busi rusak',
            'd' => 'Koil lemah'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Salah satu langkah perawatan rantai adalah?',
        'opsi' => [
            'a' => 'Melumasi rantai secara berkala',
            'b' => 'Menguras radiator',
            'c' => 'Membersihkan busi',
            'd' => 'Mengganti oli shock'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Transmisi bunyi kasar saat digunakan. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Gear transmisi rusak',
            'b' => 'Karburator kotor',
            'c' => 'Aki lemah',
            'd' => 'Ban aus'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Setelah dilakukan perbaikan sistem transmisi, langkah tindak lanjut yang tepat adalah?',
        'opsi' => [
            'a' => 'Melakukan uji jalan',
            'b' => 'Mengganti ban',
            'c' => 'Membersihkan lampu',
            'd' => 'Menguras radiator'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Alat khusus yang digunakan untuk memutus rantai adalah?',
        'opsi' => [
            'a' => 'Chain breaker',
            'b' => 'Torque wrench',
            'c' => 'Feeler gauge',
            'd' => 'Obeng'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Mengapa penggunaan APD sangat penting saat memperbaiki sistem pemindah tenaga?',
        'opsi' => [
            'a' => 'Untuk menjaga keselamatan teknisi',
            'b' => 'Untuk mempercepat perbaikan',
            'c' => 'Untuk meningkatkan torsi',
            'd' => 'Untuk menghemat bahan bakar'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika sprocket sudah aus tetapi tidak segera diganti, maka kemungkinan yang terjadi adalah?',
        'opsi' => [
            'a' => 'Rantai cepat aus dan dapat lepas',
            'b' => 'Mesin menjadi lebih dingin',
            'c' => 'Motor lebih irit',
            'd' => 'Putaran mesin meningkat'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Teknisi melakukan pemeriksaan suara abnormal pada sistem pemindah tenaga. Tujuan kegiatan tersebut adalah?',
        'opsi' => [
            'a' => 'Menemukan sumber kerusakan',
            'b' => 'Mengukur tekanan ban',
            'c' => 'Mengatur campuran bahan bakar',
            'd' => 'Meningkatkan tenaga mesin'
        ],
        'jawaban' => 'a'
    ]
];

$soal_cocok = [
    [
        'pertanyaan' => 'Cocokkan komponen sistem pemindah tenaga dengan fungsinya',
        'kiri' => [
            'Kopling',
            'Transmisi',
            'Sprocket',
            'Rantai',
            'Gear rendah'
        ],
        'kanan' => [
            'Memutus dan menghubungkan tenaga mesin',
            'Mengatur perbandingan putaran',
            'Meneruskan putaran ke rantai',
            'Menghubungkan sprocket depan dan belakang',
            'Menghasilkan torsi besar'
        ],
        'jawaban' => [0,1,2,3,4]
    ]
];
    }
    // =========================
    // MATERI 4
    // =========================
    elseif ($materi_id == 4) {

        $soal_pg = [
    [
        'pertanyaan' => 'Mesin sulit dihidupkan dan busi tidak menghasilkan percikan api. Komponen yang perlu diperiksa terlebih dahulu adalah?',
        'opsi' => [
            'a' => 'CDI/ECU',
            'b' => 'Suspensi',
            'c' => 'Rantai',
            'd' => 'Pelek'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Lampu utama redup meskipun bohlam masih baik. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Spul lemah',
            'b' => 'Kampas rem aus',
            'c' => 'Ban kurang angin',
            'd' => 'Rantai kendor'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Aki cepat habis walaupun baru diganti. Analisis yang paling tepat adalah?',
        'opsi' => [
            'a' => 'Kiprok rusak',
            'b' => 'Shock absorber bocor',
            'c' => 'Filter udara kotor',
            'd' => 'Pelek peyang'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Starter hanya berbunyi klik tetapi mesin tidak berputar. Penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Dinamo starter rusak',
            'b' => 'Flasher rusak',
            'c' => 'Bohlam putus',
            'd' => 'Busi kotor'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Klakson tidak berbunyi meskipun aki dalam kondisi baik. Komponen yang perlu diperiksa berikutnya adalah?',
        'opsi' => [
            'a' => 'Saklar klakson',
            'b' => 'Ban',
            'c' => 'Shock',
            'd' => 'Gear'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Sekring pada sistem kelistrikan berfungsi untuk?',
        'opsi' => [
            'a' => 'Melindungi rangkaian dari arus berlebih',
            'b' => 'Menyimpan energi listrik',
            'c' => 'Menghasilkan percikan api',
            'd' => 'Menghidupkan mesin'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika koil mengalami kerusakan, dampak yang paling mungkin terjadi adalah?',
        'opsi' => [
            'a' => 'Percikan api busi menjadi lemah',
            'b' => 'Lampu sein tidak berkedip',
            'c' => 'Suspensi menjadi keras',
            'd' => 'Rantai cepat aus'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Kiprok pada sistem pengisian berfungsi untuk?',
        'opsi' => [
            'a' => 'Mengubah arus AC menjadi DC dan mengatur tegangan',
            'b' => 'Menyimpan energi listrik',
            'c' => 'Memutar mesin',
            'd' => 'Menghasilkan percikan api'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika lampu sein tidak berkedip tetapi tetap menyala, komponen yang kemungkinan rusak adalah?',
        'opsi' => [
            'a' => 'Flasher',
            'b' => 'Spul',
            'c' => 'Koil',
            'd' => 'Relay starter'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Pulser dalam sistem pengapian berfungsi untuk?',
        'opsi' => [
            'a' => 'Mengirim sinyal ke CDI/ECU',
            'b' => 'Menyimpan energi listrik',
            'c' => 'Memutus arus listrik',
            'd' => 'Mengatur putaran mesin'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Diagnosis kerusakan sistem kelistrikan diawali dengan?',
        'opsi' => [
            'a' => 'Pemeriksaan visual',
            'b' => 'Pembongkaran mesin',
            'c' => 'Penggantian komponen',
            'd' => 'Pengujian jalan'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Kabel putus dan konektor longgar dapat diketahui melalui?',
        'opsi' => [
            'a' => 'Pemeriksaan visual',
            'b' => 'Pemeriksaan kompresi',
            'c' => 'Pemeriksaan tekanan ban',
            'd' => 'Pengukuran oli'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Alat yang paling tepat digunakan untuk mengukur tegangan aki adalah?',
        'opsi' => [
            'a' => 'Multimeter',
            'b' => 'Tang',
            'c' => 'Obeng',
            'd' => 'Kunci pas'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Salah satu tujuan perawatan aki secara berkala adalah?',
        'opsi' => [
            'a' => 'Menjaga performa sistem kelistrikan',
            'b' => 'Menambah kecepatan motor',
            'c' => 'Mengurangi tekanan ban',
            'd' => 'Memperbesar torsi'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Jika alarm aktif sendiri tanpa ada gangguan, penyebab yang paling mungkin adalah?',
        'opsi' => [
            'a' => 'Sensor terlalu sensitif',
            'b' => 'Aki soak',
            'c' => 'Koil rusak',
            'd' => 'Spul lemah'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Saat melakukan servis kelistrikan, terminal aki sebaiknya dilepas terlebih dahulu untuk?',
        'opsi' => [
            'a' => 'Mencegah korsleting',
            'b' => 'Mempercepat pengisian aki',
            'c' => 'Menghemat bahan bakar',
            'd' => 'Meningkatkan tenaga mesin'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Motor starter berfungsi untuk?',
        'opsi' => [
            'a' => 'Memutar poros engkol saat mesin dihidupkan',
            'b' => 'Menghasilkan percikan api',
            'c' => 'Mengisi ulang aki',
            'd' => 'Mengatur tegangan'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Setelah dilakukan perbaikan sistem kelistrikan, langkah yang tepat adalah?',
        'opsi' => [
            'a' => 'Melakukan pengujian akhir',
            'b' => 'Mengganti ban',
            'c' => 'Menguras oli mesin',
            'd' => 'Membersihkan filter udara'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Sistem instrumen dan sinyal berfungsi untuk?',
        'opsi' => [
            'a' => 'Memberikan informasi kondisi kendaraan kepada pengendara',
            'b' => 'Menambah tenaga mesin',
            'c' => 'Mengurangi konsumsi bahan bakar',
            'd' => 'Mengatur putaran mesin'
        ],
        'jawaban' => 'a'
    ],
    [
        'pertanyaan' => 'Penggunaan aksesori listrik yang melebihi kapasitas kendaraan dapat menyebabkan?',
        'opsi' => [
            'a' => 'Aki cepat habis',
            'b' => 'Ban cepat aus',
            'c' => 'Rantai cepat kendor',
            'd' => 'Suspensi menjadi keras'
        ],
        'jawaban' => 'a'
    ]
];

$soal_cocok = [
    [
        'pertanyaan' => 'Cocokkan komponen sistem kelistrikan dengan fungsinya',
        'kiri' => [
            'Aki',
            'Busi',
            'Kiprok',
            'Relay Starter',
            'Sekring'
        ],
        'kanan' => [
            'Menyimpan energi listrik',
            'Menghasilkan percikan api',
            'Mengatur tegangan pengisian',
            'Mengaktifkan motor starter',
            'Melindungi rangkaian listrik'
        ],
        'jawaban' => [0,1,2,3,4]
    ]
];
    }
        // =========================
    // MATERI 5
    // =========================
    elseif ($materi_id == 5) {

        $soal_pg = [
            [
                'pertanyaan' => 'Apa fungsi transmisi?',
                'opsi' => [
                    'a'=>'Mengatur tenaga',
                    'b'=>'Menyimpan energi',
                    'c'=>'Menyalakan lampu',
                    'd'=>'Mendinginkan mesin'
                ],
                'jawaban'=>'a'
            ],
            [
                'pertanyaan' => 'Transmisi manual menggunakan?',
                'opsi' => [
                    'a'=>'Kopling',
                    'b'=>'Sensor',
                    'c'=>'Radiator',
                    'd'=>'Busi'
                ],
                'jawaban'=>'a'
            ],
        ];

        $soal_cocok = [
            [
                'pertanyaan' => 'Cocokkan komponen transmisi',
                'kiri' => ['Kopling','Gear','Poros'],
                'kanan' => ['Memutus tenaga','Perbandingan putaran','Penyalur tenaga'],
                'jawaban' => [0,1,2]
            ]
        ];
    }
     // =========================
    // MATERI 6
    // =========================
    elseif ($materi_id == 6) {

        $soal_pg = [
            [
                'pertanyaan' => 'Apa fungsi transmisi?',
                'opsi' => [
                    'a'=>'Mengatur tenaga',
                    'b'=>'Menyimpan energi',
                    'c'=>'Menyalakan lampu',
                    'd'=>'Mendinginkan mesin'
                ],
                'jawaban'=>'a'
            ],
            [
                'pertanyaan' => 'Transmisi manual menggunakan?',
                'opsi' => [
                    'a'=>'Kopling',
                    'b'=>'Sensor',
                    'c'=>'Radiator',
                    'd'=>'Busi'
                ],
                'jawaban'=>'a'
            ],
        ];

        $soal_cocok = [
            [
                'pertanyaan' => 'Cocokkan komponen transmisi',
                'kiri' => ['Kopling','Gear','Poros'],
                'kanan' => ['Memutus tenaga','Perbandingan putaran','Penyalur tenaga'],
                'jawaban' => [0,1,2]
            ]
        ];
    }
    // =========================
    // MATERI 7
    // =========================
    elseif ($materi_id == 7) {

        $soal_pg = [
            [
                'pertanyaan' => 'Apa fungsi transmisi?',
                'opsi' => [
                    'a'=>'Mengatur tenaga',
                    'b'=>'Menyimpan energi',
                    'c'=>'Menyalakan lampu',
                    'd'=>'Mendinginkan mesin'
                ],
                'jawaban'=>'a'
            ],
            [
                'pertanyaan' => 'Transmisi manual menggunakan?',
                'opsi' => [
                    'a'=>'Kopling',
                    'b'=>'Sensor',
                    'c'=>'Radiator',
                    'd'=>'Busi'
                ],
                'jawaban'=>'a'
            ],
        ];

        $soal_cocok = [
            [
                'pertanyaan' => 'Cocokkan komponen transmisi',
                'kiri' => ['Kopling','Gear','Poros'],
                'kanan' => ['Memutus tenaga','Perbandingan putaran','Penyalur tenaga'],
                'jawaban' => [0,1,2]
            ]
        ];
    }
    // =========================
    // MATERI 8
    // =========================
    elseif ($materi_id == 8) {

        $soal_pg = [
            [
                'pertanyaan' => 'Apa fungsi transmisi?',
                'opsi' => [
                    'a'=>'Mengatur tenaga',
                    'b'=>'Menyimpan energi',
                    'c'=>'Menyalakan lampu',
                    'd'=>'Mendinginkan mesin'
                ],
                'jawaban'=>'a'
            ],
            [
                'pertanyaan' => 'Transmisi manual menggunakan?',
                'opsi' => [
                    'a'=>'Kopling',
                    'b'=>'Sensor',
                    'c'=>'Radiator',
                    'd'=>'Busi'
                ],
                'jawaban'=>'a'
            ],
        ];

        $soal_cocok = [
            [
                'pertanyaan' => 'Cocokkan komponen transmisi',
                'kiri' => ['Kopling','Gear','Poros'],
                'kanan' => ['Memutus tenaga','Perbandingan putaran','Penyalur tenaga'],
                'jawaban' => [0,1,2]
            ]
        ];
    }
    // =========================
    // MATERI 9
    // =========================
    elseif ($materi_id == 9) {

        $soal_pg = [
            [
                'pertanyaan' => 'Apa fungsi transmisi?',
                'opsi' => [
                    'a'=>'Mengatur tenaga',
                    'b'=>'Menyimpan energi',
                    'c'=>'Menyalakan lampu',
                    'd'=>'Mendinginkan mesin'
                ],
                'jawaban'=>'a'
            ],
            [
                'pertanyaan' => 'Transmisi manual menggunakan?',
                'opsi' => [
                    'a'=>'Kopling',
                    'b'=>'Sensor',
                    'c'=>'Radiator',
                    'd'=>'Busi'
                ],
                'jawaban'=>'a'
            ],
        ];

        $soal_cocok = [
            [
                'pertanyaan' => 'Cocokkan komponen transmisi',
                'kiri' => ['Kopling','Gear','Poros'],
                'kanan' => ['Memutus tenaga','Perbandingan putaran','Penyalur tenaga'],
                'jawaban' => [0,1,2]
            ]
        ];
    }
    // =========================
    // MATERI 10
    // =========================
    else {

        $soal_pg = [
            [
                'pertanyaan' => 'Apa itu konversi energi?',
                'opsi' => [
                    'a'=>'Perubahan energi',
                    'b'=>'Penyimpanan data',
                    'c'=>'Pengiriman listrik',
                    'd'=>'Pendinginan'
                ],
                'jawaban'=>'a'
            ],
            [
                'pertanyaan' => 'Energi listrik menjadi panas disebut?',
                'opsi' => [
                    'a'=>'Distribusi',
                    'b'=>'Konversi energi',
                    'c'=>'Produksi',
                    'd'=>'Isolasi'
                ],
                'jawaban'=>'b'
            ],
        ];

        $soal_cocok = [
            [
                'pertanyaan' => 'Cocokkan jenis energi',
                'kiri' => ['Listrik','Panas','Gerak'],
                'kanan' => ['Energi kinetik','Energi kalor','Energi listrik'],
                'jawaban' => [2,1,0]
            ]
        ];
    }
    //=================
    
    // random soal
    shuffle($soal_pg);

    return view('kuis', compact('soal_pg','soal_cocok','materi_id'));
}
public function submitKuis(Request $request, $materi_id)
{
    $score = 0;

    // =========================
    // KUNCI JAWABAN PER MATERI
    // =========================
    if ($materi_id == 1) {
        $kunci_pg = [1=>'b', 2=>'a', 3=>'b', 4=>'b', 5=>'b',
        6=>'b', 7=>'a', 8=>'b', 9=>'b', 10=>'b',
        11=>'b', 12=>'a', 13=>'a', 14=>'b', 15=>'b',
        16=>'a', 17=>'a', 18=>'c', 19=>'a', 20=>'a'];        // 2 soal PG
        $kunci_cocok = [ 0,1,2,3,4];      // 3 soal cocok
    }
    elseif ($materi_id == 2) {
        $kunci_pg = [1=>'a', 2=>'a', 3=>'a', 4=>'a', 5=>'a',
        6=>'a', 7=>'a', 8=>'a', 9=>'a', 10=>'a',
        11=>'a', 12=>'a', 13=>'a', 14=>'a', 15=>'a',
        16=>'a', 17=>'a', 18=>'a', 19=>'a', 20=>'a'];
        $kunci_cocok = [0,1,2,3,4];
    }
    elseif ($materi_id == 3) {
        $kunci_pg = [        1=>'a', 2=>'b', 3=>'a', 4=>'a', 5=>'a',
        6=>'a', 7=>'a', 8=>'a', 9=>'a', 10=>'a',
        11=>'a', 12=>'a', 13=>'a', 14=>'a', 15=>'a',
        16=>'a', 17=>'a', 18=>'a', 19=>'a', 20=>'a'];
        $kunci_cocok = [0,1,2,3,4]; 
    }
    elseif ($materi_id == 4) {
        $kunci_pg = [        1=>'a', 2=>'a', 3=>'a', 4=>'a', 5=>'a',
        6=>'a', 7=>'a', 8=>'a', 9=>'a', 10=>'a',
        11=>'a', 12=>'a', 13=>'a', 14=>'a', 15=>'a',
        16=>'a', 17=>'a', 18=>'a', 19=>'a', 20=>'a'];
        $kunci_cocok = [0,1,2,3,4];
    }
    elseif ($materi_id == 5) {
        $kunci_pg = ['a','a'];
        $kunci_cocok = [0,1,2];
    }
    elseif ($materi_id == 6) {
        $kunci_pg = ['a','a'];
        $kunci_cocok = [0,1,2];
    }
    elseif ($materi_id == 7) {
        $kunci_pg = ['a','a'];
        $kunci_cocok = [0,1,2];
    }
    elseif ($materi_id == 8) {
        $kunci_pg = ['a','a'];
        $kunci_cocok = [0,1,2];
    }
    elseif ($materi_id == 9) {
        $kunci_pg = ['a','a'];
        $kunci_cocok = [0,1,2];
    }
    else {
        $kunci_pg = ['a','b'];
        $kunci_cocok = [2,1,0];
    }

    // =========================
    // HITUNG NILAI PG
    // =========================
    foreach ($kunci_pg as $i => $jawaban) {
        if ($request->input("pg$i") == $jawaban) {
            $score += 100 / (count($kunci_pg) + count($kunci_cocok));
        }
    }

    // =========================
    // HITUNG NILAI MENCOCOKKAN
    // =========================
    foreach ($kunci_cocok as $i => $jawaban) {
        if ($request->input("cocok$i") == $jawaban) {
            $score += 100 / (count($kunci_pg) + count($kunci_cocok));
        }
    }

    // =========================
    // SIMPAN KE DATABASE
    // =========================
    DB::table('hasil_kuis')->insert([
        'user_id' => Auth::id(),
        'materi_id' => $materi_id,
        'nilai' => round($score),
        'created_at' => now(),
        'updated_at' => now()
    ]);
        DB::table('progress_belajar')->updateOrInsert(

    [
        'user_id' => Auth::id(),
        'materi_id' => $materi_id
    ],

    [
        'kuis' => true,
        'updated_at' => now(),
        'created_at' => now()
    ]);

    // =========================
    // REDIRECT
    // =========================
    return redirect('/dashboard/siswa')
        ->with('success', 'Kuis selesai! Nilai kamu: ' . round($score));
}
public function buatKelas(Request $request)
{
    $request->validate([
        'nama_kelas' => 'required',
        'nama_siswa.*' => 'required',
        'nis_siswa.*' => 'required'
    ]);

    // generate kode kelas
    $kode = strtoupper(substr(md5(time()), 0, 6));

    // simpan kelas
    $classId = DB::table('classes')->insertGetId([
        'nama_kelas' => $request->nama_kelas,
        'kode_kelas' => $kode,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    // simpan siswa

    foreach ($request->nama_siswa as $i => $nama) {

        $nis = $request->nis_siswa[$i];

        DB::table('users')->insert([
            'name' => $nama,
            'email' => $nis . '@siswa.com',
            'password' => Hash::make($nis),
            'role' => 'siswa',
            'kode_kelas' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
}

    return redirect('/dashboard/guru')
        ->with('success', 'Kelas berhasil dibuat! Kode: ' . $kode);
}
public function joinKelas(Request $request)
{
    $kelas = DB::table('classes')
        ->where('kode_kelas', $request->kode_kelas)
        ->first();

    if (!$kelas) {
        return redirect()->route('dashboard.siswa')
               ->with('error', 'Kode kelas tidak ditemukan!');
    }

    DB::table('users')
        ->where('id', Auth::id())
        ->update([
            'kode_kelas' => $request->kode_kelas
        ]);

    return redirect()->route('dashboard.siswa')
           ->with('success', 'Berhasil masuk kelas!');
}
public function keluarKelas()
{
    DB::table('users')
        ->where('id', Auth::id())
        ->update([
            'kode_kelas' => null
        ]);

    return redirect()->route('dashboard.siswa')
        ->with('success', 'Berhasil keluar dari kelas');
}
public function hapusKelas($id)
{
    $kelas = DB::table('classes')->where('id', $id)->first();

    if (!$kelas) {
        return back()->with('error', 'Kelas tidak ditemukan');
    }

    // kosongkan kelas di user
    DB::table('users')
        ->where('kode_kelas', $kelas->kode_kelas)
        ->update([
            'kode_kelas' => null
        ]);

    // hapus kelas
    DB::table('classes')->where('id', $id)->delete();

    return back()->with('success', 'Kelas berhasil dihapus');
}
public function detailKelas($id)
{
    $kelas = DB::table('classes')
        ->where('id', $id)
        ->first();

    // Ambil siswa
    $siswa = DB::table('users')
        ->where('kode_kelas', $kelas->kode_kelas)
        ->get();

    // Hitung jumlah siswa
    $jumlahSiswa = $siswa->count();

    // Karena materi Anda tidak disimpan di database,
    // maka isi manual sesuai jumlah materi yang ada
    $jumlahMateri = 10;

    return view('detail_kelas', compact(
        'kelas',
        'siswa',
        'jumlahSiswa',
        'jumlahMateri'
    ));
}
public function downloadNilai($id)
{
    $kelas = DB::table('classes')->where('id', $id)->first();

    $data = DB::table('users')
        ->leftJoin('hasil_kuis', 'users.id', '=', 'hasil_kuis.user_id')
        ->select(
            'users.id',
            'users.name',
            'users.email',
            'hasil_kuis.materi_id',
            'hasil_kuis.nilai'
        )
        ->where('users.kode_kelas', $kelas->kode_kelas)
        ->get();

    $hasil = [];

    foreach ($data as $d) {

        if (!isset($hasil[$d->id])) {

            $hasil[$d->id] = [
                'nama' => $d->name,

                // Ambil NIS dari email
                'nis' => strstr($d->email, '@', true),

                'm1' => '-',
                'm2' => '-',
                'm3' => '-',
                'm4' => '-'
            ];
        }

        switch ($d->materi_id) {

            case 1:
                $hasil[$d->id]['m1'] = $d->nilai;
                break;

            case 2:
                $hasil[$d->id]['m2'] = $d->nilai;
                break;

            case 3:
                $hasil[$d->id]['m3'] = $d->nilai;
                break;

            case 4:
                $hasil[$d->id]['m4'] = $d->nilai;
                break;
        }
    }

    $filename = "nilai_kelas_" . $kelas->nama_kelas . ".csv";

    $headers = [
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=\"$filename\"",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    ];

    $callback = function () use ($hasil) {

        $file = fopen('php://output', 'w');

        // HEADER CSV
        fputcsv($file, [
            'Nama Siswa',
            'NIS',
            'Materi 1',
            'Materi 2',
            'Materi 3',
            'Materi 4'
        ]);

        foreach ($hasil as $row) {

            fputcsv($file, [
                $row['nama'],
                $row['nis'],
                $row['m1'],
                $row['m2'],
                $row['m3'],
                $row['m4']
            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}
// public function detail($id)
// {
//     $kelas = Kelas::findOrFail($id);

//     $siswa = User::where('kelas_id', $id)->get();

//     // Hitung jumlah siswa
//     $jumlahSiswa = $siswa->count();

//     // Hitung jumlah materi
//     $jumlahMateri = DB::table('materi')
//                         ->where('kelas_id', $id)
//                         ->count();

//     return view('detail_kelas', compact(
//         'kelas',
//         'siswa',
//         'jumlahSiswa',
//         'jumlahMateri'
//     ));
// }
}