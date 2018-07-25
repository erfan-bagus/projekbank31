<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Filepdf;
use App\Berita;
use File;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Route;

class maincontroller extends Controller
{
    //MAIN PAGE
    public function beranda()
    {

      $beritaatas = berita::where('kategori',"berita")->paginate(3);
      $beritabawah = berita::where('kategori',"Pengumuman")->paginate(8);
        return view('pages.beranda', ['beritaatas' => $beritaatas,'beritabawah' => $beritabawah]);
    }

    public function beranda1()
    {

      $beritaatas = berita::where('kategori',"berita")->paginate(3);
      $beritabawah = berita::where('kategori',"Pengumuman")->paginate(8);
        return view('1beranda', ['beritaatas' => $beritaatas,'beritabawah' => $beritabawah]);
    }

    public function tentangkami()
    {
        return view('tentangkami');
    }

    public function profil()
    {
        return view('profil');
    }

    public function hubunganinvestor()
    {
        return view('hubunganinvestor');
    }

    public function laporankeuangan()
    {

      $laporan = filepdf::where('kategori',"laporankeuangan")->paginate(9);

        return view('laporankeuangan', ['laporan' => $laporan]);
    }

    public function laporantahunan()
    {

      $laporan = filepdf::where('kategori',"laporantahunan")->paginate(9);

        return view('laporantahunan', ['laporan' => $laporan]);
    }

    public function laporancgc()
    {

      $laporan = filepdf::where('kategori',"laporancgc")->paginate(9);

        return view('laporancgc', ['laporan' => $laporan]);
    }

    public function manajemen()
    {
        return view('manajemen');
    }

    public function dewankomisaris()
    {
        return view('dewankomisaris');
    }

    public function direksi()
    {
        return view('direksi');
    }

    public function kepaladivisi()
    {
        return view('kepaladivisi');
    }

    public function pimpinancabang()
    {
        return view('pimpinancabang');
    }

    public function simulasi()
    {
      $total = 0;
      $pinjaman = 0;
      $bunga = 0;
      $jangka = 0;
      $a = 0;
      $b = 0;
        return view('simulasi', ['total' => $total,'pinjaman' => $pinjaman,'bunga' => $bunga,'jangka' => $jangka, 'a' =>$a, 'b' => $b]);
    }

    public function simulasihitung(Request $request)
    {
      $this->validate($request, [
     'pinjaman' => 'required|numeric'
    ]);
    $pinjaman = $request ->pinjaman;
    $jangka = $request ->input('jangka');
    $bunga = $request ->input('bunga');
    $a = ($pinjaman * $bunga)/$jangka;
    $b = $pinjaman / $jangka;

      $total = ($pinjaman/$jangka)+(($pinjaman*$bunga)/100);
        return view('simulasi', ['total' => $total,'pinjaman' => $pinjaman,'bunga' => $bunga,'jangka' => $jangka, 'a' =>$a, 'b' => $b]);
    }





    public function layanan()
    {
        return view('layanan');
    }
    public function kredit()
    {
        return view('kredit');
    }
    public function kreditcerahinkusif()
    {
        return view('kreditcerahinkusif');
    }
    public function kreditmultiguna()
    {
        return view('kreditmultiguna');
    }
    public function tabungan()
    {
        return view('tabungan');
    }
    public function tabunganumumparama()
    {
        return view('tabunganumumparama');
    }
    public function tabungancitraparama4()
    {
        return view('tabungancitraparama4');
    }
    public function tabunganarjuna11()
    {
        return view('tabunganarjuna11');
    }
    public function tabunganku()
    {
        return view('tabunganku');
    }
    public function tabunganarjuna12()
    {
        return view('tabunganarjuna12');
    }
    public function tabunganharirayaqurmatasya()
    {
        return view('tabunganharirayaqurmatasya');
    }
    public function tabungansimpel()
    {
        return view('tabungansimpel');
    }
    public function tabunganarjuna13()
    {
        return view('tabunganarjuna13');
    }
    public function deposito()
    {
        return view('deposito');
    }
    public function beritalainnya()
    {
      $file = berita::where('kategori',"berita")->paginate(9);

        return view('beritalainnya', ['file' => $file]);
    }

    public function pengumumanlainnya()
    {
      $file = berita::where('kategori',"pengumuman")->paginate(9);

        return view('pengumumanlainnya', ['file' => $file]);
    }

    public function berita($id)
    {
      $file = berita::find($id);
      $beritaatas = berita::where('kategori',"berita")->paginate(3);
      $beritabawah = berita::where('kategori',"Pengumuman")->paginate(8);

        return view('berita', ['file' => $file, 'beritaatas' => $beritaatas,'beritabawah' => $beritabawah]);
    }

    public function pengumuman($id)
    {
      $file = berita::find($id);
      $beritaatas = berita::where('kategori',"berita")->paginate(3);
      $beritabawah = berita::where('kategori',"Pengumuman")->paginate(8);


        return view('pengumuman', ['file' => $file, 'beritaatas' => $beritaatas,'beritabawah' => $beritabawah]);
    }

    public function aksicari(Request $request)
    {

      $beritaatas = DB::table('berita')
                ->where('kategori', 'berita')
                ->where('judul', 'like', "%$request->search%")
                ->get();
      $beritabawah = DB::table('berita')
                ->where('kategori', 'pengumuman')
                ->where('judul', 'like', "%$request->search%")
                ->get();

      $files  = DB::table('filepdf')
                ->where('nama', 'like', "%$request->search%")
                ->get();


        return view('hasilcari', ['files' => $files, 'beritaatas' => $beritaatas,'beritabawah' => $beritabawah]);
    }

    public function karir()
    {
      $notifikasi = 'SILAHKAN UPLOAD LAMARAN!!!';
      $file = filepdf::where('kategori',"lamaran")->get();
        return view('karir', ['notifikasi' => $notifikasi,'file' => $file]);
    }

    public function kontakkami()
    {
        return view('kontakkami');
    }



    //ADMIN
    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function loginaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $this->validate($request, [
     'user' => 'required',
    ]);
      $this->validate($request, [
     'pass' => 'required',
    ]);

    if (admin::where('nama',$request->user)->count() > 0) {
      $login = admin::where('nama',$request->user)->first();
      if (Hash::check($request->pass, $login->pass )) {
        session(['nama' => $request->user]);
        return redirect('adminpage');
      }
      return redirect('adminlogin');
    }

    return redirect('adminlogin');

    }

    public function logout(Request $request)
    {
        $request->session()->regenerate();
        $request->session()->flush();
        return redirect('adminlogin');

    }



    public function adminpage()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      $admins = admin::first();
      $berita = berita::where('kategori',"berita")->count();
      $pengumuman = berita::where('kategori',"Pengumuman")->count();
      $tahunan = filepdf::where('kategori',"laporantahunan")->count();
      $keuangan = filepdf::where('kategori',"laporankeuangan")->count();
      $cgc = filepdf::where('kategori',"laporancgc")->count();
      $lamaran = filepdf::where('kategori',"lamaran")->count();
      $file = filepdf::where('kategori',"lamaran")->paginate(10);


      return view('adminpage', ['lamaran' => $lamaran,'file' => $file, 'admins' => $admins,'berita' => $berita,'pengumuman' => $pengumuman,'tahunan' => $tahunan,'keuangan' => $keuangan,'cgc' => $cgc,]);
    }

    public function adminaturpassword()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      return view('admingantipassword');
    }
    public function aksiaturpassword(Request $request)
    {

      $this->validate($request, [
         'user' => 'required',
        ]);
          $this->validate($request, [
         'pass' => 'required',
        ]);
        $pass = Hash::make($request->pass);
        $admins = admin::first();
        $admins->nama       = $request->user;
        $admins->pass       = $pass;
        $admins->save();

    return redirect('adminpage');


      //$admins = admin::all();
      //return view('admin.aturadmin', ['admins' => $admins]);
    }


    public function adminfile()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      $file = DB::table('filepdf')->paginate(10);
      return view('adminfile', ['file' => $file]);
    }

    public function adminfileupload()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      return view('adminfileupload');
    }

    public function aksitambahfile(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

        $this->validate($request, [
        'namafile' => 'required',
        ]);
        $this->validate($request, [
        'filepdf' => 'required',
        ]);

              $filesa = new filepdf;
              $filesa->nama       = $request->namafile;
              // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
              $file       = $request->file('filepdf');
              $fileName   = $file->getClientOriginalName();
              $request->file('filepdf')->move("file/", $fileName);

              $filesa->namalokasi= $fileName;
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);
      return redirect('adminfile');
    }


    public function downloadfile($id)
    {
      $Filepdf = Filepdf::find($id);
      $filelokasi = $Filepdf->namalokasi;

      if ($Filepdf->kategori == 'lamaran') {
        return response()->download('filelamaran/' . $filelokasi);
      }
      elseif ($Filepdf->kategori == 'laporancgc') {
        return response()->download('filelaporancgc/' . $filelokasi);
      }
      elseif ($Filepdf->kategori == 'laporantahunan') {
        return response()->download('filelaporantahunan/' . $filelokasi);
      }
      elseif ($Filepdf->kategori == 'laporankeuangan') {
        return response()->download('filelaporankeuangan/' . $filelokasi);
      }

      return redirect('adminfile');
    }

    public function hapusfile($id)
    {
      $Filepdf = Filepdf::find($id);
      $filelokasi = $Filepdf->namalokasi;
      File::delete('file/' . $filelokasi);
      $Filepdf->delete();
      return redirect('adminfile');
    }


    public function adminlaporankeuangan()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      $file = filepdf::where('kategori',"laporankeuangan")->paginate(10);
      return view('adminlaporankeuangan', ['file' => $file]);
    }

    public function adminlaporankeuanganupload()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      return view('adminlaporankeuanganupload');
    }

    public function buatlaporankeuanganaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

        $this->validate($request, [
        'namafile' => 'required',
        ]);
        $this->validate($request, [
        'filepdf' => 'required',
        ]);

              $filesa = new filepdf;
              $filesa->nama       = $request->namafile;
              // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
              $file       = $request->file('filepdf');
              $fileName   = $file->getClientOriginalName();
              $request->file('filepdf')->move("filelaporankeuangan/", $fileName);

              $filesa->namalokasi= $fileName;
              $filesa->kategori= 'laporankeuangan';
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);
      return redirect('adminlaporankeuangan');
    }

    public function hapuslaporankeuangan($id)
    {
      $Filepdf = Filepdf::find($id);
      $filelokasi = $Filepdf->namalokasi;
      File::delete('filelaporankeuangan/' . $filelokasi);
      $Filepdf->delete();
      return redirect('adminlaporankeuangan');
    }

    public function adminlaporantahunan()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      $file = filepdf::where('kategori',"laporantahunan")->paginate(10);
      return view('adminlaporantahunan', ['file' => $file]);
    }

    public function adminlaporantahunanupload()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      return view('adminlaporantahunanupload');
    }

    public function buatlaporantahunanaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

        $this->validate($request, [
        'namafile' => 'required',
        ]);
        $this->validate($request, [
        'filepdf' => 'required',
        ]);

              $filesa = new filepdf;
              $filesa->nama       = $request->namafile;
              // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
              $file       = $request->file('filepdf');
              $fileName   = $file->getClientOriginalName();
              $request->file('filepdf')->move("filelaporantahunan/", $fileName);

              $filesa->namalokasi= $fileName;
              $filesa->kategori= 'laporantahunan';
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);
      return redirect('adminlaporantahunan');
    }

    public function hapuslaporantahunan($id)
    {
      $Filepdf = Filepdf::find($id);
      $filelokasi = $Filepdf->namalokasi;
      File::delete('filelaporantahunan/' . $filelokasi);
      $Filepdf->delete();
      return redirect('adminlaporantahunan');
    }

    public function adminlaporancgc()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      $file = filepdf::where('kategori',"laporancgc")->paginate(10);
      return view('adminlaporancgc', ['file' => $file]);
    }

    public function adminlaporancgcupload()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      return view('adminlaporancgcupload');
    }

    public function buatlaporancgcaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

        $this->validate($request, [
        'namafile' => 'required',
        ]);
        $this->validate($request, [
        'filepdf' => 'required',
        ]);

              $filesa = new filepdf;
              $filesa->nama       = $request->namafile;
              // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
              $file       = $request->file('filepdf');
              $fileName   = $file->getClientOriginalName();
              $request->file('filepdf')->move("filelaporancgc/", $fileName);

              $filesa->namalokasi= $fileName;
              $filesa->kategori= 'laporancgc';
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);
      return redirect('adminlaporancgc');
    }

    public function hapuslaporancgc($id)
    {
      $Filepdf = Filepdf::find($id);
      $filelokasi = $Filepdf->namalokasi;
      File::delete('filelaporancgc/' . $filelokasi);
      $Filepdf->delete();
      return redirect('adminlaporancgc');
    }

    public function buatlaporanlamaranaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();



        $this->validate($request, [
        'filepdf' => 'required',
        ]);

              $filesa = new filepdf;
              $filesa->nama       = 'Lamaran';
              // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
              $file       = $request->file('filepdf');
              $fileName   = $file->getClientOriginalName();
              $request->file('filepdf')->move("filelamaran/", $fileName);

              $filesa->namalokasi= $fileName;
              $filesa->kategori= 'lamaran';
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);

                return redirect('adminpage');
    }
    public function hapuslamaran($id)
    {
      $Filepdf = Filepdf::find($id);
      $filelokasi = $Filepdf->namalokasi;
      File::delete('filelamaran/' . $filelokasi);
      $Filepdf->delete();
      return redirect('adminpage');
    }





    public function adminberita()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      $file = berita::where('kategori',"berita")->paginate(10);
      $no = 0;
      return view('adminberita', ['file' => $file,'no' => $no]);
    }

    public function hapusberita($id)
    {
      $berita = berita::find($id);
      $filelokasi = $berita->gambarberita;
      File::delete('gambarberita/' . $filelokasi);
      $berita->delete();
      return redirect('adminberita');
    }

    public function adminberitabuat()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      return view('adminberitabuat');
    }

    public function buatberitaaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

        $this->validate($request, [
        'judul' => 'required',
        ]);
        $this->validate($request, [
        'konten' => 'required',
        ]);

              $filesa = new berita;
              $filesa->judul       = $request->judul;
                  $file       = $request->file('gambarberita');
                  $fileName   = $file->getClientOriginalName();
                  $request->file('gambarberita')->move("gambarberita/", $fileName);

              $filesa->konten = $request->konten;
              $filesa->kategori = 'berita';
              $filesa->gambarberita =$fileName;
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);
      return redirect('adminberita');
    }


    public function adminpengumuman()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }
      $file = berita::where('kategori',"pengumuman")->paginate(10);
      $no = 0;
      return view('adminpengumuman', ['file' => $file,'no' => $no]);
    }

    public function hapuspengumuman($id)
    {
      $pengumuman = berita::find($id);

      $pengumuman->delete();
      return redirect('adminpengumuman');
    }

    public function editartikel($id)
    {
      $pengumuman = berita::find($id);


      return view('admineditartikel', ['pengumuman' => $pengumuman]);
    }

    public function editartikelaksi($id,Request $request)
    {
      $pengumuman = berita::find($id);
      $pengumuman->judul = $request->judul;
      $pengumuman->konten = $request->konten;
      $pengumuman->save();


        return redirect('adminpage');
    }

    public function adminpengumumanbuat()
    {
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

      return view('adminpengumumanbuat');
    }

    public function buatpengumumanaksi(Request $request)
    {
      //$admins  = DB::table('admin')->get();
      $session = session('nama');
      if (admin::where('nama',$session)->count() < 1) {
        return redirect('adminlogin');
      }

        $this->validate($request, [
        'judul' => 'required',
        ]);
        $this->validate($request, [
        'konten' => 'required',
        ]);

              $filesa = new berita;
              $filesa->judul       = $request->judul;


              $filesa->konten = $request->konten;
              $filesa->kategori = 'pengumuman';
              $filesa->save();
              //$admins = admin::all();
              //return view('admin.aturadmin', ['admins' => $admins]);
      return redirect('adminpengumuman');
    }



}
