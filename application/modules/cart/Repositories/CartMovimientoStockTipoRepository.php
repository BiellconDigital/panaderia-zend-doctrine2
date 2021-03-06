<?php

namespace cart\Repositories;

use Doctrine\ORM\EntityRepository;
use Vendors\Paginate\Paginate;

/**
 * CartMovimientoStockTipoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CartMovimientoStockTipoRepository extends EntityRepository
{
    public static $MOVIMIENTO_VENTA = 1;

    public function listRecords($activo=true, $pageStart=NULL, $pageLimit=NULL) {
        $count= 0;
        $dqlList = 'SELECT mst from \cart\Entity\CartMovimientoStockTipo mst WHERE mst.idMovimientoStockTipo != 1';
        $oMovimientoStockTipo = $this->_em->createQuery($dqlList);
        
        if ($pageStart!= NULL and $pageLimit!=NULL) {
            $count = Paginate::getTotalQueryResults($oMovimientoStockTipo);
            $oMovimientoStockTipo->setFirstResult($pageStart)->setMaxResults($pageLimit);
        }
        return array($oMovimientoStockTipo, $count);
    }
}
