<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $siswa =[
        ['nama'=>'Sodikin','kelas'=>'XII RPL-1','alamat'=>'BojongKoneng','tanggal_lahir'=>'2000-01-24'],
        ['nama'=>'Aditya','kelas'=>'XII RPL-1','alamat'=>'Nusa','tanggal_lahir'=>'2000-08-22'],
        ['nama'=>'Ramdhani','kelas'=>'XII RPL-1','alamat'=>'Sukamenak','tanggal_lahir'=>'2000-12-11'],
        ['nama'=>'Taufik','kelas'=>'XII RPL-1','alamat'=>'Palasari','tanggal_lahir'=>'2000-08-07'],
        ['nama'=>'Didin','kelas'=>'XII RPL-1','alamat'=>'Cibedug','tanggal_lahir'=>'2000-05-05']
            
      
        ];
        DB::table('siswas')->insert($siswa);
    }
}
