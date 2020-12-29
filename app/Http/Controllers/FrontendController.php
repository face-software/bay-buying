<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view("backend.pages.allPages.homePage");
    }
    /*
		@Buyer Registration show form
    */
	public function buyerForm()
	{
		return view('backend.pages.auth.buyerForm'); 
	}
	/*
		@Buying House Registration show form
    */
	public function buyingHouseForm()
	{
		return view('backend.pages.auth.buyingHouse');
	}
	/*
		@Supplier Registration show form
    */
	public function supplierForm()
	{
		return view('backend.pages.auth.supplierForm');
	}
	/*
		@Manufacturer Registration show form
    */
	public function manufacturerForm()
	{
		return view('backend.pages.auth.manufacturerForm');
	}
}
