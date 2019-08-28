<?php

class Handler extends ExceptionHandler
{
    public function render($request, Exception $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return Route::respondWithRoute('fallback');
        }

        if ($exception instanceof ModelNotFoundException) {
            return Route::respondWithRoute('fallback');
        }

        return parent::render($request, $exception);
    }
}

?>

<?php

if ($exception instanceof ModelNotFoundException) {
    return $exception->getModel() == Server::class
                ? Route::respondWithRoute('serverFallback') 
                : Route::respondWithRoute('fallback');
}

?>

<?php

Route::fallback(function(){
    return response()->view('notFound', [], 404);
})->name('fallback');

?>

<?php

Route::fallback(function(){
    return 'We could not find this server, there are other '. auth()->user()->servers()->count() . ' under your account ......';
})->name('serverFallback');

?>