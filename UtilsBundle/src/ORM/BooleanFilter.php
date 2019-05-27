<?php

namespace Homeapp\UtilsBundle\ORM;

use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Form\Type\Filter\DefaultType;
use Sonata\CoreBundle\Form\Type\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Sonata\DoctrineORMAdminBundle\Filter\Filter;

class BooleanFilter extends Filter
{
    public function filter(ProxyQueryInterface $queryBuilder, $alias, $field, $data)
    {
        if (!$data || !\is_array($data) || !array_key_exists('type', $data) || !array_key_exists('value', $data)) {
            return;
        }

        if (\is_array($data['value'])) {
            $values = [];
            foreach ($data['value'] as $v) {
                if (!\in_array($v, [BooleanType::TYPE_NO, BooleanType::TYPE_YES])) {
                    continue;
                }

                $values[] = (BooleanType::TYPE_YES == $v) ? true : false;
            }

            if (0 == \count($values)) {
                return;
            }

            $this->applyWhere($queryBuilder, $queryBuilder->expr()->in(sprintf('%s.%s', $alias, $field), $values));
        } else {
            if (!\in_array($data['value'], [BooleanType::TYPE_NO, BooleanType::TYPE_YES])) {
                return;
            }

            $parameterName = $this->getNewParameterName($queryBuilder);
            $this->applyWhere($queryBuilder, sprintf('%s.%s = :%s', $alias, $field, $parameterName));
            $queryBuilder->setParameter($parameterName, (BooleanType::TYPE_YES == $data['value']) ? true : false);
        }
    }

    public function getDefaultOptions()
    {
        return [
            'field_type' => BooleanType::class,
        ];
    }

    public function getRenderSettings()
    {
        return [DefaultType::class, [
            'field_type' => $this->getFieldType(),
            'field_options' => $this->getFieldOptions(),
            'operator_type' => HiddenType::class,
            'operator_options' => [],
            'label' => $this->getLabel(),
        ]];
    }
}
