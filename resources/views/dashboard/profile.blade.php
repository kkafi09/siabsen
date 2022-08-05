@extends('layouts.main')

@section('container')
    <div class="wrapper py-3 px-5 w-full h-full bg-backgroundColour">
        <div class="header-text text-black w-full bg-semiwhite p-3 rounded-lg">
            <h1 class="uppercase font-semibold text-xl text-gray">Data profil: {{ $profile->name }}</h1>
            <p class="text-xs text-gray opacity-80">Data diri yang tampil seharusnya harus sama dengan data yang ada di
                raport</p>
        </div>
        <div class="isiData text-sm font-light w-full h-fit p-4 rounded-xl bg-semiwhite mt-3 gap-x-4 flex flex-row">
            <div class="id">
                <p>1.</p>
                <p>2.</p>
                <p>3.</p>
                <p>4.</p>
                <p>5.</p>
                <p>6.</p>
                <p>7.</p>
                <p>8.</p>
                <p>9.</p>
                <p>10.</p>
                <p>11.</p>
                <p>12.</p>
                <p>13.</p>
                <br>
                <br>
                <p>14.</p>
                <br>
                <br>
                <p>15.</p>
                <p>16.</p>
                <p>17.</p>
                <br>
                <br>
                <p>18.</p>
                <p>19.</p>
                <p>20.</p>
                <p>21.</p>
            </div>
            <div class="key ">
                <p> PIN</p>
                <p> Nama Peserta Didik</p>
                <p> Kelas</p>
                <p> NIS /NISN</p>
                <p> Tempat Tanggal Lahir</p>
                <p> Jenis Kelamin</p>
                <p> Agama</p>
                <p> Status dalam keluarga</p>
                <p> Anak ke</p>
                <p> Alamat Peserta Didik</p>
                <p> Nomor Telepon Rumah</p>
                <p> Sekolah Asal</p>
                <p> Diterima di sekolah ini
                <ul>
                    <li>Di kelas</li>
                    <li>Pada Tanggal</li>
                </ul>
                </p>
                <p> Nama Orang Tua
                <ul>
                    <li> Ayah</li>
                    <li> Ibu</li>
                </ul>
                </p>
                <p> Alamat Orang Tua</p>
                <p> Nomor Telepon Rumah</p>
                <p> Pekerjaan Orang Tua
                <ul>
                    <li> Ayah</li>
                    <li> Ibu</li>
                </ul>
                </p>
                <p> Nama Wali Peserta Didik</p>
                <p> Alamat Wali Peserta Didik</p>
                <p> Nomor Telepon Rumah</p>
                <p> Pekerjaan Wali Peserta Didik</p>
            </div>
            <div class="separator">
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
                <p>:</p>
            </div>
            <div class="isiData text-sm font-light w-full h-full p-4 bg-white my-3 gap-x-4 flex flex-row">
                <div class="id">
                    <p>1.</p>
                    <p>2.</p>
                    <p>3.</p>
                    <p>4.</p>
                    <p>5.</p>
                    <p>6.</p>
                    <p>7.</p>
                    <p>8.</p>
                    <p>9.</p>
                    <p>10.</p>
                    <p>11.</p>
                    <p>12.</p>
                    <p>13.</p>
                    <br>
                    <br>
                    <p>14.</p>
                    <br>
                    <br>
                    <p>15.</p>
                    <p>16.</p>
                    <p>17.</p>
                    <br>
                    <br>
                    <p>18.</p>
                    <p>19.</p>
                    <p>20.</p>
                    <p>21.</p>
                </div>
                <div class="key ">
                    <p> PIN</p>
                    <p> Nama Peserta Didik</p>
                    <p> Kelas</p>
                    <p> NIS /NISN</p>
                    <p> Tempat Tanggal Lahir</p>
                    <p> Jenis Kelamin</p>
                    <p> Agama</p>
                    <p> Status dalam keluarga</p>
                    <p> Anak ke</p>
                    <p> Alamat Peserta Didik</p>
                    <p> Nomor Telepon Rumah</p>
                    <p> Sekolah Asal</p>
                    <p> Diterima di sekolah ini
                    <ul>
                        <li>Di kelas</li>
                        <li>Pada Tanggal</li>
                    </ul>
                    </p>
                    <p> Nama Orang Tua
                    <ul>
                        <li> Ayah</li>
                        <li> Ibu</li>
                    </ul>
                    </p>
                    <p> Alamat Orang Tua</p>
                    <p> Nomor Telepon Rumah</p>
                    <p> Pekerjaan Orang Tua
                    <ul>
                        <li> Ayah</li>
                        <li> Ibu</li>
                    </ul>
                    </p>
                    <p> Nama Wali Peserta Didik</p>
                    <p> Alamat Wali Peserta Didik</p>
                    <p> Nomor Telepon Rumah</p>
                    <p> Pekerjaan Wali Peserta Didik</p>
                </div>
                <div class="separator">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="value">
                </div>
            </div>
        </div>
    @endsection
