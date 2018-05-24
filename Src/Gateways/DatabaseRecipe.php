<?php

namespace FridgeInventory\Src\Gateways;

use FridgeInventory\Src\Entities\Barcodes\UpcABarcode;
use FridgeInventory\Src\Entities\Item;
use FridgeInventory\Src\Entities\Recipes\RecipeItem;
use FridgeInventory\Src\PlainObjects\Recipes\Recipe;
use FridgeInventory\Src\PlainObjects\Recipes\RecipeInterface;

class DatabaseRecipe implements GatewayInterface
{
    /**
     * @var \PDO
     */
    private $database;

    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    /**
     * @param RecipeInterface $recipe
     */
    public function persist($recipe)
    {
        // TODO: Implement persist() method.
    }

    /**
     * @param int $id
     * @return RecipeInterface
     * @throws \Exception
     */
    public function retrieve(int $id): RecipeInterface
    {
        $barcode = new UpcABarcode("123456789");
        $item = new Item($barcode, "Apple", "Produce", new \DateTimeImmutable("+2 weeks"));
        $recipeItem = new RecipeItem($item, 3);
        $recipe = new Recipe("Apple Pie", "It's just an apple pie...", $recipeItem);

        return $recipe;
    }
}