<?php

/*
2. Устранение нарушений принципа инверсии зависимостей:
Класс Http зависит от конкретного класса XMLHttpService, что нарушает первый пункт Dependency Inversion Principle (DIP)
из принципов SOLID. Необходимо изменить структуру кода так, чтобы устранить эту зависимость.

class XMLHttpService extends XMLHTTPRequestService {}
class Http {
    private $service;
    public function __construct(XMLHttpService $xmlHttpService) { }
    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }
    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}
 */


interface HttpInterface
{
    public function get(string $url, array $options);

    public function post(string $url, array $options);
}

class Http implements HttpInterface
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function get(string $url, array $options)
    {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url, array $options)
    {
        $this->service->request($url, 'POST', $options);
    }
}

class XMLHttpService extends Http
{

}