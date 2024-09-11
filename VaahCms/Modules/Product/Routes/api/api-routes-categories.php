<?php
use VaahCms\Modules\Product\Http\Controllers\Backend\CategoriesController;
/*
 * API url will be: <base-url>/public/api/product/categories
 */
Route::group(
    [
        'prefix' => 'product/categories',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [CategoriesController::class, 'getAssets'])
        ->name('vh.backend.product.api.categories.assets');
    /**
     * Get List
     */
    Route::get('/', [CategoriesController::class, 'getList'])
        ->name('vh.backend.product.api.categories.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [CategoriesController::class, 'updateList'])
        ->name('vh.backend.product.api.categories.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [CategoriesController::class, 'deleteList'])
        ->name('vh.backend.product.api.categories.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [CategoriesController::class, 'createItem'])
        ->name('vh.backend.product.api.categories.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [CategoriesController::class, 'getItem'])
        ->name('vh.backend.product.api.categories.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [CategoriesController::class, 'updateItem'])
        ->name('vh.backend.product.api.categories.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [CategoriesController::class, 'deleteItem'])
        ->name('vh.backend.product.api.categories.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [CategoriesController::class, 'listAction'])
        ->name('vh.backend.product.api.categories.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [CategoriesController::class, 'itemAction'])
        ->name('vh.backend.product.api.categories.item.action');



});
