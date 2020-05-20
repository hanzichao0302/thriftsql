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

interface BeeswaxServiceIf
{
    /**
     * Submit a query and return a handle (QueryHandle). The query runs asynchronously.
     * 
     * @param \ThriftGenerated\Query $query
     * @return \ThriftGenerated\QueryHandle
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function query(\ThriftGenerated\Query $query);
    /**
     * run a query synchronously and return a handle (QueryHandle).
     * 
     * @param \ThriftGenerated\Query $query
     * @param string $clientCtx
     * @return \ThriftGenerated\QueryHandle
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function executeAndWait(\ThriftGenerated\Query $query, $clientCtx);
    /**
     * Get the query plan for a query.
     * 
     * @param \ThriftGenerated\Query $query
     * @return \ThriftGenerated\QueryExplanation
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function explain(\ThriftGenerated\Query $query);
    /**
     * Get the results of a query. This is non-blocking. Caller should check
     * Results.ready to determine if the results are in yet. The call requests
     * the batch size of fetch.
     * 
     * @param \ThriftGenerated\QueryHandle $query_id
     * @param bool $start_over
     * @param int $fetch_size
     * @return \ThriftGenerated\Results
     * @throws \ThriftGenerated\QueryNotFoundException
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function fetch(\ThriftGenerated\QueryHandle $query_id, $start_over, $fetch_size);
    /**
     * Get the state of the query
     * 
     * @param \ThriftGenerated\QueryHandle $handle
     * @return int
     * @throws \ThriftGenerated\QueryNotFoundException
     */
    public function get_state(\ThriftGenerated\QueryHandle $handle);
    /**
     * Get the result metadata
     * 
     * @param \ThriftGenerated\QueryHandle $handle
     * @return \ThriftGenerated\ResultsMetadata Metadata information about the results.
     * Applicable only for SELECT.
     * 
     * @throws \ThriftGenerated\QueryNotFoundException
     */
    public function get_results_metadata(\ThriftGenerated\QueryHandle $handle);
    /**
     * Used to test connection to server.  A "noop" command.
     * 
     * @param string $s
     * @return string
     */
    public function echo($s);
    /**
     * Returns a string representation of the configuration object being used.
     * Handy for debugging.
     * 
     * @return string
     */
    public function dump_config();
    /**
     * Get the log messages related to the given context.
     * 
     * @param string $context
     * @return string
     * @throws \ThriftGenerated\QueryNotFoundException
     */
    public function get_log($context);
    /**
     * @param bool $include_hadoop
     * @return \ThriftGenerated\ConfigVariable[]
     */
    public function get_default_configuration($include_hadoop);
    /**
     * @param \ThriftGenerated\QueryHandle $handle
     * @throws \ThriftGenerated\QueryNotFoundException
     * @throws \ThriftGenerated\BeeswaxException
     */
    public function close(\ThriftGenerated\QueryHandle $handle);
    /**
     * @param string $log_context
     */
    public function clean($log_context);
}