<?php
namespace App\Models;
use CodeIgniter\Model;
class mEstudiantes extends Model{
    protected $table = 'estudiantes';
    protected $primaryKey = 'NoControl';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['NoControl','Nombre','Apellidos','Grado','Grupo','Carrera'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
?>