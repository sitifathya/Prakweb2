@php
    $nama = "Budi";
    $nilai = 60;
@endphp

{{-- jika nilai lebih dari sama dengan 60 maka siswa lulus
     jika nilai kurang dari sama dengan 60 maka siswa tidak lulus --}}

    @if ($nilai >= 60)
        @php
            $ket = 'lulus'
        @endphp
        
    @else
        @php
            $ket = 'Tidak lulus';
        @endphp  
    @endif

    Siswa yang bernama {{ $nama }}
    <br>Dengan Nilai {{ $nilai }}
    <br>Dengan variable {{ $ket }}