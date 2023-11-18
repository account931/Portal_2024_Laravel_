<?php

namespace App\Models;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Database\Eloquent\Model;

class PortalUser extends Model
{
     protected $table = 'kben8_users';
	  
	 //protected $fillable = ['wpBlog_author', 'wpBlog_title', 'wpBlog_text', 'wpBlog_category', 'wpBlog_created_at'];  //????? protected $fillable = ['wpBlog_author', 'wpBlog_text', 'wpBlog_author', 'wpBlog_category',  'updated_at', 'created_at'];
    public $timestamps = false; //to override Error "Unknown Column 'updated_at'" that fires when saving new entry

  
  /**
   * hasOne => get user name from table {users} based on column {wpBlog_author} in table {wpress_blog_post} .
   * hasOne
   */
  public function profile()
  {
	return $this->hasOne('App\Models\PortalUserProfile', 'user_id', 'id')->withDefault(['name' => 'Unknown']);     //$this->belongsTo('App\modelName', 'foreign_key_that_table', 'parent_id_this_table');
  }

}
