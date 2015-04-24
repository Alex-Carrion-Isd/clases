<?php if(!defined('BASEPATH')) 
			exit('no se puede acceder al script');

	use Illuminate\Database\Eloquent\Model as Eloquent;

	/**
	* 
	*/
	class Rol extends Eloquent{
		
		protected $Ci;
		public $table = "rol";
		protected $primaryKey = "idrol";
		public $timestamps = false;
		protected $fillable = ['nombre'];
		protected $guarded = ['idrol'];

		function __construct(){
			$this->Ci= & get_instance();
		}

		function Personas(){
			$this->Ci->load->model('Persona');
			return $this->hasMany('Persona', 'idrol');
		}

	}

?>