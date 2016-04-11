<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fzed51\Vue\Slim;

use fzed51\Vue\Vue;
use Psr\Http\Message\ResponseInterface;

/**
 * Description of SlimVue
 *
 * @author fabien.sanchez
 */
class SlimVue extends Vue
{

    public function render(ResponseInterface $response, $template, array $data = [])
    {
        $output = $this->templateToString($template, $data);
        $response->getBody()->write($output);

        return $response;
    }

}
