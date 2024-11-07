<?php

// User Declaration
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\PaintingsController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\UserRegisterController;

// Admin Declaration
use App\Http\Controllers\admin\adminController;

use Illuminate\Support\Facades\Route;


// Start of User Route

// default
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => 'shareCartItems'], function () {



//test
// Route::get('/test', [HomeController::class, 'test']);

// // endtest

// Route::get('/', [HomeController::class, 'home']);
// Route::get('/home', [HomeController::class, 'home']);

// //login
// Route::get('/login', [UserLoginController::class, 'login']);
// Route::post('/login_proceed', [UserLoginController::class, 'login_proceed']);

// //logout
// Route::get('/logout_proceed', [ProfileController::class, 'logout_proceed']);

// //register
// Route::get('/register', [UserRegisterController::class, 'register']);
// Route::post('/proceed_register', [UserRegisterController::class, 'proceed_register']);

// Route::get('/login', [HomeController::class, 'testlogin']);

// Middleware
// Route::group(['middleware' => 'userMiddleware'], function () {
//     Route::get('/cart', [CartController::class, 'cart']);

//     // Route::get('/cart/{userid}', [CartController::class, 'cart']);

//     Route::get('/profile', [ProfileController::class, 'profile']);
//     Route::get('/profile/{userid}', [ProfileController::class, 'profile']);

//     Route::get('/proceed_checkout', [CartController::class, 'proceed_checkout']);

//     Route::get('/proceed_addtocart', [PaintingsController::class, 'proceed_addtocart']);

//     Route::get('/proceed_submit_review', [PaintingsController::class, 'proceed_submit_review']);

//     Route::get('/proceed_cart_item_delete/{cartid}', [CartController::class, 'proceed_cart_item_delete']);
// });

// Route::group(['prefix' => 'paintings'], function () {
//     Route::get('/', [PaintingsController::class, 'paintings']);
//     Route::get('/paintings', [PaintingsController::class, 'paintings']);
//     Route::get('/painting_details/{painting_id}', [PaintingsController::class, 'painting_details']);
// });

// Route::group(['prefix' => 'aboutus'], function () {
//     Route::get('/', [AboutUsController::class, 'aboutus']);
//     Route::get('/aboutus', [AboutUsController::class, 'aboutus']);
// });

// Route::group(['prefix' => 'contact'], function () {
//     Route::get('/', [ContactController::class, 'contact']);
//     Route::get('/contact', [ContactController::class, 'contact']);
// });

// Route::group(['prefix' => 'gallery'], function () {
//     Route::get('/', [GalleryController::class, 'gallery']);
//     Route::get('/gallery', [GalleryController::class, 'gallery']);
// });
// End of User Route

// Start of Admin Route

// Route::get('/', function () {
//     return view('welcome');
// });

//----------------------------------- admin routes section ----------------------------------------//


// register, login and logout //
Route::get('admin/register_login/login', [adminController::class, 'login']);
Route::get('admin/register_login/register', [adminController::class, 'register']);
Route::get('admin/register_login/logout', [adminController::class, 'logout']);

// register and login process routes
Route::post('admin/register_login/loginProcess', [adminController::class, 'loginProcess']);
Route::post('admin/register_login/registerProcess', [adminController::class, 'registerProcess']);

// admin all pages route
Route::group(['prefix' => 'admin', 'middleware' => 'adminMiddleware'], function(){
    
    //--------------------------- return view pages----------------------------//
    // home page
    Route::get('/', [adminController::class, 'index']);
    Route::get('/index', [adminController::class, 'index']);
    Route::get('/test', [adminController::class, 'test']);
   

    
    // view order
    Route::get('/order/orders', [adminController::class, 'orders']);
    Route::get('/order/addOrders', [adminController::class, 'addOrders']);
    Route::get('/order/editOrder/{query_id}', [adminController::class, 'editOrder']);

    // view order Detail
    Route::get('/orderDetail/orderDetails/{order_id}', [adminController::class, 'orderDetails']);
    // Route::get('/orderDetail/editOrderDetail/{query_id}', [adminController::class, 'editOrderDetail']);

    // view user review
    Route::get('/review/review', [adminController::class, 'reviews']);

    // view painting
    Route::get('/painting/paintings', [adminController::class, 'paintings']);
    Route::get('/painting/addPaintings', [adminController::class, 'addPaintings']);
    Route::get('/painting/editPainting/{query_id}', [adminController::class, 'editPainting']);



    // view account
    Route::get('/account/accounts', [adminController::class, 'accounts']);
    Route::get('/account/addAccounts', [adminController::class, 'addAccounts']);
    Route::get('/account/editAccount/{query_id}', [adminController::class, 'editAccount']);
    Route::get('/account/editAccountPassword/{query_id}', [adminController::class, 'editAccountPassword']);
 

    // view photos
    Route::get('/photos/photos', [adminController::class, 'photos']);
    Route::get('/photos/addPhotos', [adminController::class, 'addPhotos']);
    // Route::get('/photos/editPhotos/{query_id}', [adminController::class, 'editPhotos']);
    Route::get('/photos/editPhotos/{query_id}/{painting_id}', [adminController::class, 'editPhotos']);


    // view gallery subject
    Route::get('/gallery/gallerySubject', [adminController::class, 'gallerySubject']);
    Route::get('/gallery/addGallerySubject', [adminController::class, 'addGallerySubject']);
    Route::get('/gallery/editGallerySubject/{query_id}', [adminController::class, 'editGallerySubject']);

    // view gallery
    Route::get('/gallery/gallery', [adminController::class, 'gallery']);
    Route::get('/gallery/addPhotoGallery', [adminController::class, 'addPhotoGallery']);
    Route::get('/gallery/editPhotoGallery/{query_id}/{gallery_id}', [adminController::class, 'editPhotoGallery']);


    // view artists
    Route::get('/artist/artists', [adminController::class, 'artists']);
    Route::get('/artist/addArtist', [adminController::class, 'addArtist']);
    Route::get('/artist/editArtist/{query_id}', [adminController::class, 'editArtist']);

    //----------------------------end return view pages----------------------------//


    // -------------------------------- Process routes -------------------------------- //

   
    // --------------------------------- CRUD Process ---------------------------------------------------- //

    // CRUD order process routes

    // Route::get('/ order/addOrderProcess/{query_id}', [adminController::class, 'processAddOrder']);
    Route::get('/order/editOrderProcess/{query_id}', [adminController::class, 'editOrderProcess']);
    Route::get('/order/deleteOrder/{query_id}', [adminController::class, 'deleteOrder']);


    // CRUD order Detail process routes
    // Route::get('/orderDetail/editOrderDetailProcess/{query_id}', [adminController::class, 'editOrderDetailProcess']);
    // Route::get('/orderDetail/deleteOrderDetail/{query_id}', [adminController::class, 'deleteOrderDetail']);


    // CRUD review process routes
    Route::get('/review/deleteReview/{query_id}', [adminController::class, 'deleteReview']);

    // CRUD painting process routes
    Route::get('/painting/addPaintingProcess', [adminController::class, 'addPaintingProcess']);
    Route::get('/painting/editPaintingProcess/{query_id}', [adminController::class, 'editPaintingProcess']);
    Route::get('/painting/deletePainting/{query_id}', [adminController::class, 'deletePainting']);



    // CRUD account process routes
    Route::get('/account/addAccountProcess', [adminController::class, 'addAccountProcess']);
    Route::get('/account/editAccountProcess/{query_id}', [adminController::class, 'editAccountProcess']);
    Route::post('/account/editAccountPasswordProcess/{query_id}', [adminController::class, 'editAccountPasswordProcess']);


    // CRUD photos process routes
    Route::post('/photos/addPhotosProcess', [adminController::class, 'addPhotosProcess']);
    Route::post('/photos/editPhotosProcess/{query_id}/{painting_id}', [adminController::class, 'editPhotosProcess']);
    Route::get('/photos/deletePhotos/{query_id}', [adminController::class, 'deletePhotos']);


    // CRUD gallery subject process routes
    Route::get('/gallery/addGallerySubjectProcess', [adminController::class, 'addGallerySubjectProcess']);
    Route::get('/gallery/editGallerySubjectProcess/{query_id}', [adminController::class, 'editGallerySubjectProcess']);
    Route::get('/gallery/deleteGallerySubject/{query_id}', [adminController::class, 'deleteGallerySubject']);

    // CRUD photos gallery process routes
    Route::post('/gallery/addPhotoGalleryProcess', [adminController::class, 'addPhotoGalleryProcess']);
    Route::post('/gallery/editPhotoGalleryProcess/{query_id}/{gallery_id}', [adminController::class, 'editPhotoGalleryProcess']);
    Route::get('/gallery/deletePhotoGallery/{query_id}', [adminController::class, 'deletePhotoGallery']);


    // CRUD artist process routes
    Route::get('/artist/addArtistProcess', [adminController::class, 'addArtistProcess']);
    Route::get('/artist/editArtistProcess/{query_id}', [adminController::class, 'editArtistProcess']);
    Route::get('/artist/deleteArtist/{query_id}', [adminController::class, 'deleteArtist']);

    // ----------------- end CRUD Process ---------------------- //

    //-------------------------------------- end admin routes section ----------------------------------------------------------//

});


// ------------------------ user routes ------------------------------//

Route::get('/test', [HomeController::class, 'test']);

// endtest

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);

//login
Route::get('/login', [UserLoginController::class, 'login']);
Route::post('/login_proceed', [UserLoginController::class, 'login_proceed']);

//logout
Route::get('/logout_proceed', [ProfileController::class, 'logout_proceed']);

//register
Route::get('/register', [UserRegisterController::class, 'register']);
Route::post('/proceed_register', [UserRegisterController::class, 'proceed_register']);

// Route::get('/login', [HomeController::class, 'testlogin']);

// Middleware
Route::group(['middleware' => 'userMiddleware'], function () {
    Route::get('/cart', [CartController::class, 'cart']);

    // Route::get('/cart/{userid}', [CartController::class, 'cart']);
    
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::get('/profile/{userid}', [ProfileController::class, 'profile']);

    Route::get('/proceed_checkout', [CartController::class, 'proceed_checkout']);

    Route::get('/proceed_addtocart', [PaintingsController::class, 'proceed_addtocart']);

    Route::get('/proceed_submit_review', [PaintingsController::class, 'proceed_submit_review']);

    Route::get('/proceed_cart_item_delete/{cartid}', [CartController::class, 'proceed_cart_item_delete']);
});

Route::group(['prefix' => 'paintings'], function () {
    Route::get('/', [PaintingsController::class, 'paintings']);
    Route::get('/paintings', [PaintingsController::class, 'paintings']);
    Route::get('/painting_details/{painting_id}', [PaintingsController::class, 'painting_details']);
});

Route::group(['prefix' => 'aboutus'], function () {
    Route::get('/', [AboutUsController::class, 'aboutus']);
    Route::get('/aboutus', [AboutUsController::class, 'aboutus']);
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'contact']);
    Route::get('/contact', [ContactController::class, 'contact']);
});

Route::group(['prefix' => 'gallery'], function () {
    Route::get('/', [GalleryController::class, 'gallery']);
    Route::get('/gallery', [GalleryController::class, 'gallery']);
});


// End of Admin Route