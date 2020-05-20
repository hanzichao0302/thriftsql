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

class TOperationHandle
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'operationId',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\THandleIdentifier',
        ),
        2 => array(
            'var' => 'operationType',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'hasResultSet',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        4 => array(
            'var' => 'modifiedRowCount',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
    );

    /**
     * @var \ThriftGenerated\THandleIdentifier
     */
    public $operationId = null;
    /**
     * @var int
     */
    public $operationType = null;
    /**
     * @var bool
     */
    public $hasResultSet = null;
    /**
     * @var double
     */
    public $modifiedRowCount = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['operationId'])) {
                $this->operationId = $vals['operationId'];
            }
            if (isset($vals['operationType'])) {
                $this->operationType = $vals['operationType'];
            }
            if (isset($vals['hasResultSet'])) {
                $this->hasResultSet = $vals['hasResultSet'];
            }
            if (isset($vals['modifiedRowCount'])) {
                $this->modifiedRowCount = $vals['modifiedRowCount'];
            }
        }
    }

    public function getName()
    {
        return 'TOperationHandle';
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
                        $this->operationId = new \ThriftGenerated\THandleIdentifier();
                        $xfer += $this->operationId->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->operationType);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->hasResultSet);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->modifiedRowCount);
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
        $xfer += $output->writeStructBegin('TOperationHandle');
        if ($this->operationId !== null) {
            if (!is_object($this->operationId)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('operationId', TType::STRUCT, 1);
            $xfer += $this->operationId->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->operationType !== null) {
            $xfer += $output->writeFieldBegin('operationType', TType::I32, 2);
            $xfer += $output->writeI32($this->operationType);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->hasResultSet !== null) {
            $xfer += $output->writeFieldBegin('hasResultSet', TType::BOOL, 3);
            $xfer += $output->writeBool($this->hasResultSet);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->modifiedRowCount !== null) {
            $xfer += $output->writeFieldBegin('modifiedRowCount', TType::DOUBLE, 4);
            $xfer += $output->writeDouble($this->modifiedRowCount);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
