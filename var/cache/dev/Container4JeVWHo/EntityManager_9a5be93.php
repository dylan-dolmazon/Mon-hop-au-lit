<?php

namespace Container4JeVWHo;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc258d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4e39 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf1c72 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getConnection', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getMetadataFactory', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getExpressionBuilder', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'beginTransaction', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getCache', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'transactional', array('func' => $func), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'commit', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->commit();
    }

    public function rollback()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'rollback', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'createQuery', array('dql' => $dql), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'createQueryBuilder', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'flush', array('entity' => $entity), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'clear', array('entityName' => $entityName), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'close', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->close();
    }

    public function persist($entity)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'persist', array('entity' => $entity), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'remove', array('entity' => $entity), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'detach', array('entity' => $entity), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'merge', array('entity' => $entity), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'contains', array('entity' => $entity), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getEventManager', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getConfiguration', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'isOpen', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getUnitOfWork', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getProxyFactory', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'getFilters', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'isFiltersStateClean', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'hasFilters', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return $this->valueHolderc258d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc4e39 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderc258d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc258d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc258d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, '__get', ['name' => $name], $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        if (isset(self::$publicPropertiesf1c72[$name])) {
            return $this->valueHolderc258d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc258d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc258d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc258d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc258d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, '__isset', array('name' => $name), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc258d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc258d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, '__unset', array('name' => $name), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc258d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc258d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, '__clone', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        $this->valueHolderc258d = clone $this->valueHolderc258d;
    }

    public function __sleep()
    {
        $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, '__sleep', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;

        return array('valueHolderc258d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4e39 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4e39;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4e39 && ($this->initializerc4e39->__invoke($valueHolderc258d, $this, 'initializeProxy', array(), $this->initializerc4e39) || 1) && $this->valueHolderc258d = $valueHolderc258d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc258d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc258d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
