<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('currencies')->insert([
            'name' => 'Dólares',
            '2_letter_code' => 'us',
            '3_letter_code' => 'USD',
            'symbol' => '$'
        ]);

        DB::table('currencies')->insert([
            'name' => 'Pesos Uruguayos',
            '2_letter_code' => 'uy',
            '3_letter_code' => 'UYU',
            'symbol' => '$'
        ]);

        DB::table('currencies')->insert([
            'name' => 'Pesos Argentinos',
            '2_letter_code' => 'ar',
            '3_letter_code' => 'ARS',
            'symbol' => '$'
        ]);

        DB::table('currencies')->insert([
            'name' => 'Reales',
            '2_letter_code' => 'br',
            '3_letter_code' => 'BRL',
            'symbol' => 'R$'
        ]);

        DB::table('currencies')->insert([
            'name' => 'Pesos Mexicanos',
            '2_letter_code' => 'mx',
            '3_letter_code' => 'MXN',
            'symbol' => '$'
        ]);

        DB::table('currencies')->insert([
            'name' => 'Guaraníes',
            '2_letter_code' => 'py',
            '3_letter_code' => 'PYG',
            'symbol' => '₲'
        ]);

        DB::table('currencies')->insert([
            'name' => 'Soles',
            '2_letter_code' => 'pe',
            '3_letter_code' => 'PEN',
            'symbol' => 'S/'
        ]);

    }
}
