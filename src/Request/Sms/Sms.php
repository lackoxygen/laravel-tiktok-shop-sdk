<?php

namespace Lackoxygen\TiktokShop\Request\Sms;

use Lackoxygen\TiktokShop\Request\Request;

class Sms extends Request implements SmsInterface
{
    /**
     * @inheritDoc
     */
    public function smsTemplateapply(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.template/apply')
            ->path('/sms/template/apply')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsPublictemplate(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.public/template')
            ->path('/sms/public/template')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSignapply(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.sign/apply')
            ->path('/sms/sign/apply')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsTemplaterevoke(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.template/revoke')
            ->path('/sms/template/revoke')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSignapplylist(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.sign/apply/list')
            ->path('/sms/sign/apply/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSend(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.send')
            ->path('/sms/send')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsBatchSend(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.batchSend')
            ->path('/sms/batchSend')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSigndelete(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.sign/delete')
            ->path('/sms/sign/delete')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSignapplyrevoke(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.sign/apply/revoke')
            ->path('/sms/sign/apply/revoke')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsTemplatedelete(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.template/delete')
            ->path('/sms/template/delete')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSendResult(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.sendResult')
            ->path('/sms/sendResult')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsTemplateapplylist(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.template/apply/list')
            ->path('/sms/template/apply/list')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsSignsearch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.sign/search')
            ->path('/sms/sign/search')
            ->params($params);
    }

    /**
     * @inheritDoc
     */
    public function smsTemplatesearch(array $params = [])
    {
        $this->builder->method('POST')
            ->service('sms.template/search')
            ->path('/sms/template/search')
            ->params($params);
    }
}
