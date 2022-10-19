<?php

namespace Lackoxygen\TiktokShop\Request\Sms;

use Lackoxygen\TiktokShop\Response\ResultSet;

/**
 * @note 短信API
 */
interface SmsInterface
{
    /**
     * 提交短信模板申请单
     * @link https://op.jinritemai.com/docs/api-docs/163/1527
     * @param array $params
     * @return ResultSet
     */
    public function smsTemplateapply(array $params = []);

    /**
     * 公共模版查询接口
     * @link https://op.jinritemai.com/docs/api-docs/163/1526
     * @param array $params
     * @return ResultSet
     */
    public function smsPublictemplate(array $params = []);

    /**
     * 提交短信签名申请单
     * @link https://op.jinritemai.com/docs/api-docs/163/1525
     * @param array $params
     * @return ResultSet
     */
    public function smsSignapply(array $params = []);

    /**
     * 撤销短信模板申请单
     * @link https://op.jinritemai.com/docs/api-docs/163/1524
     * @param array $params
     * @return ResultSet
     */
    public function smsTemplaterevoke(array $params = []);

    /**
     * 查看短信签名申请单
     * @link https://op.jinritemai.com/docs/api-docs/163/1523
     * @param array $params
     * @return ResultSet
     */
    public function smsSignapplylist(array $params = []);

    /**
     * 短信发送
     * @link https://op.jinritemai.com/docs/api-docs/163/1522
     * @param array $params
     * @return ResultSet
     */
    public function smsSend(array $params = []);

    /**
     * 批量短信发送
     * @link https://op.jinritemai.com/docs/api-docs/163/1521
     * @param array $params
     * @return ResultSet
     */
    public function smsBatchSend(array $params = []);

    /**
     * 删除短信签名
     * @link https://op.jinritemai.com/docs/api-docs/163/1520
     * @param array $params
     * @return ResultSet
     */
    public function smsSigndelete(array $params = []);

    /**
     * 撤销短信签名申请单
     * @link https://op.jinritemai.com/docs/api-docs/163/1519
     * @param array $params
     * @return ResultSet
     */
    public function smsSignapplyrevoke(array $params = []);

    /**
     * 删除短信模板
     * @link https://op.jinritemai.com/docs/api-docs/163/1518
     * @param array $params
     * @return ResultSet
     */
    public function smsTemplatedelete(array $params = []);

    /**
     * 查询短信发送结果
     * @link https://op.jinritemai.com/docs/api-docs/163/1517
     * @param array $params
     * @return ResultSet
     */
    public function smsSendResult(array $params = []);

    /**
     * 查询短信模板申请单
     * @link https://op.jinritemai.com/docs/api-docs/163/1516
     * @param array $params
     * @return ResultSet
     */
    public function smsTemplateapplylist(array $params = []);

    /**
     * 查看短信签名
     * @link https://op.jinritemai.com/docs/api-docs/163/1515
     * @param array $params
     * @return ResultSet
     */
    public function smsSignsearch(array $params = []);

    /**
     * 查询短信模板
     * @link https://op.jinritemai.com/docs/api-docs/163/1514
     * @param array $params
     * @return ResultSet
     */
    public function smsTemplatesearch(array $params = []);
}
