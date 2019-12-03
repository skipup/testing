<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pdf;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $brands = Pdf::latest()->paginate(20);
            return view('admin.pdf.index', compact('brands'));
        } catch (\Exception $e) {
            return redirect()->back('error', 'Something Went Wrong!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pdf.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if(request()->file('pdf')){
                $image = request()->file('pdf');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $pdf_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf');
                $image->move($destinationPath, $image_name);
            }
            if(request()->file('en_pdf')){
                $image = request()->file('en_pdf');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $en_pdf_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf');
                $image->move($destinationPath, $image_name);
            }
            if(request()->file('image')){
                $image = request()->file('image');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $image_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf');
                $image->move($destinationPath, $image_name);
            }
            if(request()->file('en_image')){
                $image = request()->file('en_image');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $en_image_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf');
                $image->move($destinationPath, $image_name);
            }

             $pdf = new Pdf();
             $pdf->user_id = Auth::id();
             $pdf->en_title = request()->en_title;
             $pdf->my_title = request()->my_title;
             $pdf->my_description = request()->my_description;
             $pdf->en_description = request()->en_description;
             $pdf->image = $image_url;
             $pdf->en_image = $en_image_url;
             $pdf->pdf = $pdf_url;
             $pdf->en_pdf = $en_pdf_url;
             if($pdf->save()){
                 return $this->convertJson('success',200,null);
             }
             return $this->convertJson('error',200,null);

        } catch (\Exception $e) {
            return $this->convertJson('error',200,null);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news  = Pdf::find($id);
        return view('admin.pdf.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $brand = Pdf::find($id);
            return view('admin.pdf.update', compact('brand'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Some Wrong');
        }
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

        try {
            $brand = Pdf::find($id);
            if (request()->file('image')) {
                File::delete(public_path($brand->image));
                $image = request()->file('image');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $image_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf');
                $image->move($destinationPath, $image_name);
            } else {
                $image_url = $brand->image;
            }
            if (request()->file('en_image')) {
                File::delete(public_path($brand->en_image));
                $image = request()->file('en_image');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $en_image_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf');
                $image->move($destinationPath, $image_name);
            } else {
                $en_image_url = $brand->en_image;
            }

            if (request()->file('pdf')) {
                File::delete(public_path($brand->pdf));
                $image = request()->file('pdf');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $pdf_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf/');
                $image->move($destinationPath, $image_name);
            } else {
                $pdf_url = $brand->pdf;
            }
            if (request()->file('en_pdf')) {
                File::delete(public_path($brand->en_pdf));
                $image = request()->file('en_pdf');
                $image_name = time() . '.' . $image->getClientOriginalName();
                $en_pdf_url = '/pdf/' . $image_name;
                $destinationPath = public_path('/pdf/');
                $image->move($destinationPath, $image_name);
            } else {
                $en_pdf_url = $brand->en_pdf;
            }

            $brand->user_id = Auth::id();
            $brand->en_title = request()->en_title;
            $brand->my_title = request()->my_title;
            $brand->my_description = request()->my_description;
            $brand->en_description = request()->en_description;
            $brand->image = $image_url;
            $brand->en_image = $en_image_url;
            $brand->pdf = $pdf_url;
            $brand->en_pdf = $en_pdf_url;
            $brand->save();
            return $this->convertJson('success',200,null);
        } catch (\Exception $e) {
            return $this->convertJson('error',200,$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $brand = Pdf::find($id);
            File::delete(public_path($brand->image));
            File::delete(public_path($brand->en_image));
            File::delete(public_path($brand->pdf));
            File::delete(public_path($brand->en_pdf));
            $brand->delete();
            return redirect()->back()->with('success',' PDf Deleted Success');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function viewPdf($id,$lang){
        if($lang =='my'){
            \App::setLocale('my');
            $pdf= Pdf::find($id);
            return \response()->file('public'.$pdf->pdf);
        }else{
            \App::setLocale('en');
            $pdf = Pdf::find($id);
            return \response()->file('public'.$pdf->pdf);
        }
    }
    public function downloadPdf($id,$lang){
        if($lang =='my'){
            \App::setLocale('my');
            $pdf= Pdf::find($id);
            return \response()->download('public'.$pdf->pdf);
        }else{
            \App::setLocale('en');
            $pdf = Pdf::find($id);
            return \response()->download('public'.$pdf->pdf);
        }
    }
}
