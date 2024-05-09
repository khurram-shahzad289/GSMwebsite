<?php

namespace App\Models;

use App\Libraries\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'price', 'bandwidth', 'every', 'totalips'];

    public static function createPackage($request)
    {
        Package::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'bandwidth' => $request['bandwidth'],
            'every' => $request['every'],
            'totalips' => $request['totalips'],
        ]);
    }

    public static function deletePackage($id)
    {
        Package::where('id', $id)->delete();
    }
    public static function updatePackage($id, $request)
    {
        Package::where('id', $id)->update([
            'name' => $request['name'],
            'price' => $request['price'],
            'bandwidth' => $request['bandwidth'],
            'every' => $request['every'],
            'totalips' => $request['totalips'],
        ]);
    }

    public static function getPackage($id)
    {
        return Brand::buildPackage(Package::where('id', $id)->first()->toArray());
    }
    public static function getAllPackages()
    {
        return Brand::buildPackageList(Package::all()->toArray());
    }

}
