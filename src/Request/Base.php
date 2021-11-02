<?php

namespace HumanToComputer\Universign\Request;

require_once dirname(__DIR__) . '/../lib/xmlrpc/xmlrpc.inc';
require_once dirname(__DIR__) . '/../lib/xmlrpc/xmlrpcs.inc';
require_once dirname(__DIR__) . '/../lib/xmlrpc/xmlrpc_wrappers.inc';

abstract class Base
{
	/**
	 * @return \xmlrpcval
	 */
    abstract public function buildRpcValues(): \xmlrpcval;

	protected static function buildRpcValue($value, $type = null): \xmlrpcval
    {
        if (!$type) {
            $type = gettype($value);
        }
        switch ($type) {
            case 'string':
                return new \xmlrpcval($value, 'string');
            case 'base64':
                return new \xmlrpcval($value, 'base64');
            case 'array':
                $data = [];
                foreach ($value as $v) {
                    $data[] = self::buildRpcValue($v);
                }
                return new \xmlrpcval($data, 'array');
            case 'double':
            case 'float':
                return new \xmlrpcval($value, 'double');
            case 'boolean':
            case 'bool':
                return new \xmlrpcval($value, 'boolean');
            case 'integer':
            case 'int':
                return new \xmlrpcval($value, 'int');
            case 'dateTime':
                return new \xmlrpcval($value, 'dateTime.iso8601');
            default:
                if ($value instanceof Base) {
                    return $value->buildRpcValues();
                }
                return new \xmlrpcval($value);
        }
    }
}
