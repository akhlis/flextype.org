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

use Flextype\Component\Filesystem\Filesystem;

class FilesystemTwigExtension extends \Twig_Extension
{
    /**
     * Callback for twig.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('filesystem_list_contents', [$this, 'list_contents']),
            new \Twig_SimpleFunction('filesystem_has', [$this, 'has']),
            new \Twig_SimpleFunction('filesystem_read', [$this, 'read']),
            new \Twig_SimpleFunction('filesystem_ext', [$this, 'ext']),
            new \Twig_SimpleFunction('filesystem_basename', [$this, 'basename']),
        ];
    }

    public function list_contents(string $directory = '', bool $recursive = false)
    {
        return Filesystem::listContents($directory, $recursive);
    }

    public function has($path)
    {
        return Filesystem::has($path);
    }

    public function read($path)
    {
        return Filesystem::read($path);
    }

    public function ext($file)
    {
        return substr(strrchr($file, '.'), 1);
    }

    public function basename($value, $suffix = '')
    {
        return basename($value, $suffix);
    }
}
