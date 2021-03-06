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

interface ImpalaServiceIf extends \ThriftGenerated\BeeswaxServiceIf
{
    /**
     * @param \ThriftGenerated\QueryHandle $query_id
     * @return \ThriftGenerated\TStatus
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function Cancel(\ThriftGenerated\QueryHandle $query_id);
    /**
     * @return \ThriftGenerated\TStatus
     */
    public function ResetCatalog();
    /**
     * @param \ThriftGenerated\TResetTableReq $request
     * @return \ThriftGenerated\TStatus
     */
    public function ResetTable(\ThriftGenerated\TResetTableReq $request);
    /**
     * @param \ThriftGenerated\QueryHandle $query_id
     * @return string
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function GetRuntimeProfile(\ThriftGenerated\QueryHandle $query_id);
    /**
     * @param \ThriftGenerated\QueryHandle $handle
     * @return \ThriftGenerated\TInsertResult
     * @throws \ThriftGenerated\QueryNotFoundException
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function CloseInsert(\ThriftGenerated\QueryHandle $handle);
    /**
     * @return \ThriftGenerated\TPingImpalaServiceResp
     */
    public function PingImpalaService();
    /**
     * @param \ThriftGenerated\QueryHandle $handle
     * @return \ThriftGenerated\TExecSummary
     * @throws \ThriftGenerated\QueryNotFoundException
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function GetExecSummary(\ThriftGenerated\QueryHandle $handle);
}
