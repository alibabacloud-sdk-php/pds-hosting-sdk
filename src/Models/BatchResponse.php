<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Aliyun\Hosting\SDK\Models;

use AlibabaCloud\Tea\Model;

/**
 * batch operation response.
 */
class BatchResponse extends Model
{
    /**
     * @description responses 返回结果合集
     *
     * @var BatchSubResponse[]
     */
    public $responses;
    protected $_name = [
        'responses' => 'responses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responses) {
            $res['responses'] = [];
            if (null !== $this->responses && \is_array($this->responses)) {
                $n = 0;
                foreach ($this->responses as $item) {
                    $res['responses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['responses'])) {
            if (!empty($map['responses'])) {
                $model->responses = [];
                $n                = 0;
                foreach ($map['responses'] as $item) {
                    $model->responses[$n++] = null !== $item ? BatchSubResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}