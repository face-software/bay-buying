<?php

namespace App\Http\Controllers;

use App\Buyer_post;
use App\MultipleImage;
use Auth;

use Illuminate\Http\Request;

class BuyerPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    $this->validate($request,[
        //     'category_id'=>'required',
        //     'specification'=>'required|max:500',
        //     'quantity'=>'required',
        //     'target_price_from'=>'required',
        //     'target_price_to'=>'required',
        //     'target_date_from'=>'required',
        //     'target_date_to'=>'required',
        //     'depriciation'=>'required',
        // ]);
        $buyer_post= new Buyer_post();
        $multiple_image = new MultipleImage();
        $buyer_post->category_id= $request->category_id;
        $buyer_post->specification= $request->specification;
        $buyer_post->quantity= $request->quantity;
        $buyer_post->target_date_from= $request->target_date_from;
        $buyer_post->target_date_to= $request->target_date_to;
        $buyer_post->target_price_from= $request->target_price_from;
        $buyer_post->target_price_to= $request->target_price_to;
        $buyer_post->depriciation= $request->depriciation;
        $buyer_post->status= 1;
        $buyer_post->user_id=Auth::user()->id;
        if($request->hasfile('image'))
        {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/demo/', $name);  
                $data[] = $name;  
            }
        }
        
/*        $form= new MultipleImage();
        $form->buyer_posts_id= 1;*/
        $buyer_post->image=json_encode($data);
        $buyer_post->save();
        $buyer_post->id;
        exit();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buyer_post  $buyer_post
     * @return \Illuminate\Http\Response
     */
    public function show(buyer_post $buyer_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buyer_post  $buyer_post
     * @return \Illuminate\Http\Response
     */
    public function edit(buyer_post $buyer_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buyer_post  $buyer_post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buyer_post $buyer_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buyer_post  $buyer_post
     * @return \Illuminate\Http\Response
     */
    public function destroy(buyer_post $buyer_post)
    {
        //
    }
    public function buyerProfile(){
        return view('buyer-profile-feed');
    }
}
