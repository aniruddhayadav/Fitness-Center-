<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProgramMasterModel extends Model
{
    protected $table = 'program';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['programname', 'fee', 'weightgain', 'weightloss', 'personal', 'cardio', 'cycling', 'lifting', 'programdescription'];
}