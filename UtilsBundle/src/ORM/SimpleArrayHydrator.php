<?php

namespace Homeapp\UtilsBundle\ORM;

use Doctrine\ORM\Internal\Hydration\AbstractHydrator;

class SimpleArrayHydrator extends AbstractHydrator
{
    protected function hydrateAllData()
    {
        $result = [];
        foreach ($this->_stmt->fetchAll(\PDO::FETCH_ASSOC) as $row) {
            $indexBy = $this->_rsm->indexByMap['scalars'] ?? null;
            if (null !== $indexBy) {
                $result[$row[$indexBy]] = $row;
            } else {
                $result[] = $row;
            }
        }

        return $result;
    }
}
