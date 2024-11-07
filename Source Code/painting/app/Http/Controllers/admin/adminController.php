<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Artist;
use App\Models\Gallery;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Painting;
use App\Models\CategoryColor;
use App\Models\CategoryStyle;
use App\Models\CategorySurface;
use App\Models\Payment;
use App\Models\PhotoGallery;
use App\Models\Photos;
use App\Models\Review;
use App\Models\Role;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Log\Logger;

class adminController extends Controller
{

    // login, logout section
    public function login()
    {

        return view('admin/register_login/login');
    }


    public function loginProcess(Request $request)
    {
        if ($request->has('btn-Login')) {
            // Validation rules for login form
            $rules = [
                'username' => 'required|min:6|string',
                'password' => 'required|min:6|string',

            ];

            // Validate user input
            $validator = Validator::make(
                $request->all(),
                $rules,
                [
                    'username.required' => 'Please enter your username.',
                    'username.username' => 'The username is invalid.',
                    'password.required' => 'Please enter your password.',
                    'password.min' => 'The password must be at least 6 characters long.',
                ]
            );

            if ($validator->fails()) {
                return redirect('admin/register_login/login')->withErrors($validator->errors());
            }

            $usernameInput = $request->input('username');
            $user = Account::where('username', $usernameInput)->first();

            $passwordInput = $request->input('password');

            if ($user) {
                // Replace with your actual authentication logic (e.g., database check)
                if ($user && Hash::check($passwordInput, $user->password)) {
                    if ($user->role_id == 1) {
                        session()->put('user', $user->username); // section get in the h4 every page and in the AdminMiddleware
                        return redirect('admin/index')->withInput(['loginSuccessful' => true]); // Redirect to home page on success
                    }
                }
            }
        }
        return redirect('admin/register_login/login')->withErrors(['message' => 'Invalid login credentials']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');  // Remove username key

        // $request->section()->forget('other_section_key');
        return redirect('admin/register_login/login'); // Redirect to login page after logout
    }
    // end login, logout section


    // file name generator
    function generateFileName($fileName)
    {
        $lastIndex = strrpos($fileName, '.');
        $ext = substr($fileName, $lastIndex);
        return uniqid() . $ext;
    }
    // end file name generator

    // register section
    public function register()
    {
        return view('admin/register_login/register');
    }

    public function registerProcess(Request $request)
    {

        if ($request->has('btn-register')) {
            $rules = [
                'username' => 'required|min:6|string|regex:/\w*$/|max:20|unique:account,username',
                'password' => 'required|min:6',
                'email' => 'required|email|regex:/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/|unique:account,email',
                'date_of_birth' => 'required|date|date_format:Y-m-d',
                'phone_number' => 'required|string|regex:/^[\+]?[(]?\d{2,3}[)]?[-\s\.]?\d{3}[-\s\.]?\d{4}$/',
            ];
            $data = [
                'username' => trim($request->input('username')),
                'password' => trim($request->input('password')),
                'date_of_birth' => DateTime::createFromFormat('d/m/Y', $request->input('date_of_birth'))->format('Y-m-d'),
                'email' => trim($request->input('email')),
                'phone_number' => $request->input('phone_number')

            ];

            $validator = Validator::make(
                $data,
                $rules,
                [
                    'username.required' => 'Please enter a username.',
                    'username.username' => 'The username is invalid.',
                    'username.unique' => 'The username is already existed.',
                    'username.min' => 'The username must be at least 6 characters long.',
                    'username.max' => 'The username must be only 20 characters long.',
                    'password.required' => 'Please enter the password.',
                    'password.min' => 'The password must be at least 6 characters long.',
                    'email.required' => 'Please enter your email.',
                    'email.email' => 'The email is invalid.',
                    'email.unique' => 'The email is already existed.',
                    'date_of_birth.required' => 'Please enter a date',
                    'date_of_birth.date' => 'The date is invalid',
                    'phone_number.regex' => 'The phone number is invalid.',
                ]
            );

            if ($validator->fails()) {
                return redirect('admin/register_login/register')->withErrors($validator->errors());
            }


            bcrypt($data['password']);
        }
        Account::create($data);
        return redirect('admin/register_login/login');
    }
    // end register section


    // index page
    public function index()
    {
        $data = [
            'paintings' => DB::table('painting')->join('painting_style_category', 'painting_style_category.id', '=', 'painting.painting_style_category_id')->join('painting_surface_category', 'painting_surface_category.id', '=', 'painting.painting_surface_category_id')->join('painting_color_category', 'painting_color_category.id', '=', 'painting.painting_color_category_id')->join('artist', 'artist.id', '=', 'painting.artist_id')->join('photos', 'photos.painting_id', '=', 'painting.id')->select('painting.*', 'painting_style_category.name as styleName', 'painting_surface_category.name as surfaceName', 'painting_color_category.name as colorName', 'artist.name as artistName', 'photos.name as photoName')->join('account_cart', 'account_cart.painting_id', '=', 'painting.id')->select('painting.*')->get()
        ];

        return view('admin/index');
    }


    // public function test(){$data = [
    //     'photos' => Photos::get(),
    //     'paintings' => DB::table('painting')->join('photos', 'painting.id','=','photos.painting_id')
    //                                        -> select('painting.*', DB::raw('painting.name as paintingName'))
    //                                        -> get(),
    // ];
    //     return view('admin/test')->with($data);
    // }

    // painting section
    public function paintings()
    {
        $data = [
            'paintings' => DB::table('photos')-> rightJoin('painting', 'photos.painting_id', '=', 'painting.id')
                                              -> select('painting.*','photos.id as photoId',
                                                                    'photos.name as photoName',
                                                                    'photos.status as photoStatus')
                                              -> get(),
            'Photos' => Photos::get(),
            'artists' => Artist::get(),
            'colors' => CategoryColor::get(),
            'styles' => CategoryStyle::get(),
            'surfaces' => CategorySurface::get(),

        ];
        return view('admin/painting/painting')->with($data);
    }

    public function addPaintings()
    {
        $data = [
            'artists' => Artist::orderBy('name', 'asc') -> get(),
            'colors' => CategoryColor::get(),
            'styles' => CategoryStyle::get(),
            'surfaces' => CategorySurface::get(),
        ];
        return view('admin/painting/addPainting')->with($data);
    }

    public function addPaintingProcess(Request $request)
    {

        if ($request->has('add-Painting')) {

            $rules = [
                'name' => 'required|string|max:255|regex:^[a-zA-Z]+$^',
                'width' => 'required|numeric|between:18,122',
                'height' => 'required|numeric|between:18,122',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'unique' => 'required|string',
                'description' => 'required|string|max:255',
                // 'created_at' =>'required|date_format:d/m/Y',
                'artist_id' => 'required|numeric',
                'painting_color_category_id' => 'required|numeric',
                'painting_style_category_id' => 'required|numeric',
                'painting_surface_category_id' => 'required|numeric',
            ];

            $data = [
                'name' => $request->get('name'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'price' => $request->get('price'),
                'quantity' => $request->get('quantity'),
                'unique' => $request->get('unique'),
                'description' => $request->get('description'),
                'created_at' =>  Carbon::now('Asia/Ho_Chi_Minh')->toDateString(),
                'artist_id' => $request->get('artist_id'),
                'painting_color_category_id' => $request->get('painting_color_category_id'),
                'painting_style_category_id' => $request->get('painting_style_category_id'),
                'painting_surface_category_id' => $request->get('painting_surface_category_id'),
                'status' => 1
            ];

            $validatedData = $request->validate($rules);
        }
        Painting::create($data);
        return redirect('admin/painting/paintings');
    }
    public function editPainting($query_id)
    {
        $painting = Painting::where('id', $query_id)->first();
        $data = [
            'artists' => Artist::orderBy('name', 'asc')->get(),
            'colors' => CategoryColor::get(),
            'styles' => CategoryStyle::get(),
            'surfaces' => CategorySurface::get(),
        ];
        return view('admin/painting/editPainting')->with(compact('painting', 'data'));
    }

    public function editPaintingProcess(Request $request, $query_id)
    {

        if ($request->has('edit-Painting')) {
            $rules = [
                'name' => 'required|string|max:255|regex:^[a-zA-Z]+$^',
                'width' => 'required|numeric|between:18,122',
                'height' => 'required|numeric|between:18,122 ',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'unique' => 'required|string',
                'description' => 'required|string|max:255',
                'artist_id' => 'required|numeric',
                'painting_color_category_id' => 'required|numeric',
                'painting_style_category_id' => 'required|numeric',
                'painting_surface_category_id' => 'required|numeric',
            ];

            $data = [
                'name' => $request->get('name'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'price' => $request->get('price'),
                'quantity' => $request->get('quantity'),
                'unique' => $request->get('unique'),
                'description' => $request->get('description'),
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')->toDateString(),
                'artist_id' => $request->get('artist_id'),
                'painting_color_category_id' => $request->get('painting_color_category_id'),
                'painting_style_category_id' => $request->get('painting_style_category_id'),
                'painting_surface_category_id' => $request->get('painting_surface_category_id'),
                'status' => $request->get('status'),
            ];

            $validatedData = $request->validate($rules);
        }
        Painting::where('id', $query_id)->update($data);
        return redirect('admin/painting/paintings');
    }

    // public function hidePainting($query_id){
    //     Painting::where('id', $query_id)-> update();
    //     return redirect('admin/painting/paintings');
    // }

    public function deletePainting($query_id)
    {
        $painting = Painting::find($query_id);
        if ($painting) {
            // Update existing column (assuming you have one)

            $painting->status = false;

            // Option 1: Update the model directly
            $painting->save();

            // Option 2: Update using raw SQL (not recommended)
            // DB::update('update paintings set is_active = ? where id = ?', [false, $query_id]);

            return redirect('admin/painting/paintings');
        } else {
            // Handle case where painting is not found
            return redirect('admin/painting/paintings')->with('error', 'Painting not found');
        }
    }
    // end paiting section


    // upload photos section
    public function photos()
    {
        $data = [
            'photos' => DB::table('photos')->join('painting', 'painting.id', '=', 'photos.painting_id')
                                           ->select('photos.*',DB::raw('painting.name as paintingName'),
                                                               DB::raw('painting.id as paintingId'))
                                           ->get(),

        ];
        return view('admin/photos/photos')->with($data);
    }

    public function addPhotos()
    {
        $data = [
            'photos' => Painting::get(),
            'paintings' => Painting::get()
        ];
        return view('admin/photos/addPhotos')->with($data);
    }

    public function addPhotosProcess(Request $request)
    {

        if ($request->has('add-Photos')) {

            $validatedData = $request->validate([
                'painting_id' => 'required|integer|exists:painting,id',
                'status' => 'required|integer|in:0,1',
                // photo condition validate
                'photos' => function ($attribute, $value, $fail) use ($request) {
                    $status = $request->input('status');
                    if ($status == 1) {
                        $rule = 'required|array|min:1|max:1'; // Allow only 1 photo
                    } else {
                        $rule = 'required|array|min:0'; // Allow 0 or more photos
                    }
                    $validator = Validator::make(['photos' => $value], [$attribute => $rule]);
                    if ($validator->fails()) {
                        $fail($validator->errors()->first($attribute));
                    }
                },
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048', // Validate each image
            ]);

            //$data = $validatedData;
            $status = $request->input('status');

            if ($status == 1) {
                // Check for existing main image before updating
                $existingMainImage = Photos::where('painting_id', $request->post('painting_id'))
                    ->where('status', 1)
                    ->first();

                if ($existingMainImage) {
                    // dd($existingMainImage);
                    return redirect('admin/photos/addPhotos')->withErrors(['status' => 'There can only be one main image per painting.']);
                }
            }

            $files = $request->file('photos');
            if ($files !== null && count($files) > 0) {
                foreach ($files as $file) {
                    $fileName = $this->generateFileName($file->getClientOriginalName());
                    $file->move(public_path('admin/images/paintingImages'), $fileName);
                    $data = [
                        'painting_id' => $request->post('painting_id'),
                        'status' => $request->post('status'),
                        'name' => $fileName
                    ];
                    Photos::create($data);
                    // dd($request -> all());
                }
            }
        }

        return redirect('admin/photos/photos');
    }

    public function editPhotos($query_id, $painting_id)
    {
        $photo = Photos::where('id', $query_id)->where('painting_id', $painting_id)->first();
        $data = [
            'paintings' => Painting::get(),
            'photos' => Photos::get(),
        ];
        return view('admin/photos/editPhotos')->with(compact('data', 'photo'));
    }

    public function editPhotosProcess(Request $request, $query_id, $painting_id)
    {
        // Log::info('Request data:', $request->all());
        if ($request->has('edit-Photos')) {
            $validatedData = $request->validate([
                'status' => 'required|integer|in:0,1',
                // photo condition validate
                'photos' => function ($attribute, $value, $fail) use ($request) {
                    $status = $request->input('status');
                    if ($status == 1) {
                        $rule = 'required|array|min:1|max:1'; // Allow only 1 photo
                    } else {
                        $rule = 'required|array|min:0'; // Allow 0 or more photos
                    }
                    $validator = Validator::make(['photos' => $value], [$attribute => $rule]);
                    if ($validator->fails()) {
                        $fail($validator->errors()->first($attribute));
                    }
                },
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048', // Validate each image
            ]);

            $status = $request->input('status');

            if ($status == 1) {
                // Check for existing main image before updating
                $existingMainImage = Photos::where('painting_id', $painting_id)
                    ->where('status', 1)
                    ->first();

                if ($existingMainImage) {
                    return redirect('admin/photos/editPhotos/' . $query_id . '/' . $painting_id)->withErrors(['status' => 'There can only be one main image per painting.']);
                }
            }

            $files =  $request->file('photos');
            if ($files !== null && count($files) > 0) {
                foreach ($files as $file) {
                    $fileName = $this->generateFileName($file->getClientOriginalName());
                    $file->move(public_path('admin/images/paintingImages'), $fileName);
                    $data = [
                        'status' => $request->post('status'),
                        'name' => $fileName
                    ];
                    Photos::where('id', $query_id)->update($data);
                    // dd($request -> all());
                }
            }
        }
        return redirect('admin/photos/photos');
    }

    public function deletePhotos($query_id)
    {
        Photos::where('id', $query_id)->delete();
        return redirect('admin/photos/photos');
    }
    // end Photos section

    // Gallery subject section
    public function gallerySubject()
    {
        $data = [
            'galleries' => Gallery::get(),
        ];
        return view('admin/gallery/gallerySubject')->with($data);
    }

    public function addGallerySubject()
    {
        $data = [
            'galleries' => Gallery::get(),
        ];
        return view('admin/gallery/addGallerySubject')->with($data);
    }

    public function addGallerySubjectProcess(Request $request)
    {

        if ($request->has('add-GallerySubject')) {
            $rule = [
                'name' => 'required|min:6|max:30|regex:/^[^a-zA-Z0-9\s]+$/|unique:gallery,name',
            ];
            $data = [
                'name' => $request->get('subject-name'),
            ];

            // $validator = $request -> validate($rule);

            $validator = Validator::make($data, $rule, [
                'name.regex' => 'Subject name can only contain letters and numbers',
            ]);

            // if ($validator->fails()) {
            //     return redirect('admin/gallery/addGallerySubject')->withErrors($validator); // Redirect with errors
            // }

        }
        Gallery::create($data);
        return redirect('admin/gallery/gallery');
    }

    public function editGallerySubject($query_id)
    {
        $data = [
            'galleries' => Gallery::where('id', $query_id)->get(),
        ];
        return view('admin/gallery/editGallerySubject')->with($data);
    }

    public function editGallerySubjectProcess(Request $request, $query_id)
    {

        if ($request->has('edit-GallerySubject')) {
            $rule = [
                'name' => 'required|min:6|max:30|regex:/^[^a-zA-Z0-9\s]+$/|unique:gallery,name,' . $query_id,
            ];
            $data = [
                'name' => $request->get('subject-name'),
            ];

            $validator = Validator::make($data, $rule, [
                'name.regex' => 'Subject name can only contain letters and numbers',
            ]);
        }
        Gallery::where('id', $query_id)->update($data);
        return redirect('admin/gallery/gallery');
    }


    public function deleteGallerySubject($query_id)
    {
        Gallery::where('id', $query_id)->delete();
        return redirect('admin/gallery/gallery');
    }

    // endGallery subject section



    // Photo gallery section
    public function gallery()
    {
        $data = [
            'photoGalleries' => DB::table('gallery')->join('photo_gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')
                ->select(
                    'photo_gallery.*',
                    DB::raw('gallery.name as galleryName'),
                    DB::raw('gallery.id as galleryId')
                )
                ->get(),
        ];
        return view('admin/gallery/gallery')->with($data);
    }

    public function addPhotoGallery()
    {
        $data = [
            'galleries' => Gallery::get(),
            'photoGalleries' => PhotoGallery::get()
        ];
        return view('admin/gallery/addPhotoGallery')->with($data);
    }

    public function addPhotoGalleryProcess(Request $request)
    {

        if ($request->has('add-PhotoGallery')) {

            $validatedData = $request->validate([
                'gallery_id' => 'required|integer|exists:gallery,id',
                // photo condition validate
                'photos' =>  'required',
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048', // Validate each image
            ]);

            //$data = $validatedData;

            $files = $request->file('photos');
            if ($files !== null && count($files) > 0) {
                foreach ($files as $file) {
                    $fileName = $this->generateFileName($file->getClientOriginalName());
                    $file->move(public_path('admin/images/galleryImages'), $fileName);
                    $data = [
                        'gallery_id' => $request->post('gallery_id'),
                        'name' => $fileName
                    ];
                    PhotoGallery::create($data);
                    // dd($request -> all());
                }
            }
        }

        return redirect('admin/gallery/gallery');
    }

    public function editPhotoGallery($query_id, $gallery_id)
    {
        $photoGallery = PhotoGallery::where('id', $query_id)->where('gallery_id', $gallery_id)->first();
        $data = [
            'galleries' => Gallery::get(),
            'photoGalleries' => PhotoGallery::get()
        ];

        return view('admin/gallery/editPhotoGallery')->with(compact('photoGallery', 'data'));
    }

    public function editPhotoGalleryProcess(Request $request, $query_id, $gallery_id)
    {

        if ($request->has('edit-PhotoGallery')) {
            $validatedData = $request->validate([
                'photos' => function ($attribute, $value, $fail) use ($request) {
                    $status = $request->input('status');
                    if ($status == 1) {
                        $rule = 'required|array|min:1|max:1'; // Allow only 1 photo
                    } else {
                        $rule = 'required|array|min:0'; // Allow 0 or more photos
                    }
                    $validator = Validator::make(['photos' => $value], [$attribute => $rule]);
                    if ($validator->fails()) {
                        $fail($validator->errors()->first($attribute));
                    }
                },
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048', // Validate each image
            ]);

            $files =  $request->file('photos');
            if ($files !== null && count($files) > 0) {
                foreach ($files as $file) {
                    $fileName = $this->generateFileName($file->getClientOriginalName());
                    $file->move(public_path('admin/images/galleryImages'), $fileName);
                    $data = [
                        'name' => $fileName
                    ];
                    PhotoGallery::where('id', $query_id)->update($data);
                    // dd($request -> all());
                }
            }
        }
        return redirect('admin/gallery/gallery');
    }

    public function deletePhotoGallery($query_id)
    {
        PhotoGallery::where('id', $query_id)->delete();
        return redirect('admin/gallery/gallery');
    }
    // Photo gallery section


    // Order section
    public function orders()
    {
        $data = [
            'orders' => DB::table('order')->join('account', 'order.account_id', '=', 'account.id')
                ->select('order.*', DB::raw('account.username as accountName'))
                ->get()
        ];
        return view('admin/order/order')->with($data);
    }


    public function editOrder($query_id)
    {
        $data = [
            'customers' => Account::where('id', $query_id)->get(),
            'orders' => Order::where('id', $query_id)->get()
        ];
        return view('admin/order/editOrder')->with($data);
    }

    public function editOrderProcess(Request $request, $query_id)
    {

        if ($request->has('edit-Order')) {
            $data = [
                'status' => $request->get('status'),
                'update_at' => Carbon::now('Asia/Ho_Chi_Minh')->toDateString(),
            ];
        }
        Order::where('id', $query_id)->update($data);
        return redirect('admin/order/orders');
    }

    public function deleteOrder($query_id)
    {
        Order::where('id', $query_id)->delete();
        return redirect('admin/order/orders');
    }
    // end Order section


    // order Detail section
    public function orderDetails($order_id)
    {
        $data = [
            'orderDetails' => DB::table('orderdetail')->join('painting', 'orderdetail.painting_id', '=', 'painting.id')
                                                      ->join('photos', 'painting.id', '=', 'photos.painting_id')
                                                      ->join('order', 'order.id', '=', 'orderdetail.order_id')
                                                      ->join('account', 'account.id', '=','order.account_id')
                                                      ->select('orderdetail.*', DB::raw('painting.name as paintingName'),
                                                                                DB::raw('photos.name as photoName'),
                                                                                DB::raw('order.account_id as accountId'),
                                                                                )
                                                      ->where('order.id', '=', $order_id)
                                                      ->get()
        ];
        return view('admin/orderDetail/orderDetail') -> with($data);
    }

    public function deleteOrderDetail($query_id)
    {
        orderDetail::where('id', $query_id)->delete();
        return redirect('admin/orderDetail/orderDetail');
    }
    // end Order Detail section


    // review section
    public function reviews()
    {
        $data = [

            'reviews' => DB::table('review')->join('account', 'review.account_id', '=', 'account.id')
                ->join('painting', 'review.painting_id', '=', 'painting.id')
                ->select(
                    'review.*',
                    DB::raw('painting.id as paintingId'),
                    DB::raw('painting.name as paintingName'),
                    DB::raw('account.id as accountId'),
                    DB::raw('account.username as accountName')
                )
                ->get(),

        ];
        return view('admin/review/review')->with($data);
    }

    public function deleteReview($query_id)
    {
        Review::where('id', $query_id)->delete();
        return redirect('admin/review/review');
    }

    // account section
    public function accounts()
    {
        $data = [
            'accounts' => Account::get()
        ];
        return view('admin/account/account')->with($data);
    }

    public function addAccounts()
    {

        $data = [
            'roles' => Role::get(),
            'payments' => Payment::get()
        ];
        return view('admin/account/addAccount')->with($data);
    }
    public function addAccountProcess(Request $request)
    {

        if ($request->has('add-Account')) {
            $rules = [
                'username' => 'required|string|min:6|max:20|unique:account,username|regex:/^[a-zA-Z0-9._]+$/',
                'password' => 'required|string|min:6',
                'email' => 'required|email|unique:account,email',
                'date_of_birth' => 'required|date_format:d/m/Y',
                'phone_number' => 'required|string|regex:^\d+$^',
            ];

            $data = [
                'username' => $request->get('username'),
                'password' => bcrypt($request->get('password')),
                'date_of_birth' => DateTime::createFromFormat('d/m/Y', $request->get('date_of_birth'))->format('Y-m-d'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone_number'),
                'status' => 0,
                'role_id' => $request->get('role_id'),
            ];

            $validateData = $request->validate($rules);
        }
        Account::create($data);
        return redirect('admin/account/accounts');
    }

    public function editAccount($query_id)
    {
        $checkPassword = Account::where('id', $query_id)->first();
        $data = [
            'accounts' => Account::where('id', $query_id)->get(),
            'roles' => Role::where('id', $query_id)->get(),
            'check_password' => $checkPassword
        ];
        return view('admin/account/editAccount')->with($data);
    }

    public function editAccountProcess(Request $request, $query_id)
    {

        if ($request->has('edit-Account')) {
            $rules = [
                'username' => 'required|string|min:6|max:20||regex:/^[a-zA-Z0-9._]+$/|unique:account,username,' . $query_id, // check for unique user
                // 'password' => 'required|string|min:6',
                'email' => 'required|email|unique:account,email,' . $query_id, // check for unique email
                'date_of_birth' => 'required|date_format:d/m/Y|after:1900/01/01|before:2025/01/01',
                'phone_number' => 'required|string|regex:^\d+$^',
            ];

            $data = [
                'username' => $request->get('username'),
                // 'password' => bcrypt($request->get('password')),
                'date_of_birth' => DateTime::createFromFormat('d/m/Y', $request->get('date_of_birth'))->format('Y-m-d'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone_number'),
                'status' => $request->get('status'),
                'role_id' => $request->get('role_id'),
            ];

            $validateData = $request->validate($rules);
        }
        Account::where('id',  $query_id)->update($data);
        return redirect('admin/account/accounts');
    }

    public function editAccountPassword($query_id){


        $checkPassword = Account::where('id', $query_id)->first();
        $data = [
            'accounts' => Account::where('id', $query_id)->get(),
            'check_password' => $checkPassword
        ];
        return view('admin/account/editAccountPassword')->with($data);
    }

    public function editAccountPasswordProcess(Request $request, $query_id){
        if ($request->has('edit-AccountPassword')) {
            $rules = [
                'password' => 'required|string|min:6',
            ];

            $validateData = $request -> validate($rules);
            if($request -> post('password') == $request -> post('re-password')){
                $data = [ 
                    'password' => bcrypt($request->post('password')),
                    
                ];
                Account::where('id',  $query_id) -> update($data);
                return redirect('admin/account/accounts');
            }
            else{
                return redirect('admin/account/editAccountPassword/'.$query_id) -> withErrors(['password', 'Password confirmation field does not match']);
            }
        }
    }

    // delete account from database
    // public function deleteAccount($query_id){
    //     Account::where('id', $query_id)-> delete();
    //     return redirect('admin/account/accounts');
    // }


    // soft deletes the account
    // public function deleteAccount($query_id)
    // {
    //     $painting = Painting::find($query_id);
    //     if ($painting) {
    //         // Update existing column (assuming you have one)

    //         $painting->status = false;

    //         // Option 1: Update the model directly
    //         $painting->save();

    //         // Option 2: Update using raw SQL (not recommended)
    //         // DB::update('update paintings set is_active = ? where id = ?', [false, $query_id]);

    //         return redirect('admin/account/accounts');
    //     } else {
    //         // Handle case where painting is not found
    //         return redirect('admin/account/accounts')->with('error', 'Painting not found');
    //     }
    // }
    // end account section


    // artist section
    public function artists()
    {
        $data = [
            'artists' => Artist::get()
        ];
        return view('admin/artist/artist')->with($data);
    }

    public function addArtist()
    {

        $data = [
            'artists' => Artist::get(),

        ];
        return view('admin/artist/addArtist')->with($data);
    }
    public function addArtistProcess(Request $request)
    {

        if ($request->has('add-Artist')) {
            $rule = $request->validate([
                'name' => 'required|string|min:6|max:20|regex:/^[a-zA-Z0-9._]+$/',
            ]);

            $data = [
                'name' => $request->get('name'),
            ];

            $data = $rule;
        }
        Artist::create($data);
        return redirect('admin/artist/artists');
    }

    public function editArtist($query_id)
    {
        $data = [
            'artists' => Artist::where('id', $query_id)->get(),
        ];
        return view('admin/artist/editArtist')->with($data);
    }

    public function editArtistProcess(Request $request, $query_id)
    {

        if ($request->has('edit-Artist')) {
            $rule = $request->validate([
                'name' => 'required|string|min:6|max:20|regex:/^[a-zA-Z0-9._]+$/',
            ]);

            $data = [
                'name' => $request->get('name'),
            ];

            $data = $rule;
        }
        Artist::where('id',  $query_id)->update($data);
        return redirect('admin/artist/artists');
    }

    public function deleteArtist($query_id)
    {
        Artist::where('id', $query_id)->delete();
        return redirect('admin/artist/artists');
    }
}
