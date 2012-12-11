<?php
//require '../libraries/twitter.php';
class Cily_Controller extends Base_Controller {

	public function action_index() {

		$sch = Cilyuser::load_schools();
		$topposts = Cilyuser::load_mostLikedPosts();
		$data= array(
				//'tweets' => $twitter_search,
				'json' => json_encode($sch),
				'posts' => $topposts
			);
		//dd($data);
		return View:: make('home.cily', $data);
	}
	
	public function action_load() {
		
		return View:: make('home.cily');
	}

	public function action_twitter()
	{
		$twitter = new Twitter();
		$tts = $twitter->getTweetsFromJSON('complimentily');
		$data = array(
				'tweets' => $tts
			);
		//dd($tts);
		return View::make('tweetsloaded', $data);
	}

	public function action_findme() {
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		$results=Cilyuser::find_school_given_coor($lat, $lng);
		//dd($results);
		echo $results;
	}

		public function action_findmyschool() {
		$sname=$_POST['sname'];
		$results=Cilyuser::find_school_given_name($sname);
		//dd(sizeof($results));
		if (sizeof($results)==0){
		}
		else{
		$foundyourschool= array(
				'name' => $results[0]->name,
				'lat' => $results[0]->loclat,
				'lng' => $results[0]->loclng,
				'type' => $results[0]->highcollege
			);
		$foundyourschool=json_encode($foundyourschool);
		echo $foundyourschool;
		}
		}

	public function action_results() {
		$school_name=Input::get('search-term');
		$school_type=Input::get('schooltype');
		$lat=Input::get('lat');
		$lng=Input::get('lng');

		$data = array(
				'school' => $school_name,
				'school_type' => $school_type,
				'lat' => $lat,
				'lng' => $lng,
			);
		$results = array(
				'json' => json_encode($data)
			);
		return $results;
		//Cilyuser::add_school($school_name, $stype, $lat, $lng);
	}

	public function action_schoolfeed() {
		$school_name=Input::get('school');
		$city=Cilyuser::find_city_given_name($school_name);
		//dd($city);
		$posts=Cilyuser::get_Posts($school_name);
		
		$results=$posts->get(array(
				'to',
				'message',
				'sincerely',
				'post_time',
				'num_likes',
				'post_id'
			));
		//dd($results);
		$data=array(
			'school_name' => $school_name,
			'posts' => $results,
			);
		
		//dd($data);

		
		//dd($name);
		return View::make('schoolfeed', $data);
	}

	public function action_add() {
		$returnstring="";
		$result=array(
			'message'=> $returnstring);
		return View::make('add', $result);
	}

	public function action_added() { //for school

		$school_name=Input::get('search-term');
		$school_type=Input::get('schooltype');
		$lat=Input::get('lat');
		$lng=Input::get('lng');
		$city=Input::get('ct');

		$message=Cilyuser::add_school($school_name, $school_type, $lat, $lng, $city);
		$result=array(
			'message' => $message);
		return View::make('add', $result);
	}

	public function action_addpost(){
		$to=Input::get('to');
		$msg=Input::get('message');
		$sn= Input::get('sincerely');
		$school=Input::get('school');
		
		$input=array(
			'to' => $to,
			'message' => $msg,
			'sincerely' => $sn,
			'school' => $school);

		$validate=Cilyuser::validate($input);
		if ($validate->fails())
		{
		   return Redirect::to('../cily/schoolfeed?school='.$school)
			->with_input()
			->with_errors($validate);
		}
		
		else {
			/*$message=*/Cilyuser::addPost($school,$to, $msg, $sn);
			return Redirect::to('../cily/schoolfeed?school='.$school)
			->with('success', 'You have successfuly sent a compliment!'); //like view class!! wah im bored
		}
	}

	public function action_like() {
		$id=$_POST['id'];
		//dd($id);
		$new_num=Cilyuser::updateLikes($id);
		echo $new_num;
	}
	public function action_about() {


		//gather watever data you need for this page

		return View::make('about');
	}

		public function action_administer() {


		//gather watever data you need for this page

		return View::make('administer');
	}
	// $username = Input::get('username');
	// 	$realname = Input::get('realname');
	// 	Twitteruser::save_user($username, $realname);
	// public function action_fetch() {
	// 	$twitter = new Twitter();
	// 	$tweets = $twitter->getTweetsFromJSON('complimentily');
	// 	echo '<ul>';
	// 	foreach($tweets as $tweet) {
	// 		echo '<li>';
	// 		echo $tweet->text;
	// 		echo '</li>';
	// 	}
	// 	echo '</ul>';
	// 	}

};