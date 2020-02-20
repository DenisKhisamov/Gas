<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;

abstract class Base {
    /**
     * @var Init
     */
    private $mCore;
    
    /**
     * @var array
     */
    private $mCache;
    
    public function __construct(Init &$core) {
        $this->mCore = $core;
    }
    
    public function &core() {
        return $this->mCore;
    }
    
    /**
     * Обращение к другим модулям
     * @return Modules
     */
    public function &modules():Modules {
        return $this->mCore->modules();
    }
    
    public function setCache(string $name,&$value) {
        $this->mCache[$name] = $value;
    }
    
    public function &getCache(string $name) {
        if (empty($this->mCache[$name]))
            $this->mCache[$name] = null;
        return $this->mCache[$name];
    }
}