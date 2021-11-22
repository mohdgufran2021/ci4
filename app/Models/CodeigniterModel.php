<?php

namespace App\Models;

use CodeIgniter\Model;

class CodeigniterModel extends Model
{
    protected $table = 'members';

    protected $allowedFields = ['name', 'address', 'contact', 'email'];
}
