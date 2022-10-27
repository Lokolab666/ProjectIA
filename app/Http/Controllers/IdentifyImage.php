<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class IdentifyImage extends Controller
{
    public function index(Request $request)
    {
        $scriptPythonEnvi = 'C:/Users/crist/AppData/Local/Microsoft/WindowsApps/python3.10.exe';
        $scritpFile = '"c:/Users/crist/Documentos/UPTC/8 SEMESTRE/INTELIGENCIA ARTIFICIAL/API IA/ProjectIAInternet/public/Algorithm.py"';
        $process = new Process("& $scriptPythonEnvi $scritpFile");
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}
