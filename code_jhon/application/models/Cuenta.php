<?php if(!defined('BASEPATH')) 
			exit('no se puede acceder al script');

	use Illuminate\Database\Eloquent\Model as Eloquent;
	/**
	* 
	*/
	class Cuenta extends Eloquent{
		
		protected $Ci;
		protected $table = 'cuenta';
		protected $primaryKey = 'idcuenta';
		public $timestamps = true;
		protected $fillable = ['usuario', 'clave', 'estado', 'idpersona'];
		protected $guarded = ['idcuenta'];

		public function __construct(){
			$this->Ci= & get_instance();
		}

		public function Persona(){
			$this->Ci->load->model('Persona');
			return $this->hasOne('Persona', 'idpersona');
		}
	}

?>