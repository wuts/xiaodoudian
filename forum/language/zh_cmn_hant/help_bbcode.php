<?php
/** 
*
* help_bbcode [Chinese Traditional]
*
* @package language
* @version $Id: help_bbcode.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpbbchina.com 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => '簡介'
	),
	array(
		0 => '什麼是 BBCode?',
		1 => 'BBCode是一種特殊的HTML實現方式. 您能否在文章中使用BBCode由系統管理員設定. 此外您可以在發表的時候設定文章是否使用BBCode. BBCode本身和HTML相似, 標籤由方括號[和]封裝而不是 &lt; 和 &gt; 並且它能提供更多的顯示控制. 取決於您使用的佈景樣式, 您可以在文章發表的表格上方發現一系列便捷的 BBCode 按鈕. 以下還有更詳細的介紹.'
	),
	array(
		0 => '--',
		1 => '文字格式'
	),
	array(
		0 => '如何使用粗體, 斜體及加底線的文字',
		1 => 'BBCode 包含一些標籤, 方便您快速的更改文字的基本形式. 分述如下: <ul><li>要製作一份粗體文字可使用 <b>[b][/b]</b>, 例如: <br /><br /><b>[b]</b>哈囉<b>[/b]</b><br /><br />會變成<b>哈囉</b><br /><br /></li><li>要使用底線時, 可使用<b>[u][/u]</b>, 例如:<br /><br /><b>[u]</b>早安<b>[/u]</b><br /><br />會變成<u>早安</u><br /><br /></li><li>要斜體顯示時, 可使用 <b>[i][/i]</b>, 例如:<br /><br />這個真是 <b>[i]</b>棒呆了!<b>[/i]</b><br /><br />將會變成 這個真是 <i>棒呆了!</i></li></ul>'
	),
	array(
		0 => '如何改變文字的顏色和大小',
		1 => '下列標籤可以用於改變文字的顏色和大小. 需要記住的是顯示效果會取決於瀏覽者使用的瀏覽器和操作系統: <ul><li>改變文字的顏色使用標籤 <strong>[color=][/color]</strong>. 您可以指定其他的可被識別的顏色 (例如 red, blue, yellow, 等等.) 或是使用顏色編碼, 例如 #FFFFFF, #000000. 舉個例子, 要來一段紅色的文字您可以使用:<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />或者<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />都會輸出 <span style="color:red">Hello!</span></li><li>類似的, 改變文字的大小使用標籤 <strong>[size=][/size]</strong>. 這個標籤取決於會員所選擇的界面佈景樣式, 不過建議的格式是體現文字像素大小的數字值, 從1開始 (這會小到您看不見) 直到29 (這就非常大了). 舉個例子:<br /><br /><strong>[size=9]</strong>SMALL<strong>[/size]</strong><br /><br />將輸出 <span style="font-size:9px;">SMALL</span><br /><br />但是:<br /><br /><strong>[size=24]</strong>HUGE!<strong>[/size]</strong><br /><br />將顯示 <span style="font-size:24px;">HUGE!</span></li></ul>'
	),
	array(
		0 => '我可以使用標籤組合嗎?',
		1 => '當然可以, 例如為了引起注意您可以這樣寫:<br /><br /><strong>[size=18][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />這將輸出 <span style="color:red;font-size:18px;"><strong>LOOK AT ME!</strong></span><br /><br />我們不推薦您在文章中大量使用這樣形式的文字, 因為這樣會引起他人反感. 在使用的過程中請注意每個標籤都必須最後關閉, 否則不能正常顯示. 下列的例子就是錯誤的:<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => '引言, 顯示程式代碼或固定寬度的文字'
	),
	array(
		0 => '在回覆中引用文字',
		1 => '引用文字有兩種方式, 顯示引用來源及直接引用. <ul><li>當您利用引用功能回覆一個文章時, 您會注意到添加到內容中的文章文字被<strong>[quote=""][/quote]</strong> 包圍起來. 這種方式會帶被引用的會員名稱. 例如要引用Mr. Blobby 寫的一段文字, 您可以輸入:<br /><br /><strong>[quote="Mr. Blobby"]</strong>Mr. Blobby 寫的文字<strong>[/quote]</strong><br /><br />顯示中會自動在引用的文字前添上Mr. Blobby 寫道: . 記住您 <strong>必須</strong> 在您引用的人名外加上雙引號 "". </li><li>第二種方式可以進行隨意的引用. 在文章中使用 <strong>[quote][/quote]</strong> 標籤即可. 當您查看文章時, 這將在文字前顯示 引用: .</li></ul>'
	),
	array(
		0 => '顯示程式代碼或固定寬度的文字',
		1 => '如果您需要輸出一段固定寬度的代碼或其他任何東西, 例如Courier字體, 您必須將文字包含在 <strong>[code][/code]</strong> 標籤中, 例如<br /><br /><strong>[code]</strong>顯示 "This is some code";<strong>[/code]</strong><br /><br />所有使用 <strong>[code][/code]</strong> 標籤包圍的文字格式將會以原來的形式顯示.'
	),
	array(
		0 => '--',
		1 => '製作列表'
	),
	array(
		0 => '製作沒有排序的列表',
		1 => 'BBCode支援兩種列表, 有序的和無序的. 他們本質上在HTML中是一樣的. 一個無序的列表依次輸出每個元素. 製作一個無序的列表您可以使用 <strong>[list][/list]</strong> 並在列表中使用 <strong>[*]</strong> 定義每個元素. 例如列出您最喜愛的顏色:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />這將產生如下的列表:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>'
	),
	array(
		0 => '製作依序排列的列表',
		1 => '第二種列表, 有序的列表讓您可以控制每個元素前顯示的符號. 製作一個有序列表可以使用 <strong>[list=1][/list]</strong> 製作一個數字化的列表, 或者使用 <strong>[list=a][/list]</strong> 可以製作一個字母化的列表. 就像無序的列表使用 <strong>[*]</strong>. 例如:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br /> 將產生如下的:<ol type="1"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>但是字母化的列表您得使用:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />得到<ol type="a"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>'
	),
	array(
		0 => '--',
		1 => '製作連結'
	),
	array(
		0 => '連結到另一個網址',
		1 => 'phpBB BBCode可以通過好幾種方式製作連結, 統一資源指示器(URLs)將檢測存在的連結.<ul><li>首先可以使用 <strong>[url=][/url]</strong> 標籤, 無論什麼類型, 在等號=後添加的內容都將成為一個連結. 例如指向 phpBB.com 的連結, 您可以使用:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br /> 這將產生連結: <a href="http://www.phpbb.com/" target="_blank">Visit phpBB!</a> 您會注意到連結打開新的瀏覽器視窗, 這樣以便於會員繼續瀏覽原來的討論區.</li><li>如果您希望連結的文字本身顯示這個連結, 您可以使用:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />這將產生連結: <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a></li><li>另外, phpBB 允許一些自動連結檢測, 這將任何語法正確的連結轉變為可以點擊的連結. 例如輸入 www.phpbb.com 到內容中, 將在瀏覽文章時自動轉換為 <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a> 輸出.</li><li>對於email位址也是一樣的, 您可以使用標籤指定, 例如:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />輸出 <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> 或者您也可以只輸入 no.one@domain.adr, 這將在瀏覽文章時自動被轉換為email連結.</li></ul>對於所有的BBCode, 可以加入其它標籤功能, 例如 <strong>[img][/img]</strong> (see next entry), <strong>[b][/b]</strong>, 等等. 您可以搭配使用任何的標籤, 但切記需正確的開啟及關閉標籤, 例如:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />是 <u>不正確</u> 的, 這將導致您的文章顯示不正常, 所以要格外注意.'
	),
	array(
		0 => '--',
		1 => '在文章中插入圖片'
	),
	array(
		0 => '在文章中插入圖片',
		1 => 'phpBB BBCode 提供了在文章中顯示圖片的標籤. 請在使用這個標籤時注意兩點: 許多會員可能對文章中大量的圖片產生厭煩, 而且您輸入的圖片位址必須是能在網路上顯示的 (這不能只存在於您自己的電腦上, 除非您的電腦是一台網路伺服器!). 要顯示一幅圖片, 您必須在圖片的連結位址兩邊使用 <strong>[img][/img]</strong> 標籤包圍. 例如:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />就像上面連結部分提到的注意事項, 您可以用 <strong>[url][/url]</strong> 標籤包圍圖片, 例如 <br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />將產生:<br /><br /><a href="http://www.google.com/" target="_blank"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => '在文章中添加附件',
		1 => '新的<strong>[attachment=][/attachment]</strong> BBCode允許您在文章中任何地方添加附件, 如果討論區允許使用附件功能 &amp; 並且您有發表附件的權限. 在發佈文章的視窗可以通過附件下拉框將附件粘貼到文章中.'
	),
	array(
		0 => '--',
		1 => '其他內容'
	),
	array(
		0 => '我能添加自己的標籤嗎?',
		1 => '當然可以--如果您是這個討論區的管理員並且擁有相應的權限, 您可以通過自定義BBCode添加更多的BBCodes.'
	)
);

?>