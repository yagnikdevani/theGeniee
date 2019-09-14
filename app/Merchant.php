<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'merchant';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    protected $fillable = [
        'merchantId','fullname', 'companyName', 'mobileNumber','isMobileVarified',
        'email','businessFilingStatus','businessType',
        'businessName','businessAddress','pincode',
        'operatingAddress','operatingPincode','appDetail',
        'panNumber','cin','din','gst','document'
        
 ];
}
