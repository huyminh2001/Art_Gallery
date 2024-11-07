<?php

namespace App\Http\Controllers\User;

use App\Models\Painting;
use App\Models\Cart;
use App\Models\Review;
use App\Models\CategoryStyle;
use App\Models\CategorySurface;
use App\Models\CategoryColor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaintingsController extends Controller
{
    public function paintings(Request $request)
    {
        $param_count = count($_GET);
        $allParams = $request->except('filter'); // test
        $styleParams = [];
        $surfaceParams = [];
        $colorParams = [];
        foreach ($allParams as $key => $value) {
            if (stripos($key, 'style') !== false) {
                $styleParams[$key] = $value;
            } else if (stripos($key, 'surface') !== false) {
                $surfaceParams[$key] = $value;
            } else if (stripos($key, 'color') !== false) {
                $colorParams[$key] = $value;
            }
        }
        $min_price = $request->get('min_price');
        $max_price = $request->get('max_price');

        $min_width = $request->get('min_width');
        $max_width = $request->get('max_width');

        $min_height = $request->get('min_height');
        $max_height = $request->get('max_height');


        // $retrievedData = Painting::query();
        $retrievedData = DB::table('painting')-> rightJoin('photos', 'photos.painting_id', '=', 'painting.id')
                                              -> select('painting.*', 'photos.name as photoName','photos.status as photoStatus')
                                              -> where('photos.status', 1);
        if ($request->has('filter') && $param_count > 1) {
            $retrievedData = $styleParams ? $retrievedData->whereIn('painting_style_category_id', $styleParams) : $retrievedData;
            $retrievedData = $surfaceParams ? $retrievedData->whereIn('painting_surface_category_id', $surfaceParams) : $retrievedData;
            $retrievedData = $colorParams ? $retrievedData->whereIn('painting_color_category_id', $colorParams) : $retrievedData;

            $retrievedData = $min_price ? $retrievedData->where('price', '>=', $min_price) : $retrievedData;
            $retrievedData = $max_price ? $retrievedData->where('price', '<=', $max_price) : $retrievedData;

            $retrievedData = $min_width ? $retrievedData->where('width', '>=', $min_width) : $retrievedData;
            $retrievedData = $max_width ? $retrievedData->where('width', '<=', $max_width) : $retrievedData;

            $retrievedData = $min_height ? $retrievedData->where('height', '>=', $min_height) : $retrievedData;
            $retrievedData = $max_height ? $retrievedData->where('height', '<=', $max_height) : $retrievedData;

            $retrievedData = $retrievedData->get();
        } else if ($request->has('search')) {
            $retrievedData = $retrievedData->where('painting.name', 'LIKE', '%' . $request->get('search') . '%')->get();
        } else {
            $retrievedData = $retrievedData->get();
        }


        $data = [
            'request' => $request,
            'title' => "Paintings",
            'active_menu' => 'paintings',
            // 'paintings' => Painting::get(),
            'style_categories' => CategoryStyle::get(),
            'surface_categories' => CategorySurface::get(),
            'color_categories' => CategoryColor::get(),
            'param_count' => $param_count,
            // 'paintings' => ($request->has('filter') && $param_count > 1) ? Painting::whereIn('painting_style_category_id', $styleParams)->whereIn('painting_surface_category_id', $surfaceParams)->whereIn('painting_color_category_id', $colorParams)->get() // if filter
            //     : ($request->has('search') ? Painting::where('name', 'LIKE', '%' . $request->get('search') . '%')->get() // else if search
            //         : Painting::get()), //else

            'paintings' => $retrievedData,

            // test
            'testrequest_style' => $request->get('style'),
            'testrequest_surface' => $request->get('surface'),
            'testrequest_color' => $request->get('color'),
            'allParams' => $allParams,
            'styleParams' => $styleParams,
            'surfaceParams' => $surfaceParams,
            'colorParams' => $colorParams,
            'countStyle' => count(Painting::whereIn('painting_style_category_id', $styleParams)->get()),
            'countSurface' => count(Painting::whereIn('painting_surface_category_id', $surfaceParams)->get()),
            'countColor' => count(Painting::whereIn('painting_color_category_id', $colorParams)->get()),
            'countFilter' => count($retrievedData)
        ];

        return view('user/paintings/paintings')->with($data);
    }

    public function painting_details(Request $request, $painting_id)
    {
        $data = [
            'title' => "Painting Details",
            'active_menu' => 'paintings',
            'request' => $request,
            // 'paintings' => Painting::where('id', $painting_id)->get(),
            'paintings' => DB::table('painting')->where('painting.id', $painting_id)
                                                ->rightJoin('painting_style_category','painting_style_category.id', '=', 'painting.painting_style_category_id')
                                                ->rightJoin('painting_surface_category','painting_surface_category.id', '=', 'painting.painting_surface_category_id')
                                                ->rightJoin('painting_color_category','painting_color_category.id', '=', 'painting.painting_color_category_id')
                                                ->rightJoin('artist', 'artist.id', '=', 'painting.artist_id')
                                                ->rightJoin('photos', 'photos.painting_id', '=', 'painting.id')
                                                ->select('painting.*', 'painting_style_category.name as styleName', 'painting_surface_category.name as surfaceName', 'painting_color_category.name as colorName', 'artist.name as artistName','photos.name as photoName')
                                                ->get(),

            'painting_reviews' => DB::table('painting')->where('painting.id', $painting_id)
                                                        ->rightJoin('review', 'review.painting_id', '=', 'painting.id')
                                                        ->rightJoin('account', 'account.id', '=', 'review.account_id')
                                                        ->select('painting.*', 'review.content as reviewContent', 'review.rating as reviewRating', 'account.username as accountName')
                                                        ->get(),

            'count_painting_reviews' => count(DB::table('painting') ->where('painting.id', $painting_id)
                                                                    ->rightJoin('review', 'review.painting_id', '=', 'painting.id')
                                                                    ->rightJoin('account', 'account.id', '=', 'review.account_id')
                                                                    ->select('painting.*', 'review.content as reviewContent','review.rating as reviewRating', 'account.username as accountName')
                                                                    ->get())
        ];

        session()->put('temp_painting_id', $painting_id);

        return view('user/paintings/painting_details')->with($data);
    }

    public function proceed_addtocart(Request $request)
    {
        $userid = $request->session()->get('userid');
        $quantity = $request->get('num_painting');
        $painting_id = session()->get('temp_painting_id');

        $cart = Cart::where('account_id', $userid)->get();

        $exists = false; // Flag to check if cart item exists

        foreach ($cart as $cartItem) {
          if ($cartItem->painting_id == $painting_id) {
            $exists = true;
            break;
          }
        }

        // Check if product already exists in cart
        if ($exists) {
            foreach ($cart as $cartItem) {
                if ($cartItem->painting_id == $painting_id) {
                  $cartItem->quantity += $quantity;
                  $cartItem->save();
                  break;
                }
              }
            
        } else {
            $cartItem = new Cart;
            $cartItem->account_id = $userid;
            $cartItem->painting_id = $painting_id;
            $cartItem->status = 0;
            $cartItem->quantity = $quantity; // [EDIT-DONE] doi cartItem->status thanh cartItem->quantity sau khi edit db
            $cartItem->save();
        }

        session()->forget('temp_painting_id');

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function proceed_submit_review(Request $request) {
        $userid = $request->session()->get('userid');
        $painting_id = session()->get('temp_painting_id');

        $review = Review::where('painting_id', $painting_id)->get();
        
        $reviewItem = new Review;
        $reviewItem->account_id = $userid;
        $reviewItem->painting_id = $painting_id;
        $reviewItem->content = $request->get('review_content');
        $reviewItem->rating = $request->get('rating');
        $reviewItem->created_at = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $reviewItem->save();

        session()->forget('temp_painting_id');

        return redirect()->back()->with('success', 'Review is added!');
    }
}
