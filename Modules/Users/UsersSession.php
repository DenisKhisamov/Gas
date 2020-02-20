<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Users;


use Core\Base;
use Core\Dev;

class UsersSession extends Base {
    /**
     * Идентификатор сессии
     * @var string
     */
    private $id;
    
    /**
     * Имя сессии
     * @var string
     */
    private $name;
    
    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }
    
    /**
     * @param string $id
     */
    public function setId(string $id) {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName(string $name) {
        $this->name = $name;
    }
    
    public function init() {
        session_cache_limiter('private_no_expire');
        $this->name = 'SESS'.md5(getenv('HTTP_HOST'));
        session_name($this->name);
        session_set_save_handler(array(&$this, 'open'), array(&$this, 'close'), array(&$this, 'read'),
                array(&$this, 'write'), array(&$this, 'destroy'), array(&$this, 'gc'));
        session_start();
        $this->id = session_id();
    }
    
    /**
     * Открывает сессию
     *
     * @return boolean true
     */
    public function open():bool
    {
        return true;
    }
    
    /**
     * Закрывает сессию освобождает ресурсы
     *
     * @return boolean true
     */
    public function close():bool
    {
        return true;
    }
    
    /**
     * Читает сессию
     *
     * @param string $key идентификатор сессии
     * @return string
     */
    public function read(string $key):string
    {
        Dev::sSetShutdownHandler('session_write_close');
        
        if (! $this->core()->request()->isCookie($this->name))
        {
            return '';
        }
    
        $user = \DB::queryFetchRow("call session_read('%s','%s','%s');",array($key, mb_substr(getenv('HTTP_USER_AGENT'),0,45),getenv('REMOTE_ADDR')));
        if ($user && !empty($user['id']))
        {
            $this->modules()->users->setUser($user);
        }
        
        if ($user && !empty($user['session'])) return $user['session'];
        
        return '';
    }
    
    /**
     * Записывает данные в сессию
     *
     * @param string $key идентификатор сессии
     * @param string $value серилизованные данные сессии
     * @return bool
     */
    public function write($key, $value)
    {
        \DB::query("call session_write('%s','%s','%s','%s',%d);",array($key, mb_substr(getenv('HTTP_USER_AGENT'),0,45),getenv('REMOTE_ADDR'),$value,$this->modules()->users->getId()));
        return true;
    }
    
    /**
     * Чистит мусор - удаляет сессии старше $lifetime
     * @return bool
     */
    public function gc()
    {
        \DB::query("call session_gc()",array());
        return true;
    }
    
    /**
     * Удаляет ссессию
     * @param string $key идентификатор сессии
     * @return bool
     */
    public function destroy($key = '')
    {
        if(! $key)
        {
            $key = $this->id;
        }
        \DB::query("call session_gc()",array());
        $_SESSION = null;
        $this->modules()->users->setUser(array());
        return true;
    }
    
    /**
     * Определяет продолжительность сессии
     *
     * @return void
     */
    public function duration()
    {
        if(! empty($_POST['not_my_computer']))
        {
            $duration = 0;
        }
        else
        {
            $duration = 1209600;
        }
        $params = session_get_cookie_params();
        if($params['lifetime'] != $duration)
        {
            session_set_cookie_params($duration);
            session_regenerate_id(false);
        }
    }
    
    public function prepare($config = '')
    {
        if($config)
        {
            return $config;
        }
    }
}