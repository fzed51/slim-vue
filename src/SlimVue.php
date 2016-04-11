<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fzed51\Vue\Slim;

/**
 * Description of SlimVue
 *
 * @author fabien.sanchez
 */
class SlimVue extends fzed51\Vue\Vue
{

    public function render(ResponseInterface $response, $template, array $data = [])
    {
        $output = $this->templateToString($template, $data);
        $response->getBody()->write($output);

        return $response;
    }

}
