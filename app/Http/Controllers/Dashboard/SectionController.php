<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Sections\SectionRepositoryInterface;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    private $SectionRepository;
    public function __construct(SectionRepositoryInterface $SectionRepository)
    {
        $this->SectionRepository = $SectionRepository;
    }
    public function index()
    {
        //
        return $this->SectionRepository->index();
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return $this->SectionRepository->store($request);
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        return $this->SectionRepository->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        return $this->SectionRepository->destroy($request);
    }
}
