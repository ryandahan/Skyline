<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\FabricsController;
use App\Http\Controllers\PicturesController;
use App\Http\Controllers\InquiriesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CatalogsController;
use App\Http\Controllers\ContactsController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/option/{type}', [WebsiteController::class, 'option'])->name('option');
Route::get('/inquire/{type}', [WebsiteController::class, 'inquire'])->name('inquire');
Route::get('/Image-Gallery/{type}', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/fabric/', [WebsiteController::class, 'fabric'])->name('fabric');
Route::get('/fabricCategory/', [WebsiteController::class, 'fabricCategory'])->name('fabricCategory');
Route::get('/spung/', [WebsiteController::class, 'spung'])->name('spung');

Route::get('/getCatalog/{type}/{category}', [WebsiteController::class, 'getCatalog'])->name('getCatalog');
Route::get('/getfabric/{type}/{category}', [WebsiteController::class, 'getFabric'])->name('getFabric');


Route::get('/Fabric/{type}', [WebsiteController::class, 'fabricType'])->name('fabricType');
Route::get('/Fabric/{type}/{catalog}', [WebsiteController::class, 'catalog'])->name('catalog');


Route::get('/rugs/', [WebsiteController::class, 'rugs'])->name('rugs');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');

    Route::post('/update-session', [AdminDashboardController::class, 'updateSession'])->name('update.session');


    Route::group([
        'prefix' => 'sales',
    ], function () {
        Route::get('/', [SalesController::class, 'index'])
            ->name('sales.sales.index');
        Route::get('/create', [SalesController::class, 'create'])
            ->name('sales.sales.create');
        Route::get('/show/{sales}', [SalesController::class, 'show'])
            ->name('sales.sales.show')->where('id', '[0-9]+');
        Route::get('/{sales}/edit', [SalesController::class, 'edit'])
            ->name('sales.sales.edit')->where('id', '[0-9]+');
        Route::post('/', [SalesController::class, 'store'])
            ->name('sales.sales.store');
        Route::put('sales/{sales}', [SalesController::class, 'update'])
            ->name('sales.sales.update')->where('id', '[0-9]+');
        Route::delete('/sales/{sales}', [SalesController::class, 'destroy'])
            ->name('sales.sales.destroy')->where('id', '[0-9]+');
    });


    Route::group([
        'prefix' => 'fabrics',
    ], function () {
        Route::get('/', [FabricsController::class, 'index'])
            ->name('fabrics.fabric.index');
        Route::get('/create', [FabricsController::class, 'create'])
            ->name('fabrics.fabric.create');
        Route::get('/show/{fabric}', [FabricsController::class, 'show'])
            ->name('fabrics.fabric.show')->where('id', '[0-9]+');
        Route::get('/{fabric}/edit', [FabricsController::class, 'edit'])
            ->name('fabrics.fabric.edit')->where('id', '[0-9]+');
        Route::post('/', [FabricsController::class, 'store'])
            ->name('fabrics.fabric.store');
        Route::put('fabric/{fabric}', [FabricsController::class, 'update'])
            ->name('fabrics.fabric.update')->where('id', '[0-9]+');
        Route::delete('/fabric/{fabric}', [FabricsController::class, 'destroy'])
            ->name('fabrics.fabric.destroy')->where('id', '[0-9]+');
    });


    Route::group([
        'prefix' => 'pictures',
    ], function () {
        Route::get('/', [PicturesController::class, 'index'])
            ->name('pictures.pictures.index');

        Route::get('/create', [PicturesController::class, 'create'])
            ->name('pictures.pictures.create');
        Route::get('/create/multiple', [PicturesController::class, 'createMultiple'])
            ->name('pictures.pictures.create.multiple');
        Route::get('/show/{pictures}', [PicturesController::class, 'show'])
            ->name('pictures.pictures.show')->where('id', '[0-9]+');
        Route::get('/{pictures}/edit', [PicturesController::class, 'edit'])
            ->name('pictures.pictures.edit')->where('id', '[0-9]+');
        Route::post('/', [PicturesController::class, 'store'])
            ->name('pictures.pictures.store');
        Route::post('/multipleStore', [PicturesController::class, 'multipleStore'])
            ->name('pictures.pictures.multipleStore');


        Route::put('pictures/{pictures}', [PicturesController::class, 'update'])
            ->name('pictures.pictures.update')->where('id', '[0-9]+');
        Route::delete('/pictures/{pictures}', [PicturesController::class, 'destroy'])
            ->name('pictures.pictures.destroy')->where('id', '[0-9]+');
    });

    Route::group([
        'prefix' => 'inquiries',
    ], function () {
        Route::get('/', [InquiriesController::class, 'index'])
            ->name('inquiries.inquiries.index');
        Route::get('/create', [InquiriesController::class, 'create'])
            ->name('inquiries.inquiries.create');
        Route::get('/show/{inquiries}', [InquiriesController::class, 'show'])
            ->name('inquiries.inquiries.show')->where('id', '[0-9]+');
        Route::get('/{inquiries}/edit', [InquiriesController::class, 'edit'])
            ->name('inquiries.inquiries.edit')->where('id', '[0-9]+');

        Route::put('inquiries/{inquiries}', [InquiriesController::class, 'update'])
            ->name('inquiries.inquiries.update')->where('id', '[0-9]+');
        Route::delete('/inquiries/{inquiries}', [InquiriesController::class, 'destroy'])
            ->name('inquiries.inquiries.destroy')->where('id', '[0-9]+');
    });


    Route::group([
        'prefix' => 'catalogs',
    ], function () {
        Route::get('/', [CatalogsController::class, 'index'])
            ->name('catalogs.catalog.index');
        Route::get('/create', [CatalogsController::class, 'create'])
            ->name('catalogs.catalog.create');
        Route::get('/show/{catalog}',[CatalogsController::class, 'show'])
            ->name('catalogs.catalog.show')->where('id', '[0-9]+');
        Route::get('/{catalog}/edit',[CatalogsController::class, 'edit'])
            ->name('catalogs.catalog.edit')->where('id', '[0-9]+');
        Route::post('/', [CatalogsController::class, 'store'])
            ->name('catalogs.catalog.store');
        Route::put('catalog/{catalog}', [CatalogsController::class, 'update'])
            ->name('catalogs.catalog.update')->where('id', '[0-9]+');
        Route::delete('/catalog/{catalog}',[CatalogsController::class, 'destroy'])
            ->name('catalogs.catalog.destroy')->where('id', '[0-9]+');
    });



//    admin prefix end
});

Route::post('/', [InquiriesController::class, 'store'])
    ->name('inquiries.inquiries.store');

Route::post('/foam', [InquiriesController::class, 'storeFoam'])
    ->name('inquiries.inquiries.store.foam');


Route::group([
    'prefix' => 'settings',
], function () {
    Route::get('/', [SettingsController::class, 'index'])
        ->name('settings.settings.index');
    Route::get('/create', [SettingsController::class, 'create'])
        ->name('settings.settings.create');
    Route::get('/show/{settings}', [SettingsController::class, 'show'])
        ->name('settings.settings.show')->where('id', '[0-9]+');
    Route::get('/{settings}/edit', [SettingsController::class, 'edit'])
        ->name('settings.settings.edit')->where('id', '[0-9]+');
    Route::post('/', [SettingsController::class, 'store'])
        ->name('settings.settings.store');
    Route::put('settings/{settings}', [SettingsController::class, 'update'])
        ->name('settings.settings.update')->where('id', '[0-9]+');
    Route::delete('/settings/{settings}', [SettingsController::class, 'destroy'])->name('settings.settings.destroy')->where('id', '[0-9]+');
});





Route::group([
    'prefix' => 'contacts',
], function () {
    Route::get('/', [ContactsController::class, 'index'])
         ->name('contacts.contact.index');
    Route::get('/create', [ContactsController::class, 'create'])
         ->name('contacts.contact.create');
    Route::get('/show/{contact}',[ContactsController::class, 'show'])
         ->name('contacts.contact.show')->where('id', '[0-9]+');
    Route::get('/{contact}/edit',[ContactsController::class, 'edit'])
         ->name('contacts.contact.edit')->where('id', '[0-9]+');
    Route::post('/', [ContactsController::class, 'store'])
         ->name('contacts.contact.store');
    Route::put('contact/{contact}', [ContactsController::class, 'update'])
         ->name('contacts.contact.update')->where('id', '[0-9]+');
    Route::delete('/contact/{contact}',[ContactsController::class, 'destroy'])
         ->name('contacts.contact.destroy')->where('id', '[0-9]+');
});
