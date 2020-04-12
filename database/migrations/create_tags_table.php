Schema::create(’tags’, function (Blueprint $table) { 
$table->increments(’id’);
$table->timestamps();
$table ->string(’name ’); 
});