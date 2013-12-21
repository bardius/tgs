<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Twig;


class BooleanToStringExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('booleanToString', array($this, 'booleanToStringFilter')),
        );
    }

    public function booleanToStringFilter($value)
    {
        $stringValue = ($value) ? 'Yes' : 'No';

        return $stringValue;
    }

    public function getName()
    {
        return 'booleanToString_extension';
    }
}