<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('countries')->insert([
            'name' => 'Argentina',
            '2_letter_code' => 'ar',
            '3_letter_code' => 'ARG'
        ]);

        DB::table('countries')->insert([
            'name' => 'Bolivia',
            '2_letter_code' => 'bo',
            '3_letter_code' => 'BOL'
        ]);

        DB::table('countries')->insert([
            'name' => 'Brasil',
            '2_letter_code' => 'br',
            '3_letter_code' => 'BRA'
        ]);

        DB::table('countries')->insert([
            'name' => 'Chile',
            '2_letter_code' => 'cl',
            '3_letter_code' => 'CHL'
        ]);

        DB::table('countries')->insert([
            'name' => 'Colombia',
            '2_letter_code' => 'co',
            '3_letter_code' => 'COL'
        ]);

        DB::table('countries')->insert([
            'name' => 'Costa Rica',
            '2_letter_code' => 'cr',
            '3_letter_code' => 'CRI'
        ]);

        DB::table('countries')->insert([
            'name' => 'Cuba',
            '2_letter_code' => 'cu',
            '3_letter_code' => 'CUB'
        ]);

        DB::table('countries')->insert([
            'name' => 'Ecuador',
            '2_letter_code' => 'ec',
            '3_letter_code' => 'ECU'
        ]);

        DB::table('countries')->insert([
            'name' => 'El Salvador',
            '2_letter_code' => 'sv',
            '3_letter_code' => 'SLV'
        ]);

        DB::table('countries')->insert([
            'name' => 'Guatemala',
            '2_letter_code' => 'gt',
            '3_letter_code' => 'GTM'
        ]);

        DB::table('countries')->insert([
            'name' => 'Haití',
            '2_letter_code' => 'ht',
            '3_letter_code' => 'HTI'
        ]);

        DB::table('countries')->insert([
            'name' => 'Honduras',
            '2_letter_code' => 'hn',
            '3_letter_code' => 'HND'
        ]);

        DB::table('countries')->insert([
            'name' => 'México',
            '2_letter_code' => 'mx',
            '3_letter_code' => 'MEX'
        ]);

        DB::table('countries')->insert([
            'name' => 'Nicaragua',
            '2_letter_code' => 'ni',
            '3_letter_code' => 'NIC'
        ]);

        DB::table('countries')->insert([
            'name' => 'Panamá',
            '2_letter_code' => 'pa',
            '3_letter_code' => 'PAN'
        ]);

        DB::table('countries')->insert([
            'name' => 'Paraguay',
            '2_letter_code' => 'py',
            '3_letter_code' => 'PRY'
        ]);

        DB::table('countries')->insert([
            'name' => 'Perú',
            '2_letter_code' => 'pe',
            '3_letter_code' => 'PER'
        ]);

        DB::table('countries')->insert([
            'name' => 'Puerto Rico',
            '2_letter_code' => 'pr',
            '3_letter_code' => 'PRI'
        ]);

        DB::table('countries')->insert([
            'name' => 'República Dominicana',
            '2_letter_code' => 'do',
            '3_letter_code' => 'DOM'
        ]);

        DB::table('countries')->insert([
            'name' => 'Uruguay',
            '2_letter_code' => 'uy',
            '3_letter_code' => 'URY'
        ]);

        DB::table('countries')->insert([
            'name' => 'Venezuela',
            '2_letter_code' => 've',
            '3_letter_code' => 'VEN'
        ]);

    }
}
