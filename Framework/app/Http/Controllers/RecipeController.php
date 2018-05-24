<?php

namespace App\Http\Controllers;

use FridgeInventory\Src\Entities\Barcodes\UpcABarcode;
use FridgeInventory\Src\Entities\Item;
use FridgeInventory\Src\Entities\Recipes\RecipeItem;
use FridgeInventory\Src\PlainObjects\Recipes\Recipe as RecipePDO;
use FridgeInventory\Src\UseCases\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * @throws \Exception
     */
    public function rate()
    {
        $rating = 6;

        $barcode = new UpcABarcode("123456789");
        $item = new Item($barcode, "Apple", "Produce", new \DateTimeImmutable("+2 weeks"));
        $recipeItem = new RecipeItem($item, 3);
        $recipe = new RecipePDO("Apple Pie", "It's just an apple pie...", $recipeItem);

        $useCase = new Recipe();
        $useCase->rate($recipe, $rating);

        dump($recipe);
        dump(json_encode($recipe));
    }
}
