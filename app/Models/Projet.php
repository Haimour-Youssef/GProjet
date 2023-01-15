<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Privacy',
        'attachement_id',
        'proprietaire_id',
        'Status',
        'chef_id',
        'Domaine',
        'DateDemarrage',
        'DateLivraison',
        'Description'
    ];

    /**
     * @return mixed
     */
    public function getFillable()
    {
        return $this->fillable;
    }

    /**
     * @param mixed $fillable 
     * @return self
     */
    public function setFillable($fillable): self
    {
        $this->fillable = $fillable;
        return $this;
    }
}
