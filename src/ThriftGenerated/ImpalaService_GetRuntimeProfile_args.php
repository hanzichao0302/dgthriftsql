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

class ImpalaService_GetRuntimeProfile_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'query_id',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\QueryHandle',
        ),
    );

    /**
     * @var \ThriftGenerated\QueryHandle
     */
    public $query_id = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['query_id'])) {
                $this->query_id = $vals['query_id'];
            }
        }
    }

    public function getName()
    {
        return 'ImpalaService_GetRuntimeProfile_args';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->query_id = new \ThriftGenerated\QueryHandle();
                        $xfer += $this->query_id->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ImpalaService_GetRuntimeProfile_args');
        if ($this->query_id !== null) {
            if (!is_object($this->query_id)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('query_id', TType::STRUCT, 1);
            $xfer += $this->query_id->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
