<header>

    <div class="fixed-top" style="	background-color: #01417d;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" style="margin-top:20px">
                <a class="navbar-brand" href="{{URL::route('beranda')}}"><img style="height: 35px;width: 200px;"
                                                                              src="{{ asset('image')}}/logo_header.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::route('beranda')}}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{URL::route('tentangkami')}}"><b>Tentang Kami</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('profil')}}"><b>Profil</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('hubunganinvestor')}}"><b>Hubungan
                                        Investor</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('laporantahunan')}}">Laporan Tahunan</a>
                                <a class="dropdown-item" href="{{URL::route('laporankeuangan')}}">Laporan Keuangan</a>
                                <a class="dropdown-item" href="{{URL::route('laporancgc')}}">Laporan CGC</a>
                                <a class="dropdown-item" href="{{URL::route('manajemen')}}"><b>Manajemen</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('dewankomisaris')}}">Dewan Komisaris</a>
                                <a class="dropdown-item" href="{{URL::route('direksi')}}">Direksi</a>
                                <a class="dropdown-item" href="{{URL::route('kepaladivisi')}}">Kepala Divisi</a>
                                <a class="dropdown-item" href="{{URL::route('pimpinancabang')}}">Pimpinan Cabang</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{URL::route('layanan')}}"><b>Layanan</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('kredit')}}"><b>Kredit</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('kreditcerahinkusif')}}">Kredit Cerah
                                    Inkusif</a>
                                <a class="dropdown-item" href="{{URL::route('kreditmultiguna')}}">Kredit Multiguna</a>
                                <a class="dropdown-item" href="{{URL::route('tabungan')}}"><b>Tabungan</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::route('tabunganumumparama')}}">Tabungan Umum
                                    Parama</a>
                                <a class="dropdown-item" href="{{URL::route('tabungancitraparama4')}}">Citra Parama
                                    4</a>
                                <a class="dropdown-item" href="{{URL::route('tabunganarjuna11')}}">Tabungan Arjuna
                                    11</a>
                                <a class="dropdown-item" href="{{URL::route('tabunganku')}}">Tabunganku</a>
                                <a class="dropdown-item" href="{{URL::route('tabunganarjuna12')}}">Tabungan Arjuna
                                    12</a>
                                <a class="dropdown-item" href="{{URL::route('tabunganharirayaqurmatasya')}}">Tabungan
                                    Hari Raya</a>
                                <a class="dropdown-item" href="{{URL::route('tabungansimpel')}}">Tabungan Simpel</a>
                                <a class="dropdown-item" href="{{URL::route('tabunganarjuna13')}}">Tabungan Arjuna
                                    13</a>
                                <a class="dropdown-item" href="{{URL::route('deposito')}}"><b>Deposit</b></a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::route('karir')}}">Karir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::route('kontakkami')}}">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>