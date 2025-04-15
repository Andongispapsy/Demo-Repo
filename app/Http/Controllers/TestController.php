<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {
    public function testBEK(Request $request) {
        // $requestBEK = $request->header('x-safeexambrowser-configkeyhash');
        // $expectedBEK = '3fd90698a85be3159e1d64c6993dd03e0dc072b74f372ed529fd655af72589c2';

        // dd($request->headers->all());

        // if (hash_equals($expectedBEK, $requestBEK)) {
        //     dd("Header is present");
        // } else {
        //     dd("Header is missing");
        // }

        $interfaceName = "Ethernet";
        $psCommand = "Start-Process powershell -ArgumentList '-NoProfile -ExecutionPolicy Bypass -Command \"netsh interface set interface $interfaceName admin=disable\"' -Verb RunAs";

        exec($psCommand, $output, $return_var);

        if ($return_var === 0) {
            return response()->json(['message' => 'Ethernet disabled successfully']);
        } else {
            return response()->json(['error' => 'Failed to disable Ethernet'], 500);
        }
    }
}
