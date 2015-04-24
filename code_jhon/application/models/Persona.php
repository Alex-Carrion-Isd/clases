<?php if(!defined('BASEPATH')) 
			exit('no se puede acceder al script');

	use Illuminate\Database\Eloquent\Model as Eloquent;

	/**
	* 
	*/
	class Persona extends Eloquent{
		
		protected $Ci;
		public $table = "persona";
		protected $primaryKey = "idpersona";
		public $timestamps = false;
		protected $fillable = ['nombre', 'apellido_paterno', 'correo', 'idrol' ];
		protected $guarded = ['idpersona'];

		function __construct(){
			$this->Ci= & get_instance();
		}

		public function Cuenta(){
			$this->Ci->load->model('Cuenta');
			return $this->belongsTo('Cuenta', 'idpersona');
		}

		public function Rol(){
			$this->Ci->load->model('Rol');
			return $this->belongsTo('Rol', 'idrol');
		}

	}

?>