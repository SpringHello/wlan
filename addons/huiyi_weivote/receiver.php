<?php
/**
 * 文本投票
 * 模块订阅器
 * @author yyy
 * @url
 */
defined('IN_IA') or exit('Access Denied');

class Huiyi_textvoteModuleReceiver extends WeModuleReceiver {
	public function receive() {
		$type = $this->message['type'];
		//这里定义此模块进行消息订阅时的, 消息到达以后的具体处理过程, 请查看Man.Dan QQ:82089092文档来编写你的代码
	}
}