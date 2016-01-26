<?php

namespace Imagine\Filter\Basic;

use Imagine\Filter\FilterInterface;
use Imagine\Image\BoxInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\Palette\Color\ColorInterface;

class AutoFrame implements FilterInterface
{
    /**
     * @var BoxInterface
     */
    private $size;

    /**
     * @var float
     */
    private $proportion;

    /**
     * @var ColorInterface
     */
    private $background;

    /**
     * Constructs a AutoFrame filter
     *
     * @param BoxInterface   $size
     */
    public function __construct(BoxInterface $size, $proportion = 1.618, ColorInterface $background = null)
    {
        $this->size       = $size;
        $this->proportion = $proportion;
        $this->background = $background;
    }

    /**
     * {@inheritdoc}
     */
    public function apply(ImageInterface $image)
    {
        return $image->autoFrame($this->size, $this->proportion, $this->background);
    }
}