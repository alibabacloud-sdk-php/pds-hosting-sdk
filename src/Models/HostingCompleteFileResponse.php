<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\Hosting\SDK\Models;

use AlibabaCloud\Tea\Model;

/**
 * complete file response.
 */
class HostingCompleteFileResponse extends Model
{
    /**
     * @description Content Hash
     *
     * @example EA4942AA8761213890A5C386F88E6464D2C31CA3
     *
     * @var string
     */
    public $contentHash;

    /**
     * @description content_hash_name
     *
     * @example sha1
     *
     * @var string
     */
    public $contentHashName;

    /**
     * @description content_type
     *
     * @example application/json
     *
     * @var string
     */
    public $contentType;

    /**
     * @description crc
     *
     * @var string
     */
    public $crc;

    /**
     * @description crc64_hash
     *
     * @var string
     */
    public $crc64Hash;

    /**
     * @description created_at
     *
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description description
     *
     * @example file description
     *
     * @var string
     */
    public $description;

    /**
     * @description domain_id
     *
     * @example test001
     *
     * @var string
     */
    public $domainId;

    /**
     * @description download_url
     *
     * @example https://ccp.data.aliyuncs.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description drive_id
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description file_extension
     *
     * @example jpg
     *
     * @var string
     */
    public $fileExtension;

    /**
     * @description file_path
     *
     * @example /a.jpg
     *
     * @var string
     */
    public $filePath;

    /**
     * @description name
     *
     * @example ccp.jpg
     *
     * @var string
     */
    public $name;

    /**
     * @description parent_file_id
     *
     * @example /
     *
     * @var string
     */
    public $parentFilePath;

    /**
     * @description share_id
     *
     * @example 5d5b846942cf94fa72324c14a4bda34e81da635d
     *
     * @var string
     */
    public $shareId;

    /**
     * @description Size
     *
     * @example 1024
     *
     * @var int
     */
    public $size;

    /**
     * @description status
     *
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @description thumbnail
     *
     * @example https://ccp.data.aliyuncs.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $thumbnail;

    /**
     * @description trashed_at
     *
     * @var string
     */
    public $trashedAt;

    /**
     * @description type
     *
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description updated_at
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @description upload_id
     *
     * @example C9DCFE5A82644AC7A02DB74C30C934A6
     *
     * @var string
     */
    public $uploadId;

    /**
     * @description url
     *
     * @example https://ccp.data.aliyuncs.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'contentHash'     => 'content_hash',
        'contentHashName' => 'content_hash_name',
        'contentType'     => 'content_type',
        'crc'             => 'crc',
        'crc64Hash'       => 'crc64_hash',
        'createdAt'       => 'created_at',
        'description'     => 'description',
        'domainId'        => 'domain_id',
        'downloadUrl'     => 'download_url',
        'driveId'         => 'drive_id',
        'fileExtension'   => 'file_extension',
        'filePath'        => 'file_path',
        'name'            => 'name',
        'parentFilePath'  => 'parent_file_path',
        'shareId'         => 'share_id',
        'size'            => 'size',
        'status'          => 'status',
        'thumbnail'       => 'thumbnail',
        'trashedAt'       => 'trashed_at',
        'type'            => 'type',
        'updatedAt'       => 'updated_at',
        'uploadId'        => 'upload_id',
        'url'             => 'url',
    ];

    public function validate()
    {
        Model::validatePattern('domainId', $this->domainId, '[a-z0-9A-Z]+');
        Model::validatePattern('driveId', $this->driveId, '[0-9]+');
        Model::validatePattern('name', $this->name, '[a-zA-Z0-9.-]{1,1000}');
        Model::validatePattern('parentFilePath', $this->parentFilePath, '[a-z0-9]{1,50}');
        Model::validatePattern('shareId', $this->shareId, '[0-9]+');
        Model::validateRequired('name', $this->name, true);
        Model::validateMaxLength('parentFilePath', $this->parentFilePath, 50);
        Model::validateMinLength('parentFilePath', $this->parentFilePath, 40);
        Model::validateMaximum('size', $this->size, 53687091200);
        Model::validateMinimum('size', $this->size, 0);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentHash) {
            $res['content_hash'] = $this->contentHash;
        }
        if (null !== $this->contentHashName) {
            $res['content_hash_name'] = $this->contentHashName;
        }
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }
        if (null !== $this->crc) {
            $res['crc'] = $this->crc;
        }
        if (null !== $this->crc64Hash) {
            $res['crc64_hash'] = $this->crc64Hash;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->downloadUrl) {
            $res['download_url'] = $this->downloadUrl;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileExtension) {
            $res['file_extension'] = $this->fileExtension;
        }
        if (null !== $this->filePath) {
            $res['file_path'] = $this->filePath;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentFilePath) {
            $res['parent_file_path'] = $this->parentFilePath;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thumbnail) {
            $res['thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->trashedAt) {
            $res['trashed_at'] = $this->trashedAt;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HostingCompleteFileResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_hash'])) {
            $model->contentHash = $map['content_hash'];
        }
        if (isset($map['content_hash_name'])) {
            $model->contentHashName = $map['content_hash_name'];
        }
        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }
        if (isset($map['crc'])) {
            $model->crc = $map['crc'];
        }
        if (isset($map['crc64_hash'])) {
            $model->crc64Hash = $map['crc64_hash'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['download_url'])) {
            $model->downloadUrl = $map['download_url'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_extension'])) {
            $model->fileExtension = $map['file_extension'];
        }
        if (isset($map['file_path'])) {
            $model->filePath = $map['file_path'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parent_file_path'])) {
            $model->parentFilePath = $map['parent_file_path'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['thumbnail'])) {
            $model->thumbnail = $map['thumbnail'];
        }
        if (isset($map['trashed_at'])) {
            $model->trashedAt = $map['trashed_at'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
