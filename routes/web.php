<?php

use Illuminate\Http\Request;

Route::get('/','HomeController@home')->name('main');
Route::get('/test','HomeController@getPicture')->name('media');

Route::get('/apropo','HomeController@apropos')->name('apropo');
Route::get('/services','HomeController@service')->name('services');
Route::get('/produits','HomeController@service')->name('produits');

Route::get('/services/{detail}','HomeController@serviceFindDetail')->name('services.detail');

Route::get('/produits','HomeController@produit')->name('produits');
Route::get('/contacts','HomeController@contact')->name('contacts');
Route::post('/contact/create', 'HomeController@messageFromUser')->name('message.contact.create');


Route::get('/get-login', function () {
    if (Auth::guard('web')->check()) {
        return redirect()->route('dashboard');
    }

    return view('login');
  })->name('getlogin');



Route::post('/login', 'LoginController@postLogin')->name('login');
Route::get('/noPhomeermission', function() {
    return view('noPermission');
});

Route::group(['middleware' => ['senseiAuth', 'roles']], function () {

    Route::get('/carousel', 'CarouselController@index')->name('carousel');
    Route::get('carousel/create', 'CarouselController@create')->name('carousel.create');
    Route::post('carousel/delete/{id}', 'CarouselController@destroy')->name('carousel.delete');
    Route::post('slider/store', 'CarouselController@store')->name('slider.store');

    Route::get('citation/create', 'CarouselCitationController@create')->name('citation.create');
    Route::get('citation/{id}/show', 'CarouselCitationController@show')->name('citation.show');
    Route::get('citation/{id}/edit', 'CarouselCitationController@edit')->name('citation.edit');
    Route::post('citation/store', 'CarouselCitationController@store')->name('citation.store');
    Route::put('citation/{id}/update', 'CarouselCitationController@update')->name('citation.update');
    Route::delete('citation/{id}/delete', 'CarouselCitationController@destroy');
    Route::get('citations', 'CarouselCitationController@index')->name('citation.index');


    Route::get('/selectionner/{id}', 'MediaController@selectImg');

    Route::post('media/fromrequest/store','MediaController@stroreFromRequest')->name('media.fromcarousel.store');
    Route::get('/gallery', 'MediaController@index')->name('gallery');
    Route::get('media/create', 'MediaController@create')->name('media.create');
    Route::get('media/{id}/show', 'MediaController@show')->name('media.show');
    Route::get('media/{id}/edit', 'MediaController@edit')->name('media.edit');
    Route::post('media/store', 'MediaController@store')->name('media.store');
    Route::put('media/{id}/update', 'MediaController@update')->name('media.update');
    Route::delete('media/{id}/delete', 'MediaController@destroy');

    Route::get('logo/create', 'LogoController@create')->name('logo.create');
    Route::get('logo/{id}/show', 'LogoController@show')->name('logo.show');
    Route::get('logo/{id}/edit', 'LogoController@edit')->name('logo.edit');
    Route::post('logo/store', 'LogoController@store')->name('logo.store');
    Route::put('logo/{id}/update', 'LogoController@update')->name('logo.update');
    Route::delete('logo/{id}/delete', 'LogoController@destroy');
    Route::get('logos', 'LogoController@index')->name('logo.index');

    Route::get('icon/create', 'IconController@create')->name('icon.create');
    Route::get('icon/{id}/show', 'IconController@show')->name('icon.show');
    Route::get('icon/{id}/edit', 'IconController@edit')->name('icon.edit');
    Route::post('icon/store', 'IconController@store')->name('icon.store');
    Route::put('icon/{id}/update', 'IconController@update')->name('icon.update');
    Route::delete('icon/{id}/delete', 'IconController@destroy');
    Route::get('icons', 'IconController@index')->name('icon.index');

    Route::resource('role', 'RoleController');
    Route::resource('apropos', 'AProposController');
    Route::resource('contact', 'ContactController');
    Route::resource('service', 'ServiceController');
    Route::resource('serviceintro', 'serviceIntroController');
    Route::resource('produit', 'ProduitController');
    Route::resource('technologie', 'TechnologieController');
    Route::resource('coordonee', 'CoordoneesController');
    Route::resource('messagebienvenu', 'MessageBienvenuController');
    //Route::resource('messagecontact', 'MessageContactController');

    Route::get('/messagecontact', 'MessageContactController@index')->name('messagecontact.index');
    Route::get('/messagecontact/get/{id}', 'MessageContactController@show')->name('messagecontact.show');
    Route::post('/messagecontact/create', 'MessageContactController@store')->name('messagecontact.create');
    Route::delete('/messagecontact/{id}', 'MessageContactController@destroy')->name('messagecontact.delete');

    Route::resource('carousel', 'CarouselController');
    Route::resource('user', 'UserController');
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::resource('logs', 'LogsController');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/my-profile', 'ProfileController@index')->name('myprofile');
    Route::get('/my-profile-password', 'ProfileController@password')->name('myprofile.password');
    Route::get('/my-profile-private-data', 'ProfileController@private')->name('myprofile.private');
    Route::get('/my-profile-picture', 'ProfileController@picture')->name('myprofile.picture');

    Route::post('profile-picture/store', 'MediaController@store')->name('profile.picture.store');
    Route::post('/password-modifiable', 'ProfileController@changeMyPassword');
    Route::post('/personnal-info-modifiable', 'ProfileController@changeMyPersonnalInformation');


});
