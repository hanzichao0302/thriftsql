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

class BeeswaxService_close_result
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'error',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\QueryNotFoundException',
        ),
        2 => array(
            'var' => 'error2',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\ThriftGenerated\BeeswaxException',
        ),
    );

    /**
     * @var \ThriftGenerated\QueryNotFoundException
     */
    public $error = null;
    /**
     * @var \ThriftGenerated\BeeswaxException
     */
    public $error2 = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['error'])) {
                $this->error = $vals['error'];
            }
            if (isset($vals['error2'])) {
                $this->error2 = $vals['error2'];
            }
        }
    }

    public function getName()
    {
        return 'BeeswaxService_close_result';
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
                        $this->error = new \ThriftGenerated\QueryNotFoundException();
                        $xfer += $this->error->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->error2 = new \ThriftGenerated\BeeswaxException();
                        $xfer += $this->error2->read($input);
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
        $xfer += $output->writeStructBegin('BeeswaxService_close_result');
        if ($this->error !== null) {
            $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
            $xfer += $this->error->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->error2 !== null) {
            $xfer += $output->writeFieldBegin('error2', TType::STRUCT, 2);
            $xfer += $this->error2->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
