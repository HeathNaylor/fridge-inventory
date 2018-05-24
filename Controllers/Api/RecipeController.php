<?php

namespace FridgeInventory\Controllers\Api;

use FridgeInventory\Src\Gateways\DatabaseRecipe;
use FridgeInventory\Src\UseCases\Recipe;

class RecipeController
{
    /**
     * @var \PDO
     */
    private $database;

    /**
     * TemperatureRegulatorController constructor.
     * @param \PDO $database
     */
    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    /**
     * @throws \Exception
     */
    public function rate()
    {
        $rating = 6;

        $gateway = new DatabaseRecipe($this->database);
        $recipe = $gateway->retrieve(1);

        $useCase = new Recipe();
        $useCase->rate($recipe, $rating);

        $gateway->persist($recipe);

        dump($recipe);
        dump(json_encode($recipe));
    }
}