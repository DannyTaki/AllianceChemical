<?php

use Illuminate\Database\Seeder;

class ChemicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product        = new \App\Chemical([
          'title'       => 'Talc',
          'imagePath'   => 'img/TALC.png',
          'imagePath2'  => 'img/TALC_512.png',
          'description' => 'Talc Powder Technical Grade - 5 Lb Bag',
          'price'       => '45.00',
          'volume'      => '',
          'units'       => '5',
          'weight'      => 'P'

        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Isopropyl Alcohol',
          'imagePath'   => 'img/IPA_TECH_GL.png',
          'imagePath2'  => 'img/IPA_TECH_GL_512.png',
          'description' => 'Isopropyl Alcohol 99.9% Technical Grade 1 Gallon',
          'price'       => '15.00',
          'volume'      => 'G',
          'units'       => '1',
          'weight'      => ''
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Acetone Technical Grade',
          'imagePath'   => 'img/ACETONE_TECH_QT.png',
          'imagePath2'  => 'img/ACETONE_TECH_QT_512.png',
          'description' => 'Acetone Technical Grade - 1 Quart Poly Bottle',
          'price'       => '36',
          'volume'      => 'Q',
          'units'       => '1',
          'weight'      => ''

        ]);
        $product->save();


        $product        = new \App\Chemical([
          'title'       => 'Kerosene',
          'imagePath'   => 'img/KEROSENE_GL.png',
          'imagePath2'  => 'img/KEROSENE_GL_512.png',
          'description' => 'Kerosene, Technical Grade - 1 Gallon Metal Can',
          'price'       => '61',
          'volume'      => 'G',
          'units'       => '1',
          'weight'      => ''
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Titanium Dioxide',
          'imagePath'   => 'img/TITANIUM_DIOXIDE_5LB_BG.png',
          'imagePath2'  => 'img/TITANIUM_DIOXIDE_5LB_BG_512.png',
          'description' => 'Titanium Dioxide, Five Lb Bag',
          'price'       => '34.81',
          'volume'      => '',
          'units'       => '5',
          'weight'      => 'P'
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Denatured Alcohol 190 Proof',
          'imagePath'   => 'img/DENATUREDALCOHOL_QT.png',
          'imagePath2'  => 'img/DENATUREDALCOHOL_QT_512.png',
          'description' => 'Denatured Alcohol 190 Proof - 1 Quart',
          'price'       => '36',
          'volume'      => 'Q',
          'units'       => '1',
          'weight'      => ''
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Vermiculite Professional Grade',
          'imagePath'   => 'img/VERMICULITE.png',
          'imagePath2'  => 'img/VERMICULITE_512.jpg',
          'description' => 'Vermiculite Professional Grade - 15 Lb Box',
          'price'       => '44',
          'volume'      => '',
          'units'       => '15',
          'weight'      => 'P'
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Acetone, Semiconductor Grade',
          'imagePath'   => 'img/ACETONE_METAL_PAIL.png',
          'imagePath2'  => 'img/ACETONE_METAL_PAIL_512.png',
          'description' => 'Acetone, Semiconductor Grade in Five Gallon Metal Pail',
          'price'       => '137',
          'volume'      => 'G',
          'units'       => '5',
          'weight'      => ''
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Hexane ACS Reagent Grade',
          'imagePath'   => 'img/HEXANE_GL.png',
          'imagePath2'  => 'img/HEXANE_GL_512.png',
          'description' => 'Hexane ACS Reagent Grade - 1 Gallon',
          'price'       => '79',
          'volume'      => 'G',
          'units'       => '1',
          'weight'      => ''
        ]);
        $product->save();

        $product        = new \App\Chemical([
          'title'       => 'Ammonium Hydroxide 29% ACS Reagent Grade High Purity',
          'imagePath'   => 'img\AMMO_HYDRO_29_GL.png',
          'imagePath2'  => 'img\AMMO_HYDRO_29_GL_512.png',
          'description' => 'Ammonium Hydroxide 29% ACS Reagent Grade High Purity - 1 Gallon',
          'price'       => '75',
          'volume'      => 'G',
          'units'       => '1',
          'weight'      => ''
        ]);
        $product->save();


        $product        = new \App\Chemical([
                  'title'       => 'K&N Air Filter Oil',
                  'imagePath'   => 'img/K&N_Filter_5GL.png',
                  'imagePath2'  => 'img/K&N_Filter_5GL.png',
                  'description' => 'K&N Air Filter Oil - 5 Gallons',
                  'price'       => '75',
                  'volume'      => 'G',
                  'units'       => '5',
                  'weight'      => ''
                ]);
        $product->save();



        $product = new \App\Chemical([
                          'title' => 'Summit Syngear Sh-7460',
                          'imagePath' => 'img/SH-7460_GL.png',
                          'imagePath2'  => 'img/SH-7460_GL_512.png',
                          'description' => 'Summit Syngear Sh-7460 - 1 Gallon',
                          'price' => '67',
                          'volume' => 'G',
                          'units' => '1',
                          'weight' => ''
                        ]);
        $product->save();


        $product = new \App\Chemical([
          'title' => 'Methanol, Technical Grade',
          'imagePath' => 'img/METHANOL_TECH_1GL_CN.png',
          'imagePath2'  => 'img/METHANOL_TECH_1GL_CN_512.png',
          'description' => 'Methanol, Technical Grade - 1 Gallon Metal Can',
          'price' => '61',
          'volume' => 'G',
          'units' => '1',
          'weight' => ''
        ]);
        $product->save();

        $product = new \App\Chemical([
          'title' => 'Sodium Hyroxide Flake',
          'imagePath' => 'img/SODIUM_HYDROXIDE_FLAKE.png',
          'imagePath2'  => 'img/SODIUM_HYDROXIDE_FLAKE_512.png',
          'description' => 'Sodium Hydroxide Flake - 5 Lb Bag',
          'price' => '44',
          'volume' => '',
          'units' => '5',
          'weight' => 'P'
        ]);
        $product->save();

        //
        // $product = new \App\Chemical([
        //   'title' => '',
        //   'imagePath' => '',
        //   'description' => '',
        //   'price' => '',
        //   'volume' => '',
        //   'units' => '',
        //   'weight' => ''
        // ]);
        // $product->save();
    }
}
