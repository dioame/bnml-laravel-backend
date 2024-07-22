<?php

namespace App\Services\V1\Staff\Directory;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Directory;
use Illuminate\Support\Facades\Storage;


class DirectoryService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Directory::orderBy('created_at', 'desc')->get(); 
    }

    public function executeId($id){
        return Directory::where('id', $id)->get();
    }

    public function executePost($params)
    {
        $path = $this->getPath($params['file']);


        Directory::create([
            'file_id' => $params['file_id'],
            'path' => $path
        ]);
    }

    public function getPath($file){
        $name = $file->getClientOriginalName();
        $path = $file->store('public/file');
        $full_url = asset(Storage::url($path));

        return $full_url;
    }

    public function executePut($id, $params){
        $path = $this->getPath($params['file']);
        $params['path'] = $path;

        
        $directory = Directory::where('id',$id)->first();

        if(!is_null($directory)){
            $directory->update($params);
            $directory->save();
            
        }
        return $directory;        
    }
}
