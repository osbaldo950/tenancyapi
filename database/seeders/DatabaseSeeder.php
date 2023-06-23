<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Landlord\AdminSeeder;
use Database\Seeders\Landlord\ColonySatSeeder;
use Database\Seeders\Landlord\CountrySatSeeder;
use Database\Seeders\Landlord\CurrencySatSeeder;
use Database\Seeders\Landlord\CustomSatSeeder;
use Database\Seeders\Landlord\CustomsNumberOrderSatSeeder;
use Database\Seeders\Landlord\CustomsPatentSatSeeder;
use Database\Seeders\Landlord\ExportSatSeeder;
use Database\Seeders\Landlord\FactorTypeSatSeeder;
use Database\Seeders\Landlord\FiscalRegimeSatSeeder;
use Database\Seeders\Landlord\InvoiceTypeSatSeeder;
use Database\Seeders\Landlord\KeyProdServSatSeeder;
use Database\Seeders\Landlord\KeyUnitSatSeeder;
use Database\Seeders\Landlord\LocalitySatSeeder;
use Database\Seeders\Landlord\MonthSatSeeder;
use Database\Seeders\Landlord\MunicipalitySatSeeder;
use Database\Seeders\Landlord\PassportKeysSeeder;
use Database\Seeders\Landlord\PaymentFormSatSeeder;
use Database\Seeders\Landlord\PaymentMethodSatSeeder;
use Database\Seeders\Landlord\PeriodicitySatSeeder;
use Database\Seeders\Landlord\RateOrQuotaSatSeeder;
use Database\Seeders\Landlord\RelationTypeSatSeeder;
use Database\Seeders\Landlord\StateSatSeeder;
use Database\Seeders\Landlord\TaxObjectSatSeeder;
use Database\Seeders\Landlord\TaxSatSeeder;
use Database\Seeders\Landlord\UseCfdiSatSeeder;
use Database\Seeders\Landlord\ZipCodeSatSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            PassportKeysSeeder::class,
            FiscalRegimeSatSeeder::class,
            CountrySatSeeder::class,
            StateSatSeeder::class,
            MunicipalitySatSeeder::class,
            LocalitySatSeeder::class,
            ZipCodeSatSeeder::class,
            ColonySatSeeder::class,
            PaymentFormSatSeeder::class,
            CurrencySatSeeder::class,
            InvoiceTypeSatSeeder::class,
            ExportSatSeeder::class,
            PaymentMethodSatSeeder::class,
            PeriodicitySatSeeder::class,
            MonthSatSeeder::class,
            RelationTypeSatSeeder::class,
            UseCfdiSatSeeder::class,
            KeyProdServSatSeeder::class,
            KeyUnitSatSeeder::class,
            TaxObjectSatSeeder::class,
            TaxSatSeeder::class,
            FactorTypeSatSeeder::class,
            RateOrQuotaSatSeeder::class,
            CustomSatSeeder::class,
            CustomsNumberOrderSatSeeder::class,
            CustomsPatentSatSeeder::class
        ]);
    }
}
