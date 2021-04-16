<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class RenderImage extends Controller
{
    public function serve($imageName)
    {
        $path = WRITEPATH.'uploads/'.$imageName;
        if(($image = file_get_contents($path)) === FALSE)
            show_404();

        // choose the right mime type
        $file = new \CodeIgniter\Files\File($path);
      
        $mimeType =  $file->getMimeType();

       

        $this->response
            ->setStatusCode(200)
            ->setContentType($mimeType)
            ->setBody($image)
            ->send();

    }

}