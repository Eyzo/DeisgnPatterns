<?php
namespace App\Behavioral\ChainOfResponsibilities;

class PostMiddleware extends Handler {

    public function processing(RequestInterface $request): ?string
    {
        if ($request->getMethod() == 'POST') {
            return 'La méthode utilisé est POST';
        }
        return null;
    }

}
