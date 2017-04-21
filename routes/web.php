<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['namespace'=>'Admin','prefix'=>'adminpanel','middleware'=>['web','admin']], function(){

	//========================   Manage Users
	Route::get('/', 'AdminController@index');
	Route::resource('/users', 'UsersController');
	Route::post('/users/{id}/update', 'UsersController@update');
	Route::get('/users/{id}/delete', 'UsersController@destroy');
	//========================   Manage Main Category
	Route::resource('/categories', 'CategoriesController');
	Route::post('/categories/{id}/update', 'CategoriesController@update');
	Route::get('/categories/{id}/delete', 'CategoriesController@destroy');
	
	//========================   Manage Sub Category
	Route::get('/categories/{id}/show', 'CategoriesController@read');
	Route::post('/categories/{id}/store', 'SubcategoryController@store');
	Route::get('/categories/{id}/editing', 'SubcategoryController@edit');
	Route::post('/categories/{id}/change', 'SubcategoryController@update');
	Route::get('/categories/{id}/deleting', 'SubcategoryController@destroy');
	//========================   Manage End Product
	Route::get('/categories/subcategory/{id}/view', 'SubcategoryController@index');
	Route::post('/categories/subcategory/{id}/store', 'ProductController@store');
	Route::get('/categories/subcategory/{id}/edit', 'ProductController@edit');
	Route::post('/categories/subcategory/{id}/update', 'ProductController@update');
	Route::get('/categories/subcategory/{id}/delete', 'ProductController@destroy');
	Route::get('/sitesetting', 'SitesettingController@index');
	Route::post('/sitesetting/update', 'SitesettingController@update');
	//========================   Reading All Message From Contact Us
	Route::get('/allmessage', 'ContactController@showMessage');
	//========================   Manage Slide Photo
	Route::get('/photoslide', 'SlideController@index');
	Route::get('/photoslide/edit/{id}', 'SlideController@edit');
	Route::post('/photoslide/{id}/updateone', 'SlideController@updateone');
	Route::post('/photoslide/{id}/updatetwo', 'SlideController@updatetwo');
	Route::post('/photoslide/{id}/updatethree', 'SlideController@updatethree');
	Route::post('/photoslide/{id}/updatefour', 'SlideController@updatefour');






	
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=> 'web'], function(){

	// ========= Get Home Page ==========
	Route::get('/', 'GCategorycontroller@home');
	// ========= Get About Page ==========
	Route::get('/about', 'GCategorycontroller@getAbout');
	// ========= Get Contact Page ==========
	Route::get('/contactus', 'GCategorycontroller@getContact');
	// ========= Show All Categories ==========
	Route::get('/allcategories', 'GCategorycontroller@showAllCategories');
	// ========= Show All Subcategories ==========
	Route::get('/allcategories/{id}', 'GCategorycontroller@showsubcategories');
	// ========= Show Product ==========
	Route::get('/allcategories/{id}/view', 'GCategorycontroller@viewProduct');
	// ========= View Sub Category ==========
	Route::get('/subcategory/{id}/view', 'GCategorycontroller@viewsubcategory');
	// ========= Store Data From Contact Us TO Database ==========
	Route::post('/message', 'Admin\ContactController@store');
	// ========= Add Product To Cart ==========
	Route::get('add_to_cart/{id}', 'Admin\ProductController@addToCart');
	// ========= Get All Products That Added To Cart ==========
	Route::get('product/shoppingcart', 'Admin\ProductController@getCart');
	// ========= Get Search Page ==========
	Route::post('query', 'GCategorycontroller@search');

Auth::routes();

Route::get('/home', 'HomeController@index');

});

