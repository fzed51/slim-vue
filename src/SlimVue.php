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
        $output = $this->vue->render($template, $data);
        $response->getBody()->write($output);

        return $response;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->vue->getAttributes();
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->vue->setAttributes($attributes);
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function addAttribute($key, $value)
    {
        $this->vue->addAttribute($key, $value);
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getAttribute($key)
    {
        return $this->vue->getAttribute($key);
    }

    /**
     * @return string
     */
    public function getTemplatePath()
    {
        return $this->vue->getTemplatePath();
    }

    /**
     * @param string $templatePath
     */
    public function setTemplatePath($templatePath)
    {
        $this->vue->setTemplatePath($templatePath);
    }

}
