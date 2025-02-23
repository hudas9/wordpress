<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/ad_group_ad_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [AdGroupAdService.RemoveAutomaticallyCreatedAssetsRequest][].
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.RemoveAutomaticallyCreatedAssetsRequest</code>
 */
class RemoveAutomaticallyCreatedAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the AdGroupAd from which to remove
     * automatically created assets.
     *
     * Generated from protobuf field <code>string ad_group_ad = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_ad = '';
    /**
     * Required. List of assets with field type to be removed from the AdGroupAd.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.AssetsWithFieldType assets_with_field_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $assets_with_field_type;

    /**
     * @param string                                                   $adGroupAd           Required. The resource name of the AdGroupAd from which to remove
     *                                                                                      automatically created assets.
     * @param \Google\Ads\GoogleAds\V18\Services\AssetsWithFieldType[] $assetsWithFieldType Required. List of assets with field type to be removed from the AdGroupAd.
     *
     * @return \Google\Ads\GoogleAds\V18\Services\RemoveAutomaticallyCreatedAssetsRequest
     *
     * @experimental
     */
    public static function build(string $adGroupAd, array $assetsWithFieldType): self
    {
        return (new self())
            ->setAdGroupAd($adGroupAd)
            ->setAssetsWithFieldType($assetsWithFieldType);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ad_group_ad
     *           Required. The resource name of the AdGroupAd from which to remove
     *           automatically created assets.
     *     @type array<\Google\Ads\GoogleAds\V18\Services\AssetsWithFieldType>|\Google\Protobuf\Internal\RepeatedField $assets_with_field_type
     *           Required. List of assets with field type to be removed from the AdGroupAd.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\AdGroupAdService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the AdGroupAd from which to remove
     * automatically created assets.
     *
     * Generated from protobuf field <code>string ad_group_ad = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    /**
     * Required. The resource name of the AdGroupAd from which to remove
     * automatically created assets.
     *
     * Generated from protobuf field <code>string ad_group_ad = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Required. List of assets with field type to be removed from the AdGroupAd.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.AssetsWithFieldType assets_with_field_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetsWithFieldType()
    {
        return $this->assets_with_field_type;
    }

    /**
     * Required. List of assets with field type to be removed from the AdGroupAd.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.AssetsWithFieldType assets_with_field_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V18\Services\AssetsWithFieldType>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetsWithFieldType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V18\Services\AssetsWithFieldType::class);
        $this->assets_with_field_type = $arr;

        return $this;
    }

}

