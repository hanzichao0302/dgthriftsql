<?php
namespace ThriftGenerated;

/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class Constant extends \Thrift\Type\TConstant
{
    static protected $PRIMITIVE_TYPES;
    static protected $COMPLEX_TYPES;
    static protected $COLLECTION_TYPES;
    static protected $TYPE_NAMES;
    static protected $CHARACTER_MAXIMUM_LENGTH;
    static protected $PRECISION;
    static protected $SCALE;

    protected static function init_PRIMITIVE_TYPES()
    {
        return array(
                        0 => true,
                        1 => true,
                        2 => true,
                        3 => true,
                        4 => true,
                        5 => true,
                        6 => true,
                        7 => true,
                        8 => true,
                        9 => true,
                        15 => true,
                        16 => true,
                        17 => true,
                        18 => true,
                        19 => true,
        );
    }

    protected static function init_COMPLEX_TYPES()
    {
        return array(
                        10 => true,
                        11 => true,
                        12 => true,
                        13 => true,
                        14 => true,
        );
    }

    protected static function init_COLLECTION_TYPES()
    {
        return array(
                        10 => true,
                        11 => true,
        );
    }

    protected static function init_TYPE_NAMES()
    {
        return array(
                        10 => "ARRAY",
                        4 => "BIGINT",
                        9 => "BINARY",
                        0 => "BOOLEAN",
                        19 => "CHAR",
                        17 => "DATE",
                        15 => "DECIMAL",
                        6 => "DOUBLE",
                        5 => "FLOAT",
                        3 => "INT",
                        11 => "MAP",
                        16 => "NULL",
                        2 => "SMALLINT",
                        7 => "STRING",
                        12 => "STRUCT",
                        8 => "TIMESTAMP",
                        1 => "TINYINT",
                        13 => "UNIONTYPE",
                        18 => "VARCHAR",
        );
    }

    protected static function init_CHARACTER_MAXIMUM_LENGTH()
    {
        return "characterMaximumLength";
    }

    protected static function init_PRECISION()
    {
        return "precision";
    }

    protected static function init_SCALE()
    {
        return "scale";
    }
}
