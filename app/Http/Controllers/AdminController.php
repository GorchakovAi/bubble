<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\FinishedDesign;
use App\PageInfo;
use App\AboutCompany;
use App\CatalogDesign;
use App\Gallery;
use App\Partners;

use App\Http\Requests\UpdateFinishedDesignRequest;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('admin');
    }

    public function postUpdatePageInfo()
    {
        return "123";
    }


    public function postUpdateAboutCompany()
    {
        return "123";
    }

    public function postAboutCompany(){
        return AboutCompany::title();
    }


    public function postUpdateDiscount()
    {
        return "123";
    }


    public function postUpdateFinishedDesign(UpdateFinishedDesignRequest $request)
    {
        FinishedDesign::where('id', '=', 1)->update(['title' => $request['h1']]);
        FinishedDesign::where('id', '=', 2)->update(['title' => $request['h2']]);
        FinishedDesign::where('id', '=', 3)->update(['title' => $request['h3']]);
        FinishedDesign::where('id', '=', 4)->update(['title' => $request['h4']]);
        FinishedDesign::where('id', '=', 5)->update(['title' => $request['h5']]);
        FinishedDesign::where('id', '=', 6)->update(['title' => $request['h6']]);
        FinishedDesign::where('id', '=', 7)->update(['title' => $request['h7']]);

        return redirect()->action('AdminController@getIndex');
    }


    public function postListFinishedDesign(){
        return FinishedDesign::title();
    }

    public function postListPageInfo(){
        return PageInfo::title();
    }


    public function postCatalogDesign(){
        return CatalogDesign::select('catalog_id','title','url_img','description')->get();
    }
    public function postCatalogs($id){
        return FinishedDesign::find($id)->catalog();
    }
    public function postGallery(){
        return Gallery::select('title','url_img')->get();
    }
    public function postPartners(){
        return Partners::select('title','url_img')->get();
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
