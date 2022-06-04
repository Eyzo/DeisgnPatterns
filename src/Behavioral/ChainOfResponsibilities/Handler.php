<?php
namespace App\Behavioral\ChainOfResponsibilities;

abstract class Handler {

    protected ?Handler $successor = null;

    public function append(Handler $handler): Handler
    {
        $this->successor = $handler;
        return $handler;
    }

    public function handle(RequestInterface $request): ?string
    {
        $processing = $this->processing($request);
        if (is_null($processing) && !is_null($this->successor)) {
            $processing = $this->successor->handle($request);
        }
        return $processing;
    }

    abstract public function processing(RequestInterface $request): ?string;

}
