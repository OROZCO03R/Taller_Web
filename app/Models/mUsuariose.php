<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuariose extends Model{
	protected $table = 'registro_docentes';
	protected $primarykey ='id_doc';

	protected $useAutoIncremet=true;

	protected $returnType ='array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['nombre', 'apellidos','correo','contrasena','carrera','telefono','domicilio','residencia'];

	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;	
	}	
?>