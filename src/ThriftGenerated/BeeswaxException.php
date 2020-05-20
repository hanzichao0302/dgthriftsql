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

class BeeswaxException extends TException
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'message',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'log_context',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'handle',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\QueryHandle',
        ),
        4 => array(
            'var' => 'errorCode',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        5 => array(
            'var' => 'SQLState',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $message = null;
    /**
     * @var string
     */
    public $log_context = null;
    /**
     * @var \ThriftGenerated\QueryHandle
     */
    public $handle = null;
    /**
     * @var int
     */
    public $errorCode = 0;
    /**
     * @var string
     */
    public $SQLState = "     ";

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['message'])) {
                $this->message = $vals['message'];
            }
            if (isset($vals['log_context'])) {
                $this->log_context = $vals['log_context'];
            }
            if (isset($vals['handle'])) {
                $this->handle = $vals['handle'];
            }
            if (isset($vals['errorCode'])) {
                $this->errorCode = $vals['errorCode'];
            }
            if (isset($vals['SQLState'])) {
                $this->SQLState = $vals['SQLState'];
            }
        }
    }

    public function getName()
    {
        return 'BeeswaxException';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->message);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->log_context);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->handle = new \ThriftGenerated\QueryHandle();
                        $xfer += $this->handle->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->errorCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->SQLState);
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
        $xfer += $output->writeStructBegin('BeeswaxException');
        if ($this->message !== null) {
            $xfer += $output->writeFieldBegin('message', TType::STRING, 1);
            $xfer += $output->writeString($this->message);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->log_context !== null) {
            $xfer += $output->writeFieldBegin('log_context', TType::STRING, 2);
            $xfer += $output->writeString($this->log_context);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->handle !== null) {
            if (!is_object($this->handle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('handle', TType::STRUCT, 3);
            $xfer += $this->handle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->errorCode !== null) {
            $xfer += $output->writeFieldBegin('errorCode', TType::I32, 4);
            $xfer += $output->writeI32($this->errorCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->SQLState !== null) {
            $xfer += $output->writeFieldBegin('SQLState', TType::STRING, 5);
            $xfer += $output->writeString($this->SQLState);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
