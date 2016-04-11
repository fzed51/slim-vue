<?php

namespace fzed51\Vue\Slim;

use fzed51\Vue\Vue;
use Psr\Http\Message\ResponseInterface;

/**
 * Description of SlimVue
 *
 * @author fabien.sanchez
 */
class SlimVue
{

    /**
     * @var fzed51\Vue\Vue
     */
    private $vue;

    /**
     * Reproduit le constructeur de fzed51\Vue\Vue
     * @param string $templatePath
     * @param array $attributes
     */
    public function __construct($templatePath, array $attributes = [])
    {
        $this->vue = new Vue($templatePath, $attributes);
    }

    /**
     * Retourne la réponse Http avec le body résolu par fzed51\Vue\Vue
     * @param Psr\Http\Message\ResponseInterface $response
     * @param string $template
     * @param array $data
     * @return Psr\Http\Message\ResponseInterface
     */
    public function render(ResponseInterface $response, $template, array $data = [])
    {
        $output = $this->vue->templateToString($template, $data);
        $response->getBody()->write($output);

        return $response;
    }

}
