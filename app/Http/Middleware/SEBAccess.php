<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SEBAccess {
    public function handle(Request $request, Closure $next): Response {
        // exec('powershell -WindowStyle Hidden -Command "Start-Process cmd -WindowStyle Hidden -ArgumentList \'/c netsh interface set interface \"Ethernet\" admin=disable\' -Verb RunAs"');

        // exec('powershell -Command "Start-Process cmd -ArgumentList \'/c netsh interface set interface \"Ethernet\" admin=enable\' -Verb RunAs"', $output, $return_var);

        exec('powershell -WindowStyle Hidden -Command "Start-Process cmd -WindowStyle Hidden -ArgumentList \'/c netsh interface set interface \"Ethernet\" admin=enable\' -Verb RunAs"', $output, $return_var);

        print_r($output); // Debug output
        echo "Return Status: " . $return_var;


        if ($return_var === 0) {
            echo "Ethernet disabled successfully.";
        } else {
            echo "Failed to disable Ethernet.";
        }
        
        $config_key_has_header = $request->header('x-safeexambrowser-configkeyhash');
        $request_hash_header = $request->header('x-safeexambrowser-requesthash');

        if (!$config_key_has_header || !$request_hash_header) {
            return response()->view('error', [], 403);
        }

        return $next($request);
    }
}
