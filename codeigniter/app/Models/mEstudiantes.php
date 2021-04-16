<?php
namespace App\Models;
use CodeIgniter\Model;
class mEstudiantes extends Model{
    protected $table = 'estudiantes';
    protected $primaryKey = 'NoControl';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['NoControl','Nombre','Apellidos','Grado','Grupo','Carrera'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function getAllE()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM estudiantes");
        $result = $query->getResult();
        return $result;
    }
}
?>