<?php

namespace App\Http\Controllers\PortalUsers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\models\PortalUser; //model for all portal users

class PortalUserss extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUsersList()
    {
		$f = PortalUser::all();
		//dd($f);
		
        return view('portalUsers.all-users', compact('f') );
        //return view('home2');
    }
	
	
	/**
     * Show one user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function showOne($id)
    {
	    //additional check in case user directly intentionally navigates to this URL with not-existing ID
	    if (!PortalUser::where('id', $id)->exists()) { 
	        throw new \App\Exceptions\myException('User ' . $id . ' does not exist');
	    }
	   
		//find the user by id
		$userOne = PortalUser::where('id', $id)->first();
		
		//find One users article
		//$userOneArticles = wpress_blog_post::where('wpBlog_author', $id)->get();
		
        return view('portalUsers.showOne', compact('userOne', 'userOneArticles'));
        
    }
}
