<?php

namespace Framework\Mariana;

use Framework\Mariana\DataResponse;

interface Response{
    public function getStatusCode(): int;
    public function getDataResponse(): DataResponse;
}