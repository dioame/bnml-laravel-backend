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
        $path = $this->getPath($params['file'],$params['file']->getClientOriginalName());

        Directory::create([
            'file_id' => $params['file_id'],
            'path' => $path,
            'file_name' => $params['file']->getClientOriginalName(),
            'description' => $params['description'],
            'name' => $params['name']
        ]);
    }

    public function getPath($file,$filename){
        // $path = $file->store('public/file');
        $filename = date('ymdhis').'-'.$filename;
        $path = $file->storeAs('uploads', $filename, 'public');
        $full_url = Storage::url($path);

        return $full_url;
    }

    public function executePut($id, $params){
        $path = $this->getPath($params['file'],$params['file']->getClientOriginalName());

        // $params['path'] = $path;
        // $params['file_name'] = $params['file']->getClientOriginalName();
        
        // $directory = Directory::where('id',$id)->first();

        // if(!is_null($directory)){
        //     $directory->update($params);
        // }
        // return $directory;     
        Directory::where('id',$id)->update([
            'file_id' => $params['file_id'],
            'path' => $path,
            'file_name' => $params['file']->getClientOriginalName(),
            'description' => $params['description'],
            'name' => $params['name']
        ]);   
    }
}
