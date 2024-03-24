<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'adminlogin';
	
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['role', 'username', 'password', 'email', 'phoneno' ];
}