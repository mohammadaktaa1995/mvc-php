<?php

return [
  'classes' => [
    'request'   =>  'System\\Http\\Request',
    'response'  =>  'System\\Http\\Response',
    'route'     =>  'System\\Route',
    'session'   =>  'System\\Session',
    'cookie'    =>  'System\\Cookie',
    'load'      =>  'System\\Loader',
    'html'      =>  'System\\Html',
    'db'        =>  'System\\Database',
    'url'       =>  'System\\Url',
    'validator' =>  'System\\Validation\\Validator',
    'paginatio' =>  'System\\Paginatio',
    'view'      =>  'System\\View',
    'hash'      =>  'System\\Hash',
  ],
  'middlewares' => [
    'auth'        => 'app\\Middlewares\\AuthenticateMiddleware',
    'ajax'        => 'app\\Middlewares\\AjaxMiddleware',
    'permissions' => 'app\\Middlewares\\PermissionsMiddleware',
  ]
];
