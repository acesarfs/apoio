<?php

namespace Database\Factories;

use App\Models\Surrogate;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurrogateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surrogate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = array('A','I');
        $status_key = array_rand($status);
        $pertence = array('CTA','CON');
        $pertence_key = array_rand($pertence);
        $inicio = date("Y-m-d", mktime(0, 0, 0, date("m")-rand(6,12),
                                   date("d")+rand(1,31), date("Y")));
        return [
            'people_id' => People::inRandomOrder()->pluck('id')->first(),
            'holder_id' => Holder::where('pertence', $pertence[$pertence_key])
                                   ->inRandomOrder()->pluck('id')->first(),
            'departament_id' => Departament::inRandomOrder()->pluck('id')->first(),
            'pertence' => $pertence[$pertence_key],
            'inicio' => $inicio,
            'termino' => date("Y-m-d", strtotime($inicio. '+ 1 year')),
            'observacao' => $this->faker->text($maxNbChars = 100),
            'status' => $status[$status_key]
        ];
    }
}
