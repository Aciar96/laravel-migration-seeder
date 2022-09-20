<?php

use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { for($i = 0 ; $i < 10;$i++){
        $trains =[];
        $newtrain = new train();
        $newtrain->azienda = $faker->word();
        $newtrain->stazione_di_partenza = $faker->city();
        $newtrain->stazione_di_arrivo = $faker->city();
        $newtrain->orario_di_partenza = $faker->time();
        $newtrain->orario_di_arrivo = $faker->time();
        $newtrain->codice_treno = $faker->randomNumber(5, true);
        $newtrain->numero_carrozze = $faker->randomNumber(1, true);
        $newtrain->in_orario = $faker->boolean();
        $newtrain->cancellato = $faker->boolean();
    }  
    }
}
