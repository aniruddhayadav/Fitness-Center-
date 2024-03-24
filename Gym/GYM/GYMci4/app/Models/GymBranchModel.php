<?php 
namespace App\Models;
use CodeIgniter\Model;

class GymBranchModel extends Model
{
    protected $table = 'gymlocation';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['branchname', 'ownername', 'branchaddress', 'email', 'landline', 'phoneno', 'city', 'pincode', 'state', 'country'];
}