<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;


class Province extends Model {

	protected $table = 'provinces';
	public $timestamps = true;

	public function cities()
	{
		return $this->hasMany('City');
	}
}