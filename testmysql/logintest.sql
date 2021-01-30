-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-14 15:22:34
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `logintest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `carshopp`
--

CREATE TABLE `carshopp` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `carshopp`
--

INSERT INTO `carshopp` (`id`, `name`, `price`, `content`) VALUES
(1, '海賊王 羅 武士', 389, '海賊王 羅 武士 DXF THE GRANDLINE MEN 和之國 vol.3 <br>\r\n\r\n品牌：BANPRESTO \r\n\r\n發行月份：2019/11<br>\r\n\r\n說明：代理版\r\n\r\n實體尺寸：約高17公分'),
(2, '海賊王 香吉士 披風', 290, '【寄賣專區】海賊王 香吉士 披風 G&B A款\r\n\r\n版本：代理版<br>\r\n\r\n實體尺寸：約高25公分\r\n\r\n產品內容：附有一底座，無外盒\r\n\r\n新舊程度：二手，保存良好'),
(3, 'DXF偉大的航道 vol.6 小丑 巴奇', 450, '海賊王 劇場版 『ONE PIECE STAMPEDE』 DXF偉大的航道 vol.6 小丑 巴奇  \r\n\r\n品牌：BANPRESTO \r\n\r\n發行月份：2019/09\r\n\r\n外盒尺寸：12*9*18公分\r\n\r\n實體尺寸：約高16公分 \r\n\r\n說明：代理版'),
(4, '死亡外科醫生 羅', 450, '海賊王 劇場版 『ONE PIECE STAMPEDE』 DXF偉大的航道 Vol.5 死亡外科醫生 羅 \r\n\r\n品牌：BANPRESTO \r\n\r\n發行月份：2019/09\r\n\r\n外盒尺寸：12*9*18公分\r\n\r\n實體尺寸：約高17公分 \r\n\r\n說明：代理版'),
(5, '海賊王-LEW 婚紗女帝HANCOCK A款白色', 290, '海賊王-LEW 婚紗女帝HANCOCK A款白色商品名稱：海賊王-LEW 婚紗女帝HANCOCK A款白色    \r\n\r\n品牌：BANPRESTO\r\n\r\n版本：代理版 <br>\r\n\r\n外盒尺寸：14*14*25cm'),
(6, '海賊王 magazine FIGURE 第2彈 魯夫', 290, '海賊王-LEW 婚紗女帝HANCOCK A款白色商品名稱：海賊王 magazine FIGURE 第2彈 魯夫   \r\n\r\n品牌：BANPRESTO \r\n\r\n發行月份：2019/09 <br>\r\n\r\n外盒尺寸：12*9*18公分\r\n\r\n實體尺寸：約高22公分 \r\n\r\n說明：代理版'),
(7, 'Figuarts  ZERO 艾德華·紐蓋特 白鬍子海賊團船', 1990, '海賊王 magazine FIGURE 第2彈 魯夫商品名稱：【07月預購】Figuarts  ZERO 艾德華·紐蓋特 白鬍子海賊團船長<br>\r\n\r\n品牌：Bandai\r\n\r\n版本：代理版'),
(8, '多佛朗明哥 七武海 德雷斯羅薩 操控德島的惡魔', 10000, '【新品預購】GK JacksDo 多佛朗明哥 七武海 德雷斯羅薩 操控德島的惡魔<br>\r\n\r\n品牌：GKJacksDo \r\n\r\n發行月份：2020/Q3 (依實際發行上市及到貨日期為準)\r\n\r\n結單日：2020/04/26 20：00  逾期或數量額滿結單<br>\r\n\r\n商品尺寸：長49 x 寬40 x 高48cm\r\n\r\n說明： 寶麗石樹脂、軟膠、PVC\r\n\r\n體數：發行數量200體'),
(9, '一番賞 海賊王 索隆', 500, '【06月預購】一番賞 海賊王 索隆  \r\n\r\n品牌：BANDAI \r\n\r\n版本：海外限定版<br>\r\n\r\n發行月份：2020/06 (依實際發行上市及到貨日期為準)\r\n\r\n結單日：2020/01/20 20：00  逾期或數量額滿結單'),
(10, 'Figuarts ZERO 香吉士 SANJI', 999, '海賊王-20周年 Figuarts ZERO 香吉士 SANJI \r\n\r\n品牌：BANDAI Figuarts ZERO <br>\r\n\r\n說明：代理版'),
(11, '海賊王-Legend Studio 魯夫LUFFY', 799, '海賊王-Legend Studio 魯夫LUFFY    \r\n\r\n品牌：Legend Studio<br>\r\n\r\n版本：代理版 \r\n\r\n外盒尺寸：10*12*22.5公分'),
(12, 'GK JacksDo 魯夫vs凱多', 7000, '【新品預定】GK JacksDo 魯夫vs凱多<br> 和之國 和服魯夫 百獸凱多 四皇<br>\r\n\r\n                          品牌：GKJacksDo 商品尺寸：長60 x 寬41 x 高65cm 約23kg '),
(13, '海賊王 尋寶之旅 VOL.4 薇薇', 370, '【06月預購】海賊王 尋寶之旅 VOL.4 薇薇 \r\n\r\n品牌：BANPRESTO \r\n\r\n版本：代理版\r\n\r\n發行月份：2020/06 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：2020/02/19 12：00  逾期或數量額滿結單\r\n\r\n實體尺寸：約高20公分'),
(14, '海賊王 騙人布  WCF 世界收藏 FIGURE vol.1', 299, '海賊王 騙人布  WCF 世界收藏 FIGURE vol.1 劇場版 STAMPEDE 世界蒐藏 03 代理版\r\n\r\n品牌：BANPRESTO <br>\r\n\r\n發行月份：2019/08 (依實際發行上市及到貨日期為準)\r\n\r\n說明：代理版\r\n\r\n實體尺寸：單隻約高7公分'),
(15, '海賊王-G&G 夏洛特 布琳', 250, '海賊王-G&G 夏洛特 布琳\r\n\r\n                          品牌：BANPRESTO<br>\r\n\r\n                          版本：日版 B款異色 紅色圍裙\r\n\r\n                          外盒尺寸：14*14*25cm'),
(16, 'DXF～THE GRANDLINE MEN～和之國 vol.', 380, '【07月預購】海賊王 DXF～THE GRANDLINE MEN～和之國 vol.7 喬巴\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：代理版\r\n\r\n發行月份：2020/07 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：官網數量售完為止\r\n\r\n實體尺寸：約高8公分'),
(17, '海賊王 KING OF ARTIST 和之國 索隆', 380, '【07月預購】海賊王 KING OF ARTIST 和之國 索隆\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：代理版\r\n\r\n發行月份：2020/07 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：官網數量售完為止\r\n\r\n實體尺寸：約高14公分'),
(18, '海賊王 magazine 夢的一枚＃1 vol.4 卡普', 380, '【07月預購】海賊王 magazine 夢的一枚＃1 vol.4 卡普\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：代理版\r\n\r\n發行月份：2020/07 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：官網數量售完為止\r\n\r\n實體尺寸：約高16公分'),
(19, '海賊王 DXF～THE GRANDLINE MEN～和之國 ', 380, '【07月預購】海賊王 DXF～THE GRANDLINE MEN～和之國 vol.7 布魯克\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：代理版\r\n\r\n發行月份：2020/07 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：官網數量售完為止\r\n\r\n實體尺寸：約高19公分'),
(20, '海賊王 G&G 女帝 波雅漢考克 B款 代理版', 380, '【07月預購】海賊王 G&G 女帝 波雅漢考克 B款 代理版\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：代理版\r\n\r\n發行月份：2020/07 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：官網數量售完為止\r\n\r\n實體尺寸：約高25公分'),
(21, 'VA HEROES 海賊王 薩波(再販)', 2570, '【08月預購】VA HEROES 海賊王 薩波(再販)\r\n\r\n品牌：MEGA HOUSE\r\n\r\n版本：代理版<br>\r\n\r\n發行月份：2020/08 (依實際發行上市及到貨日期為準)\r\n\r\n結單日：2020/03/18 20：00  逾期或數量額滿結單'),
(22, 'VA HEROES 海賊王 波特卡斯·D·艾斯(再販)', 2570, '【08月預購】VA HEROES 海賊王 波特卡斯·D·艾斯(再販)\r\n\r\n品牌：MEGA HOUSE<br>\r\n\r\n版本：代理版\r\n\r\n發行月份：2020/08 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：2020/03/18 20：00  逾期或數量額滿結單'),
(23, '海賊王 SCultures BIG 造形王頂上決戦Ⅵ vol', 680, '【07月預購】海賊王 SCultures BIG 造形王頂上決戦Ⅵ vol.3 海外限定版\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：海外限定版\r\n\r\n發行月份：2020/07 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：2020/03/12 12：00  逾期或數量額滿結單\r\n\r\n實體尺寸：約高8公分'),
(24, '一番賞 海賊王 四檔大蛇人 魯夫 海外限定版', 1000, '【06月預購(延期)】一番賞 海賊王 四檔大蛇人 魯夫 海外限定版\r\n\r\n品牌：BANDAI <br>\r\n\r\n版本：海外限定版\r\n\r\n發行月份：2020/06 → 2020/09 (依實際發行上市及到貨日期為準) <br>\r\n\r\n結單日：2020/01/20 20：00  逾期或數量額滿結單\r\n\r\n*延期至9月發行'),
(25, '海賊王- 海賊船 飛天梅莉號 代理版', 3980, '海賊王- 海賊船 飛天梅莉號 代理版   \r\n\r\n品牌：BANDAI\r\n\r\n說明：需自行組裝，此材積過大無法超商取貨<br>\r\n\r\n版本：代理版  \r\n\r\n外盒尺寸：31*10.5*39'),
(26, '匠之系譜 薩波 革命軍 ONE PIECE 一番賞海外限定', 1250, '海賊王 匠之系譜 薩波 革命軍 ONE PIECE 一番賞海外限定\r\n\r\n品牌： BANPRESTO<br>\r\n\r\n版本：海外限定版\r\n\r\n發行月份：2020/01 \r\n\r\n其他說明：一番賞同款海外限定版'),
(27, '魯夫 劇場版 GREAT BANQUET 海外限定版', 500, '【05月預購】海賊王 - 魯夫 劇場版 GREAT BANQUET 海外限定版 同一番賞A賞 路飛 LUFFY\r\n\r\n品牌：BANDAI<br>\r\n\r\n版本：海外限定版\r\n\r\n發行月份：2020.05 (依實際發行上市及到貨日期為準)<br>\r\n\r\n結單日：2020/01/05 15：00  逾期或數量額滿結單');

-- --------------------------------------------------------

--
-- 資料表結構 `ordersum`
--

CREATE TABLE `ordersum` (
  `id` int(11) NOT NULL,
  `userid` int(5) DEFAULT NULL,
  `productNumber` int(5) DEFAULT NULL,
  `purchaseQuantity` int(5) DEFAULT NULL,
  `productName` varchar(30) DEFAULT NULL,
  `commodityPrice` int(10) DEFAULT NULL,
  `commoditySum` int(20) DEFAULT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `ordersum`
--

INSERT INTO `ordersum` (`id`, `userid`, `productNumber`, `purchaseQuantity`, `productName`, `commodityPrice`, `commoditySum`, `time`) VALUES
(29, 23, 8, 5, '多佛朗明哥 七武海 德雷斯羅薩 操控德島的惡魔', 50000, 50000, '2020-06-14'),
(36, 24, 3, 4, 'DXF偉大的航道 vol.6 小丑 巴奇', 1800, 1800, '2020-06-14'),
(37, 24, 7, 4, 'Figuarts  ZERO 艾德華·紐蓋特 白鬍子海賊團船', 7960, 9760, '2020-06-14'),
(38, 24, 11, 4, '海賊王-Legend Studio 魯夫LUFFY', 3196, 12956, '2020-06-14'),
(52, 25, 1, 5, '海賊王 羅 武士', 1945, 1945, '2020-06-14'),
(53, 25, 7, 4, 'Figuarts  ZERO 艾德華·紐蓋特 白鬍子海賊團船', 7960, 9905, '2020-06-14'),
(54, 25, 1, 5, '海賊王 羅 武士', 1945, 1945, '2020-06-14'),
(55, 25, 6, 3, '海賊王 magazine FIGURE 第2彈 魯夫', 870, 2815, '2020-06-14'),
(56, 25, 7, 11, 'Figuarts  ZERO 艾德華·紐蓋特 白鬍子海賊團船', 21890, 24705, '2020-06-14'),
(57, 25, 23, 3, '海賊王 SCultures BIG 造形王頂上決戦Ⅵ vol', 2040, 26745, '2020-06-14'),
(58, 26, 3, 4, 'DXF偉大的航道 vol.6 小丑 巴奇', 1800, 1800, '2020-06-14'),
(59, 26, 10, 4, 'Figuarts ZERO 香吉士 SANJI', 3996, 5796, '2020-06-14');

-- --------------------------------------------------------

--
-- 資料表結構 `ordertest`
--

CREATE TABLE `ordertest` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idcard` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `ordertest`
--

INSERT INTO `ordertest` (`id`, `username`, `password`, `phone`, `email`, `idcard`) VALUES
(1, 'x3377889', 'x3377889', '0911678753', 'x333993@yahoo.com.tw', 'M122450961'),
(9, 'ss', 'ss', 'sssss', 'ss', 'ss'),
(10, 'ddd', 'ddd', 'ddd', 'ddd', 'ddd'),
(19, 'x33778890', 'x3377889', '0911678753', 'x333993@yahoo.com.tw', 'M122450961'),
(20, 'x4815059', 'x3377889', '0911678753', 'x333993@yahoo.com.tw', 'M122450961'),
(21, 'x3377888', 'x3377888', '0911678753', 'x4815059@gmail.com', 'M122450961'),
(22, 'x123456', 'x3377889', '0911678753', 'x3377889@gmail.com', 'M122450961'),
(23, 'x33778899', 'ss', '0911678753', 'x4815059@gmail.com', 'M122450961'),
(24, 'a123456', 'x3377889', '0911678753', 'x333993@yahoo.com.tw', 'M122450961'),
(25, 'z123456', 'z123456', '0911678753', 'x333993@yahoo.com.tw', 'M122450961'),
(26, 'q123456', 'q123456', '0911678753', 'x333993@yahoo.com.tw', 'M122450961');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `carshopp`
--
ALTER TABLE `carshopp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ordersum`
--
ALTER TABLE `ordersum`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ordertest`
--
ALTER TABLE `ordertest`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ordersum`
--
ALTER TABLE `ordersum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ordertest`
--
ALTER TABLE `ordertest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
