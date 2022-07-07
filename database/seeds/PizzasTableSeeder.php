<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = config('pizze');
        foreach($pizzas as $pizza){
            $new_pizza = new Pizza();

            $new_pizza->nome = $pizza['nome']; 
            $new_pizza->slug = Pizza::slugGenerator($new_pizza->nome);
            $new_pizza->prezzo = $pizza['prezzo']; 
            $new_pizza->ingredienti = $pizza['ingredienti'];
            if($pizza['vegetariana'] === "sì"){
                $new_pizza->vegetariana = true;
            }else{
                $new_pizza->vegetariana = false;
            }

            $new_pizza->save(); 
        }
    }
}
