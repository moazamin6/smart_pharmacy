<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [

        "name", "image", "company_name", "vat_number",
        "email", "phone_number", "address", "city",
        "state", "postal_code", "country", "is_active", "companies"

    ];

    public function product()
    {
        return $this->hasMany('App/Product');

    }

    public function getCompany($ids)
    {
        $company_ids = explode(',', $ids);
        $companies = Brand::select('title')
            ->whereIn('id', $company_ids)
            ->get();
        return ($companies->pluck('title'));
    }
}
