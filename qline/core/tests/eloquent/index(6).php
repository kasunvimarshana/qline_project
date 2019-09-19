<!-- -------------------------------------------------------------- -->
Pivot tables and many-to-many relationships
September 29, 2015
Today I want to talk about a feature of Laravel which is really useful but can be potentially difficult to understand at first. Pivot table is an example of intermediate table with relationships between two other “main” tables.

Real-life example of pivot tables
In official documentation they show the example of User-Role relationships, where user potentially can belong to several roles, and vice versa. So to make things clearer – let’s take another real-life example: Shops and Products.

Let’s say a company has a dozen of Shops all over city/country and a variety of products, and they want to store the information about which Product is sold in which Shop. It’s a perfect example of many-to-many relationship: one product can belong to several shops, and one shop can have multiple products.

So here’s a potential database structure:
shops
– id
– name

products
– id
– name

product_shop
– product_id
– shop_id

The final table in the list – product_shop is called a “pivot” table, as mentioned in the topic title. Now, there are several things to mention here.

Name of the pivot table should consist of singular names of both tables, separated by undescore symbole and these names should be arranged in alphabetical order, so we have to have product_shop, not shop_product.
To create a pivot table we can create a simple migration with artisan make:migration or use Jeffrey Way’s package Laravel 5 Generators Extended where we have a command artisan make:migration:pivot.
Pivot table fields: by default, there should be only two fields – foreign key to each of the tables, in our case product_id and shop_id. You can add more fields if you want, then you need to add them to relationship assignment – we will discuss that later.
<!-- -------------------------------------------------------------- -->