<?php
/**
 * 俄罗斯方块模块订阅器
 *
 * @author 800083075
 * @url http://bbs.012wz.com/
 */
defined('IN_IA') or exit('Access Denied');

class wdl_weizanxiuModuleReceiver extends WeModuleReceiver {
	public function receive() {
		$type = $this->message['type'];
		//这里定义此模块进行消息订阅时的, 消息到达以后的具体处理过程, 请查看Man.Dan QQ:82089092文档来编写你的代码
	}
}