<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class IdentifyImage extends Controller
{
    public function index(Request $request)
    {
        $pathToFilePython = 'C:\Users\crist\AppData\Local\Programs\Python\Python39\python.exe';
        
        
        $scritpFile = 'PythonCode\main.py';


        $process = new Process(["python", $scritpFile], env: [
            'SYSTEMROOT' => getenv('SYSTEMROOT'),
            'PATH' => getenv("PATH")
          ]);
          
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}
