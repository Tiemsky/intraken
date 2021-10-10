<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//redirecting to the default fr language.
Route::redirect('/', '/fr');
// Route::redirect('/ad/{slug}',[\App\Http\Controllers\MessageController::class, 'getLocale']);
//grouping all the route with the language as prefix
Route::group(['prefix' => '{language}','where' => ['language' => '[a-zA-Z]{2}']], function () {

   Route::get('/', [App\Http\Controllers\HomeController::class ,'index'])->name('index');
   Route::post('/', [App\Http\Controllers\HomeController::class ,'test'])->name('test');
   Route::get('/categories', [App\Http\Controllers\CategoryController::class ,'index'])->name('index.categories');
   Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class ,'showByCategory'])->name('showByCategory');


   Route::middleware(['auth'])->group(function () {
       

      //user Api
      Route::get('/home',                [App\Http\Controllers\UserController::class, 'home'])->name('user.home');
      Route::get('/profile',             [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
      Route::get('/ad/store',            [App\Http\Controllers\AdvertisementController::class, 'store'])->name('ad.store');
      Route::get('/ad/my-ads',           [App\Http\Controllers\AdvertisementController::class, 'myAds'])->name('ad.myAds');
      Route::get('/ad/edit/{id}',        [App\Http\Controllers\AdvertisementController::class, 'edit'])->name('ad.edit'); 
      Route::get('/messages',            [App\Http\Controllers\UserController::class, 'message'])->name('user.message');
      Route::get('/favorite-ads',        [App\Http\Controllers\AdvertisementController::class, 'favoriteAds'])->name('user.favoriteAds');
      Route::get('/privacy-settings',    [App\Http\Controllers\UserController::class, 'privacySettings'])->name('user.privacy');
      Route::get('/get-user-last-activity',    [App\Http\Controllers\UserController::class, 'userLastActivity']);


      //Chat
      Route::post('message',[\App\Http\Controllers\MessageController::class, 'store']);
      Route::get('locale',[\App\Http\Controllers\MessageController::class, 'getLocale']);
      Route::post('get-ad',[\App\Http\Controllers\MessageController::class, 'getUrl']);
      Route::get('messages/user',[App\Http\Controllers\MessageController::class, 'chatWithUser']);
      Route::get('message/user/{id}',[\App\Http\Controllers\MessageController::class, 'showUserMessages']);
      Route::post('start-conversation',[\App\Http\Controllers\MessageController::class, 'startConversation']);

   });

      //advertisement api
      Route::get('all-items', [App\Http\Controllers\AdvertisementController::class, 'index'])->name('ad.index'); 
      Route::get('{id}/items-posted-by-user', [App\Http\Controllers\AdvertisementController::class, 'allItemPostedByUser'])->name('ad.postedByUser'); 
      Route::get('ad/{slug}', [App\Http\Controllers\AdvertisementController::class, 'show'])->name('ad.show'); 
      Route::get('search',    [App\Http\Controllers\AdvertisementController::class, 'search'])->name('ad.search'); 
      Route::get('{categorySlug}/{subCategorySlug}',    [App\Http\Controllers\AdvertisementController::class, 'showAdsBySubCategories'])->name('ad.showBySubCategories'); 
      
  
      // Route::get('/my-ads', [App\Http\Controllers\UserController::class, 'myAds'])->name('user.myAds');
      // Route::get('/admin', [App\Http\Controllers\AdminController::class ,'index'])->name('index.admin');

      Route::middleware(['isAdmin'])->group(function () {
         Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
         Route::get('admin/create-user', [App\Http\Controllers\AdminController::class, 'create'])->name('user.create');
         Route::get('admin/manage-user', [App\Http\Controllers\AdminController::class, 'manageUser'])->name('user.manage');
         Route::get('admin/add-categories', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
         Route::get('admin/manage-categories', [App\Http\Controllers\CategoryController::class, 'manageCategories'])->name('categories.manage');
         Route::get('admin/add-sub-categories', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('subCategories.create');
         Route::get('admin/manage-sub-categories', [App\Http\Controllers\SubCategoryController::class, 'manageSubCategories'])->name('subCategories.manage');
         Route::get('admin/add-child-categories', [App\Http\Controllers\ChildCategoryController::class, 'create'])->name('childCategories.create');
         Route::get('admin/manage-child-categories', [App\Http\Controllers\ChildCategoryController::class, 'manageChildCategories'])->name('childCategories.manage');
      });
  

});

