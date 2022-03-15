<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\returnSelf;
use function Symfony\Component\String\s;

class Teacher extends Model
{
    use HasFactory;
    protected static $teacher;
    protected static $image;
    protected static $imagename;
    protected static $imageUrl;
    protected static $directory;


    protected static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imagename = self::$image->getClientOriginalName();
        self::$directory = 'teacher/images/';
        self::$image->move(self::$directory, self::$imagename);
        self::$imageUrl = self::$directory.self::$imagename;
        return self::$imageUrl;
    }
    public static function newTeacher($request, $code){
        self::$teacher              = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->code        = $code;
        self::$teacher->email       = $request->email;
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::getImageUrl($request);
        self::$teacher->save();
    }
    public static function updateUser($request, $id, $code){
        self::$teacher           = Teacher::find($id);
        if (self::$image = $request->file('image')){
            if (file_exists(self::$teacher->image)){
                unlink(self::$teacher->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else{
            self::$imageUrl = self::$teacher->image;
        }
        self::$teacher->name        = $request->name;
        self::$teacher->code        = $code;
        self::$teacher->email       = $request->email;
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::$imageUrl;
        self::$teacher->save();
    }

}
