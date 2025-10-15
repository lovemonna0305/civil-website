<?php

use App\Http\Controllers\Backend\About\AboutController;
use App\Http\Controllers\Backend\About\AboutServices;
use App\Http\Controllers\Backend\About\AboutServicesController;
use App\Http\Controllers\Backend\About\AboutTeamController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\Home\HomeAboutController;
use App\Http\Controllers\Backend\Home\HomeFeaturesController;
use App\Http\Controllers\Backend\Home\HomeServicesController;
use App\Http\Controllers\Backend\Home\HomeSliderController;
use App\Http\Controllers\Backend\Home\HomeTestimonialsController;
use App\Http\Controllers\Backend\Project\BrandController;
use App\Http\Controllers\Backend\Project\CategoryController;
use App\Http\Controllers\Backend\Project\ProjectController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\QuotesController;
use App\Http\Controllers\Backend\ContactsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

// FrontendController
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/services/{title}', 'servicesdetail')->name('services.detail');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/projects/{title}', 'projectdetail')->name('project.detail');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactpost')->name('contactpost');
    Route::post('/quote', 'quotepost')->name('quotepost');
});


// AdminController
Route::prefix('admin')->middleware('auth')->group(function () {
    // Admin Routes
    Route::get('/',[AdminController::class, 'index'])->name('admin.index');

    // User Routes
    Route::controller(UserController::class)->group(function(){
        Route::get('/user', 'index')->name('user.index');
        Route::put('/user', 'update')->name('user.update');
        // User password
        Route::get('/user/change-password', 'passwordForm')->name('user.passwordForm');
        Route::put('/user/change-password', 'changePassword')->name('user.changePassword');
    });

    // Home Slider Routes
    Route::controller(HomeSliderController::class)->group(function(){
        Route::get('/homeslider', 'index')->name('slider.index');
        Route::get('/homeslider/create', 'create')->name('slider.create');
        Route::post('/homeslider/create', 'store')->name('slider.store');
        Route::get('/homeslider/edit/{id}', 'edit')->name('slider.edit');
        Route::put('/homeslider/edit', 'update')->name('slider.update');
        Route::get('/homeslider/{id}', 'destroy')->name('slider.destroy');
    });
    // Home About Routes
    Route::controller(HomeAboutController::class)->group(function(){
        Route::get('/homeabout', 'index')->name('homeabout.index');
        Route::put('/homeabout', 'update')->name('homeabout.update');
    });
    // Home Services Routes
    Route::controller(HomeServicesController::class)->group(function(){
        Route::get('/homeservices', 'index')->name('homeservices.index');
        Route::get('/homeservices/create', 'create')->name('homeservices.create');
        Route::post('/homeservices/create', 'store')->name('homeservices.store');
        Route::get('/homeservices/edit/{id}', 'edit')->name('homeservices.edit');
        Route::put('/homeservices/edit', 'update')->name('homeservices.update');
        Route::get('/homeservices/{id}', 'destroy')->name('homeservices.destroy');
    });
    // Home Features Routes
    Route::controller(HomeFeaturesController::class)->group(function(){
        Route::get('/homefeatures', 'index')->name('homefeatures.index');
        Route::get('/homefeatures/create', 'create')->name('homefeatures.create');
        Route::post('/homefeatures/create', 'store')->name('homefeatures.store');
        Route::get('/homefeatures/edit/{id}', 'edit')->name('homefeatures.edit');
        Route::put('/homefeatures/edit', 'update')->name('homefeatures.update');
        Route::get('/homefeatures/{id}', 'destroy')->name('homefeatures.destroy');
    });
    // Home Testimonials Routes
    Route::controller(HomeTestimonialsController::class)->group(function(){
        Route::get('/hometestimonials', 'index')->name('hometestimonials.index');
        Route::get('/hometestimonials/create', 'create')->name('hometestimonials.create');
        Route::post('/hometestimonials/create', 'store')->name('hometestimonials.store');
        Route::get('/hometestimonials/edit/{id}', 'edit')->name('hometestimonials.edit');
        Route::put('/hometestimonials/edit', 'update')->name('hometestimonials.update');
        Route::get('/hometestimonials/{id}', 'destroy')->name('hometestimonials.destroy');
    });

    // About Routes
    Route::controller(AboutController::class)->group(function(){
        Route::get('/about', 'index')->name('about.index');
        Route::put('/about', 'update')->name('about.update');
    });
    // About Services Routes
    Route::controller(AboutServicesController::class)->group(function(){
        Route::get('/aboutservices', 'index')->name('aboutservices.index');
        Route::get('/aboutservices/create', 'create')->name('aboutservices.create');
        Route::post('/aboutservices/create', 'store')->name('aboutservices.store');
        Route::get('/aboutservices/edit/{id}', 'edit')->name('aboutservices.edit');
        Route::put('/aboutservices/edit', 'update')->name('aboutservices.update');
        Route::get('/aboutservices/{id}', 'destroy')->name('aboutservices.destroy');
    });
    // About Team Routes
    Route::controller(AboutTeamController::class)->group(function(){
        Route::get('/aboutteam', 'index')->name('aboutteam.index');
        Route::get('/aboutteam/create', 'create')->name('aboutteam.create');
        Route::post('/aboutteam/create', 'store')->name('aboutteam.store');
        Route::get('/aboutteam/edit/{id}', 'edit')->name('aboutteam.edit');
        Route::put('/aboutteam/edit', 'update')->name('aboutteam.update');
        Route::get('/aboutteam/{id}', 'destroy')->name('aboutteam.destroy');
    });

    // Services Routes
    Route::controller(ServicesController::class)->group(function(){
        Route::get('/services', 'index')->name('services.index');
        Route::get('/services/create', 'create')->name('services.create');
        Route::post('/services/create', 'store')->name('services.store');
        Route::get('/services/edit/{id}', 'edit')->name('services.edit');
        Route::put('/services/edit', 'update')->name('services.update');
        Route::get('/services/{id}', 'destroy')->name('services.destroy');
    });
    
    // Brand Routes
    Route::controller(BrandController::class)->group(function(){
        Route::get('/brand', 'index')->name('brand.index');
        Route::get('/brand/create', 'create')->name('brand.create');
        Route::post('/brand/create', 'store')->name('brand.store');
        Route::get('/brand/edit/{id}', 'edit')->name('brand.edit');
        Route::put('/brand/edit', 'update')->name('brand.update');
        Route::get('/brand/{id}', 'destroy')->name('brand.destroy');
    });
    
    // Category Routes
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/create', 'store')->name('category.store');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::put('/category/edit', 'update')->name('category.update');
        Route::get('/category/{id}', 'destroy')->name('category.destroy');
    });
    
    // Projects Routes
    Route::controller(ProjectController::class)->group(function(){
        Route::get('/project', 'index')->name('project.index');
        Route::get('/project/create', 'create')->name('project.create');
        Route::post('/project/create', 'store')->name('project.store');
        Route::get('/project/edit/{id}', 'edit')->name('project.edit');
        Route::put('/project/edit', 'update')->name('project.update');
        Route::get('/project/{id}', 'destroy')->name('project.destroy');
    });
    
    // Contacts Routes
    Route::controller(ContactsController::class)->group(function(){
        Route::get('/contacts', 'index')->name('contacts.index');
        // Route::get('/contacts/create', 'create')->name('contacts.create');
        // Route::post('/contacts/create', 'store')->name('contacts.store');
        // Route::get('/contacts/edit/{id}', 'edit')->name('contacts.edit');
        // Route::put('/contacts/edit', 'update')->name('contacts.update');
        // Route::get('/contacts/{id}', 'destroy')->name('contacts.destroy');
    });
    
    // Quote Routes
    Route::controller(QuotesController::class)->group(function(){
        Route::get('/quotes', 'index')->name('quotes.index');
        Route::get('/quotes/create', 'create')->name('quotes.create');
        Route::post('/quotes/create', 'store')->name('quotes.store');
        Route::get('/quotes/edit/{id}', 'edit')->name('quotes.edit');
        Route::put('/quotes/edit', 'update')->name('quotes.update');
        Route::get('/quotes/{id}', 'destroy')->name('quotes.destroy');
    });

});
