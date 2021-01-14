<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Realty;

use JMS\Serializer\Annotation as Serializer;

class DduOwnerDto
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $kind;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $inn = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $firstName = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $lastName = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $middleName = null;

    public function __construct(
        string $kind,
        ?string $inn = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $middleName = null
    ) {
        $this->kind = $kind;
        $this->inn = $inn;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
    }
}
