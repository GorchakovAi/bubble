<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\FinishedDesign;
use App\PageInfo;
use App\AboutCompany;
use App\CatalogDesign;
use App\Gallery;
use App\Partners;

use App\Http\Requests\AddPartnersRequest;
use App\Http\Requests\UpdateFinishedDesignRequest;
use App\Http\Requests\AddPictureRequest;
use App\Http\Requests\AddDesignRequest;
use App\Http\Requests\UploadImgRequest;
use App\Http\Requests\UpdatePageInfoRequest;
use App\Http\Requests\UpdateAboutCompanyRequest;
use App\Http\Requests\AddDiscountRequest;


use Gorchaqw\Test\Example;
use Symfony\Component\Console\Input;





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

    // Информация на странице
    public function postListPageInfo(){
        return PageInfo::title();
    }
    public function postUpdatePageInfo(UpdatePageInfoRequest $request)
    {
        PageInfo::where('id', '=', 1)->update([
            'url_vk'        =>$request['url_vk'],
            'url_fb'        =>$request['url_fb'],
            'url_twitter'   =>$request['url_twitter'],
            'url_gp'        =>$request['url_gp']]);
        return "ok";
    }

    //О компании
    public function postUpdateAboutCompany(UpdateAboutCompanyRequest $request)
    {
        if(null !==$request->file('url_img')){
        $request->file('url_img')->move(public_path('media/img/'), 'about.png');
        AboutCompany::where('id', '=', 1)->update([
            'url_img'        =>'about.png',
        ]);}
        AboutCompany::where('id', '=', 1)->update([
            'description'        =>$request['description']
        ]);
        return "ok";
    }
    public function postAboutCompany(){
        return AboutCompany::title();
    }

    // Акции
    public function postUpdateDiscount(AddDiscountRequest $request)
    {
        Discount::where('id', '=', 1)->update(['h1' => $request['h1']]);
        Discount::where('id', '=', 1)->update(['h2' => $request['h2']]);
        Discount::where('id', '=', 1)->update(['DeadLine' => $request['DeadLine']]);
        return "ok";
    }
    public function postListDiscount(){
        return Discount::select('h1','h2','DeadLine')->get();
    }

    // Готовые оформления
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
    public function postCatalogs($id){
        return FinishedDesign::find($id)->catalog();
    }

    //Каталог товаров
    public function postCatalogDesign(){
        return CatalogDesign::select('id','catalog_id','title','url_img','description')->get();
    }
    public function postAddPDesign(AddDesignRequest $request){
        $name = uniqid().".jpg";
        $request->file('url_img')->move(public_path('media/img/catalog/'), $name);
        CatalogDesign::create([
            'title' => $request['title'],
            'url_img' => $name,
            'description'=>$request['description'],
            'catalog_id'=>$request['catalog_id']
        ]);
        return redirect()->action('AdminController@getIndex');
    }
    public function postUpdateCardProduct(AddDesignRequest $request){
        CatalogDesign::where('id', '=', $request['id'])->update(['title' => $request['title']]);
        CatalogDesign::where('id', '=', $request['id'])->update(['catalog_id' => $request['catalog_id']]);
        CatalogDesign::where('id', '=', $request['id'])->update(['description' => $request['description']]);
        if(null !==$request->file('url_img')) {
            $name = uniqid() . ".jpg";
            $request->file('url_img')->move(public_path('media/img/catalog/'), $name);
            CatalogDesign::where('id', '=', $request['id'])->update(['url_img' => $name]);
        }
        return redirect()->action('AdminController@getIndex');
    }
    public function postRemoveCardProduct(AddDesignRequest $request){
        CatalogDesign::find($request["id"])->delete();
        return redirect()->action('AdminController@getIndex');
    }
    //Галерея
    public function postGallery(){
        return Gallery::select('id','title','url_img')->get();
    }
    public function postAddPicture(AddPictureRequest $request){
        if(null !==$request->file('url_img')){
            $name = uniqid().".jpg";
            $request->file('url_img')->move(public_path('media/img/gallery/'), $name);
        }else{
            $name = "test.jpg";
        }
        Gallery::create(['title' => $request['title'],'url_img' => $name]);
        return redirect()->action('AdminController@getIndex');
    }
    public function postRemovePicture(AddPictureRequest $request){
        Gallery::find($request["id"])->delete();
        return redirect()->action('AdminController@getIndex');
    }
    public function postUpdatePicture(AddPictureRequest $request){
        if(null !==$request->file('url_img')){
            $name = uniqid().".jpg";
            $request->file('url_img')->move(public_path('media/img/gallery/'), $name);
            Gallery::where('id', '=', $request['id'])->update(['title' => $request['title'],'url_img' => $name]);
        }else{
            Gallery::where('id', '=', $request['id'])->update(['title' => $request['title']]);
        }

        return redirect()->action('AdminController@getIndex');
    }
    //Партнеры
    public function postPartners(){
        return Partners::select('id','title','url_img')->get();
    }
    public function postAddPartners(AddPartnersRequest $request){
        if(null !==$request->file('url_img')){
            $name = uniqid().".jpg";
            $request->file('url_img')->move(public_path('media/img/partners'), $name);
        }else{
            $name = 'test.jpg';
        }
        Partners::create(['title' => $request['title'],'url_img' => $name]);
        return redirect()->action('AdminController@getIndex');
    }
    public function postEditPartners(AddPartnersRequest $request){
        if(null !==$request->file('url_img')){
            $name = uniqid().".jpg";
            $request->file('url_img')->move(public_path('media/img/partners'), $name);
        }else{
            $name = 'test.jpg';
        }
        Partners::where('id', '=', $request['id'])->update(['title'=>$request['title'],'url_img' => $name]);
        return redirect()->action('AdminController@getIndex');
    }
    public function postRemovePartners(AddPartnersRequest $request){
        Partners::find($request["id"])->delete();
        return redirect()->action('AdminController@getIndex');
    }
    //Шапка
    public function postUploadHead(UploadImgRequest $request){
        if(null !==$request->file('url_logo')){
        $request->file('url_logo')->move(public_path('media/img'), 'logo.png');}
        return redirect()->action('AdminController@getIndex');
    }
}
