<?php

$config['base_url'] = 'http://www.mhwxr.com'; // Base URL including trailing slash (e.g. http://localhost/)
$config['asset_url'] = '/static/'; // Base URL including trailing slash (e.g. http://localhost/)

$config['default_controller'] = 'page'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = 'localhost'; // Database host (e.g. localhost)
$config['db_name'] = 'mhwxr'; // Database name
$config['db_username'] = 'mhwxr'; // Database username
$config['db_password'] = 'mhwxr'; // Database password

$config['questions'] = array(
    '你最喜欢的明星是谁?',
    '你的第一所学校是什么?',
    '你最爱看的书是什么？',
    '自定义答案'
);
$config['tasks'] = array('手机找人', '姓名找人', '照片找人', 'QQ找人', '邮箱找人');
$config['provinces'] = array('安徽', '北京', '重庆', '福建', '甘肃', '广东', '广西', '贵州', '海南', '河北', '黑龙江', '河南', '香港', '湖北', '湖南', '江苏', '江西', '吉林', '辽宁', '澳门', '内蒙古', '宁夏', '青海', '山东', '上海', '山西', '陕西', '四川', '台湾', '天津', '新疆', '西藏', '云南', '浙江', '海外');
$config['sitename'] = '美猴王寻人网';
$config['hookpath'] = 'hook';
$config['hookclass'] = 'hook';
$config['admin'] = 'admin';
$config['password'] = 'admin';
$config['status'] = array('going' => '进行中',
    'finish' => '成功');
$config['cities'] = array('安徽'
    => Array(
        '合肥(*)', '合肥',
        '安庆', '安庆',
        '蚌埠', '蚌埠',
        '亳州', '亳州',
        '巢湖', '巢湖',
        '滁州', '滁州',
        '阜阳', '阜阳',
        '贵池', '贵池',
        '淮北', '淮北',
        '淮化', '淮化',
        '淮南', '淮南',
        '黄山', '黄山',
        '九华山', '九华山',
        '六安', '六安',
        '马鞍山', '马鞍山',
        '宿州', '宿州',
        '铜陵', '铜陵',
        '屯溪', '屯溪',
        '芜湖', '芜湖',
        '宣城', '宣城'),
    '北京'
    => Array(
        '东城', '东城',
        '西城', '西城',
        '崇文', '崇文',
        '宣武', '宣武',
        '朝阳', '朝阳',
        '丰台', '丰台',
        '石景山', '石景山',
        '海淀', '海淀',
        '门头沟', '门头沟',
        '房山', '房山',
        '通州', '通州',
        '顺义', '顺义',
        '昌平', '昌平',
        '大兴', '大兴',
        '平谷', '平谷',
        '怀柔', '怀柔',
        '密云', '密云',
        '延庆', '延庆'),
    '重庆'
    => Array(
        '万州', '万州',
        '涪陵', '涪陵',
        '渝中', '渝中',
        '大渡口', '大渡口',
        '江北', '江北',
        '沙坪坝', '沙坪坝',
        '九龙坡', '九龙坡',
        '南岸', '南岸',
        '北碚', '北碚',
        '万盛', '万盛',
        '双挢', '双挢',
        '渝北', '渝北',
        '巴南', '巴南',
        '黔江', '黔江',
        '长寿', '长寿',
        '綦江', '綦江',
        '潼南', '潼南',
        '铜梁', '铜梁',
        '大足', '大足',
        '荣昌', '荣昌',
        '壁山', '壁山',
        '梁平', '梁平',
        '城口', '城口',
        '丰都', '丰都',
        '垫江', '垫江',
        '武隆', '武隆',
        '忠县', '忠县',
        '开县', '开县',
        '云阳', '云阳',
        '奉节', '奉节',
        '巫山', '巫山',
        '巫溪', '巫溪',
        '石柱', '石柱',
        '秀山', '秀山',
        '酉阳', '酉阳',
        '彭水', '彭水',
        '江津', '江津',
        '合川', '合川',
        '永川', '永川',
        '南川', '南川'),
    '福建'
    => Array(
        '福州(*)', '福州',
        '福安', '福安',
        '龙岩', '龙岩',
        '南平', '南平',
        '宁德', '宁德',
        '莆田', '莆田',
        '泉州', '泉州',
        '三明', '三明',
        '邵武', '邵武',
        '石狮', '石狮',
        '晋江', '晋江',
        '永安', '永安',
        '武夷山', '武夷山',
        '厦门', '厦门',
        '漳州', '漳州'),
    '甘肃'
    => Array(
        '兰州(*)', '兰州',
        '白银', '白银',
        '定西', '定西',
        '敦煌', '敦煌',
        '甘南', '甘南',
        '金昌', '金昌',
        '酒泉', '酒泉',
        '临夏', '临夏',
        '平凉', '平凉',
        '天水', '天水',
        '武都', '武都',
        '武威', '武威',
        '西峰', '西峰',
        '嘉峪关', '嘉峪关',
        '张掖', '张掖'),
    '广东'
    => Array(
        '广州(*)', '广州',
        '潮阳', '潮阳',
        '潮州', '潮州',
        '澄海', '澄海',
        '东莞', '东莞',
        '佛山', '佛山',
        '河源', '河源',
        '惠州', '惠州',
        '江门', '江门',
        '揭阳', '揭阳',
        '开平', '开平',
        '茂名', '茂名',
        '梅州', '梅州',
        '清远', '清远',
        '汕头', '汕头',
        '汕尾', '汕尾',
        '韶关', '韶关',
        '深圳', '深圳',
        '顺德', '顺德',
        '阳江', '阳江',
        '英德', '英德',
        '云浮', '云浮',
        '增城', '增城',
        '湛江', '湛江',
        '肇庆', '肇庆',
        '中山', '中山',
        '珠海', '珠海'),
    '广西'
    => Array(
        '南宁(*)', '南宁',
        '百色', '百色',
        '北海', '北海',
        '桂林', '桂林',
        '防城港', '防城港',
        '河池', '河池',
        '贺州', '贺州',
        '柳州', '柳州',
        '来宾', '来宾',
        '钦州', '钦州',
        '梧州', '梧州',
        '贵港', '贵港',
        '玉林', '玉林'),
    '贵州'
    => Array(
        '贵阳(*)', '贵阳',
        '安顺', '安顺',
        '毕节', '毕节',
        '都匀', '都匀',
        '凯里', '凯里',
        '六盘水', '六盘水',
        '铜仁', '铜仁',
        '兴义', '兴义',
        '玉屏', '玉屏',
        '遵义', '遵义'),
    '海南'
    => Array(
        '海口(*)', '海口',
        '三亚', '三亚',
        '五指山', '五指山',
        '琼海', '琼海',
        '儋州', '儋州',
        '文昌', '文昌',
        '万宁', '万宁',
        '东方', '东方',
        '定安', '定安',
        '屯昌', '屯昌',
        '澄迈', '澄迈',
        '临高', '临高',
        '万宁', '万宁',
        '白沙黎族', '白沙黎族',
        '昌江黎族', '昌江黎族',
        '乐东黎族', '乐东黎族',
        '陵水黎族', '陵水黎族',
        '保亭黎族', '保亭黎族',
        '琼中黎族', '琼中黎族',
        '西沙群岛', '西沙群岛',
        '南沙群岛', '南沙群岛',
        '中沙群岛', '中沙群岛'
    ),
    '河北'
    => Array(
        '石家庄(*)', '石家庄',
        '保定', '保定',
        '北戴河', '北戴河',
        '沧州', '沧州',
        '承德', '承德',
        '丰润', '丰润',
        '邯郸', '邯郸',
        '衡水', '衡水',
        '廊坊', '廊坊',
        '南戴河', '南戴河',
        '秦皇岛', '秦皇岛',
        '唐山', '唐山',
        '新城', '新城',
        '邢台', '邢台',
        '张家口', '张家口'),
    '黑龙江'
    => Array(
        '哈尔滨(*)', '哈尔滨',
        '北安', '北安',
        '大庆', '大庆',
        '大兴安岭', '大兴安岭',
        '鹤岗', '鹤岗',
        '黑河', '黑河',
        '佳木斯', '佳木斯',
        '鸡西', '鸡西',
        '牡丹江', '牡丹江',
        '齐齐哈尔', '齐齐哈尔',
        '七台河', '七台河',
        '双鸭山', '双鸭山',
        '绥化', '绥化',
        '伊春', '伊春'),
    '河南'
    => Array(
        '郑州(*)', '郑州',
        '安阳', '安阳',
        '鹤壁', '鹤壁',
        '潢川', '潢川',
        '焦作', '焦作',
        '济源', '济源',
        '开封', '开封',
        '漯河', '漯河',
        '洛阳', '洛阳',
        '南阳', '南阳',
        '平顶山', '平顶山',
        '濮阳', '濮阳',
        '三门峡', '三门峡',
        '商丘', '商丘',
        '新乡', '新乡',
        '信阳', '信阳',
        '许昌', '许昌',
        '周口', '周口',
        '驻马店', '驻马店'),
    '香港'
    => Array(
        '香港', '香港',
        '九龙', '九龙',
        '新界', '新界'),
    '湖北'
    => Array(
        '武汉(*)', '武汉',
        '恩施', '恩施',
        '鄂州', '鄂州',
        '黄冈', '黄冈',
        '黄石', '黄石',
        '荆门', '荆门',
        '荆州', '荆州',
        '潜江', '潜江',
        '十堰', '十堰',
        '随州', '随州',
        '武穴', '武穴',
        '仙桃', '仙桃',
        '咸宁', '咸宁',
        '襄阳', '襄阳',
        '襄樊', '襄樊',
        '孝感', '孝感',
        '宜昌', '宜昌'),
    '湖南'
    => Array(
        '长沙(*)', '长沙',
        '常德', '常德',
        '郴州', '郴州',
        '衡阳', '衡阳',
        '怀化', '怀化',
        '吉首', '吉首',
        '娄底', '娄底',
        '邵阳', '邵阳',
        '湘潭', '湘潭',
        '益阳', '益阳',
        '岳阳', '岳阳',
        '永州', '永州',
        '张家界', '张家界',
        '株洲', '株洲'),
    '江苏'
    => Array(
        '南京(*)', '南京',
        '常熟', '常熟',
        '常州', '常州',
        '海门', '海门',
        '淮安', '淮安',
        '江都', '江都',
        '江阴', '江阴',
        '昆山', '昆山',
        '连云港', '连云港',
        '南通', '南通',
        '启东', '启东',
        '沭阳', '沭阳',
        '宿迁', '宿迁',
        '苏州', '苏州',
        '太仓', '太仓',
        '泰州', '泰州',
        '同里', '同里',
        '无锡', '无锡',
        '徐州', '徐州',
        '盐城', '盐城',
        '扬州', '扬州',
        '宜兴', '宜兴',
        '仪征', '仪征',
        '张家港', '张家港',
        '镇江', '镇江',
        '周庄', '周庄'),
    '江西'
    => Array(
        '南昌(*)', '南昌',
        '抚州', '抚州',
        '赣州', '赣州',
        '吉安', '吉安',
        '景德镇', '景德镇',
        '井冈山', '井冈山',
        '九江', '九江',
        '庐山', '庐山',
        '萍乡', '萍乡',
        '上饶', '上饶',
        '新余', '新余',
        '宜春', '宜春',
        '鹰潭', '鹰潭'),
    '吉林'
    => Array(
        '长春(*)', '长春',
        '白城', '白城',
        '白山', '白山',
        '珲春', '珲春',
        '辽源', '辽源',
        '梅河', '梅河',
        '吉林', '吉林',
        '四平', '四平',
        '松原', '松原',
        '通化', '通化',
        '延吉', '延吉'),
    '辽宁'
    => Array(
        '沈阳(*)', '沈阳',
        '鞍山', '鞍山',
        '本溪', '本溪',
        '朝阳', '朝阳',
        '大连', '大连',
        '丹东', '丹东',
        '抚顺', '抚顺',
        '阜新', '阜新',
        '葫芦岛', '葫芦岛',
        '锦州', '锦州',
        '辽阳', '辽阳',
        '盘锦', '盘锦',
        '铁岭', '铁岭',
        '营口', '营口'),
    '澳门'
    => Array(
        '澳门', '澳门'),
    '内蒙古'
    => Array(
        '呼和浩特(*)', '呼和浩特',
        '阿拉善盟', '阿拉善盟',
        '包头', '包头',
        '赤峰', '赤峰',
        '东胜', '东胜',
        '海拉尔', '海拉尔',
        '集宁', '集宁',
        '临河', '临河',
        '通辽', '通辽',
        '乌海', '乌海',
        '乌兰浩特', '乌兰浩特',
        '锡林浩特', '锡林浩特'),
    '宁夏'
    => Array(
        '银川(*)', '银川',
        '固原', '固原',
        '中卫', '中卫',
        '石嘴山', '石嘴山',
        '吴忠', '吴忠'),
    '青海'
    => Array(
        '西宁(*)', '西宁',
        '德令哈', '德令哈',
        '格尔木', '格尔木',
        '共和', '共和',
        '海东', '海东',
        '海晏', '海晏',
        '玛沁', '玛沁',
        '同仁', '同仁',
        '玉树', '玉树'),
    '山东'
    => Array(
        '济南(*)', '济南',
        '滨州', '滨州',
        '兖州', '兖州',
        '德州', '德州',
        '东营', '东营',
        '菏泽', '菏泽',
        '济宁', '济宁',
        '莱芜', '莱芜',
        '聊城', '聊城',
        '临沂', '临沂',
        '蓬莱', '蓬莱',
        '青岛', '青岛',
        '曲阜', '曲阜',
        '日照', '日照',
        '泰安', '泰安',
        '潍坊', '潍坊',
        '威海', '威海',
        '烟台', '烟台',
        '枣庄', '枣庄',
        '淄博', '淄博'),
    '上海'
    => Array(
        '崇明', '崇明',
        '黄浦', '黄浦',
        '卢湾', '卢湾',
        '徐汇', '徐汇',
        '长宁', '长宁',
        '静安', '静安',
        '普陀', '普陀',
        '闸北', '闸北',
        '虹口', '虹口',
        '杨浦', '杨浦',
        '闵行', '闵行',
        '宝山', '宝山',
        '嘉定', '嘉定',
        '浦东', '浦东',
        '金山', '金山',
        '松江', '松江',
        '青浦', '青浦',
        '南汇', '南汇',
        '奉贤', '奉贤',
        '朱家角', '朱家角'),
    '山西'
    => Array(
        '太原(*)', '太原',
        '长治', '长治',
        '大同', '大同',
        '候马', '候马',
        '晋城', '晋城',
        '离石', '离石',
        '临汾', '临汾',
        '宁武', '宁武',
        '朔州', '朔州',
        '忻州', '忻州',
        '阳泉', '阳泉',
        '榆次', '榆次',
        '运城', '运城'),
    '陕西'
    => Array(
        '西安(*)', '西安',
        '安康', '安康',
        '宝鸡', '宝鸡',
        '汉中', '汉中',
        '渭南', '渭南',
        '商州', '商州',
        '绥德', '绥德',
        '铜川', '铜川',
        '咸阳', '咸阳',
        '延安', '延安',
        '榆林', '榆林'),
    '四川'
    => Array(
        '成都(*)', '成都',
        '巴中', '巴中',
        '达州', '达州',
        '德阳', '德阳',
        '都江堰', '都江堰',
        '峨眉山', '峨眉山',
        '涪陵', '涪陵',
        '广安', '广安',
        '广元', '广元',
        '九寨沟', '九寨沟',
        '康定', '康定',
        '乐山', '乐山',
        '泸州', '泸州',
        '马尔康', '马尔康',
        '绵阳', '绵阳',
        '眉山', '眉山',
        '南充', '南充',
        '内江', '内江',
        '攀枝花', '攀枝花',
        '遂宁', '遂宁',
        '汶川', '汶川',
        '西昌', '西昌',
        '雅安', '雅安',
        '宜宾', '宜宾',
        '自贡', '自贡',
        '资阳', '资阳'),
    '台湾'
    => Array(
        '台北(*)', '台北',
        '基隆', '基隆',
        '台南', '台南',
        '台中', '台中',
        '高雄', '高雄',
        '屏东', '屏东',
        '南投', '南投',
        '云林', '云林',
        '新竹', '新竹',
        '彰化', '彰化',
        '苗栗', '苗栗',
        '嘉义', '嘉义',
        '花莲', '花莲',
        '桃园', '桃园',
        '宜兰', '宜兰',
        '台东', '台东',
        '金门', '金门',
        '马祖', '马祖',
        '澎湖', '澎湖',
        '其它', '其它'),
    '天津'
    => Array(
        '天津', '天津',
        '和平', '和平',
        '东丽', '东丽',
        '河东', '河东',
        '西青', '西青',
        '河西', '河西',
        '津南', '津南',
        '南开', '南开',
        '北辰', '北辰',
        '河北', '河北',
        '武清', '武清',
        '红挢', '红挢',
        '塘沽', '塘沽',
        '汉沽', '汉沽',
        '大港', '大港',
        '宁河', '宁河',
        '静海', '静海',
        '宝坻', '宝坻',
        '蓟县', '蓟县'),
    '新疆'
    => Array(
        '乌鲁木齐(*)', '乌鲁木齐',
        '阿克苏', '阿克苏',
        '阿勒泰', '阿勒泰',
        '阿图什', '阿图什',
        '博乐', '博乐',
        '昌吉', '昌吉',
        '东山', '东山',
        '哈密', '哈密',
        '和田', '和田',
        '喀什', '喀什',
        '克拉玛依', '克拉玛依',
        '库车', '库车',
        '库尔勒', '库尔勒',
        '奎屯', '奎屯',
        '石河子', '石河子',
        '塔城', '塔城',
        '吐鲁番', '吐鲁番',
        '伊宁', '伊宁'),
    '西藏'
    => Array(
        '拉萨(*)', '拉萨',
        '阿里', '阿里',
        '昌都', '昌都',
        '林芝', '林芝',
        '那曲', '那曲',
        '日喀则', '日喀则',
        '山南', '山南'),
    '云南'
    => Array(
        '昆明(*)', '昆明',
        '大理', '大理',
        '保山', '保山',
        '楚雄', '楚雄',
        '大理', '大理',
        '东川', '东川',
        '个旧', '个旧',
        '景洪', '景洪',
        '开远', '开远',
        '临沧', '临沧',
        '丽江', '丽江',
        '六库', '六库',
        '潞西', '潞西',
        '曲靖', '曲靖',
        '思茅', '思茅',
        '文山', '文山',
        '西双版纳', '西双版纳',
        '玉溪', '玉溪',
        '中甸', '中甸',
        '昭通', '昭通'),
    '浙江'
    => Array(
        '杭州(*)', '杭州',
        '安吉', '安吉',
        '慈溪', '慈溪',
        '定海', '定海',
        '奉化', '奉化',
        '海盐', '海盐',
        '黄岩', '黄岩',
        '湖州', '湖州',
        '嘉兴', '嘉兴',
        '金华', '金华',
        '临安', '临安',
        '临海', '临海',
        '丽水', '丽水',
        '宁波', '宁波',
        '瓯海', '瓯海',
        '平湖', '平湖',
        '千岛湖', '千岛湖',
        '衢州', '衢州',
        '江山', '江山',
        '瑞安', '瑞安',
        '绍兴', '绍兴',
        '嵊州', '嵊州',
        '台州', '台州',
        '温岭', '温岭',
        '温州', '温州',
        '余姚', '余姚',
        '舟山', '舟山'),
    '海外'
    => Array(
        '美国(*)', '美国',
        '英国', '英国',
        '法国', '法国',
        '瑞士', '瑞士',
        '澳洲', '澳洲',
        '新西兰', '新西兰',
        '加拿大', '加拿大',
        '奥地利', '奥地利',
        '韩国', '韩国',
        '日本', '日本',
        '德国', '德国',
        '意大利', '意大利',
        '西班牙', '西班牙',
        '俄罗斯', '俄罗斯',
        '泰国', '泰国',
        '印度', '印度',
        '荷兰', '荷兰',
        '新加坡', '新加坡',
        '欧洲', '欧洲',
        '北美', '北美',
        '南美', '南美',
        '亚洲', '亚洲',
        '非洲', '非洲',
        '大洋洲', '大洋洲'));
?>