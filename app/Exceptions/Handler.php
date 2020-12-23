<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
//use App\Trails\ApiResponser;

class Handler extends ExceptionHandler
{
    //use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        $this->renderable(function (ValidationException $e, $request) {
            if ($request->expectsJson()) {
               return response('Sorry, validation failed.', 422);
            }
        });
    }

    public function render($request, Throwable $exception)
    {
        if($exception instanceof ValidationException) {
            //return response()->json($exception->validator, 422);
           // dd($exception->validator::erros());
            return response()->json([
                                     'resultado' => [],
                                     'mensagem'  =>  $exception->validator->erros()->getMessages(),
                                     'status' => 'ERROR'
                                    ], 422);
        }
        
        return parent::render($request, $exception);
    }

}
