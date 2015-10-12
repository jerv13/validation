<?php

namespace JervDesign\InputFilter;

/**
 * Class Context
 */
interface ContextAware
{
    /**
     * setContext
     *
     * @param $context
     *
     * @return void
     */
    public function setContext($context);

    /**
     * getContext
     *
     * @return mixed
     */
    public function getContext();
}
