<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Request $request)
    {
        $p = $request->query('p', 'defaultValue'); 
        if ($p=='bukber') {
            $variables = [
                'p' => $p,
                'big' => "bukber.jpg",
                'title' => "Banner Bukber Bem 2019",
                'desc' => "Desain banner bukber bem yang dilaksanakan pada 2018.",
                'tags' => 'graphic design, banner',
                'date' => '2019'
            ];
        } else if ($p=='portofolio') {
            $variables = [
                'p' => $p,
                'big' => "portofolio.png",
                'title' => "MY PORTOFOLIO SITE",
                'desc' => "This project using framework laravel, node.js and mysql.",
                'tags' => 'laravel, web development',
                'date' => '2024'
            ];
        } else if ($p=='ppdb') {
            $variables = [
                'p' => $p,
                'big' => "ppdb.png",
                'title' => "SCHOOL REGISTRY",
                'desc' => "This project is using PHP and mysql, build from ground up.",
                'tags' => 'php, web development',
                'date' => '2022',
                'demo' => 'https://alwiabdullah.kesug.com/demo/ppdb/'
            ];
        } else if ($p=='kelulusan') {
            $variables = [
                'p' => $p,
                'big' => "kelulusan.png",
                'title' => "GRADUATION INFO",
                'desc' => "This project is using PHP and mysql, build from ground up.",
                'tags' => 'php, web development',
                'date' => '2023'
            ];
        } else if ($p=='jarpoel') {
            $variables = [
                'p' => $p,
                'big' => "jarpoel.png",
                'title' => "Jarpoel",
                'desc' => "Design for cloth, jarpoel or jarang pulang.",
                'tags' => 'graphic design, clothing',
                'date' => '2020'
            ];
        } else if ($p=='hifest') {
            $variables = [
                'p' => $p,
                'big' => "hifest.png",
                'title' => "HI Fest logo",
                'desc' => "HI fest logo for himti festifal 2019.",
                'tags' => 'graphic design, logo',
                'date' => '2019'
            ];
        } else {
            $variables = [
                'p' => 'error',
                'big' => "error.jpg",
                'title' => "project not found",
                'desc' => "project not found.",
                'tags' => 'project not found',
                'date' => 'project not found'
            ];
        }
        
        
        return view('project-page', $variables);
    }

}
