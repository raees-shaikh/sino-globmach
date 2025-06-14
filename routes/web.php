<?php

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\Categories;
use Illuminate\Support\Facades\Password;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::domain(config('app.web_domain'))->group(function () {
    Route::get('/', 'App\Http\Controllers\frontend\HomeController@index')->name('frontend.offer.category');
    // Route::view('/sitemap', 'frontend.sitemap');
    Route::view('/company-profile', 'frontend.about-us');
    Route::view('/contact-us', 'frontend.contact-us');
    Route::post('/contact', 'App\Http\Controllers\frontend\FormController@mailForm')->name('contact.submit');
    Route::view('/business-process', 'frontend.business-process');

    // Route::view('/exhibitions', 'frontend.exhibition.index');
    // Route::view('/single-post', 'frontend.exhibition.show');

    Route::get('/latest-proposals', 'App\Http\Controllers\frontend\OfferController@index')->name('frontend.offer.index');
    Route::get('/latest-proposals/offer/{category}/{offer}', 'App\Http\Controllers\frontend\OfferController@show')->name('frontend.offer.show');
    Route::get('/latest-proposals/{category}', 'App\Http\Controllers\frontend\OfferController@subCategoryOne')->name('frontend.offer.sub_category_one');
    // Route::get('/latest-proposals/{category}/{sub_category_one}', 'App\Http\Controllers\frontend\OfferController@subCategoryTwo')->name('frontend.offer.sub_category_two');

    // Route::get('/latest-proposals/{category}/{sub_category_one}/{sub_category_two}', 'App\Http\Controllers\frontend\OfferController@subCategoryThree')->name('frontend.offer.sub_category_three');
    // Route::get('/latest-proposals/{category}/{sub_category_one}/{sub_category_two}/{sub_category_three}', 'App\Http\Controllers\frontend\OfferController@offerIndex')->name('frontend.offer.index');
    // Route::get('/latest-proposals/{category}/{sub_category_one}/{sub_category_two}/{sub_category_three}/{offer}', 'App\Http\Controllers\frontend\OfferController@offerShow')->name('frontend.offer.show');


    Route::get('/exhibitions', 'App\Http\Controllers\frontend\ExhibitionController@index')->name('frontend.exhibition.index');
    Route::get('/exhibitions/{slug}', 'App\Http\Controllers\frontend\ExhibitionController@show')->name('frontend.exhibition.show');

    Route::get('/sitemap', 'App\Http\Controllers\frontend\SitemapController@index')->name('sitemap');

});

Route::domain(config('app.cms_domain'))->group(function () {

    require __DIR__ . '/auth.php';
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('login.submit');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'App\Http\Controllers\cms\StatisticsController@index')->name('cms.index');
        //Categories
        Route::get('/categories', 'App\Http\Controllers\cms\CategoriesController@index')->name('cms.categories.index');
        Route::get('/category/show/{id}', 'App\Http\Controllers\cms\CategoriesController@show')->name('cms.categories.show');
        Route::get('/category/create', 'App\Http\Controllers\cms\CategoriesController@create')->name("cms.categories.create");
        Route::post('/category/store', 'App\Http\Controllers\cms\CategoriesController@store')->name("cms.categories.store");
        Route::get('/category/delete/{id}', 'App\Http\Controllers\cms\CategoriesController@delete')->name("cms.categories.delete");
        Route::get('/category/edit/{id}', 'App\Http\Controllers\cms\CategoriesController@edit')->name("cms.categories.edit");
        Route::post('/category/update/{id}', 'App\Http\Controllers\cms\CategoriesController@update')->name("cms.categories.update");

        //Offer
        Route::get('/offers', 'App\Http\Controllers\cms\OfferController@index')->name('cms.offer.index');
        Route::get('/offer/show/{id}', 'App\Http\Controllers\cms\OfferController@show')->name('cms.offer.show');
        Route::get('/offer/create', 'App\Http\Controllers\cms\OfferController@create')->name('cms.offer.create');
        Route::post('/offer/store', 'App\Http\Controllers\cms\OfferController@store')->name("cms.offer.store");
        Route::get('/offer/edit/{id}', 'App\Http\Controllers\cms\OfferController@edit')->name('cms.offer.edit');
        Route::post('/offer/update/{id}', 'App\Http\Controllers\cms\OfferController@update')->name("cms.offer.update");
        Route::get('/offer/delete/{id}', 'App\Http\Controllers\cms\OfferController@delete')->name('cms.offer.delete');

        // Route::get('/sub-categories-one', 'App\Http\Controllers\cms\SubCategoryOneController@index')->name('cms.subCategoryOne.index');
        // Route::get('/sub-category-one/show/{id}', 'App\Http\Controllers\cms\SubCategoryOneController@show')->name('cms.subCategoryOne.show');
        // Route::get('/sub-category-one/create', 'App\Http\Controllers\cms\SubCategoryOneController@create')->name('cms.subCategoryOne.create');
        // Route::post('/sub-category-one/store', 'App\Http\Controllers\cms\SubCategoryOneController@store')->name("cms.subCategoryOne.store");
        // Route::get('/sub-category-one/edit/{id}', 'App\Http\Controllers\cms\SubCategoryOneController@edit')->name('cms.subCategoryOne.edit');
        // Route::post('/sub-category-one/update/{id}', 'App\Http\Controllers\cms\SubCategoryOneController@update')->name("cms.subCategoryOne.update");
        // Route::get('/sub-category-one/delete/{id}', 'App\Http\Controllers\cms\SubCategoryOneController@delete')->name('cms.subCategoryOne.delete');

        // Route::get('/sub-categories-two', 'App\Http\Controllers\cms\SubCategoryTwoController@index')->name('cms.subCategoryTwo.index');
        // Route::get('/sub-category-two/show/{id}', 'App\Http\Controllers\cms\SubCategoryTwoController@show')->name('cms.subCategoryTwo.show');
        // Route::get('/sub-category-two/create', 'App\Http\Controllers\cms\SubCategoryTwoController@create')->name('cms.subCategoryTwo.create');
        // Route::post('/sub-category-two/store', 'App\Http\Controllers\cms\SubCategoryTwoController@store')->name("cms.subCategoryTwo.store");
        // Route::get('/sub-category-two/edit/{id}', 'App\Http\Controllers\cms\SubCategoryTwoController@edit')->name('cms.subCategoryTwo.edit');
        // Route::post('/sub-category-two/update/{id}', 'App\Http\Controllers\cms\SubCategoryTwoController@update')->name("cms.subCategoryTwo.update");
        // Route::get('/sub-category-two/delete/{id}', 'App\Http\Controllers\cms\SubCategoryTwoController@delete')->name('cms.subCategoryTwo.delete');
        // Route::get('/category/get/subcategoryone/{id}', 'App\Http\Controllers\cms\SubCategoryTwoController@getSubCategoryOne')->name("cms.subcategoryone.get");
        // Route::get('/category/get/subcategorytwo/{id}', 'App\Http\Controllers\cms\SubCategoryThreeController@getSubCategoryTwo')->name("cms.subcategorytwo.get");
        // Route::get('/category/get/subcategorythree/{id}', 'App\Http\Controllers\cms\OfferController@getSubCategoryThree')->name("cms.subcategorythree.get");

        // Route::get('/sub-categories-three', 'App\Http\Controllers\cms\SubCategoryThreeController@index')->name('cms.subCategoryThree.index');
        // Route::get('/sub-category-three/show/{id}', 'App\Http\Controllers\cms\SubCategoryThreeController@show')->name('cms.subCategoryThree.show');
        // Route::get('/sub-category-three/create', 'App\Http\Controllers\cms\SubCategoryThreeController@create')->name('cms.subCategoryThree.create');
        // Route::post('/sub-category-three/store', 'App\Http\Controllers\cms\SubCategoryThreeController@store')->name("cms.subCategoryThree.store");
        // Route::get('/sub-category-three/edit/{id}', 'App\Http\Controllers\cms\SubCategoryThreeController@edit')->name('cms.subCategoryThree.edit');
        // Route::post('/sub-category-three/update/{id}', 'App\Http\Controllers\cms\SubCategoryThreeController@update')->name("cms.subCategoryThree.update");
        // Route::get('/sub-category-three/delete/{id}', 'App\Http\Controllers\cms\SubCategoryThreeController@delete')->name('cms.subCategoryThree.delete');

        // Route::get('/products', 'App\Http\Controllers\cms\ProductController@index')->name('cms.product.index');
        // Route::get('/product/show/{id}', 'App\Http\Controllers\cms\ProductController@show')->name('cms.product.show');
        // Route::get('/product/create', 'App\Http\Controllers\cms\ProductController@create')->name('cms.product.create');
        // Route::post('/product/store', 'App\Http\Controllers\cms\ProductController@store')->name('cms.product.store');
        // Route::get('/product/edit/{id}', 'App\Http\Controllers\cms\ProductController@edit')->name('cms.product.edit');
        // Route::post('/product/update/{id}', 'App\Http\Controllers\cms\ProductController@update')->name('cms.product.update');
        // Route::get('/product/delete/{id}', 'App\Http\Controllers\cms\ProductController@delete')->name('cms.product.delete');


        // Route::get('/product-categories', 'App\Http\Controllers\cms\ProductCategoryController@index')->name('cms.productCategories.index');
        // Route::get('/product-category/show/{id}', 'App\Http\Controllers\cms\ProductCategoryController@show')->name('cms.productCategories.show');
        // Route::get('/product-category/create', 'App\Http\Controllers\cms\ProductCategoryController@create')->name('cms.productCategories.create');
        // Route::post('/product-category/store', 'App\Http\Controllers\cms\ProductCategoryController@store')->name('cms.productCategories.store');
        // Route::get('/product-category/edit/{id}', 'App\Http\Controllers\cms\ProductCategoryController@edit')->name('cms.productCategories.edit');
        // Route::post('/product-category/update/{id}', 'App\Http\Controllers\cms\ProductCategoryController@update')->name('cms.productCategories.update');
        // Route::get('/product-category/delete/{id}', 'App\Http\Controllers\cms\ProductCategoryController@delete')->name('cms.productCategories.delete');

        Route::get('/exhibitions/media/{id}', 'App\Http\Controllers\cms\ExhibitionController@indexMedia')->name('cms.exhibition.media.index');
        Route::get('/exhibition/media/create/{id}', 'App\Http\Controllers\cms\ExhibitionController@createMedia')->name('cms.exhibition.media.create');
        Route::post('/exhibition/media/store/{id}', 'App\Http\Controllers\cms\ExhibitionController@storeMedia')->name('cms.exhibition.media.store');
        Route::get('/exhibitions/media/edit/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@editMedia')->name('cms.exhibition.media.edit');
        Route::post('/exhibition/media/update/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@updateMedia')->name('cms.exhibition.media.update');
        Route::get('/exhibition/media/delete/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@deleteMedia')->name('cms.exhibition.media.delete');

        Route::get('/exhibitions', 'App\Http\Controllers\cms\ExhibitionController@index')->name('cms.exhibition.index');
        Route::get('/exhibition/show/{id}', 'App\Http\Controllers\cms\ExhibitionController@show')->name('cms.exhibition.show');
        Route::get('/exhibition/create', 'App\Http\Controllers\cms\ExhibitionController@create')->name('cms.exhibition.create');
        Route::post('/exhibition/store', 'App\Http\Controllers\cms\ExhibitionController@store')->name('cms.exhibition.store');
        Route::get('/exhibition/edit/{id}', 'App\Http\Controllers\cms\ExhibitionController@edit')->name('cms.exhibition.edit');
        Route::post('/exhibition/update/{id}', 'App\Http\Controllers\cms\ExhibitionController@update')->name('cms.exhibition.update');
        Route::get('/exhibition/delete/{id}', 'App\Http\Controllers\cms\ExhibitionController@delete')->name('cms.exhibition.delete');



        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("logout");
        Route::get('/change-password', 'App\Http\Controllers\cms\changePasswordController@changePassword')->name('changePassword');
        Route::put('/change-password/{id}', 'App\Http\Controllers\cms\changePasswordController@passwordChange')->name('cms.password.change');

        Route::get('/data', 'App\Http\Controllers\cms\DataController@index')->name('cms.data.index');
        Route::get('/data/create', 'App\Http\Controllers\cms\DataController@create')->name('cms.data.create');
        Route::post('/data/store', 'App\Http\Controllers\cms\DataController@store')->name('cms.data.store');
        Route::get('/data/edit/{id}', 'App\Http\Controllers\cms\DataController@edit')->name('cms.data.edit');
        Route::post('/data/update/{id}', 'App\Http\Controllers\cms\DataController@update')->name('cms.data.update');
        Route::get('/data/delete/{id}', 'App\Http\Controllers\cms\DataController@delete')->name('cms.data.delete');
    });
});
