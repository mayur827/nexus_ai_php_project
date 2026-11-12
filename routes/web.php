<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;

//
// home  
Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

// =========================
// PUBLIC WEBSITE
// =========================

Route::get('/', function () {
    return view('index');
});


// =========================
// ADMIN DASHBOARD
// =========================

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.dashboard');


// =========================
// ADMIN SLIDER
// =========================

// Slider list
Route::get('/admin/slider', [SliderController::class, 'index'])
    ->name('admin.slider');

// Add Slider
Route::get('/admin/slider/add', [SliderController::class, 'create'])
    ->name('admin.slider.add');

// Edit Slider
Route::get('/admin/slider/edit/{id}', [SliderController::class, 'edit'])
    ->name('admin.slider.edit');

// login and logout routes


    Route::get('/login', [LoginController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');


    //Hero Section Routes
Route::get('/admin/hero', [HeroController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.hero');

Route::get('/admin/hero/add', [HeroController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.hero.add');

Route::post('/admin/hero/store', [HeroController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.hero.store');

Route::get('/admin/hero/edit/{id}', [HeroController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.hero.edit');

Route::put('/admin/hero/update/{id}', [HeroController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.hero.update');

Route::delete('/admin/hero/delete/{id}', [HeroController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.hero.delete');


    //Social Section Routes
    Route::get('/admin/social', [SocialController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.social');

Route::get('/admin/social/add', [SocialController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.social.add');

Route::post('/admin/social/store', [SocialController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.social.store');

Route::get('/admin/social/edit/{id}', [SocialController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.social.edit');

Route::put('/admin/social/update/{id}', [SocialController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.social.update');

Route::delete('/admin/social/delete/{id}', [SocialController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.social.delete');

    //Feature Section Routes
    Route::get('/admin/feature', [FeatureController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.feature');

Route::get('/admin/feature/add', [FeatureController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.feature.add');

Route::post('/admin/feature/store', [FeatureController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.feature.store');

Route::get('/admin/feature/edit/{id}', [FeatureController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.feature.edit');

Route::put('/admin/feature/update/{id}', [FeatureController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.feature.update');

Route::delete('/admin/feature/delete/{id}', [FeatureController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.feature.delete');


    //Work Section Routes
    Route::get('/admin/work', [WorkController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.work');

Route::get('/admin/work/add', [WorkController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.work.add');

Route::post('/admin/work/store', [WorkController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.work.store');

Route::get('/admin/work/edit/{id}', [WorkController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.work.edit');

Route::put('/admin/work/update/{id}', [WorkController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.work.update');

Route::delete('/admin/work/delete/{id}', [WorkController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.work.delete');

    //Integration Section Routes
    Route::get('/admin/integration', [IntegrationController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.integration');

Route::get('/admin/integration/add', [IntegrationController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.integration.add');

Route::post('/admin/integration/store', [IntegrationController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.integration.store');

Route::get('/admin/integration/edit/{id}', [IntegrationController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.integration.edit');

Route::put('/admin/integration/update/{id}', [IntegrationController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.integration.update');

Route::delete('/admin/integration/delete/{id}', [IntegrationController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.integration.delete');


    //Pricing Section Routes
    Route::get('/admin/price', [PricingController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.price');

Route::get('/admin/price/add', [PricingController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.price.add');

Route::post('/admin/price/store', [PricingController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.price.store');

Route::get('/admin/price/edit/{id}', [PricingController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.price.edit');

Route::put('/admin/price/update/{id}', [PricingController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.price.update');

Route::delete('/admin/price/delete/{id}', [PricingController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.price.delete');

    //Testimonial Section Routes

    Route::get('/admin/testimonial', [TestimonialController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.testimonial');

Route::get('/admin/testimonial/add', [TestimonialController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.add');

Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.store');

Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.edit');

Route::put('/admin/testimonial/update/{id}', [TestimonialController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.update');

Route::delete('/admin/testimonial/delete/{id}', [TestimonialController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.delete');

Route::get('/admin/testimonial/view/{id}', [TestimonialController::class, 'view'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.view');

Route::get('/admin/testimonial/view/{id}', [TestimonialController::class, 'view'])
    ->middleware('admin.auth')
    ->name('admin.testimonial.view');

    //FAQ Section Routes

    Route::get('/admin/faq', [FaqController::class, 'index'])
    ->middleware('admin.auth')
    ->name('admin.faq');

Route::get('/admin/faq/add', [FaqController::class, 'create'])
    ->middleware('admin.auth')
    ->name('admin.faq.add');

Route::post('/admin/faq/store', [FaqController::class, 'store'])
    ->middleware('admin.auth')
    ->name('admin.faq.store');

Route::get('/admin/faq/edit/{id}', [FaqController::class, 'edit'])
    ->middleware('admin.auth')
    ->name('admin.faq.edit');

Route::put('/admin/faq/update/{id}', [FaqController::class, 'update'])
    ->middleware('admin.auth')
    ->name('admin.faq.update');

Route::delete('/admin/faq/delete/{id}', [FaqController::class, 'destroy'])
    ->middleware('admin.auth')
    ->name('admin.faq.delete');

