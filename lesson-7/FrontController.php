<?php


namespace Controller;

class FrontController
{
    private const CONTROLLER_NAMESPACE = 'Controller';
    protected $controller;
    protected $action;
    protected $params = [];

    /**
     * FrontController constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        if (empty($options)) {
            $this->parseUrl();
        } else {
            if (isset($options['controller'])) {
                $this->setController($options['controller']);
            }
            if (isset($options['action'])) {
                $this->setAction($options['action']);
            }
            if (isset($options['params'])) {
                $this->setParams($options['params']);

            }
        }
    }

    protected function parseUrl()
    {
        $this->setController('MainController');
        $this->setAction('indexAction');
        $this->setParams([]);
    }

    /**
     * @param $controller
     * @return $this
     */
    public function setController($controller)
    {
        $controller = static::CONTROLLER_NAMESPACE;
        if (!class_exists($controller)) {
            $controller = 'MainController';
        }
        $this->controller = $controller;
        return $this;
    }

    /**
     * @param $action
     * @return $this
     */
    public function setAction($action)
    {
        try {
            $reflector = new \ReflectionClass($this->controller);

        } catch (\ReflectionException $e) {
            $this->controller = 'MainController';
        }
        if (!$reflector->hasMethod($action)) {
            $action = 'indexAction';
        }
        $this->action = $action;
        return $this;
    }

    /**
     * @param array $params
     * @return $this
     */
    public function setParams(array $params)
    {
        $this->params = $params;
        return $this;

    }

    public function run()
    {
        call_user_func_array(
            [new $this->controller, $this->action], $this->params
        );
    }


}
