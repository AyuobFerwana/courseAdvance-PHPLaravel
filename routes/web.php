<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Uid\Ulid;

enum Section: string
{
    case Phone = 'phone';
    case Drive = 'drive';
    case Apple = 'apple';
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/res' , CrudController::class);
Route::delete('res/force/delete/{id}','CrudController@force')->name('res.force');
Route::post('res/restore/{id}','CrudController@restore')->name('res.restore');



// CrudController

// Route::get('blade', 'CrudController@index');


// Route::controller(CrudController::class)->group(function () {
//     Route::get('/show', 'show')->name('show');
//     Route::get('/create','create')->name('create');
// });



// middleware
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => 'test:22,22'], function () {

//     Route::get('data', fn () => ' Welcome To laravel 21');
// });

// Route::get('/example' , 'ExampleController@example');



// Enum
// Route::get('/sections/{section}' , function(Section $section){
//     return $section->value;
// });





// Domain
// Route::domain('{account}.asd')->group(function($account){
//     Route::get('example', 'ExampleController@my_data');
// });

// Controller
// Route::controller(ExampleController::class)->group(function(){
//         Route::get('my/data' , 'my_data');
// });
// Route::get('get/browsers' , 'ExampleController@my_data');





//  Redirect
// Route::fallback(fn () => redirect('product/nn'));
// Route::prefix('product')->group(function () {
//         Route::get('/nn', fn () => 'Show PRoduct');
// });






/**** Key Word  */
// Route::get('/check/{name}' ,function($name){
//     return 'check the name = ' .$name;
// })->whereIn('name',['book' , 'Ayuob' , 'FerWana']);


// Route::get('/first/{data}', function ($data) {
//     return  '<h1 style=color:green;> The Data = </h1>' . $data;
// })->whereUlid('data');
// ->whereUuid('data');
// ->whereAlphaNumeric('data');





        // ******   Check name and id  in RouteServiceProvider ******/

// Route::get('/first/{name?}/{id?}', function ($name = null, $id = null) {
//     return  '<h1 style=color:green;> The Name = </h1>' . " <h2 style=color:blue;>$name</h2>" .
//      ' <h1 style=color:red;> The Id = </h1>' . $id;
// });


// Route::get('/first/{name?}/{id?}', function ($name = null, $id = null) {
//     return  '<h1 style=color:green;> The Name = </h1>' . " <h2 style=color:blue;>$name</h2>" .
//      ' <h1 style=color:red;> / The Id = </h1>' . $id;
// })->where(['name' => '[a-zA-Z]+', 'id' => '[0-9]+']);


// Route::get('/first/{name?}', function($name = null){
//     return  'the name is = ' .$name;
// })->whereAlpha('name');

// Route::get('/temp/{id?}', function ($id = null) {
//     return 'the number of Temp = ' . $id;
// })->WhereNumber('id');







        //**********  Methods Routes   *******************/
// Route::get('/', function () {
//     return '<form action="/opt" method="post">
//     <input type="hidden" name="_method" value="put" />
//     ' . csrf_field() . '
//     <input type="submit" value="go"/>
//     </form>';
// });


// Route::any('/my/any/route', function () {
//     return '<h1>Hi My data Form Any Route</h1>';
// });


// Route::patch('/my/patch', function () {
//     return '<h1>Hi My data Form patch</h1>';
// });

// Route::put('/mydata', function () {
//     return '<h1>Hi My data Form</h1>';
// });

// Route::post('/data', function () {
//     return '<h1>Hi data</h1>';
// });

// Route::match(['post' , 'get' , 'options' ,'put'],'opt' ,function (){
//    return '<h1>hello  match blade</h1>';
// });

Auth::routes([
    'verify'=>true
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
