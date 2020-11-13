<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $fillable = ["name", "phone", "dateOfBirth", "cep", "address", "neighborhood", "referencePoint", "mail"];
}
