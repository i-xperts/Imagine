<?php

namespace Imagine\Filter\Basic;

use Imagine\Filter\FilterInterface;
use Imagine\Image\ImageInterface;

class AutoCrop implements FilterInterface
{
    /**
     * {@inheritdoc}
     */
    public function apply(ImageInterface $image)
    {
        return $image->autoCrop();
    }
}