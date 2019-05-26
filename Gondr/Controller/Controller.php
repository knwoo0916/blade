<?php
namespace Gondr\Controller;

use Jenssegers\Blade\Blade;

class Controller
{
    public function render($page, $data = [])
    {
        extract($data);

        $blade = new Blade('views', 'cache');
        echo $blade->make($page, $data);
    }
}
