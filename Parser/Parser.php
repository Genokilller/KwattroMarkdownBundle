<?php

/**
 * This file is part of the KwattroMarkdownBundle package.
 * 
 * (c) Christophe Willemsen <willemsen.christophe@gmail.com>
 * 
 * Released under the MIT License.
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that is bundled with this package.
 */

namespace Kwattro\MarkdownBundle\Parser;

use \Sundown\Markdown as Markdown;

class Parser extends Markdown
{
    /**
     * Create a new Parser instance and configure the enabled extensions
     * 
     * @param array $extensions
     * @param string $renderer
     */
    public function __construct()
    {
        parent::__construct();
    }
    
}
