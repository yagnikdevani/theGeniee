<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Merchant extends Authenticatable
{
 /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $guard = 'admin';
    
    protected $table = 'merchants';
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
        'id',
        'fullname',
        'companyName',
        'mobileNumber',
        'isMobileVarified',
        'email',
        'businessFilingStatus',
        'businessType',
        'businessName',
        'businessAddress',
        'pincode',
        'operatingAddress',
        'operatingPincode',
        'appDetail',
        'panNumber',
        'cin',
        'din',
        'gst',
        'document',
        'verification_code',
        'is_verified'
 ];
}
