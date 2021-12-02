<?php

namespace ContainerVhQE115;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder55f22 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd84bb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties198fc = [
        
    ];

    public function getConnection()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getConnection', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getMetadataFactory', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getExpressionBuilder', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'beginTransaction', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getCache', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'transactional', array('func' => $func), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'commit', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->commit();
    }

    public function rollback()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'rollback', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getClassMetadata', array('className' => $className), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'createQuery', array('dql' => $dql), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'createNamedQuery', array('name' => $name), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'createQueryBuilder', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'flush', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'clear', array('entityName' => $entityName), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->clear($entityName);
    }

    public function close()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'close', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->close();
    }

    public function persist($entity)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'persist', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'remove', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'refresh', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'detach', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'merge', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'contains', array('entity' => $entity), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getEventManager', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getConfiguration', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'isOpen', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getUnitOfWork', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getProxyFactory', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'initializeObject', array('obj' => $obj), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'getFilters', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'isFiltersStateClean', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'hasFilters', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return $this->valueHolder55f22->hasFilters();
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

        $instance->initializerd84bb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder55f22) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder55f22 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder55f22->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, '__get', ['name' => $name], $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        if (isset(self::$publicProperties198fc[$name])) {
            return $this->valueHolder55f22->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55f22;

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

        $targetObject = $this->valueHolder55f22;
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
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55f22;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder55f22;
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
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, '__isset', array('name' => $name), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55f22;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder55f22;
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
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, '__unset', array('name' => $name), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55f22;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder55f22;
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
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, '__clone', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        $this->valueHolder55f22 = clone $this->valueHolder55f22;
    }

    public function __sleep()
    {
        $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, '__sleep', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;

        return array('valueHolder55f22');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd84bb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd84bb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd84bb && ($this->initializerd84bb->__invoke($valueHolder55f22, $this, 'initializeProxy', array(), $this->initializerd84bb) || 1) && $this->valueHolder55f22 = $valueHolder55f22;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder55f22;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder55f22;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
