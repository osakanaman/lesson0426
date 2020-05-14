<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request)
{
   return view('hello.index');
}



    // public function index()

// {
// //    return view('hello.index', ['message'=>'Hello!']);

//    $message = 'Goodmorning';
//    return view('hello.index',compact('message'));

//    $sample = 'Hello';
//    return view('hello.index')->with('message',$sample);

// }

    // public function index()
    // {
    //     return view('hello.index');
    // }
 
    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg'=>$request->msg]);
    // }

    // public function index(Request $reqest)
    // {
    //     $data = [
    //         // 'msg'=>'これはコントローラから渡されたメッセージです。',
    //         // 'id'=>$reqest->tt
    //         'msg'=>'これはBladeを利用したサンプルです。',
    //     ];
        
    //     return view('hello.index', $data);
    // }
  
//    public function index(Request $request, Response $response) {

// $html = <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:120pt; text-align:right; color:#fafafa;
//   margin:-50px 0px -120px 0px; }
// </style>
// </head>
// <body>
//   <h1>Hello</h1>
//   <h3>Request</h3>
//   <pre>{$request}</pre>
//   <h3>Response</h3>
//   <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//        $response->setContent($html);
//        return $response;
// }

// namespace App\Http\Controllers;
// use Illuminate\Http\Request;

// /*シングルアクション*/
// class HelloController extends Controller
// {
//     public function __invoke(){
//         return <<<EOF
//         <html>
//         <h1>Single Action</h1>
//         </html>
//         EOF;
//     }
// }

/*ルーティング複数アクション*/
// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
//     body { font-size:16pt; color:red }
//     h1 { font-size:100px; color:blue; text-align:right; margin:-40px 0px -50px 0px;}
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt) {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller
// {
//     public function index() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/index') .$style . 
//         $body
//         . tag('h1','Index') . tag ('p', 'this is index page')
//         . '<a href="/hello/other">go to Other page</a>'
//         . $end;

//         return $html;
//     }

//     public function other() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/other') .$style . 
//         $body
//         . tag('h1','Other') . tag ('p', 'this is other page')
//         . $end;

//         return $html;
//     }   

}