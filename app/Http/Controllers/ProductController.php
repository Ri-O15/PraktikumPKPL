<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $products = [

        // Produk untuk Solo
        'solo' => [
            'mealsolo6' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp124.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp20.700',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp147.000'
            ],
            'mealsolo12' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp238.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.900',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp288.000'
            ],
            'mealsolo24' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp465.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.400',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp570.000'
            ],
            'mealsolo48' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp898.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp18.800',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.122.000'
            ],
            'mealsolo72' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp1.300.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp18.100',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.656.000'
            ],
            //solonasiputih
            'mealsolonasi6' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp129.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp21.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp153.000'
            ],
            'mealsolonasi12' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp248.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp20.700',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp300.000'
            ],
            'mealsolonasi24' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp483.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp20.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp593.000'
            ],
            'mealsolonasi48' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp934.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp19.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.167.000'
            ],
            'mealsolonasi72' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp1.352.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp18.800',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.722.000'
            ],
            //solonasimerah
            'mealsolomerah6' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp137.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp22.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp162.000'
            ],
            'mealsolomerah12' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp262.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp317.000'
            ],
            'mealsolomerah24' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp511.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.300',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp627.000'
            ],
            'mealsolomerah48' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp987.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp20.600',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.234.000'
            ],
            'mealsolomerah72' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp1.430.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp19.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.822.000'
            ],
            //solofamilypack
            '2famsolotanpa6' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp239.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp39.900',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp265.000'
            ],
            '2famsolotanpa12' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp456.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp38.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp518.000'
            ],
            '2famsolotanpa24' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp893.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp37.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.026.000'
            ],
            '2famsolotanpa48' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.708.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp35.600',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.009.000'
            ],
            '2famsolotanpa72' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.589.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp34.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.981.000'
            ],
            //SOLO3 Orang
            '3famsolotanpa6' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp340.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp56.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp370.000'
            ],
            '3famsolotanpa12' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp653.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp726.000'
            ],
            '3famsolotanpa24' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.278.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp53.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.436.000'
            ],
            '3famsolotanpa48' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.446.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp51.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.812.000'
            ],
            '3famsolotanpa72' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.589.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp49.900',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp4.173.000'
            ],
            //SOLO4 Orang
            '4famsolotanpa6' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp446.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp74.400',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp482.000'
            ],
            '4famsolotanpa12' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp855.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp71.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp945.000'
            ],
            '4famsolotanpa24' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.674.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp69.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.870.000'
            ],
            '4famsolotanpa48' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.203.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp66.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp3.660.000'
            ],
            '4famsolotanpa72' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp4.699.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp65.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp5.432.000'
            ],
            'healthydiet6' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.246.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp41.000',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp270.000'
            ],
            'healthydiet12' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.482.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp535.000'
            ],
            'healthydiet24' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.943.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp39.300',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp1.060.000'
            ],
            'healthydiet48' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.1.766.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp36.800',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp2.053.000'
            ],
            'healthydiet72' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.2.532.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp3.014.000'
            ],
            'advancediet6' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.363.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp60.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp382.000'
            ],
            'advancediet12' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.712.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp59.400',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp757.000'
            ],
            'advancediet24' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.1.393.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp58.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp1.498.000'
            ],
            'advancediet48' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.2.612.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp2.902.000'
            ],
            'advancediet72' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.3.748.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp52.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp4.259.000'
            ],
        ],

        //Produk untuk malang
        'malang' => [
            'mealmaljogputih6' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp132.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp22.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp153.000'
            ],
            'mealmaljogputih12' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp252.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp21.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp300.000'
            ],
            'mealmaljogputih24' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp492.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp20.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp593.000'
            ],
            'mealmaljogputih48' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp951.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp19.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.167.000'
            ],
            'mealmaljogputih72' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp1.378.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp19.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.722.000'
            ],
            'mealmaljogtanpa6' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp126.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp21.000',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp147.000'
            ],
            'mealmaljogtanpa12' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp242.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp20.200',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp288.000'
            ],
            'mealmaljogtanpa24' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp473.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.800',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp570.000'
            ],
            'mealmaljogtanpa48' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp914.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.100',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.122.000'
            ],
            'mealmaljogtanpa72' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp1.325.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp18.500',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.656.000'
            ],
            'mealmaljogmerah6' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp139.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp23.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp162.000'
            ],
            'mealmaljogmerah12' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp266.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp22.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp317.000'
            ],
            'mealmaljogmerah24' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp520.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.700',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp627.000'
            ],
            'mealmaljogmerah48' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp1.006.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.00',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.234.000'
            ],
            'mealmaljogmerah72' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp1.458.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp20.300',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.822.000'
            ],
            '2fammaljogtanpa6' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp241.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp265.000'
            ],
            '3fammaljogtanpa6' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp350.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp58.400',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp370.000'
            ],
            '4fammaljogtanpa6' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp460.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp76.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp482.000'
            ],
            '2fammaljogtanpa12' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp461.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp38.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp518.000'
            ],
            '3fammaljogtanpa12' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp672.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp56.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp726.000'
            ],
            '4fammaljogtanpa12' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp884.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp73.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp945.000'
            ],
            '2fammaljogtanpa24' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp903.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp37.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.026.000'
            ],
            '3fammaljogtanpa24' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.314.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp54.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.436.000'
            ],
            '4fammaljogtanpa24' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.730.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp72.100',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.870.000'
            ],
            '2fammaljogtanpa48' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.728.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp36.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.009.000'
            ],
            '3fammaljogtanpa48' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.517.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp52.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.812.000'
            ],
            '4fammaljogtanpa48' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.312.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp69.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp3.660.000'
            ],
            '2fammaljogtanpa72' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.534.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.981.000'
            ],
            '3fammaljogtanpa72' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.693.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp51.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp4.173.000'
            ],
            '4fammaljogtanpa72' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp4.862.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp67.600',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp5.432.000'
            ],
            'healthydiet6' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.246.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp41.000',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp270.000'
            ],
            'healthydiet12' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.482.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp535.000'
            ],
            'healthydiet24' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.943.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp39.300',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp1.060.000'
            ],
            'healthydiet48' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.1.766.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp36.800',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp2.053.000'
            ],
            'healthydiet72' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.2.532.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp3.014.000'
            ],
            'advancediet6' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.363.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp60.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp382.000'
            ],
            'advancediet12' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.712.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp59.400',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp757.000'
            ],
            'advancediet24' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.1.393.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp58.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp1.498.000'
            ],
            'advancediet48' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.2.612.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp2.902.000'
            ],
            'advancediet72' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.3.748.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp52.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp4.259.000'
            ],
        ],
        'yogyakarta' => [
          'mealmaljogputih6' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp132.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp22.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp153.000'
            ],
            'mealmaljogputih12' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp252.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp21.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp300.000'
            ],
            'mealmaljogputih24' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp492.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp20.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp593.000'
            ],
            'mealmaljogputih48' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp951.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp19.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.167.000'
            ],
            'mealmaljogputih72' => [
                'name' => 'Mealbox Nasi Putih', 
                'price' => 'Rp1.378.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp19.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.722.000'
            ],
            'mealmaljogtanpa6' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp126.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp21.000',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp147.000'
            ],
            'mealmaljogtanpa12' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp242.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp20.200',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp288.000'
            ],
            'mealmaljogtanpa24' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp473.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.800',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp570.000'
            ],
            'mealmaljogtanpa48' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp914.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.100',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.122.000'
            ],
            'mealmaljogtanpa72' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp1.325.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp18.500',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.656.000'
            ],
            'mealmaljogmerah6' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp139.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp23.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp162.000'
            ],
            'mealmaljogmerah12' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp266.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp22.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp317.000'
            ],
            'mealmaljogmerah24' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp520.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.700',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp627.000'
            ],
            'mealmaljogmerah48' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp1.006.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.00',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.234.000'
            ],
            'mealmaljogmerah72' => [
                'name' => 'Mealbox Nasi Merah', 
                'price' => 'Rp1.458.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp20.300',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.822.000'
            ],
            '2fammaljogtanpa6' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp241.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp265.000'
            ],
            '3fammaljogtanpa6' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp350.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp58.400',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp370.000'
            ],
            '4fammaljogtanpa6' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp460.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp76.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp482.000'
            ],
            '2fammaljogtanpa12' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp461.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp38.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp518.000'
            ],
            '3fammaljogtanpa12' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp672.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp56.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp726.000'
            ],
            '4fammaljogtanpa12' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp884.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp73.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp945.000'
            ],
            '2fammaljogtanpa24' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp903.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp37.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.026.000'
            ],
            '3fammaljogtanpa24' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.314.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp54.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.436.000'
            ],
            '4fammaljogtanpa24' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.730.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp72.100',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.870.000'
            ],
            '2fammaljogtanpa48' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.728.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp36.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.009.000'
            ],
            '3fammaljogtanpa48' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.517.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp52.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.812.000'
            ],
            '4fammaljogtanpa48' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.312.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp69.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp3.660.000'
            ],
            '2fammaljogtanpa72' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.534.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.981.000'
            ],
            '3fammaljogtanpa72' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.693.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp51.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp4.173.000'
            ],
            '4fammaljogtanpa72' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp4.862.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp67.600',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp5.432.000'
            ],
            'healthydiet6' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.246.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp41.000',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp270.000'
            ],
            'healthydiet12' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.482.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp535.000'
            ],
            'healthydiet24' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.943.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp39.300',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp1.060.000'
            ],
            'healthydiet48' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.1.766.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp36.800',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp2.053.000'
            ],
            'healthydiet72' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.2.532.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp3.014.000'
            ],
            'advancediet6' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.363.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp60.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp382.000'
            ],
            'advancediet12' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.712.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp59.400',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp757.000'
            ],
            'advancediet24' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.1.393.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp58.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp1.498.000'
            ],
            'advancediet48' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.2.612.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp2.902.000'
            ],
            'advancediet72' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.3.748.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp52.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp4.259.000'
            ],
        ],

        'semarang' => [
            //SEMARANG TANPA NASI
            'mealsematanpa6' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp124.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp20.700',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp147.000'
            ],
            'mealsematanpa12' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp238.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.900',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp288.000'
            ],
            'mealsematanpa24' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp465.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp19.400',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp570.000'
            ],
            'mealsematanpa48' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp898.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp18.800',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.122.000'
            ],
            'mealsematanpa72' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp1.300.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp18.100',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.656.000'
            ],
            //SEMARANG NASI PUSTIH
            'mealsemaputih6' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp129.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp21.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp153.000'
            ],
            'mealsemaputih12' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp248.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp20.700',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp300.000'
            ],
            'mealsemaputih24' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp483.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp20.200',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp.593.000'
            ],
            'mealsemaputih48' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp934.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp19.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.167.000'
            ],
            'mealsemaputih72' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp1.352.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp18.800',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.722.000'
            ],
            //SEMARANG MEAL NASI MERAH
            'mealsemamerah6' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp137.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp22.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp162.000'
            ],
            'mealsemamerah12' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp262.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp317.000'
            ],
            'mealsemamerah24' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp511.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp21.300',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp627.000'
            ],
            'mealsemamerah48' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp987.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp20.600',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.234.000'
            ],
            'mealsemamerah72' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp1.430.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp19.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.822.000'
            ],

            '2famsemtanpa6' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp239.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp39.900',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp265.000'
            ],
            '3famsemtanpa6' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp340.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp56.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp370.000'
            ],
            '4famsemtanpa6' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp446.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp74.400',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp482.000'
            ],
            '2famsemtanpa12' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp456.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp38.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp518.000'
            ],
            '3famsemtanpa12' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp653.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp726.000'
            ],
            '4famsemtanpa12' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp855.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp71.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp945.000'
            ],
            '2famsemtanpa24' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp893.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp37.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.026.000'
            ],
            '3famsemtanpa24' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.278.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp53.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.436.000'
            ],
            '4famsemtanpa24' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.674.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp69.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.870.000'
            ],
            '2famsemtanpa48' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.708.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp35.600',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.009.000'
            ],
            '3famsemtanpa48' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.446.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp51.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.812.000'
            ],
            '4famsemtanpa48' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.203.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp66.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp3.660.000'
            ],
            '2famsemtanpa72' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.504.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp34.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.981.000'
            ],
            '3famsemtanpa72' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.589.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp49.900',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp4.173.000'
            ],
            '4famsemtanpa72' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp4.699.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp65.300',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp5.432.000'
            ],
            'healthydiet6' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.246.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp41.000',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp270.000'
            ],
            'healthydiet12' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.482.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp535.000'
            ],
            'healthydiet24' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.943.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp39.300',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp1.060.000'
            ],
            'healthydiet48' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.1.766.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp36.800',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp2.053.000'
            ],
            'healthydiet72' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.2.532.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp3.014.000'
            ],
            'advancediet6' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.363.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp60.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp382.000'
            ],
            'advancediet12' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.712.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp59.400',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp757.000'
            ],
            'advancediet24' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.1.393.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp58.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp1.498.000'
            ],
            'advancediet48' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.2.612.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp2.902.000'
            ],
            'advancediet72' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.3.748.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp52.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp4.259.000'
            ],
        ],

        
        // Produk untuk Surabaya
        'surabaya' => [
              //mealsurabayaTANPANASI
            'mealsuratanpa6' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp147.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp24.500',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            'mealsuratanpa12' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp288.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp24.000',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            'mealsuratanpa24' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp542.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp22.600',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp570.000'
            ],
            'mealsuratanpa48' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp1.049.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp21.900',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.122.000'
            ],
            'mealsuratanpa72' => [
                'name' => 'MealBox Tanpa Nasi', 
                'price' => 'Rp1.524.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp21.200',
                'paket' => 'mealbox',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.656.000'
            ],
            //MEALSURABAYA NASI PUSTIH
            'mealsuraputih6' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp153.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg',
                'unitprice' => 'Rp25.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => ''
            ],
            'mealsuraputih12' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp300.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp25.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => ''
            ],
            'mealsuraputih24' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp563.000', 
                'coupun' => '24 Kupon', 
               'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp23.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp593.000'
            ],
            'mealsuraputih48' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp1.091.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp22.800',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.167.000'
            ],
            'mealsuraputih72' => [
                'name' => 'MealBox Nasi Putih', 
                'price' => 'Rp1.584.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/2.Putih.jpg',
                'unitprice' => 'Rp22.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiPutih',
                'startprice' => 'Rp1.722.000'
            ],
            //SURABAYA MEAL NASI MERAH
            'mealsuramerah6' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp162.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp27.000',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => ''
            ],
            'mealsuramerah12' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp317.000', 
                'coupun' => '12 Kupon', 
               'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp26.500',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => ''
            ],
            'mealsuramerah24' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp596.000', 
                'coupun' => '24 Kupon', 
               'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp24.900',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp627.000'
            ],
            'mealsuramerah48' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp1.154.000', 
                'coupun' => '48 Kupon', 
               'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp24.100',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.234.000'
            ],
            'mealsuramerah72' => [
                'name' => 'MealBox Nasi Merah', 
                'price' => 'Rp1.676.000', 
                'coupun' => '72 Kupon', 
               'image' => 'img/AssetSenjani/3.Merah.jpg',
                'unitprice' => 'Rp23.300',
                'paket' => 'mealbox',
                'karbo' => 'nasiMerah',
                'startprice' => 'Rp1.822.000'
            ],
            //
            //FAMILY SURABAYA TANPA NASI
            //FAMILY SURABAYA TANPA NASI 2 Orang
            '2famsuratanpa6' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp265.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp44.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            '2famsuratanpa12' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp518.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp43.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            '2famsuratanpa24' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp964.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.026.000'
            ],
            '2famsuratanpa48' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.848.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp38.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.009.000'
            ],
            '2famsuratanpa72' => [
                'name' => 'Family Pack 2 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.713.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp37.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.981.000'
            ],
            //FAMILY SURABAYA (TANPA NASI) 3 Orang
            '3famsuratanpa6' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp370.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp61.700',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            '3famsuratanpa12' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp726.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp60.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            '3famsuratanpa24' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.364.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp56.900',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.436.000'
            ],
            '3famsuratanpa48' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp2.615.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp2.812.000'
            ],
            '3famsuratanpa72' => [
                'name' => 'Family Pack 3 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.839.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp53.400',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp4.173.000'
            ],
            //FAMILY SURABAYA (TANPA NASI) 4 Orang
            '4famsuratanpa6' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp482.000', 
                'coupun' => '6 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp80.400',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            '4famsuratanpa12' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp945.000', 
                'coupun' => '12 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp78.800',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => ''
            ],
            '4famsuratanpa24' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp1.777.000', 
                'coupun' => '24 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp74.100',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp1.870.000'
            ],
            '4famsuratanpa48' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp3.404.000', 
                'coupun' => '48 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp71.000',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp3.660.000'
            ],
            '4famsuratanpa72' => [
                'name' => 'Family Pack 4 Orang (Tanpa Nasi)', 
                'price' => 'Rp4.997.000', 
                'coupun' => '72 Kupon', 
                'image' => 'img/AssetSenjani/4.Family.jpg',
                'unitprice' => 'Rp69.500',
                'paket' => 'family',
                'karbo' => 'tanpaNasi',
                'startprice' => 'Rp5.432.000'
            ],
            'healthydiet6' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.246.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp41.000',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp270.000'
            ],
            'healthydiet12' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.482.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp40.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp535.000'
            ],
            'healthydiet24' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.943.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp39.300',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp1.060.000'
            ],
            'healthydiet48' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.1.766.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp36.800',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp2.053.000'
            ],
            'healthydiet72' => [
                'name' => 'Healthy Diet', 
                'price' => 'Rp.2.532.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg',
                'unitprice' => 'Rp35.200',
                'paket' => 'healthy',
                'karbo' => '',
                'startprice' => 'Rp3.014.000'
            ],
            'advancediet6' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.363.000', 
                'coupun' => '6 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp60.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp382.000'
            ],
            'advancediet12' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.712.000', 
                'coupun' => '12 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp59.400',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp757.000'
            ],
            'advancediet24' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.1.393.000', 
                'coupun' => '24 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp58.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp1.498.000'
            ],
            'advancediet48' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.2.612.000', 
                'coupun' => '48 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp54.500',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp2.902.000'
            ],
            'advancediet72' => [
                'name' => 'Advance Diet', 
                'price' => 'Rp.3.748.000', 
                'coupun' => '72 kupon', 
                'image' => 'img/AssetSenjani/6.Advance.jpg',
                'unitprice' => 'Rp52.100',
                'paket' => 'advance',
                'karbo' => '',
                'startprice' => 'Rp4.259.000'
            ],
        ],
    ];

    public function showSolo()
    {
        $products = $this->products['solo'];
        return view('solo', ['products' => $products, 'city' => 'solo']);
    }
    
    public function showSurabaya()
    {
        $products = $this->products['surabaya'];
        return view('surabaya', ['products' => $products, 'city' => 'surabaya']);
    }
    
    public function showMalang()
    {
        $products = $this->products['malang'];
        return view('malang', ['products' => $products, 'city' => 'malang']);
    }

    public function showSemarang()
    {
        $products = $this->products['semarang'];
        return view('semarang', ['products' => $products, 'city' => 'semarang']);
    }

    public function showYogyakarta()
    {
        $products = $this->products['yogyakarta'];
        return view('yogyakarta', ['products' => $products, 'city' => 'yogyakarta']);
    }
    
    public function show($city, $key)
    {
        $products = $this->products[$city] ?? [];
        $product = $products[$key] ?? null;
    
        if (!$product) {
            abort(404);
        }
    
        return view('form', [
            'product' => $product,
            'city' => $city,
        ]);
    }
}

