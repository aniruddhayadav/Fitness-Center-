<?php 
namespace App\Models;
use CodeIgniter\Model;

class GymCustomerModel extends Model
{
    protected $table = 'customer';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['customername', 'customerimage', 'date', 'gender', 'phoneno', 'aadharno', 'email', 'address', 'occupation', 'city', 'branchname', 'instructorname', 'programtime', 'joindate', 'place', 'member', 'programname', 'package', 'reference', 'status' , 'bloodgroup', 'height', 'weight', 'heart', 'asthma', 'gout', 'cardio', 'pressure', 'familyhx', 'dizziness', 'arthritis', 'infection', 'blackouts', 'diabetes', 'fainting', 'fits', 'other', 'otherdesc', 'knees', 'lowerback', 'neck', 'hips', 'flexibility', 'others', 'yes', 'no', 'weeks', 'physical', 'surgery', 'smoke', 'medication', 'totalamount', 'paidamount', 'pendingamount'];
}