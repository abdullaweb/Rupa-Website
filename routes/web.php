<?php

use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Blog\BlogCategoryController;
use App\Http\Controllers\Backend\Blog\BlogController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\JobApplyController;
use App\Http\Controllers\Backend\OurTeamController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ServiceCategoryController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\Settings\SettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\PowerSolutionController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// ############################## Routes for frontend ##############################
Route::group(
    [
        'middleware' => ['web'],
    ],
    function () {
        // Home Route
        Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
        // Contact Message Store Route
        Route::post('/admin/contact/store', [ContactController::class, 'ContactStore'])->name('admin.contact.store');
        Route::post('/admin/job-application/store', [JobApplyController::class, 'JobApplyStore'])->name('admin.job_apply.store');

        Route::group(
            [
                'prefix' => '',
                'controller' => FrontendController::class,
                'as' => 'frontend.',
            ],
            function () {
                Route::get('/power-solution/{slug}', 'PowerSolutionDetails')->name('power.details');
                Route::get('/power-solution', 'PowerSolution')->name('power.solution');
                Route::get('/product', 'ProductList')->name('product.list');
                Route::get('/product/{slug}', 'ProductDetails')->name('product.details');
                Route::get('/category/{slug}', 'CatWiseProductList')->name('catwise.product.list');
                Route::get('/contact-us', 'ContactUs')->name('contact-us');
                Route::get('/about-us', 'AboutUs')->name('about-us');
                Route::get('/after-sales', 'AfterSales')->name('after-sales');
                Route::get('/blog', 'BlogList')->name('blog.list');
                Route::get('/blog/{slug}', 'BlogDetails')->name('blog.details');
                Route::get('/privacy-policy', 'PrivacyPolicy')->name('privacy.policy');
                Route::get('/terms-conditions', 'TermsConditions')->name('terms.conditions');
                Route::get('/team', 'TeamList')->name('team.list');
                Route::get('/service', 'ServiceList')->name('service.list');
                Route::get('/service/{slug}', 'ServiceDetails')->name('service.details');
                Route::get('/projects', 'ProjectList')->name('project.list');
                Route::get('/career', 'CareerList')->name('career.list');
                Route::get('/job/{slug}', 'CareerDetails')->name('career.details');
            },
        );
    },
);

// ############################## Routes for admins ##############################
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth', RoleMiddleware::class . ':admin'],
        'as' => 'admin.',
    ],
    function () {
        // Admin Dashboard
        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'AdminDashboard')->name('dashboard');
            Route::get('/logout', 'AdminLogout')->name('logout');
            Route::get('/profile', 'AdminProfile')->name('profile');
            Route::post('/profile/update', 'AdminProfileUpdate')->name('profile.update');
            Route::post('/password/update', 'AdminPasswordUpdate')->name('password.update');
        });

        // Slider All Routes
        Route::group(
            [
                'prefix' => 'slider',
                'controller' => SliderController::class,
                'as' => 'slider.',
            ],
            function () {
                Route::get('/list', 'SliderList')->name('list');
                Route::get('/add', 'SliderAdd')->name('add');
                Route::post('/store', 'SliderStore')->name('store');
                Route::get('/edit/{id}', 'SliderEdit')->name('edit');
                Route::post('/update', 'SliderUpdate')->name('update');
                Route::get('/delete/{id}', 'SliderDelete')->name('delete');
            },
        );

        // Service Category All Routes
        Route::group(
            [
                'prefix' => 'service-category',
                'controller' => ServiceCategoryController::class,
                'as' => 'service-category.',
            ],
            function () {
                Route::get('/list', 'ServiceCategoryList')->name('list');
                Route::get('/add', 'ServiceCategoryAdd')->name('add');
                Route::post('/store', 'ServiceCategoryStore')->name('store');
                Route::get('/edit/{id}', 'ServiceCategoryEdit')->name('edit');
                Route::post('/update', 'ServiceCategoryUpdate')->name('update');
                Route::get('/delete/{id}', 'ServiceCategoryDelete')->name('delete');
            },
        );

        // Service All Routes
        Route::group(
            [
                'prefix' => 'service',
                'controller' => ServiceController::class,
                'as' => 'service.',
            ],
            function () {
                Route::get('/list', 'ServiceList')->name('list');
                Route::get('/add', 'ServiceAdd')->name('add');
                Route::post('/store', 'ServiceStore')->name('store');
                Route::get('/edit/{id}', 'ServiceEdit')->name('edit');
                Route::post('/update', 'ServiceUpdate')->name('update');
                Route::get('/delete/{id}', 'ServiceDelete')->name('delete');
            },
        );

        // Project All Routes
        Route::group(
            [
                'prefix' => 'project',
                'controller' => ProjectController::class,
                'as' => 'project.',
            ],
            function () {
                Route::get('/list', 'ProjectList')->name('list');
                Route::get('/add', 'ProjectAdd')->name('add');
                Route::post('/store', 'ProjectStore')->name('store');
                Route::get('/edit/{id}', 'ProjectEdit')->name('edit');
                Route::post('/update', 'ProjectUpdate')->name('update');
                Route::get('/delete/{id}', 'ProjectDelete')->name('delete');
            },
        );

        // Client All Routes
        Route::group(
            [
                'prefix' => 'client',
                'controller' => ClientController::class,
                'as' => 'client.',
            ],
            function () {
                Route::get('/list', 'ClientList')->name('list');
                Route::get('/add', 'ClientAdd')->name('add');
                Route::post('/store', 'ClientStore')->name('store');
                Route::get('/edit/{id}', 'ClientEdit')->name('edit');
                Route::post('/update', 'ClientUpdate')->name('update');
                Route::get('/delete/{id}', 'ClientDelete')->name('delete');
            },
        );

        // Power Solution All Routes
        Route::group(
            [
                'prefix' => 'power-solution',
                'controller' => PowerSolutionController::class,
                'as' => 'power.',
            ],
            function () {
                Route::get('/list', 'PowerSolutionList')->name('list');
                Route::get('/add', 'PowerSolutionAdd')->name('add');
                Route::post('/store', 'PowerSolutionStore')->name('store');
                Route::get('/edit/{id}', 'PowerSolutionEdit')->name('edit');
                Route::post('/update', 'PowerSolutionUpdate')->name('update');
                Route::get('/delete/{id}', 'PowerSolutionDelete')->name('delete');
            },
        );


        // Setting All Routes
        Route::group(
            [
                'prefix' => 'setting',
                'controller' => SettingController::class,
                'as' => 'setting.',
            ],
            function () {
                Route::get('/font-awesome', 'FontAwesome')->name('font-awesome');
                Route::get('/search-icons', 'searchIcons')->name('search-icons');
                Route::get('/edit/{id}', 'SettingEdit')->name('edit');
                Route::post('/update', 'SettingUpdate')->name('update');
            },
        );

        // Contact Message All Routes
        Route::group(
            [
                'prefix' => 'contact',
                'controller' => ContactController::class,
                'as' => 'contact.',
            ],
            function () {
                Route::get('/list', 'ContactList')->name('list');
                Route::get('/delete/{id}', 'ContactDelete')->name('delete');
                Route::post('/contact/delete-selected', 'deleteSelected')->name('deleteSelected');
            },
        );

        // About Us All Routes
        Route::group(
            [
                'prefix' => 'about-us',
                'controller' => AboutUsController::class,
                'as' => 'about-us.',
            ],
            function () {
                Route::get('/list', 'AboutUsList')->name('list');
                Route::get('/edit/{id}', 'AboutUsEdit')->name('edit');
                Route::post('/update', 'AboutUsUpdate')->name('update');
            },
        );

        // Chairman Message All Routes
        Route::group(
            [
                'prefix' => 'about-message',
                'controller' => AboutUsController::class,
                'as' => 'about-message.',
            ],
            function () {
                Route::get('/list', 'AboutMessageList')->name('list');
                Route::get('/edit/{id}', 'AboutMessageEdit')->name('edit');
                Route::post('/update', 'AboutMessageUpdate')->name('update');
            },
        );

        // Our Team All Routes
        Route::group(
            [
                'prefix' => 'our-team',
                'controller' => OurTeamController::class,
                'as' => 'our-team.',
            ],
            function () {
                Route::get('/list', 'OurTeamList')->name('list');
                Route::get('/add', 'OurTeamAdd')->name('add');
                Route::post('/store', 'OurTeamStore')->name('store');
                Route::get('/edit/{id}', 'OurTeamEdit')->name('edit');
                Route::post('/update', 'OurTeamUpdate')->name('update');
                Route::get('/delete/{id}', 'OurTeamDelete')->name('delete');
            },
        );

        // Blog Category All Routes
        Route::group(
            [
                'prefix' => 'blog-category',
                'controller' => BlogCategoryController::class,
                'as' => 'blog-category.',
            ],
            function () {
                Route::get('/list', 'BlogCategoryList')->name('list');
                Route::get('/add', 'BlogCategoryAdd')->name('add');
                Route::post('/store', 'BlogCategoryStore')->name('store');
                Route::get('/edit/{id}', 'BlogCategoryEdit')->name('edit');
                Route::post('/update', 'BlogCategoryUpdate')->name('update');
                Route::get('/delete/{id}', 'BlogCategoryDelete')->name('delete');
            },
        );

        // Blog All Routes
        Route::group(
            [
                'prefix' => 'blog',
                'controller' => BlogController::class,
                'as' => 'blog.',
            ],
            function () {
                Route::get('/list', 'BlogList')->name('list');
                Route::get('/add', 'BlogAdd')->name('add');
                Route::post('/store', 'BlogStore')->name('store');
                Route::get('/edit/{id}', 'BlogEdit')->name('edit');
                Route::post('/update', 'BlogUpdate')->name('update');
                Route::get('/delete/{id}', 'BlogDelete')->name('delete');
            },
        );

        // Career All Routes
        Route::group(
            [
                'prefix' => 'career',
                'controller' => CareerController::class,
                'as' => 'career.',
            ],
            function () {
                Route::get('/list', 'CareerList')->name('list');
                Route::get('/add', 'CareerAdd')->name('add');
                Route::post('/store', 'CareerStore')->name('store');
                Route::get('/edit/{id}', 'CareerEdit')->name('edit');
                Route::post('/update', 'CareerUpdate')->name('update');
                Route::get('/delete/{id}', 'CareerDelete')->name('delete');
            },
        );

        // Job Apply All Routes
        Route::group(
            [
                'prefix' => 'job-apply',
                'controller' => JobApplyController::class,
                'as' => 'job_apply.',
            ],
            function () {
                Route::get('/list', 'JobApplyList')->name('list');
                Route::get('/delete/{id}', 'JobApplyDelete')->name('delete');
                Route::post('/job-apply/delete-selected', 'deleteSelected')->name('deleteSelected');
            },
        );
    },
);

require __DIR__ . '/auth.php';
