<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CurrenciesTableSeeder');
        $this->call('CountriesTableSeeder');
        $this->call('PaymentMethodsTableSeeder');
        $this->call('CategoriesTableSeeder');
    }
}
