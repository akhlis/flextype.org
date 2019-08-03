<?php

/**
 * @package Flextype
 *
 * @author Romanenko Sergey <hello@romanenko.digital>
 * @link http://romanenko.digital
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Generates and returns the image response
 */
$app->get('/image/{path:.+}', function (Request $request, Response $response, array $args) use ($flextype) {
    return $flextype['images']->getImageResponse($args['path'], $_GET);
});
