<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Products;
use Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;
class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.pages.products.list', compact('products'));
    }

    public function getCreate(Request $request)
    {
        return view('admin.pages.products.create');
    }

    public function postCreate(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:5|max:255',
                'content' => 'required',
                'price' => 'required|numeric',
                'category' => 'required',
                'photos' => 'required',
                'intro' => 'required'

            ],
        
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute không được nhỏ hơn :min',
                'max' => ':attribute không được lớn hơn :max',
                'numeric' => ':attribute phải là một số'
            ],
        
            [
                'name' => 'Tiêu đề',
                'content' => 'Nội dung',
                'price' => 'Giá sản phẩm',
                'category' => 'Danh mục',
                'photos' => 'Hình ảnh',
                'intro' => 'Mô tả'
            ]
        
        );

         
        if($request->hasFile('photos')) {
            $image = $request->file('photos');
            $images=array();
            foreach ($image as $photo) {
                $destinationPath = 'uploads';
                $filename = time().'-'.$photo->getClientOriginalName();
                
                // resize image with ImageManagerStatic
                $image_resize = Image::make($photo->getRealPath());
                    
                // resize image to fixed size
                $image_resize->resize(300, 200);

                // resize only the width of the image
                $image_resize->resize(300, null);

                // resize only the height of the image
                $image_resize->resize(null, 200);

                // resize the image to a width of 300 and constrain aspect ratio (auto height)
                $image_resize->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                // resize the image to a height of 200 and constrain aspect ratio (auto width)
                $image_resize->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                });

                // prevent possible upsizing
                $image_resize->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $image_resize->save(public_path('uploads/'.$filename));
                $images[]= $filename;
            }

            /*Insert your data*/
            Products::insert( [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'intro' => $request->input('intro'),
                'content' => $request->input('content'),
                'category_id' => '1',
                'image'=>  implode("|",$images),
            ]);
        }
        return view('admin.pages.products.create')->withErrors($validate);
    }
}
