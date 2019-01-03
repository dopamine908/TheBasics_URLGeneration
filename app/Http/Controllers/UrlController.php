<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UrlController extends Controller
{
    /**
     * 生成 url 用法
     */
    public function seeUrl() {
        /**
         * 基礎用法
         */
        dump('基礎用法');
        dump(url('/'));
        dump(URL::to('/'));
        dump('------------------------------------');

        /**
         * 取得當前url
         */
        dump('取得當前url');
        dump(url()->current());
        dump(URL::current());
        dump('------------------------------------');

        /**
         * 取得當前url(包含get條件)
         */
        dump('取得當前url(包含get條件)');
        dump(url()->full());
        dump(URL::full());
        dump('------------------------------------');

        /**
         * 取得上一個request的完整的url
         */
        dump('取得上一個request的完整的url');
        dump(url()->previous());
        dump(URL::previous());
        dump('------------------------------------');

        /**
         * 取得named route 的 url
         */
        dump('取得named route 的 url');
        dump(route('welcome_home'));
        dump(URL::route('welcome_home'));
        dump('------------------------------------');

        /**
         * 取得controller@function 的 url
         */
        dump('取得controller@function 的 url');
        dump(action('UrlController@demo'));
        dump(URL::action('UrlController@demo'));
    }
}
