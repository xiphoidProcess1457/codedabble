<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class CourseModel extends Model{
    protected $table = 'lessons';
    protected $allowedFields = ['title','course', 'body', 'language','code-snippet', 'description','created_at'];
}