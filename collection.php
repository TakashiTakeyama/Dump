<?php

class Collection extends ArrayObject
{
    /**
     * @param $fn
     * @return Collection
     *
     * DSL: 特定の作業の遂行や問題の解決に特化して設計されたプログラミング言語のこと。
     * ドメイン固有言語
     */
    function map($fn)
    {
        return new self(array_map($fn, (array)$this));
    }

    function __call($method, $args)
    {
        $method = preg_replace('/[A-Z]/', '_\0', $method);
        $func = 'array_' . $method;

        if (!function_exists($func)) {
            throw new \BadMethodCallException("func is not exists");
        }

        $args = array_merge([(array)$this], $args);
        $res = call_user_func_array($func, $args);

        if (is_array($res)) {
            return new self($res);
        } else {
            return $res;
        }
    }
}

echo (new Collection(range(0, 10000)))
    ->filter(function ($v) {
        return $v % 2 === 0;
    })
    ->map(function ($v) {
        return $v ** 2;
    })
    ->filter(function ($v) {
        return $v > 20;
    })
    ->sum();
