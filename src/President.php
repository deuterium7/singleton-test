<?php

namespace AlexanderZabornyi\SingletonTest;

final class President
{
    private static $instance;

    /**
     * Получить уникальный экземпляр
     *
     * @return President
     */
    public static function getInstance(): President
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Скрываем конструктор
     */
    private function __construct()
    {
    }

    /**
     * Скрываем клонирование
     */
    private function __clone()
    {
    }

    /**
     * Скрываем десериализацию
     */
    private function __wakeup()
    {
    }
}