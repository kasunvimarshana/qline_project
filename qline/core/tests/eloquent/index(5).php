<!-- ------------------------------------------------------------------------------------------ -->
<?php

//Managing Many-to-Many Relationships: attach-detach-sync
/*
So, we have tables, and we have Models ready. Now, how do we actually save the data with a help of our two Models instead of the third intermediate one? Couple of things here.

For example, if we want to add another product to the current shop instance, we use relationship function and then method attach():
*/
$shop = Shop::find($shop_id);
$shop->products()->attach($product_id);
//The result – a new row will be added to product_shop table, with $product_id and $shop_id values.

//Likewise, we can detach a relationship – let’s say, we want to remove a product from the shop:

$shop->products()->detach($product_id);
//Or, more brutally, remove all products from a particular shop – then just call method without parameters:

$shop->products()->detach();
//You can also attach and detach rows, passing array of values as parameters:

$shop->products()->attach([123, 456, 789]);
$shop->products()->detach([321, 654, 987]);
/*
And another REALLY useful function, in my experience, is updating the whole pivot table. Really often example – in your admin area there are checkboxes for shops for a particular product, and on Update operation you actually have to check all shops, delete those which are not in new checkbox array, and then add/update existing ones. Pain in the neck.

Not anymore – there’s a method called sync() which accept new values as parameters array, and then takes care of all that “dirty work” of syncing:
*/

$product->shops()->sync([1, 2, 3]);
//Result – no matter what values were in product_shop table before, after this call there will be only three rows with shop_id equals 1, 2, or 3.

//Additional Columns in Pivot Tables
/*
As I mentioned above, it’s pretty likely that you would want more fields in that pivot tables. In our example it would make sense to save the amount of products, price in that particular shop and timestamps. We can add the fields through migration files, as usual, but for proper usage in relationships we have to make some additional changes to Models:
*/

public function products()
{
    return $this->belongsToMany('App\Product')
    	->withPivot('products_amount', 'price')
    	->withTimestamps();
}

/*
As you can see, we can add timestamps with a simple method withTimestamps and additional fields are added just as parameters in method withPivot.

Now, what it gives us is possibility to get those values in our loops in the code. With a property called pivot:
*/

foreach ($shop->products as $product)
{
    echo $product->pivot->price;
}

/*
Basically, ->pivot represents that intermediate pivot table, and with this we can access any of our described fields, like created_at, for example.

Now, how to add those values when calling attach()? The method accept another parameter as array, so you can specify all additional fields there:
*/

$shop->products()->attach(1, ['products_amount' => 100, 'price' => 49.99]);

?>
<!-- ------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------ -->
<?php

$articlesWithAuthors = Article::where('id', 2)
    ->with([
        'authors' => function ($query) {
            $query->wherePivot('display', true);
        }
    ])->first();

?>
<!-- ------------------------------------------------------------------------------------------ -->