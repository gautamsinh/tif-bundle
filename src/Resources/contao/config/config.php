<?php
/*
 * Copyright Gautamsinh Mori <morigautam13@gmail.com>, 2020
 * @author Gautamsinh Mori
 * @link https://github.com/gautamsinh/tif-bundle
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
// config.php

use Conrat\TifBundle\EventListener\PostLoginListener;

$GLOBALS['TL_HOOKS']['postLogin'][] = array(
    PostLoginListener::class,
    '__invoke'
);
