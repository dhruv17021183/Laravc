<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $collection = collect([1,2,3,4,5,6,7,8]);
        // dd($collection);
        // $data = $collection->chunk(2)->all();

        // $data = $collection->reverse()->all();
        // $data = $collection->map(function($item,$key){
        //     return $item + 2;
        // })->all();
        // $average = collect([
        //     ['foo' => 10],
        //     ['foo' => 10],
        //     ['bar' => 20],
        //     ['bar' => 40]

        // ])->avg('bar');
        // chunk method

        // $collection = collect([1,2,3,4,5,6,7,8,9]);

        // $chunks = $collection->chunk(4);

        // dd($chunks->all());

        // $product = collect([
        //     'watch',
        //     'mobile',
        //     'cameras',
        //     'cloth',
        //     'sports equipment',
        //     'furniture',
        //     'furniture1',
        //     'furniture2',
        //     'furniture3',
        //     'furniture4',
        // ]);
        // dd($product);
        // foreach($product->chunk(3) as $chunk)
        // {
        //    foreach($chunk as $products)
        //    {
        //        echo $products;
        //        echo "<br>";
        //    }
        // }


        // $collection = collect(str_split('DHRUVSUTHAR'));
        // $value = 2;
        // $key = 3;
        // $chunk = 2;

        // $chunks = $collection->chunkWhile(function($value,$key,$chunk){
        //     return $value === $chunk->last();
        // });

        // dd($chunks->all());
        // $collection = collect([
        //     [1, 2, 3],
        //     [4, 5, 6],
        //     [7, 8, 9],

        // ]);

        // $collapsed = $collection->collapse();

        // //collect()
        // $collectionA = collect([1, 2, 3]);

        // $collectionB = $collectionA->collect();
        // // dd($collectionB->all());

        // //combine()
        // $collection = collect(['name', 'age']);

        // $combined = $collection->combine(['Dhruv', 21]);

        // // dd($combined->all());

        // // Concat()
        // $collection = collect(['Dhruv Suthar']);

        // $concateneted = $collection->concat(['Dhruv Suthar'])->concat(['name' => 'Dhruv Suthar']);

        // dd($concateneted->all());

        //contains

        // $collection = collect([1, 2, 3, 4, 5]);
        // // $value = 4;
        // // $key = 3;
        // dd($collection->contains(function ($value, $key) {
        //     return $value > 5;
        // }));

        // $collection = collect([
        //     ['product' => 'Desk', 'price' => 200],
        //     ['product' => 'Chair', 'price' => 100],
        // ]);
        // $collection = collect(['name' => 'Desk', 'price' => 100]);

        // $collection->contains('Desk');

        // dd($collection->contains('Desk'));

        // //countBy
        // $collection = collect(['Dhruv', 'Dhruv', 'Tejas','Shivang', 'Jay']);

        // $counted = $collection->countBy();

        // dd($counted->all());

        //dump

        // $collection = collect(['John Doe', 'Jane Doe']);

        // // $collection->dump();
        // // Duplicate

        // $collection = collect(['a', 'b', 'a', 'c', 'b']);

        // dd($collection->duplicates());

        //toArray()

        // $collection = collect(['name' => 'Desk', 'price' => 200]);

        // dd($collection->toArray());

        //toJSON()

        // $collection = collect(['name' => 'Desk','price' => 200]);
        // dd($collection->toJson());

        //transform()
        // $collection = collect([1, 2, 3, 4, 5]);

        // $collection->transform(function ($item, $key) {
        //     return $item * 2;
        // });

        // dd($collection->all());
        // union()
        // $collection = collect([1=>['a'],2=>['b']]);

        // $union = $collection->union([3 => ['c'],1 => ['d']]);

        // dd($union->all());

        // unique()
        // $collection = collect([1, 1, 2, 2, 3, 4, 2,'Dhruv','Suthar','Suthar']);

        // $unique = $collection->unique();
        // dd($unique->all());

        // $collection = collect([1, 2, 3]);

        // $collection->unless(true,function($collection){
        //     return $collection->push(4);
        // });


        // $collection->unless(false,function($collection){
        //     return $collection->push(5);
        // });

        // $collection = collect([1, 2, 3]);

        // $collection->when(true,function($collection){
        //     return $collection->push(4);
        // });


        // $collection->when(false,function($collection){
        //     return $collection->push(5);
        // });

        // dd($collection->all());
        // $collection = collect(['Chair', 'Desk']);

        // $zipped = $collection->zip([100, 200]);

        // dd($zipped->toArray());
        // crossJoin

        // $collection = collect([1, 2]);

        // $matrix = $collection->crossJoin(['a', 'b']);

        // dd($matrix->all());

        // $collection = collect([1, 2]);

        // $matrix = $collection->crossJoin(['a', 'b'], ['I', 'II']);

        // dd($matrix->all());
        // $collection = collect(['John Doe', 'Jane Doe']);

        // dd($collection);
    }
}
