<?php 
namespace App\Models;
use CodeIgniter\Model;

class MachineModel extends Model
{
    protected $table = 'machine';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['machinename', 'machineno', 'brand', 'branchname', 'purchasecost', 'date', 'machinetype', 'purchasetype', 'purchaseno', 'insurance', 'insuranceno', 'insurancename', 'purchasedate', 'renewdate', 'depreciation', 'subname', 'quantity', 'cost'];
}