<?php
namespace App\Behavioral\ChainOfResponsibilities;

class GetMiddleware extends Handler {

    public function processing(RequestInterface $request): ?string
    {
        if ($request->getMethod() == 'GET') {
            return 'La méthode utilisé est GET';
        }
        return null;
    }

}
