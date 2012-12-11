<?php

class Cilyuser
{
	public static function load_schools () {

		$results = DB::table('schools')->get(array(
			'name',
			'highCollege',
			'locLat',
			'locLng',
			'city'
			));

		return $results;
	}

	public static function find_school_given_coor($lat, $lng) {
		$results=Cilyuser::load_schools();
		//dd($results);
		foreach ($results as $result)
		{
			if($result->loclat==$lat && $result->loclng==$lng)
			{
				//dd($result->name);
				return $result->name;

			}
		}
		
	}

		public static function find_school_given_name($sname) {
			$none='none';
	$posts = DB::table('schools')
		 ->where('name', '=', $sname);
		 if(sizeof($posts)==0) return $none;
			$results=$posts->get(array(
				'name',
				'locLat',
				'locLng',
				'highCollege'
			));
		//dd($results);
			return $results;
	}

	public static function find_city_given_name($nm) {
		$results=Cilyuser::load_schools();
		//dd($results);
		foreach ($results as $result)
		{
			if($result->name==$nm)
			{
				return  $result->city;

			}
		}
		
		
	}

	public static function add_school($nm, $hc, $la, $ln, $ct) {

		$results=Cilyuser::load_schools();
		//dd($results);
		foreach($results as $result)
		{
			if($result->name===$nm) {return $nm . " already exists in our database!"; }
		}
			
			DB::table('schools')->insert(array(
			'name' => $nm,
			'highCollege' => $hc,
			'locLat' => $la,
			'locLng' => $ln,
			'city' => $ct
			));
			
			return "You have successfully added " . $nm . " to our database!";
		
		
	}

	public static function get_Posts($sch) {
		$posts = DB::table('compliments')
		 ->where('name', '=', $sch)
		 ->order_by('post_time', 'desc');
         
		$results=$posts->get(array(
				'name',
				'to',
				'message',
				'sincerely',
				'post_time',
				'num_likes',
				'post_id'
			));
		//dd($results);
		return $posts;

	}

	public static function load_mostLikedPosts() {
		$posts = DB::table('compliments')
		 ->order_by('num_likes', 'desc');
 		$results=$posts->get(array(
		'name',
		'to',
		'message',
		'sincerely',
		'post_time',
		'num_likes',
		'post_id'
	));
		//dd($results);
		return $results;
	}

	public static function validate($input) {

		$rules=array(
			'to' => 'required',
			'message' => 'required',
			'sincerely' => 'required',
			'school' => 'required'
			);		
		$validation = Validator::make($input, $rules);
		return $validation;
	}

	public static function addPost($school,$to, $mgs, $sn) {
		DB::table('compliments')->insert(array(
				'name' => $school,
				'to' => $to,
				'message' => $mgs,
				'sincerely' => $sn
			));
	}

	public static function updateLikes($id)
	{
		$posts = DB::table('compliments')
		 ->where('post_id', '=', $id);
		 $results=$posts->get(array(
				'name',
				'to',
				'message',
				'sincerely',
				'post_time',
				'num_likes',
				'post_id'
			));
		 //dd($results);
		 $name=$results[0]->name;
		 $to=$results[0]->to;
		 $message=$results[0]->message;
		 $sincerely=$results[0]->sincerely;
		 $post_time= $results[0]->post_time;
		$num_likes=$results[0]->num_likes+1;
		 $post_id=$results[0]->post_id;
		 $updated= array(
		 		'name' => $name,
				'to' => $to,
				'message' => $message,
				'sincerely' => $sincerely,
				'post_time' => $post_time,
				'num_likes' => $num_likes,
				'post_id' => $post_id
		 	);
		 $affected=DB::table('compliments')
		 ->where('post_id', '=', $id)
		 ->update($updated);

		 return $num_likes;

	}

}