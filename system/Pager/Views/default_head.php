<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(0);

if ($pager->hasPrevious()) {
    echo '<link rel="prev" href="' . $pager->getPrevious() . '">' . "\n";
}

echo '<link rel="canonical" href="' . $pager->getCurrent() . '">' . "\n";

if ($pager->hasNext()) {
    echo '<link rel="next" href="' . $pager->getNext() . '">' . "\n";
}
