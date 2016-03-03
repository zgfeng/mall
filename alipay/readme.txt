
            ╭───────────────────────╮
  ╭────┤           支付宝代码示例结构说明             ├────╮
  │        ╰───────────────────────╯        │
　│                                                                  │
　│     接口名称：支付宝担保交易接口（create_partner_trade_by_buyer）│
　│　   代码版本：3.2                                                │
  │     开发语言：PHP                                                │
  │     版    权：支付宝（中国）网络技术有限公司                     │
　│     制 作 者：支付宝商户事业部技术支持组                         │
  │     联系方式：商户服务电话0571-88158090                          │
  │                                                                  │
  ╰─────────────────────────────────╯

───────
 代码文件结构
───────

create_partner_trade_by_buyer_php_utf8
  │
  ├lib┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈类文件夹
  │  │
  │  ├alipay_core.function.php ┈┈┈┈┈┈支付宝接口公用函数文件
  │  │
  │  ├alipay_notify.class.php┈┈┈┈┈┈┈支付宝通知处理类文件
  │  │
  │  ├alipay_submit.class.php┈┈┈┈┈┈┈支付宝各接口请求提交类文件
  │  │
  │  └alipay_service.class.php ┈┈┈┈┈┈支付宝各接口构造类文件
  │
  ├log.txt┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈日志文件
  │
  ├alipay.config.php┈┈┈┈┈┈┈┈┈┈┈┈基础配置类文件
  │
  ├alipayto.php ┈┈┈┈┈┈┈┈┈┈┈┈┈┈支付宝接口入口文件
  │
  ├index.php┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈支付宝调试入口页面
  │
  ├notify_url.php ┈┈┈┈┈┈┈┈┈┈┈┈┈服务器异步通知页面文件
  │
  ├return_url.php ┈┈┈┈┈┈┈┈┈┈┈┈┈页面跳转同步通知文件
  │
  └readme.txt ┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈使用说明文本

※注意※
需要配置的文件是：alipay.config.php、alipayto.php、notify_url.php、return_url.php

本代码示例（DEMO）采用fsockopen()的方法远程HTTP获取数据、采用DOMDocument()的方法解析XML数据。

请根据商户网站自身情况来决定是否使用代码示例中的方式——
如果不使用fsockopen，那么建议用curl来代替；
如果环境不是PHP5版本或其以上，那么请用其他方法代替DOMDocument()。

curl、XML解析方法需您自行编写代码。


─────────
 类文件函数结构
─────────

alipay_core.function.php

function buildMysign($sort_para,$key,$sign_type = "MD5")
功能：生成签名结果
输入：Array  $sort_para 要签名的数组
      String $key 支付宝交易安全校验码
      String $sign_type 签名类型 默认值 MD5
输出：String 签名结果字符串

function createLinkstring($para)
功能：把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
输入：Array  $para 需要拼接的数组
输出：String 拼接完成以后的字符串

function createLinkstringUrlencode($para)
功能：把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串，并对参数值urlencode
输入：Array  $para 需要拼接的数