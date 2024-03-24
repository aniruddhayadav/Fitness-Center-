<?php 
namespace App\Models;
use CodeIgniter\Model;

class GymMasterModel extends Model
{
    protected $table = 'gymsetting';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['gymname', 'ownername', 'landline', 'phoneno', 'emailone', 'emailtwo', 'billingaddress', 'billingcity', 'billingpincode', 'billingstate', 'billingcountry', 'shippingaddress', 'shippingcity', 'shippingpincode', 'shippingstate', 'shippingcountry', 'gstno', 'gstimage', 'regno', 'regimage', 'panno', 'panimage', 'award', 'awardimage'];
}