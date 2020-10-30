<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\Hosting\SDK\Models;

use AlibabaCloud\Tea\Model;

/**
 * the file op info.
 */
class FileDeltaResponse extends Model
{
    /**
     * @var string
     */
    public $currentCategory;

    /**
     * @var BaseFileResponse
     */
    public $file;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $op;
    protected $_name = [
        'currentCategory' => 'current_category',
        'file'            => 'file',
        'fileId'          => 'file_id',
        'op'              => 'op',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCategory) {
            $res['current_category'] = $this->currentCategory;
        }
        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileDeltaResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current_category'])) {
            $model->currentCategory = $map['current_category'];
        }
        if (isset($map['file'])) {
            $model->file = BaseFileResponse::fromMap($map['file']);
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        return $model;
    }
}
