<?php

/**
 * @package Flextype
 *
 * @author Sergey Romanenko <hello@romanenko.digital>
 * @link http://romanenko.digital
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Flextype\Component\I18n\I18n;

class I18nTwigExtension extends \Twig_Extension
{
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('tr', [$this, 'tr']),
        ];
    }

    /**
     * Translate string
     */
    public function tr(string $translate, string $locale = null, array $values = []) : string
    {
        return I18n::find($translate, $locale, $values);
    }
}
