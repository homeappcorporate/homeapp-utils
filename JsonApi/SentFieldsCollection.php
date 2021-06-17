<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

/**
 * @property-read array $attributes
 * @property-read array $relationships
 */
class SentFieldsCollection
{
    public function __construct(array $attributes, array $relationships)
    {
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }

    public function hasAttr(string $attrName): bool
    {
        return in_array($attrName, $this->attributes, true);
    }

    public function isRelatedTo(string $relationName): bool
    {
        return in_array($relationName, $this->relationships, true);
    }

    public function unsetField(string $fieldName): void
    {
        $foundIn = 'attributes';
        $key = array_search($fieldName, $this->attributes, true);

        if (false === $key) {
            $foundIn = 'relationships';
            $key = array_search($fieldName, $this->relationships, true);
        }

        if (false !== $key) {
            unset($this->$foundIn[$key]);
        }
    }
}
