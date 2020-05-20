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

class TStatus
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'statusCode',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'infoMessages',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        3 => array(
            'var' => 'sqlState',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'errorCode',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        5 => array(
            'var' => 'errorMessage',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $statusCode = null;
    /**
     * @var string[]
     */
    public $infoMessages = null;
    /**
     * @var string
     */
    public $sqlState = null;
    /**
     * @var int
     */
    public $errorCode = null;
    /**
     * @var string
     */
    public $errorMessage = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['statusCode'])) {
                $this->statusCode = $vals['statusCode'];
            }
            if (isset($vals['infoMessages'])) {
                $this->infoMessages = $vals['infoMessages'];
            }
            if (isset($vals['sqlState'])) {
                $this->sqlState = $vals['sqlState'];
            }
            if (isset($vals['errorCode'])) {
                $this->errorCode = $vals['errorCode'];
            }
            if (isset($vals['errorMessage'])) {
                $this->errorMessage = $vals['errorMessage'];
            }
        }
    }

    public function getName()
    {
        return 'TStatus';
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
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->statusCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->infoMessages = array();
                        $_size118 = 0;
                        $_etype121 = 0;
                        $xfer += $input->readListBegin($_etype121, $_size118);
                        for ($_i122 = 0; $_i122 < $_size118; ++$_i122) {
                            $elem123 = null;
                            $xfer += $input->readString($elem123);
                            $this->infoMessages []= $elem123;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->sqlState);
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
                        $xfer += $input->readString($this->errorMessage);
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
        $xfer += $output->writeStructBegin('TStatus');
        if ($this->statusCode !== null) {
            $xfer += $output->writeFieldBegin('statusCode', TType::I32, 1);
            $xfer += $output->writeI32($this->statusCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->infoMessages !== null) {
            if (!is_array($this->infoMessages)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('infoMessages', TType::LST, 2);
            $output->writeListBegin(TType::STRING, count($this->infoMessages));
            foreach ($this->infoMessages as $iter124) {
                $xfer += $output->writeString($iter124);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sqlState !== null) {
            $xfer += $output->writeFieldBegin('sqlState', TType::STRING, 3);
            $xfer += $output->writeString($this->sqlState);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->errorCode !== null) {
            $xfer += $output->writeFieldBegin('errorCode', TType::I32, 4);
            $xfer += $output->writeI32($this->errorCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->errorMessage !== null) {
            $xfer += $output->writeFieldBegin('errorMessage', TType::STRING, 5);
            $xfer += $output->writeString($this->errorMessage);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
