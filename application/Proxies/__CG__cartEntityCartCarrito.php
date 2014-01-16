<?php

namespace Proxies\__CG__\cart\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CartCarrito extends \cart\Entity\CartCarrito implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIdCarrito()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["idCarrito"];
        }
        $this->__load();
        return parent::getIdCarrito();
    }

    public function setProcesado($procesado)
    {
        $this->__load();
        return parent::setProcesado($procesado);
    }

    public function getProcesado()
    {
        $this->__load();
        return parent::getProcesado();
    }

    public function setSecureKey($secureKey)
    {
        $this->__load();
        return parent::setSecureKey($secureKey);
    }

    public function getSecureKey()
    {
        $this->__load();
        return parent::getSecureKey();
    }

    public function setReciclar($reciclar)
    {
        $this->__load();
        return parent::setReciclar($reciclar);
    }

    public function getReciclar()
    {
        $this->__load();
        return parent::getReciclar();
    }

    public function setFechaRegistro($fechaRegistro)
    {
        $this->__load();
        return parent::setFechaRegistro($fechaRegistro);
    }

    public function getFechaRegistro()
    {
        $this->__load();
        return parent::getFechaRegistro();
    }

    public function setFechaModificacion($fechaModificacion)
    {
        $this->__load();
        return parent::setFechaModificacion($fechaModificacion);
    }

    public function getFechaModificacion()
    {
        $this->__load();
        return parent::getFechaModificacion();
    }

    public function setDireccionEnvio($direccionEnvio)
    {
        $this->__load();
        return parent::setDireccionEnvio($direccionEnvio);
    }

    public function getDireccionEnvio()
    {
        $this->__load();
        return parent::getDireccionEnvio();
    }

    public function setDireccionPago($direccionPago)
    {
        $this->__load();
        return parent::setDireccionPago($direccionPago);
    }

    public function getDireccionPago()
    {
        $this->__load();
        return parent::getDireccionPago();
    }

    public function addDetalle(\cart\Entity\CartCarritoProducto $detalle)
    {
        $this->__load();
        return parent::addDetalle($detalle);
    }

    public function removeDetalle(\cart\Entity\CartCarritoProducto $detalle)
    {
        $this->__load();
        return parent::removeDetalle($detalle);
    }

    public function getDetalle()
    {
        $this->__load();
        return parent::getDetalle();
    }

    public function setMoneda(\cart\Entity\CartMoneda $moneda = NULL)
    {
        $this->__load();
        return parent::setMoneda($moneda);
    }

    public function getMoneda()
    {
        $this->__load();
        return parent::getMoneda();
    }

    public function setCliente(\web\Entity\CmsCliente $cliente = NULL)
    {
        $this->__load();
        return parent::setCliente($cliente);
    }

    public function getCliente()
    {
        $this->__load();
        return parent::getCliente();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idCarrito', 'procesado', 'secureKey', 'reciclar', 'fechaRegistro', 'fechaModificacion', 'direccionEnvio', 'direccionPago', 'detalle', 'moneda', 'cliente');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}