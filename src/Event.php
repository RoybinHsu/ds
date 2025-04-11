<?php

namespace ds;

class Event
{

    /**
     * 时间名称 发送请求之前
     */
    const BEFORE_SEND = 'before send';

    /**
     * 发送请求之后
     */
    const AFTER_SEND = 'after send';

    /**
     * 发送错误事件
     */
    const SEND_ERROR = 'send error';


    protected array $listeners = [];

    /**
     * 添加监听
     *
     * @param $event
     * @param callable $callback
     * @param bool $once
     *
     * @return void
     */
    public function on($event, callable $callback, bool $once = false)
    {
        $this->listeners[$event][] = ['callback' => $callback, 'once' => $once];
    }

    /**
     * 去掉监听
     *
     * @param string $event
     * @param callable|null $callback
     *
     * @return bool
     */
    public function off(string $event, ?callable $callback = null): bool
    {
        if (!isset($this->listeners[$event])) {
            return true;
        }
        if ($callback === null) {
            // 移除监听
            unset($this->listeners[$event]);
        } else {
            foreach ($this->listeners[$event] as $key => $listen) {
                if ($listen['callback'] === $callback) {
                    unset($this->listeners[$event][$key]);
                }
            }
        }
    }

    /**
     * 触发器
     *
     * @param $event
     * @param ...$args
     *
     * @return void
     */
    public function trigger($event, ...$args)
    {
        if (key_exists($event, $this->listeners)) {
            foreach ($this->listeners[$event] as $index => $listen) {
                call_user_func_array($listen['callback'], $args);
                if ($listen['once']) {
                    unset($this->listeners[$event][$index]);
                }
            }
        }
    }
}

