<?php

namespace App\Utils;

class PythonExecutor
{
    public static function createMap($image, $output, $zoom)
    {
        $command = escapeshellcmd("python C:\\Users\\franc\\Desktop\\HELMO\\STAGE\\Welcome_sprint_projects\\tiles_maker\\main.py")
            . " " . escapeshellarg($image)
            . " " . escapeshellarg($output)
            . " " . escapeshellarg($zoom);

        $output = shell_exec($command);

        // Vous pouvez également gérer la sortie ici si nécessaire
        if ($output === null) {
            throw new \RuntimeException("Failed to execute the Python script.");
        }

        return $output;
    }
}
