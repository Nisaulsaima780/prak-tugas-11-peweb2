@php
    $nama = 'rahmi al iqla';
    $nim = '0110123277';
    $programStudi = 'Sistem Informasi';
    $tahunAngkatan = 2023;
    $role = 'mahasiswa';
    
@endphp

    @if ($role == 'mahasiswa')
               <h3> Selamat datang {{ $nama}} Anda adalah seorang {{$role}}</h3>
               <p>{{$nama}}, {{$nim}}, {{$tahunAngkatan}}</p>
    @else
                <h3> Selamat datang {{ $name}} Anda adalah seorang user {{$role}} <h3>    
    @endif                  