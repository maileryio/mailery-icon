<?php

namespace Mailery\Icon;

use Yiisoft\Widget\Widget;
use Yiisoft\Strings\Inflector;

class Icon extends Widget
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $options = [];

    /**
     * @var ProviderInterface
     */
    private ProviderInterface $provider;

    /**
     * @var Inflector
     */
    private Inflector $inflector;

    /**
     * @param ProviderInterface $provider
     */
    public function __construct(ProviderInterface $provider, Inflector $inflector)
    {
        $this->provider = $provider;
        $this->inflector = $inflector;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $options
     * @return \self
     */
    public function options(array $options): self
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return string
     */
    protected function run(): string
    {
        $name = $this->inflector->variablize($this->name);
        if (!method_exists($this->provider, $name)) {
            throw new \InvalidArgumentException('Invalid icon name "' . $name . '"');
        }

        return call_user_func([$this->provider, $name], $this->options);
    }
}
