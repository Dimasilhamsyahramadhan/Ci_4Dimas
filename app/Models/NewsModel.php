<?php 

namespace App\Models;

use CodeIgniter\Model; 

class Newsmodel extends Model
{
    protected $table    ='news';
    protected $primaryKey='id';

    protected $useAutoincrement = true;
    protected $allowedFields = ['title','content','status','author', 'slug'];
}