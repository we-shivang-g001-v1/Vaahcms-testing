<?php
use VaahCms\Modules\Product\Http\Controllers\Backend\BackendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix'     => 'backend/product',
        'middleware' => ['web', 'has.backend.access']
//        'middleware' => ['web', 'has.backend.access','ProductAuth']
    ],
    function () {
        //------------------------------------------------
        Route::get( '/', [BackendController::class, 'index'] )
            ->name( 'vh.backend.product' );
        //------------------------------------------------
        //------------------------------------------------
        Route::get( '/assets', [BackendController::class, 'getAssets'] )
            ->name( 'vh.backend.product.assets' );
        //------------------------------------------------
    });

//:5DqdX99NCiSi!8
/*
 * Include CRUD Routes
 */
include("backend/routes-categories.php");
include("backend/routes-taxonomies.php");
