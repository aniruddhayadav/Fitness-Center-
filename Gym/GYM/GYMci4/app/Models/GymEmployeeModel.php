<?php 
namespace App\Models;
use CodeIgniter\Model;

class GymEmployeeModel extends Model
{
    protected $table = 'gymstaff';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['role', 'password', 'employeeno', 'employeename', 'date', 'gender', 'phoneno', 'email', 'place', 'bloodgroup', 'height', 'weight', 'branchname', 'time', 'designation', 'joindate', 'status', 'trainfor', 'aadharno', 'aadharimage', 'panno', 'panimage', 'employeeimage', 'bankname', 'accountno', 'accounttype', 'ifsc'];
}