<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\Hosting\SDK\Models;

use AlibabaCloud\Tea\Model;

/**
 * Get UploadUrl Response.
 */
class GetUploadUrlResponse extends Model
{
    /**
     * @description created_at
     *
     * @example 2019-09-11T16:34:36.977Z
     *
     * @var string
     */
    public $createAt;

    /**
     * @description domain_id
     *
     * @example test001
     *
     * @var string
     */
    public $domainId;

    /**
     * @description drive_id
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description file_id
     *
     * @example 5d5b846942cf94fa72324c14a4bda34e81da635d
     *
     * @var string
     */
    public $fileId;

    /**
     * @description part_info_list
     *
     * @example
     *
     * @var UploadPartInfo[]
     */
    public $partInfoList;

    /**
     * @description upload_id
     *
     * @example F3C25CDFA5C74ECB8DE32672F6211FD4
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'createAt'     => 'create_at',
        'domainId'     => 'domain_id',
        'driveId'      => 'drive_id',
        'fileId'       => 'file_id',
        'partInfoList' => 'part_info_list',
        'uploadId'     => 'upload_id',
    ];

    public function validate()
    {
        Model::validatePattern('domainId', $this->domainId, '[a-z0-9A-Z]+');
        Model::validatePattern('driveId', $this->driveId, '[0-9]+');
        Model::validatePattern('fileId', $this->fileId, '[a-z0-9]{1,50}');
        Model::validateMaxLength('fileId', $this->fileId, 50);
        Model::validateMinLength('fileId', $this->fileId, 40);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createAt) {
            $res['create_at'] = $this->createAt;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->partInfoList) {
            $res['part_info_list'] = [];
            if (null !== $this->partInfoList && \is_array($this->partInfoList)) {
                $n = 0;
                foreach ($this->partInfoList as $item) {
                    $res['part_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadUrlResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['create_at'])) {
            $model->createAt = $map['create_at'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['part_info_list'])) {
            if (!empty($map['part_info_list'])) {
                $model->partInfoList = [];
                $n                   = 0;
                foreach ($map['part_info_list'] as $item) {
                    $model->partInfoList[$n++] = null !== $item ? UploadPartInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
