<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Buckets represented as ranges, along with replacement values. Ranges must
 * be non-overlapping.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.BucketingConfig.Bucket</code>
 */
class BucketingConfig_Bucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Lower bound of the range, inclusive. Type should be the same as max if
     * used.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value min = 1;</code>
     */
    private $min = null;
    /**
     * Upper bound of the range, exclusive; type must match min.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value max = 2;</code>
     */
    private $max = null;
    /**
     * Replacement value for this bucket. If not provided
     * the default behavior will be to hyphenate the min-max range.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value replacement_value = 3;</code>
     */
    private $replacement_value = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Lower bound of the range, inclusive. Type should be the same as max if
     * used.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value min = 1;</code>
     * @return \Google\Cloud\Dlp\V2beta1\Value
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Lower bound of the range, inclusive. Type should be the same as max if
     * used.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value min = 1;</code>
     * @param \Google\Cloud\Dlp\V2beta1\Value $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\Value::class);
        $this->min = $var;

        return $this;
    }

    /**
     * Upper bound of the range, exclusive; type must match min.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value max = 2;</code>
     * @return \Google\Cloud\Dlp\V2beta1\Value
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Upper bound of the range, exclusive; type must match min.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value max = 2;</code>
     * @param \Google\Cloud\Dlp\V2beta1\Value $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\Value::class);
        $this->max = $var;

        return $this;
    }

    /**
     * Replacement value for this bucket. If not provided
     * the default behavior will be to hyphenate the min-max range.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value replacement_value = 3;</code>
     * @return \Google\Cloud\Dlp\V2beta1\Value
     */
    public function getReplacementValue()
    {
        return $this->replacement_value;
    }

    /**
     * Replacement value for this bucket. If not provided
     * the default behavior will be to hyphenate the min-max range.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Value replacement_value = 3;</code>
     * @param \Google\Cloud\Dlp\V2beta1\Value $var
     * @return $this
     */
    public function setReplacementValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2beta1\Value::class);
        $this->replacement_value = $var;

        return $this;
    }

}

