public function run() 
{
$tag = new \App\Tag(); 
$tag->name = ’Tutorial’; 
$tag->save();
$tag = new \App\Tag();
$tag ->name = ’Industry News ’; 
$tag->save();
}
 