<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doktorlar;
use Carbon\Carbon;
//use Intervention\Image\Image;
use Illuminate\Support\Str;
use Image;
class TibbiKadroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tibbiKadro=doktorlar::get();
        return view('backend.tibbikadro.index',compact('tibbiKadro'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.tibbikadro.create');
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
        // $validatedData = $request->validate(
        //     [
        //         'isim' => 'required|unique:categories|max:255',
        //         'egitimler' => 'required|unique:categories|max:255',

        //     ],
        //     [
        //         'isim.required' => 'Türkçe kategori ismi boş olamaz lütfen doldurunuz',
        //         'egitimler.unique' => 'Bu isimle daha önce kayıt yapılmış',

        //     ]
        // );
//         dd($request->image);
        $doktorlar=doktorlar::create($request->all());
        // dd($doktorlar);
        if($request->publish_date=Carbon::now()->format('Y-m-d')) {

            $yil = Carbon::now()->year;
            $ay = Carbon::now()->month;
            if (file_exists('storage/doktorlar/' . $yil) == false) {
                mkdir('storage/doktorlar/' . $yil, 0777, true);
            }
            if (file_exists('storage/doktorlar/' . $yil . '/' . $ay) == false) {
                mkdir('storage/doktorlar/' . $yil . '/' . $ay, 0777, true);
            }

            $image = $request->image;
            if ($image) {
                $image_one = uniqid() . '.' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();

                $new_image_name = 'storage/doktorlar/' . $yil . '/' . $ay . '/' . $image_one;

                Image::make($image)->resize(800, 450)->fit(800, 450)->save($new_image_name, 68, 'jpeg');

                $doktorlar->image = $new_image_name;

            }

            $doktorlar->save();

        }

        return Redirect()->route('tibbikadro.index');


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
        doktorlar::find($id)->delete();
        return Redirect()->route('tibbikadro.index');

    }
}
