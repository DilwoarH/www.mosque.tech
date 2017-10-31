<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [ "services" => $this->getServices() ];
        return view('homepage', $data);
    }

    public function getServices()
    {
        $data = ["cards" => [
            [
                'logo' => asset('images/trello.png'),
                'title' => 'Trello',
                'subtitle' => 'Task Management Application',
                'description' => "Trello is the easy, free, flexible, and visual way to manage your projects and organize anything, trusted by millions of people from all over the world.",
                'link' => ['href' => "https://www.trello.com", 'label' => "Go to Trello"],
                'additional_link' => ['href' => "https://www.trello.com/pricing", 'label' => "Pricing"],
                'help_link' => ['href' => "http://help.trello.com/", 'label' => "Help"],
            ],
            [
                'logo' => asset('images/google-docs.png'),
                'title' => 'Google Docs',
                'subtitle' => 'Word Document Processor',
                'description' => "Google Docs brings your documents to life with smart editing and styling tools to help you easily format text and paragraphs. Choose from hundreds of fonts, add links, images, and drawings. All for free.",
                'link' => ['href' => "https://docs.google.com", 'label' => "Go to Google Docs"],
                'additional_link' => ['href' => "https://www.google.com/docs/about/", 'label' => "About Google Docs"],
                'help_link' => ['href' => "https://gsuite.google.com/learning-center/products/docs/", 'label' => "Help"],
            ],
        ]];

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
