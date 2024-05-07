<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;

class FolderDisplayController extends Controller
{
    public function index($folder){
        $currentFolder = Folder::getParentFolder($folder);
        if($currentFolder->hasChildren()){
            $files = File::getFolderFiles($folder);
            $folders = $currentFolder->getFolderChildren();
//            dd($folders);
            return view('pages.home', compact('folders', 'files'));
        }
        return view('pages.home', ['currentFolder' => $currentFolder, 'folderEmpty' => true]);

    }
    public function adminFolders($folder){
        $currentFolder = Folder::getParentFolder($folder);
//        dd($currentFolder->hasChildren());
        if($currentFolder->hasChildren()){
            $files = File::getFolderFiles($folder);
            $folders = $currentFolder->getFolderChildren();
            return view('admin.dashboard', compact('folders', 'files'));
        }

        return view('admin.dashboard', ['parentId' => $currentFolder->getFolderId(), 'currentFolder' => $currentFolder, 'folderEmpty' => true]);
    }

}
