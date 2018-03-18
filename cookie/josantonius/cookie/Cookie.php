<?php
/**
 * PHP library for handling cookies.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2018 (c) Josantonius - PHP-Cookie
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Cookie
 * @since     1.0.0
 */
namespace Josantonius\cookie
{
/**
 * Cookie handler.
 *
 * @since 1.0.0
 */
    class Cookie
    {
        /**
         * Prefix for cookies.
         *
         * @var string
         */
        public static $prefix = 'jst_';

        /**
         * Set cookie.
         *
         * @param string $key   → name the data to save
         * @param string $value → the data to save
         * @param string $time  → expiration time in days
         *
         * @return boolean
         */
        /*public static function set($key, $value, $time = 365)
        {
            $prefix = self::$prefix . $key;

            return setcookie($prefix, $value, time() + (86400 * $time), '/');
        }*/

        //** EDITED VERSION *********************************************
        // 86400 = 1day
        // 3600 = 1hr
        // 1800 = 30min
        // 900 = 15min
        // 450 = 7.5min
        // 225 = 3.75min
        // 112.5 = 1.875min
        // 56.25 = 0.9375sec
        // 28.125 = 0.46sec
        // 14.0625 = 0.23sec
        // 7.03125 = 0.11sec

        public static function set($key, $value, $time = 3600)
        {
            $prefix = self::$prefix . $key;

            return setcookie($prefix, $value, time() + $time, '/');
        }

        //** END EDITED VERSION *********************************************

        /**
         * Get item from cookie.
         *
         * @param string $key → item to look for in cookie
         *
         * @return mixed|false → returns cookie value, cookies array or false
         */
        public static function get($key = '')
        {
            if (isset($_COOKIE[self::$prefix . $key])) {
                return $_COOKIE[self::$prefix . $key];
            }

            return (isset($_COOKIE) && count($_COOKIE)) ? $_COOKIE : false;
        }

        /**
         * Extract item from cookie then delete cookie and return the item.
         *
         * @param string $key → item to extract
         *
         * @return string|false → return item or false when key does not exists
         */
        public static function pull($key)
        {
            if (isset($_COOKIE[self::$prefix . $key])) {
                setcookie(self::$prefix . $key, '', time() - 3600, '/');

                return $_COOKIE[self::$prefix . $key];
            }

            return false;
        }

        /**
         * Empties and destroys the cookies.
         *
         * @param string $key → cookie name to destroy. Not set to delete all
         *
         * @return boolean
         */
        public static function destroy($key = '')
        {
            if (isset($_COOKIE[self::$prefix . $key])) {
                setcookie(self::$prefix . $key, '', time() - 3600, '/');

                return true;
            }

            if (count($_COOKIE) > 0) {
                foreach ($_COOKIE as $key => $value) {
                    setcookie($key, '', time() - 3600, '/');
                }

                return true;
            }

            return false;
        }

        /**
         * Set cookie prefix.
         *
         * @since 1.1.6
         *
         * @param string $prefix → cookie prefix
         *
         * @return boolean
         */
        public static function setPrefix($prefix)
        {
            if (!empty($prefix) && is_string($prefix)) {
                self::$prefix = $prefix;
                return true;
            }

            return false;
        }

        /**
         * Get cookie prefix.
         *
         * @since 1.1.5
         *
         * @return string
         */
        public static function getPrefix()
        {
            return self::$prefix;
        }
    }

}