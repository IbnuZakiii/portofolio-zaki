<?php
// app/Http/Controllers/PortfolioController.php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactNotificationMail;

class PortfolioController extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'Portfolio Muhammad Ibnu Zaki Munandar',
            'title' => 'Web Developer • Software Engineer • Web Designer |Fresh Graduate SMK ADI SANGGORO',
            'short_bio' => '
Focused on creating modern, efficient, and easy-to-use web applications.',
            'about' => "Saya adalah lulusan SMK jurusan Rekayasa Perangkat Lunak yang memiliki minat besar dalam bidang Web Development dan Software Engineering. Saya berpengalaman membangun berbagai aplikasi berbasis web menggunakan Laravel, PHP, MySQL, Bootstrap, dan Tailwind CSS.

Saya pernah mengembangkan project seperti sistem absensi, booking lapangan, dan website pemesanan makanan. Selain itu, saya juga memiliki pengalaman PKL dan dipercaya untuk bekerja sama dalam pengembangan website di perusahaan.",
            'skills' => ['Laravel', 'TailwindCSS', 'Bootstrap', 'MySQL', 'Github','Php Native', 'UI/UX','Figma', 'Word/Excel'],
            'experience' => 'Saat ini sedang bekerja sama dalam pengembangan project website di PT. Kusuma Dinatha Jaya Abadi setelah menyelesaikan program PKL.
            2025
PKL Web Developer

2026
Kontrak Project Website

2026
Membangun Portfolio Laravel'
        ];

        $projects = [
            [
                'title' => 'Absensi Academy',
                'description' => 'Sistem absensi berbasis web untuk kebutuhan akademik dengan fitur utama absensi dan laporan absensi.',
                'tech' => ['Laravel', 'MySQL', 'Bostrap'],
                'image' => asset('images/academy.png'),
                'demo_url' => '#',
                'code_url' => '#'
            ],
            [
                'title' => 'POS System Untuk Makanan dan Minuman',
                'description' => 'Sistem kasir dan manajemen penjualan makanan dan minuman dengan fitur transaksi, stok barang, dan laporan penjualan.',
                'tech' => [ 'Php Native', 'MySQL', 'Bootstrap'],
                'image' => asset('images/pos-system.png'),
                'demo_url' => '#',
                'code_url' => '#'
            ],
            [
                'title' => 'Ehub one stop logistics',
                'description' => 'Platform marketplace logistik yang menghubungkan layanan pengiriman dan manajemen distribusi dalam satu sistem.',
                'tech' => ['Laravel', 'MySQL'],
                'image' => asset('images/ehub.png'),
                'demo_url' => '#',
                'code_url' => '#'
            ],
            [
                'title' => 'Portofolio ',
                'description' => 'Portofolio pribadi yang menampilkan proyek, sertifikat, dan informasi kontak dengan desain modern dan responsif.',
                'tech' => ['Laravel', 'MySQL', 'Tailwind CSS'],
                'image' => asset('images/portofolio.png'),
                'demo_url' => '#',
                'code_url' => '#'
            ]
            
        ];
        // Data sertifikat
    $certificates = [
        [
            'title' => 'Panitia Sekretaris',
            'issuer' => 'REPLIKAS SPORTIVITAS',
            'year' => '2026',
            'image' => asset('images/sertifrep.jpeg'),
            'verify_url' => '#',
            'description' => 'Sertifikat sebagai Panitia Sekretaris dalam acara REPLIKAS SPORTIVITAS 2026'
        ],
        [
            'title' => 'Informatika',
            'issuer' => 'OSSI Prov. Jawa Barat',
            'year' => '2025',
            'image' => asset('images/sertif.jpeg'),
            'verify_url' => '#',
            'description' => 'Olimpiade Sains Siswa Indonesia dengan bidang Informatika Peraih Mendali Perak'
        ],
        [
            'title' => 'Praktik Kerja Lapangan (PKL)',
            'issuer' => 'SMK ADI SANGGORO',
            'year' => '2026',
            'image' => 'https://placehold.co/600x400/1e1e2f/ffffff?text=UIUX+Cert',
            'verify_url' => '#',
            'description' => 'Sertifikat Praktik Kerja Lapangan di PT. Kusuma Dinatha Jaya Abadi dengan fokus pada pengembangan website'
        ],
        [
            'title' => 'SMK RPL Graduate',
            'issuer' => 'SMK ADI SANGGORO',
            'year' => '2024',
            'image' => 'https://placehold.co/600x400/1e1e2f/ffffff?text=RPL+Diploma',
            'verify_url' => '#',
            'description' => 'Software Engineering major with final project E-Learning'
        ],
    ];
        

        $contact = [
            'email' => 'ibnu03068@gmail.com',
            'phone' => '+62 857-7714-4810',
            'github' => 'https://github.com/IbnuZakiii',
            'linkedin' => 'https://www.linkedin.com/in/m-ibnu-zaki-munandar'
        ];

        return view('welcome', compact('user', 'projects', 'contact', 'certificates'));
    
    
    }
    
    

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        Contact::create($validated);

        return redirect()->route('home')->with('success', 'Terima kasih! Pesan Anda telah terkirim.');
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        // Simpan ke database
        $contact = Contact::create($validated);

        // Kirim email notifikasi ke admin (gunakan email yang Anda terima)
        Mail::to('ibnu03068@gmail.com')->send(new ContactNotificationMail($contact));

        return redirect()->route('home')->with('success', 'Terima kasih! Pesan Anda telah terkirim.');
    }
}