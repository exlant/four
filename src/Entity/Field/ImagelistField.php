<?php

declare(strict_types=1);

namespace Bolt\Entity\Field;

use Bolt\Entity\Field;
use Bolt\Entity\FieldInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ImagelistField extends Field implements FieldInterface
{
    public static function getType(): string
    {
        return 'imagelist';
    }
}
