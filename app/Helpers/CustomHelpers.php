<?php

/**
 * Default date time format
 */
use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

if (!function_exists('dd_format')) {
    function dd_format($value, $format = 'd-m-Y h:i a')
    {
        return date($format, strtotime($value));
    }
    if (!function_exists('tableRowSrNo')) {
        function tableRowSrNo($index, $paginator)
        {
            return $index + 1 + (($paginator->resolveCurrentPage() - 1) * $paginator->perPage());
        }
    }
}
if (!function_exists('str_limit')) {
    function str_limit($title, $value = 21){
        return \Illuminate\Support\Str::limit($title, $value, '...');
    }
}

function saveFile($file,$destinationPath){
    $filename =  date('Ymd-his'). "." .uniqid().".". $file->clientExtension();
    $coverImg=Image::make($file->getRealPath())->resize(600, null, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    });
    $coverImg->save($destinationPath . $filename, 85);
    return $filename;
}

if (!function_exists('uploadFile')) {
    function uploadFile($file, $location, $quality = 85)
    {
        $fileWithExt = $file;
        $extension = $fileWithExt->clientExtension();
        $filename =  date('Ymd-his') . "." . uniqid() . "." . $fileWithExt->clientExtension();
        $destinationPath = storage_path('app/public/' . $location . '/');
        if (in_array($extension, ['png', 'jpg', 'jpeg'])) {
            $coverImg = Image::make($fileWithExt->getRealPath())->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $coverImg->orientate();
            $coverImg->save($destinationPath . $filename, $quality);
            $extension = 'image';
        } else {
            Storage::disk('public')->put($location . '/' . $filename,  file_get_contents($fileWithExt));
        }
        return ['filename' => $filename, 'type' => $extension];
    }
}

if (!function_exists('tableRowSrNo')) {

    function tableRowSrNo($index, $paginator)
    {
        return $index + 1 + (($paginator->currentPage() - 1) * $paginator->perPage());
        // return $index + 1 + (($paginator->resolveCurrentPage() - 1) * $paginator->perPage());
    }
}
