<?php

namespace App\Http\Controllers\API;

use App\Blog;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class BlogController extends Controller
{

    public $successStatus = 200;

    public function getAllByUserId($user_id)
    {

        $blogs = Blog::where('user_id', '=', $user_id)->get();

        $data['blogs'] = $blogs;
        return response()->json(['success'=> $data], $this-> successStatus);
    }

    public function store(BlogRequest $request)
    {
        $user = $request->user();
        $input = $request->all();
        $input['user_id'] = $user->id;

        if(!isset($input['blog_date_time']))
        {
            $input['blog_date_time'] = date('Y-m-d H:i:s');
        }
        $blog = Blog::create($input);

        $success = ['title' => $blog->title,
            'id' => $blog->id,
            'user_id' => $blog->user_id,
            'blog_date_time' => $blog->blog_date_time,
            ''];

        return response()->json(['result'=> $blog,
            'message'=> 'success',
            'code'=> 0], $this-> successStatus);
    }

    public function getPdf($id)
    {
        $blog = Blog::find($id);

        if(!$blog)
        {
            return response()->json(['result'=> [],
                'message'=> 'Blog not found',
                'code'=> 1], '400');
        }

        $data = ['pdf' => route('pdf_download',[$id])];

        return response()->json(['result'=> $data,
            'message'=> 'success',
            'code'=> 0], $this-> successStatus);
        
    }

    public function pdfDownload($id)
    {

        $blog = Blog::find($id);

        if(!$blog)
        {
            return response()->json(['result'=> [],
                'message'=> 'Blog not found',
                'code'=> 1], '400');
        }

        $pdf = PDF::loadView('layouts.pdf_download', $blog);

        return $pdf->download($blog->title . '.pdf');
    }
}
