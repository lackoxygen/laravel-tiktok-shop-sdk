<?php

namespace Lackoxygen\TiktokShop\Request\Material;

use Lackoxygen\TiktokShop\Request\Request;

class Material extends Request implements MaterialInterface
{
    /**
     * @inheritDoc
     */
    public function materialCreateFolder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.createFolder')
            ->path('/material/createFolder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialEditFolder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.editFolder')
            ->path('/material/editFolder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialMoveFolderToRecycleBin(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.moveFolderToRecycleBin')
            ->path('/material/moveFolderToRecycleBin')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialMoveMaterialToRecycleBin(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.moveMaterialToRecycleBin')
            ->path('/material/moveMaterialToRecycleBin')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialRecoverMaterial(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.recoverMaterial')
            ->path('/material/recoverMaterial')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialEditMaterial(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.editMaterial')
            ->path('/material/editMaterial')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialBatchUploadVideoAsync(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.batchUploadVideoAsync')
            ->path('/material/batchUploadVideoAsync')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialBatchUploadImageSync(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.batchUploadImageSync')
            ->path('/material/batchUploadImageSync')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialGetFolderInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.getFolderInfo')
            ->path('/material/getFolderInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialSearchFolder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.searchFolder')
            ->path('/material/searchFolder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialUploadVideoAsync(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.uploadVideoAsync')
            ->path('/material/uploadVideoAsync')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialUploadImageSync(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.uploadImageSync')
            ->path('/material/uploadImageSync')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialQueryMaterialDetail(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.queryMaterialDetail')
            ->path('/material/queryMaterialDetail')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialDeleteFolder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.deleteFolder')
            ->path('/material/deleteFolder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialDeleteMaterial(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.deleteMaterial')
            ->path('/material/deleteMaterial')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialRecoverFolder(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.recoverFolder')
            ->path('/material/recoverFolder')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialGetCapInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.get_cap_info')
            ->path('/material/get_cap_info')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialMGetPlayInfo(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.mGetPlayInfo')
            ->path('/material/mGetPlayInfo')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function materialEasyShuttle(array $params = [])
    {
        $this->builder->method('POST')
            ->service('material.easyShuttle')
            ->path('/material/easyShuttle')
            ->params($params);
    }
}
