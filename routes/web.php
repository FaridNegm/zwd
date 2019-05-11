<?php

// Start Admin Routes

Route::group(['namespace' => 'admin' , 'middleware' => 'checkAdmin'] , function (){
    Route::get('admin-panel' , 'usersController@index');

    // users Routes
    Route::get('admin-panel/all-users' , 'usersController@all_users');
    Route::get('admin-panel/add-users' , 'usersController@add_new_user');
    Route::post('admin-panel/add-users' , 'usersController@save_new_user');
    Route::get('admin-panel/users/edit/{id}' , 'usersController@edit_user');
    Route::post('admin-panel/users/edit/{id}' , 'usersController@save_edit_user');
    Route::get('admin-panel/users/delete/{id}' , 'usersController@delete_user');

    // works and posts Routes
    Route::get('admin-panel/all-posts' , 'postsController@all_posts');
    Route::get('admin-panel/add-posts' , 'postsController@add_new_post');
    Route::post('admin-panel/add-posts' , 'postsController@save_new_post');
    Route::get('admin-panel/posts/edit/{id}' , 'postsController@edit_post');
    Route::post('admin-panel/posts/edit/{id}' , 'postsController@save_edit_post');
    Route::get('admin-panel/posts/delete/{id}' , 'postsController@delete_post');

    // site Settings Routes
    Route::get('admin-panel/all-settings', 'sitesettingsController@allsetting');
    Route::get('admin-panel/settings/edit/{name}', 'sitesettingsController@editsiteSetting');
    Route::post('admin-panel/settings/update/{name}', 'sitesettingsController@updateSiteSetting');

    // My Services Routes
    Route::get('admin-panel/all-services', 'servicesController@allservices');
    Route::get('admin-panel/add-new-service', 'servicesController@addNewservice');
    Route::post('admin-panel/add-new-service', 'servicesController@saveNewService');
    Route::get('admin-panel/service/edit/{id}', 'servicesController@editService');
    Route::post('admin-panel/service/update/{id}', 'servicesController@updateService');
    Route::get('admin-panel/service/delete/{id}', 'servicesController@deleteService');

    // Testmonilas Routes
    Route::get('admin-panel/all-testmonials', 'testmonialsController@allTestmonial');
    Route::get('admin-panel/add-new-testmonial', 'testmonialsController@addNewTestmonial');
    Route::post('admin-panel/add-new-testmonial', 'testmonialsController@saveNewSeTestmonial');
    Route::get('admin-panel/testmonial/edit/{id}', 'testmonialsController@editTestmonial');
    Route::post('admin-panel/testmonial/update/{id}', 'testmonialsController@updateTestmonial');
    Route::get('admin-panel/testmonial/delete/{id}', 'testmonialsController@deleteTestmonial');

    // message Routes
    Route::post('admin-panel/send_message', 'usersController@saveMessage');
    Route::get('admin-panel/all-messages', 'usersController@allMessage');
    Route::get('admin-panel/message/{id}', 'usersController@singleMessage');
    Route::get('admin-panel/message/delete/{id}', 'usersController@deleteMessage');


});

    Route::get('/not_authorized', function () {
        return view('admin/false');
    });

// End Admin Routes

Route::group(['namespace' => 'website'] , function () {
    Route::get('/', 'websiteController@index');
    Route::get('/projects', 'projectController@index');
    Route::get('/contact-us', 'contactController@index');
    Route::get('/services', 'servicesController@index');
    Route::get('/team', 'teamController@index');
    Route::get('/single_service/{name}', 'servicesController@single_service');

    Route::get('/about', function () {
        return view('website/about');
    });

    Route::get('/blog', function () {
        return view('website/blog');
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
