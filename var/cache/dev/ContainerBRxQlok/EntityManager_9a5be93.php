<?php

namespace ContainerBRxQlok;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5959b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0e144 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties20266 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getConnection', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getMetadataFactory', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getExpressionBuilder', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'beginTransaction', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getCache', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'transactional', array('func' => $func), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'commit', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->commit();
    }

    public function rollback()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'rollback', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getClassMetadata', array('className' => $className), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'createQuery', array('dql' => $dql), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'createNamedQuery', array('name' => $name), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'createQueryBuilder', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'flush', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'clear', array('entityName' => $entityName), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->clear($entityName);
    }

    public function close()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'close', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->close();
    }

    public function persist($entity)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'persist', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'remove', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'refresh', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'detach', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'merge', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'contains', array('entity' => $entity), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getEventManager', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getConfiguration', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'isOpen', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getUnitOfWork', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getProxyFactory', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'initializeObject', array('obj' => $obj), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'getFilters', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'isFiltersStateClean', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'hasFilters', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return $this->valueHolder5959b->hasFilters();
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

        $instance->initializer0e144 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5959b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5959b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5959b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, '__get', ['name' => $name], $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        if (isset(self::$publicProperties20266[$name])) {
            return $this->valueHolder5959b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5959b;

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

        $targetObject = $this->valueHolder5959b;
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
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5959b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5959b;
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
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, '__isset', array('name' => $name), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5959b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5959b;
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
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, '__unset', array('name' => $name), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5959b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5959b;
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
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, '__clone', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        $this->valueHolder5959b = clone $this->valueHolder5959b;
    }

    public function __sleep()
    {
        $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, '__sleep', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;

        return array('valueHolder5959b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0e144 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0e144;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0e144 && ($this->initializer0e144->__invoke($valueHolder5959b, $this, 'initializeProxy', array(), $this->initializer0e144) || 1) && $this->valueHolder5959b = $valueHolder5959b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5959b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5959b;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
