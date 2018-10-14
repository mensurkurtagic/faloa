<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update a job.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.UpdateJobRequest</code>
 */
class UpdateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Google Cloud Platform project that the job
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     */
    private $region = '';
    /**
     * Required. The job ID.
     *
     * Generated from protobuf field <code>string job_id = 3;</code>
     */
    private $job_id = '';
    /**
     * Required. The changes to the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Job job = 4;</code>
     */
    private $job = null;
    /**
     * Required. Specifies the path, relative to <code>Job</code>, of
     * the field to update. For example, to update the labels of a Job the
     * <code>update_mask</code> parameter would be specified as
     * <code>labels</code>, and the `PATCH` request body would specify the new
     * value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     * field that can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 5;</code>
     */
    private $update_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct();
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the job
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the job
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Required. The job ID.
     *
     * Generated from protobuf field <code>string job_id = 3;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Required. The job ID.
     *
     * Generated from protobuf field <code>string job_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Required. The changes to the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Job job = 4;</code>
     * @return \Google\Cloud\Dataproc\V1\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Required. The changes to the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Job job = 4;</code>
     * @param \Google\Cloud\Dataproc\V1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\Job::class);
        $this->job = $var;

        return $this;
    }

    /**
     * Required. Specifies the path, relative to <code>Job</code>, of
     * the field to update. For example, to update the labels of a Job the
     * <code>update_mask</code> parameter would be specified as
     * <code>labels</code>, and the `PATCH` request body would specify the new
     * value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     * field that can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 5;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Required. Specifies the path, relative to <code>Job</code>, of
     * the field to update. For example, to update the labels of a Job the
     * <code>update_mask</code> parameter would be specified as
     * <code>labels</code>, and the `PATCH` request body would specify the new
     * value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     * field that can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 5;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

