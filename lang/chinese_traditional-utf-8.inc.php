<?php
/* $Id$ */

/**
 * Last translation by: Siu Sun <siusun@best-view.net>
 * Follow by the original translation of Taiyen Hung 洪泰元<yen789@pchome.com.tw>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y, %I:%M %p';

$timespanfmt = '%s 日, %s 小時, %s 分鐘 %s 秒';

$strAbortedClients = '取消';
$strAbsolutePathToDocSqlDir = '請輸入 docSQL 目錄於網頁伺服器的絕對路徑';
$strAccessDeniedExplanation = 'phpMyAdmin 嘗試連線到 MySQL 伺服器, 但伺服器拒絕了連線. 您應於 config.inc.php 內檢查主機名稱, 登入名稱及密碼及確保這些資料是與系統管理人員所提供的 MySQL 伺服器資料相同';
$strAccessDenied = '拒絕存取';
$strAction = '執行';
$strAddAutoIncrement = "新增 AUTO_INCREMENT 數值";
$strAddConstraints = '加入限制';
$strAddDeleteColumn = '新增/減少 選擇欄';
$strAddDeleteRow = '新增/減少 篩選列';
$strAddDropDatabase = '加入 \'刪除資料表\' 語法';
$strAddedColumnComment = '於以下欄位加入註解文字';
$strAddedColumnRelation = '於以下欄位加入關聯';
$strAddHeaderComment = '於標題加入個人註解 (\\n 開新行)';
$strAddIfNotExists = '加入 IF NOT EXISTS';
$strAddIntoComments = '加入註解文字';
$strAddNewField = '增加新欄位';
$strAddPrivilegesOnDb = '於以下資料庫加入權限';
$strAddPrivilegesOnTbl = '於以下資料表加入權限';
$strAddSearchConditions = '增加檢索條件 ("where" 子句的主體)';
$strAddToIndex = '新增 &nbsp;%s&nbsp; 組索引欄';
$strAddUserMessage = '您已新增了一個新使用者.';
$strAddUser = '新增使用者';
$strAdministration = '系統管理';
$strAffectedRows = '影響列數: ';
$strAfterInsertBack = '返回';
$strAfterInsertNewInsert = '新增一筆記錄';
$strAfterInsertSame = '返回這頁';
$strAfter = '在 %s 之後';
$strAllTableSameWidth = '以相同寬度顯示所有資料表?';
$strAll = '全部';
$strAlterOrderBy = '根據欄位內容排序記錄';
$strAnalyzeTable = '分析資料表';
$strAnd = '與';
$strAnIndex = '索引已經新增到 %s';
$strAnyHost = '任何主機';
$strAnyUser = '任何使用者';
$strAny = '任何';
$strAPrimaryKey = '主鍵已經新增到 %s';
$strArabic = '阿拉伯語';
$strArmenian = '美式英語';
$strAscending = '遞增';
$strAtBeginningOfTable = '於資料表開頭';
$strAtEndOfTable = '於資料表尾端';
$strAttr = '屬性';
$strAutodetect = '自動偵測';
$strAutomaticLayout = '自動格式';

$strBack = '回上一頁';
$strBaltic = '波羅的海語';
$strBeginCut = '開始 剪取';
$strBeginRaw = '開始 原始資料';
$strBinaryDoNotEdit = '二進制碼 - 不能編輯';
$strBinary = '二進制碼';
$strBookmarkAllUsers = '所有用者可讀取此書籤';
$strBookmarkDeleted = '書籤已經刪除.';
$strBookmarkLabel = '書籤名稱';
$strBookmarkOptions = '書籤選項';
$strBookmarkQuery = 'SQL 語法書籤';
$strBookmarkThis = '將此 SQL 語法加入書籤';
$strBookmarkView = '查看';
$strBrowseForeignValues = '瀏覽外來值';
$strBrowse = '瀏覽';
$strBulgarian = '保加利亞語';
$strBzError = 'phpMyAdmin 無法壓縮因於這個 php 版本的 Bz2 模組錯誤. 強列要求於 phpMyAdmin 設定檔設定 <code>$cfg[\'BZipDump\']</code> 為<code>FALSE</code>. 如果想使用 Bz2 壓縮功能,請更新 php 到最新版本. 詳情請參看 php 錯誤報報 %s .';
$strBzip = '"bzipped"';

$strCalendar = '日曆';
$strCannotLogin = '無法登入 MySQL 伺服器';
$strCantLoadRecodeIconv = '未能讀取 iconv 或重新編碼程式來作文字編碼轉換, 請設定 php 來啟動這些模組或取消 phpMyAdmin 使用文字編碼轉換功能.';
$strCantLoad = '無法讀取 %s 模組,<br />請檢查 PHP 設定';
$strCantRenameIdxToPrimary = '無法將索引更名為 PRIMARY!';
$strCantUseRecodeIconv = '當文編碼模組讀取後,未能使用 iconv, libiconv 或 recode_string 功能. 請檢查您的 php 設定.';
$strCardinality = '組別';
$strCarriage = '歸位: \\r';
$strCaseInsensitive = '大小寫不相符';
$strCaseSensitive = '大小寫相符';
$strCentralEuropean = '中歐語';
$strChangeCopyModeCopy = '... 保留舊使用者.';
$strChangeCopyModeDeleteAndReload = ' ... 刪除舊使用者及重新讀取權限資料表.';
$strChangeCopyModeJustDelete = ' ... 刪除舊使用者.';
$strChangeCopyModeRevoke = ' ... 廢除所有舊使用者有效之權限並刪除.';
$strChangeCopyMode = '建立新使用者及使用相同之權限, 及 ...';
$strChangeCopyUser = '更改登入資訊 / 複製使用者';
$strChangeDisplay = '選擇顯示之欄位';
$strChangePassword = '更改密碼';
$strChange = '修改';
$strCharsetOfFile = '字元表檔案:';
$strCharsetsAndCollations = '字元集及校對';
$strCharsets = '字元集';
$strCharset = '文字格式 (Charset)';
$strCheckAll = '全選';
$strCheckOverhead = '檢查額外記錄 (overheaded)'; // nor sure yet.
$strCheckPrivsLong = '查詢資料庫 &quot;%s&quot; 之權限.';
$strCheckPrivs = '查詢權限';
$strCheckTable = '檢查資料表';
$strChoosePage = '請選擇需要編輯的頁碼';
$strColComFeat = '顯示欄位註解';
$strCollation = '校對';
$strColumnNames = '欄位名稱';
$strColumnPrivileges = '指定欄位權限';
$strCommand = '指令';
$strCommentsForTable = 'COMMENTS FOR TABLE';  // keep in SQL statement
$strComments = '註解';
$strCompleteInserts = '使用完整新增指令';
$strCompression = '壓縮';
$strConfigFileError = 'phpMyAdmin 未能讀取您的設定檔! 這可能是因為 php 找到語法上的錯誤或 php 未能找到檔案而成.<br />請嘗試直接按下下方的連結開啟並查看 php 的錯誤信息. 通常的錯誤都來自某處漏了引號或分別.<br />如果按下連結後出現空白頁, 即代表沒有任何問題.';
$strConfigureTableCoord = '請設定表格 %s 內的坐標';
$strConnectionError = '無法連線: 錯誤設定.';
$strConnections = '連線';
$strConstraintsForDumped = '備份資料表限制';
$strConstraintsForTable = '資料表限制';
$strCookiesRequired = 'Cookies 必須啟動才能登入.';
$strCopyTableOK = '已經將資料表 %s 複製為 %s.';
$strCopyTableSameNames = '無法複製到相同資料表!';
$strCopyTable = '複製資料表到： (格式為 資料庫名稱<b>.</b>資料表名稱):';
$strCouldNotKill = 'phpMyAdmin 無法中斷指令 %s. 可能這指令已經結束.';
$strCreateIndexTopic = '新增一組索引';
$strCreateIndex = '新增 &nbsp;%s&nbsp; 組索引欄';
$strCreateNewDatabase = '建立新資料庫';
$strCreateNewTable = '建立新資料表於資料庫 %s';
$strCreatePage = '建立新一頁';
$strCreatePdfFeat = '建立 PDF';
$strCreate = '建立';
$strCreationDates = '建立/更新/檢查 日期';
$strCriteria = '篩選';
$strCroatian = '克羅西亞語';
$strCSVOptions = 'CSV 選項';
$strCyrillic = '西里爾語';
$strCzechSlovak = '捷克語';
$strCzech = '捷克語';

$strDanish = '丹麥語';
$strDatabaseEmpty = '資料庫名稱並未輸入!!';
$strDatabaseExportOptions = '資料庫輸出選項';
$strDatabaseHasBeenDropped = '資料庫 %s 已被刪除';
$strDatabaseNoTable = '這資料庫沒有資料表!';
$strDatabasesDropped = '%s 個資料庫已成功刪除.';
$strDatabasesStatsDisable = '停止統計數據';
$strDatabasesStatsEnable = '啟動統計數據';
$strDatabasesStatsHeavyTraffic = '註: 啟動資料庫統計數據可能會產生大量由 Web 伺服器及 MySQL 之間的流量.';
$strDatabasesStats = '資料庫統計';
$strDatabases = '資料庫';
$strDatabase = '資料庫';
$strDataDict = '數據字典';
$strDataOnly = '只有資料';
$strData = '資料';
$strDBComment = '資料庫註解文字: ';
$strDBGContextID = '本文 (Context) ID';
$strDBGContext = '本文 (Context)';
$strDBGHits = '次數';
$strDBGLine = '行';
$strDBGMaxTimeMs = '最大時間, ms';
$strDBGMinTimeMs = '最小時間, ms';
$strDBGModule = '模組';
$strDBGTimePerHitMs = '時間/次, ms';
$strDBGTotalTimeMs = '總時間, ms';
$strDbPrivileges = '指定資料庫權限';
$strDBRename = '更改資料庫名稱到';
$strDbSpecific = '指定資料庫';
$strDefaultValueHelp = '預設值: 請只輸入該預設值, 無需加上任何反斜線或引號';
$strDefault = '預設值';
$strDefragment = '整理資料表';
$strDelayedInserts = '使用延遲式新增';
$strDeleteAndFlushDescr = '這是一個最清潔的做法,但重新讀取權限需一段時間.';
$strDeleteAndFlush = '刪除使用者及重新讀取權限.';
$strDeletedRows = '已刪除欄數:';
$strDeleted = '記錄已被刪除';
$strDelete = '刪除';
$strDeleting = '刪除 %s';
$strDelOld = '本頁的參考到資料表已不存在. 您希望刪除這些參考嗎?';
$strDescending = '遞減';
$strDescription = '說明';
$strDictionary = '字典';
$strDisabled = '未啟動';
$strDisableForeignChecks = '暫定外來鍵 (Foreign Key) 檢查';
$strDisplayFeat = '功能顯示';
$strDisplayOrder = '顯示次序';
$strDisplayPDF = '顯示 PDF 概要';
$strDoAQuery = '以範例查詢 (萬用字元 : "%")';
$strDocu = '說明文件';
$strDoYouReally = '您確定要 ';
$strDropDatabaseStrongWarning = '您將會刪除整個資料庫!';
$strDropSelectedDatabases = '刪除已選擇之資料庫';
$strDropUsersDb = '刪除與使用者相同名稱之資料庫.';
$strDrop = '刪除';
$strDumpingData = '列出以下資料庫的數據：';
$strDumpSaved = '備份已儲到檔案 %s.';
$strDumpXRows = '備份 %s 行, 由 %s 行開始.';
$strDynamic = '動態';

$strEditPDFPages = '編輯 PDF 頁碼';
$strEditPrivileges = '編輯權限';
$strEdit = '編輯';
$strEffective = '實際';
$strEmptyResultSet = 'MySQL 傳回的查詢結果為空 (原因可能為：沒有找到符合條件的記錄)';
$strEmpty = '清空';
$strEnabled = '啟動';
$strEncloseInTransaction = '使用事務塊 (Transaction) 方式';
$strEndCut = '結束 剪取';
$strEndRaw = '結束 原始資料';
$strEnd = '最後一頁';
$strEnglishPrivileges = '注意: MySQL 權限名稱會以英語顯示';
$strEnglish = '英語';
$strError = '錯誤';
$strEstonian = '愛沙尼亞語';
$strExcelEdition = 'Excel 版本';
$strExcelOptions = 'Excel 選項';
$strExecuteBookmarked = '執行書籤查詢';
$strExplain = '說明 SQL';
$strExport = '輸出';
$strExtendedInserts = '伸延新增模式';
$strExtra = '附加';

$strFailedAttempts = '嘗試失敗';
$strFieldHasBeenDropped = '資料表 %s 已被刪除';
$strFieldsEmpty = ' 欄位總數是空的! ';
$strFieldsEnclosedBy = '「欄位」使用字元：';
$strFieldsEscapedBy = '「ESCAPE」使用字元：';
$strFieldsTerminatedBy = '「欄位分隔」使用字元：';
$strFields = '欄位';
$strField = '欄位';
$strFileAlreadyExists = '檔案 %s 已存在,請更改檔案名稱或選擇「覆寫己存在檔案」選項.';
$strFileCouldNotBeRead = '讀案無法讀取';
$strFileNameTemplateHelp = '使用 __DB__ 作為資料庫名稱, __TABLE__ 為資料表名稱. %s任何 strftime%s 內關於時間及附加選項會自動加入. 其他文字將會保留.';
$strFileNameTemplateRemember = '保留樣式名稱';
$strFileNameTemplate = '檔案名稱樣式';
$strFixed = '固定';
$strFlushPrivilegesNote = '註: phpMyAdmin 直接由 MySQL 權限資料表取得使用者權限. 如果使用者自行更改資料表, 資料表內容將可能與實際使用者情況有異. 在這情況下, 您應在繼續前 %s重新載入%s 權限資料表.';
$strFlushTable = '強迫更新資料表 ("FLUSH")';
$strFormat = '格式';
$strFormEmpty = '表格內漏填一些資料!';
$strFullText = '顯示完整文字';
$strFunction = '函數';

$strGenBy = '建立';
$strGeneralRelationFeat = '一般關聯功能';
$strGenTime = '建立日期';
$strGeorgian = '格魯吉亞語';
$strGerman = '德語';
$strGlobalPrivileges = '整體權限';
$strGlobalValue = '整體值';
$strGlobal = '整體';
$strGo = '執行';
$strGrantOption = '授權';
$strGreek = '希臘語';
$strGzip = '"gzipped"';

$strHasBeenAltered = '已經修改';
$strHasBeenCreated = '已經建立';
$strHaveToShow = '您需要選擇最少顯示一行欄位';
$strHebrew = '希伯來語';
$strHexForBinary = '以十六進制數值顯示二進制欄位';
$strHomepageOfficial = 'phpMyAdmin 官方網站';
$strHome = '主目錄';
$strHostEmpty = '請輸入主機名稱!';
$strHost = '主機';
$strHungarian = '匈牙利語';

$strIcelandic = '冰島語'; 
$strId = 'ID'; // use eng
$strIdxFulltext = '全文檢索';
$strIfYouWish = '如果您要指定資料匯入的欄位，請輸入用逗號隔開的欄位名稱';
$strIgnoreInserts = '使用忽略加入 (insert)'; 
$strIgnore = '忽略';
$strIgnoringFile = '忽略檔案 %s';
$strImportDocSQL = '讀取 docSQL 檔案';
$strImportFiles = '輸入檔案';
$strImportFinished = '輸入完成';
$strIndexes = '索引';
$strIndexHasBeenDropped = '索引 %s 已被刪除';
$strIndexName = '索引名稱&nbsp;:';
$strIndexType = '索引類型&nbsp;:';
$strIndex = '索引';
$strInnodbStat = 'InnoDB 狀態';
$strInsecureMySQL = '設定檔內有關設定 (root登入及沒有密碼) 與預設的 MySQL 權限戶口相同。 MySQL 伺服器在這預設的設定運行的話會很容易被入侵，您應更改有關設定去防止安全漏洞。';
$strInsertAsNewRow = '儲存為新記錄';
$strInsertedRowId = '新增資料列 id:';
$strInsertedRows = '新增列數:';
$strInsertNewRow = '新增一筆記錄';
$strInsertTextfiles = '將文字檔資料匯入資料表';
$strInsert = '新增';
$strInstructions = '指令';
$strInternalNotNecessary = '* 當內部關聯在 InnoDB 已存在時是無需要的.';
$strInternalRelations = '內部關聯';
$strInUse = '使用中';

$strJapanese = '日語';
$strJumpToDB = '跳到資料庫 &quot;%s&quot;.';
$strJustDeleteDescr = ' &quot;刪除&quot; 的使用者仍然能夠登入資料庫直至重新載入資料庫為止.';
$strJustDelete = '只從權限資料庫刪除使用者.';

$strKeepPass = '請不要更改密碼';
$strKeyname = '鍵名';
$strKill = 'Kill'; //should expressed in English
$strKorean = '韓語';

$strLandscape = '橫向';
$strLatexCaption = '資料表標題';
$strLatexContent = '資料表 __TABLE__ 內容';
$strLatexContinuedCaption = '連續資料表標題';
$strLatexContinued = '(連續)';
$strLatexIncludeCaption = '包括資料表標題';
$strLatexLabel = '標記鍵名';
$strLaTeX = 'LaTeX';  // use eng
$strLaTeXOptions = 'LaTeX 選項';
$strLatexStructure = '資料表 __TABLE__ 結構';
$strLatvian = '拉脫維亞語';
$strLengthSet = '長度/集合*';
$strLimitNumRows = '筆記錄/每頁';
$strLineFeed = '換行: \\n';
$strLinesTerminatedBy = '「下一行」使用字元：';
$strLinkNotFound = '找不到連結';
$strLinksTo = '連結到';
$strLithuanian = '立陶宛語';
$strLoadExplanation = '最佳模式是由系統自動檢查, 如果錯誤, 您可自由更改.';
$strLoadMethod = 'LOAD 模式';
$strLocalhost = '本地';
$strLocationTextfile = '文字檔案的位置';
$strLoginInformation = '登入資訊';
$strLogin = '登入';
$strLogout = '登出系統';
$strLogPassword = '密碼:';
$strLogServer = '伺服器';
$strLogUsername = '登入名稱:';

$strMaximumSize = '最大容量: %s%s'; 
$strMIME_available_mime = '可使用 MIME 類型';
$strMIME_available_transform = '可使用轉換方式';
$strMIME_description = '說明';
$strMIME_MIMEtype = 'MIME 類型';
$strMIME_nodescription = '這個轉換方式沒有說明.<br />請向作者查詢 %s 是甚麼用途.';
$strMIME_transformation_note = '有關可使用之轉換方式選項及 MINE 類型轉換選項, 請查看 %s轉換方式說明%s';
$strMIME_transformation_options_note = '請用以下的格式輸入轉換選項值: \'a\',\'b\',\'c\'...<br />如您需要輸入反斜線 ("\") 或單引號 ("\'") 請再加上反斜線 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = '轉換方式選項';
$strMIME_transformation = '瀏覽器轉換方式';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  // keep in SQL statement
$strMIME_without = 'MIME 類型以斜體顯示是沒有分隔轉換功能';
$strModifications = '修改已儲存';
$strModifyIndexTopic = '修改索引';
$strModify = '修改';
$strMoreStatusVars = '更多狀況資訊';
$strMoveTableOK = '資料表 %s 已經移動到 %s.';
$strMoveTableSameNames = '無法移動到相同資料表!';
$strMoveTable = '移動資料表到：(格式為 資料庫名稱<b>.</b>資料表名稱)';
$strMultilingual = '多語言';
$strMustSelectFile = '您應選擇需要新增的檔案.';
$strMySQLCharset = 'MySQL 文字編碼';
$strMySQLConnectionCollation = 'MySQL 連線校對';
$strMySQLReloaded = 'MySQL 重新載入完成';
$strMySQLSaid = 'MySQL 傳回： ';
$strMySQLServerProcess = 'MySQL 版本 %pma_s1% 在 %pma_s2% 執行，登入者為 %pma_s3%';
$strMySQLShowProcess = '顯示程序 (Process)';
$strMySQLShowStatus = '顯示 MySQL 執行狀態';
$strMySQLShowVars = '顯示 MySQL 系統變數';

$strName = '名稱';
$strNeedPrimaryKey = '您需要在此資料表設定主鍵 (Primary Key)';
$strNext = '下一個';
$strNoDatabasesSelected = '沒有資料庫選擇.';
$strNoDatabases = '沒有資料庫';
$strNoDescription = '沒有說明';
$strNoDropDatabases = '"DROP DATABASE" 指令已經停用.';
$strNoExplain = '略過說明 SQL';
$strNoFrames = 'phpMyAdmin 較為適合使用在支援<b>頁框</b>的瀏覽器.';
$strNoIndexPartsDefined = '部份索引資料還未定義!';
$strNoIndex = '沒有已定義的索引!';
$strNoModification = '沒有變更';
$strNone = '不適用';
$strNoOptions = '這種格式並無選項';
$strNoPassword = '不用密碼';
$strNoPermission = 'Web 伺服器沒有權限儲存檔案 %s.';
$strNoPhp = '移除 PHP 程式碼';
$strNoPrivileges = '沒有權限';
$strNoQuery = '沒有 SQL 語法!';
$strNoRights = '您現在沒有足夠的權限!';
$strNoRowsSelected = '並無資料列已選擇';
$strNoSpace = '空間不足儲存檔案 %s.';
$strNoTablesFound = '資料庫中沒有資料表';
$strNotNumber = '這不是一個數字!';
$strNotOK = '未能確定';
$strNotSet = '<b>%s</b> 資料表找不到或還未在 %s 設定';
$strNotValidNumber = '不是有效的列數!';
$strNoUsersFound = '找不到使用者';
$strNoValidateSQL = '略過檢查 SQL';
$strNo = ' 否 ';
$strNull = 'Null'; //should expressed in English
$strNumSearchResultsInTable = '%s 項資料符合 - 於資料表 <i>%s</i>';
$strNumSearchResultsTotal = '<b>總計:</b> <i>%s</i> 項資料符合';
$strNumTables = '個資料表';

$strOftenQuotation = '最常用的是引號，「非必須」表示只有 char 和 varchar 欄位會被包括起來';
$strOK = '確定';
$strOperations = '管理';
$strOperator = '操作員';
$strOptimizeTable = '最佳化資料表';
$strOptionalControls = '非必要選項，用來讀寫特殊字元';
$strOptionally = '非必須';
$strOr = '或';
$strOverhead = '多餘';
$strOverwriteExisting = '覆寫已存在檔案';

$strPageNumber = '頁碼:';
$strPaperSize = '紙張大小';
$strPartialText = '顯示部份文字';
$strPasswordChanged = '%s 的密碼已成功更改.';
$strPasswordEmpty = '請輸入密碼!';
$strPasswordNotSame = '第二次輸入的密碼不同!';
$strPassword = '密碼';
$strPdfDbSchema = '"%s" 資料庫概要 - 第 %s 頁';
$strPdfInvalidTblName = '資料表 "%s" 不存在!';
$strPdfNoTables = '沒有資料表';
$strPerHour = '每小時';
$strPerMinute = '每分鐘';
$strPerSecond = '每秒';
$strPersian = '波斯語';
$strPhoneBook = '電話簿';
$strPHP40203 = '您正使用 PHP 版本 4.2.3, 這版本有一個雙字節字元的嚴重錯誤(mbstring). 請參閱 PHP 臭蟲報告編號 19404. phpMyAdmin 並不建議使用這個版本的 PHP .';
$strPHPVersion = 'PHP 版本';
$strPhp = '建立 PHP 程式碼';
$strPmaDocumentation = 'phpMyAdmin 說明文件';
$strPmaUriError = ' 必須設定 <tt>$cfg[\'PmaAbsoluteUri\']</tt> 在設定檔內!';
$strPolish = '波蘭語';
$strPortrait = '直向';
$strPos1 = '第一頁';
$strPrevious = '前一頁';
$strPrimaryKeyHasBeenDropped = '主鍵已被刪除';
$strPrimaryKeyName = '主鍵的名稱必須稱為 PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>必須</b>是主鍵的名稱以及是<b>唯一</b>一組主鍵!)';
$strPrimary = '主鍵';
$strPrintViewFull = '列印檢視 (顯示完整文字)';
$strPrintView = '列印檢視';
$strPrint = '列印';
$strPrivDescAllPrivileges = '包括所有權限除了授權 (GRNANT).';
$strPrivDescAlter = '容許修改現有資料表的結構.';
$strPrivDescCreateDb = '容許建立新資料庫及資料表.';
$strPrivDescCreateTbl = '容許建立新資料表.';
$strPrivDescCreateTmpTable = '容許建立暫時性資料表.';
$strPrivDescDelete = '容許刪除記錄.';
$strPrivDescDropDb = '容許刪除資料庫及資料表.';
$strPrivDescDropTbl = '容許刪除資料表.';
$strPrivDescExecute = '容許 執行預先儲存之程式. 於本 MySQL 版本無效.';
$strPrivDescFile = '容許輸入及輸出數據到檔案.';
$strPrivDescGrant = '容許新增使用者及權限而無需重新讀取權限資料表.';
$strPrivDescIndex = '容許建立及刪除索引.';
$strPrivDescInsert = '容許新增及取代數據.';
$strPrivDescLockTables = '容許鎖上現時連線之資料表.';
$strPrivDescMaxConnections = '限制每小時使用者開啟新連線的數目.';
$strPrivDescMaxQuestions = '限制每小時使用者查詢的數目.';
$strPrivDescMaxUpdates = '限制每小時使用者更改資料表及數據表之指令的數目.';
$strPrivDescProcess3 = '容許中止其他使用者之程序.';
$strPrivDescProcess4 = '容許檢視系統執行清單完整之查詢.';
$strPrivDescReferences = '於本 MySQL 版本無效.';
$strPrivDescReload = '容許重新讀取伺服器設定及強行更新伺服器快取記憶.';
$strPrivDescReplClient = '容許用戶查詢 slaves / masters 在何處.';
$strPrivDescReplSlave = '需要複製的 slaves.';
$strPrivDescSelect = '容許讀取數據.';
$strPrivDescShowDb = '可讀取整個資料庫清單.';
$strPrivDescShutdown = '容許停止伺服器.';
$strPrivDescSuper = '容許連線, 就算超過了最大連線限制; 用於最高系統管理如設定整體權限或中止其他使用者指令.';
$strPrivDescUpdate = '容許更新數據.';
$strPrivDescUsage = '沒有權限.';
$strPrivilegesReloaded = '權限已成功重新讀取.';
$strPrivileges = '權限';
$strProcesslist = '系統執行清單';
$strProperties = '屬性';
$strPutColNames = '將欄位名稱放在首行';

$strQBEDel = '移除';
$strQBEIns = '新增';
$strQBE = '依範例查詢 (QBE)';
$strQueryFrame = '查詢視窗';
$strQueryOnDb = '在資料庫 <b>%s</b> 執行 SQL 語法:';
$strQuerySQLHistory = 'SQL 歷程';
$strQueryStatistics = '<b>查詣統計</b>: 當統計啟動後, 共有 %s 個查詢傳送到此伺服器.';
$strQueryTime = '查詢需時 %01.4f 秒';
$strQueryType = '查詢方式';
$strQueryWindowLock = '不要將這語法覆蓋到本視窗外的SQL語法';

$strReceived = '接收';
$strRecords = '記錄';
$strReferentialIntegrity = '檢查指示完整性:';
$strRefresh = '更新';
$strRelationalSchema = '關聯概要';
$strRelationNotWorking = '關聯資料表的附加功能未能啟動, %s請按此%s 查出問題原因.';
$strRelationsForTable = 'RELATIONS FOR TABLE';  // keep in SQL statement
$strRelations = '關聯';
$strRelationView = '關聯檢視';
$strReloadFailed = '重新載入MySQL失敗';
$strReloadingThePrivileges = '重新讀取權限';
$strReloadMySQL = '重新載入 MySQL';
$strRemoveSelectedUsers = '移除已選擇使用者';
$strRenameDatabaseOK = '資料庫 %s 已更改名稱為 %s';
$strRenameTableOK = '已經將資料表 %s 改名成 %s';
$strRenameTable = '將資料表改名為';
$strRepairTable = '修復資料表';
$strReplaceNULLBy = '將 NULL 取代為';
$strReplaceTable = '以檔案取代資料表資料';
$strReplace = '取代';
$strReset = '重置';
$strResourceLimits = '資源限制';
$strReType = '確認密碼';
$strRevokeAndDeleteDescr = '使用者仍然有 USAGE 權限直至權限資料表更新讀取.';
$strRevokeAndDelete = '廢除使用者所有有效之權限並刪除.';
$strRevokeMessage = '您已移除這位使用者的權限: %s';
$strRevoke = '移除';
$strRomanian = '羅馬尼亞語';
$strRowLength = '資料列長度';
$strRowsFrom = '筆記錄，開始列數:';
$strRowSize = '資料列大小';
$strRowsModeFlippedHorizontal = '垂直 (旋轉標題)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '顯示為 %s 方式 及 每隔 %s 行顯示欄名';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '資料列統計數值';
$strRows = '資料列列數';
$strRunning = '在 %s 執行';
$strRunQuery = '執行語法';
$strRunSQLQuery = '在資料庫 %s 執行以下指令';
$strRussian = '俄語';

$strSaveOnServer = '儲存到伺服器於 %s 目錄';
$strSave = '儲存';
$strScaleFactorSmall = '比例倍數太細, 無法將圖表放在一頁內';
$strSearchFormTitle = '搜索資料庫';
$strSearchInTables = '於以下資料表:';
$strSearchNeedle = '尋找之文字或數值 (萬用字元: "%"):';
$strSearchOption1 = '任何一組文字';
$strSearchOption2 = '所有文字';
$strSearchOption3 = '完整詞語';
$strSearchOption4 = '以規則表示法 (regular expression) 搜索';
$strSearchResultsFor = '搜索 "<i>%s</i>" 的結果 %s:';
$strSearchType = '尋找:';
$strSearch = '搜索';
$strSecretRequired = '設定檔案現在需要密碼 (passphrase) (blowfish_secret).';
$strSelectADb = '請選擇資料庫';
$strSelectAll = '全選';
$strSelectFields = '選擇欄位 (至少一個)';
$strSelectNumRows = '查詢中';
$strSelectTables = '選擇資料表';
$strSend = '下載儲存';
$strSent = '送出';
$strServerChoice = '選擇伺服器';
$strServerNotResponding = '伺服器並無回應';
$strServerStatusUptime = '這 MySQL 伺服器已啟動了 %s. 伺服器於 %s 啟動.';
$strServerStatus = '運行資訊';
$strServerTabProcesslist = '處理';
$strServerTabVariables = '資訊';
$strServerTrafficNotes = '<b>伺服器流量</b>: 這些表顯示了此 MySQL 伺服器自啟動以來的網絡流量統計。';
$strServerVars = '伺服器資訊及設定';
$strServerVersion = '伺服器版本';
$strServer = '伺服器';
$strSessionValue = '程序數值';
$strSetEnumVal = '如欄位格式是 "enum" 或 "set", 請使用以下的格式輸入: \'a\',\'b\',\'c\'...<br />如在數值上需要輸入反斜線 (\) 或單引號 (\') , 請再加上反斜線 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = '顯示全部';
$strShowColor = '顯示顏色';
$strShowDatadictAs = '數據字典格式';
$strShowFullQueries = '顯示完整查詢';
$strShowGrid = '顯示框格';
$strShowingRecords = '顯示記錄';
$strShowPHPInfo = '顯示 PHP 資訊';
$strShowTableDimension = '顯示表格大小';
$strShowTables = '顯示資料表';
$strShowThisQuery = '重新顯示 SQL 語法 ';
$strShow = '顯示';
$strSimplifiedChinese = '簡體中文';
$strSingly = '(只會排序現時的記錄)';
$strSize = '大小';
$strSlovak = '斯洛伐克語';
$strSlovenian = '斯洛文尼亞語';
$strSortByKey = '依鍵名排序';
$strSort = '排序';
$strSpaceUsage = '已使用空間';
$strSpanish = '西班牙語';
$strSplitWordsWithSpace = '每組文字以空格 (" ") 分隔.';
$strSQLExportType = '輸出方式';
$strSQLOptions = 'SQL 選項';
$strSQLParserBugMessage = '這可能是您找到了 SQL 分析程式的一些程式錯誤，請細心查看您的語法，檢查一下引號是正確及沒有遺漏，其他可能出錯的原因可能來自您上載檔案時在引號外的地方使用了二進制碼。您可以嘗試在 MySQL 命令列介面執行該語法。如 MySQL 伺服器發出錯誤信息，這可能幫助您去找出問題所在。如您仍然未能解決問題，或在分析程式出現錯誤，但在命令列模式能正常執行，請將該句出現錯誤的 SQL 語法抽出，並將以下的"剪取"部份一同提交到臭虫區:';
$strSQLParserUserError = '可能是您的 SQL 語法出現錯誤，如 MySQL 伺服器發出錯誤信息，這可能幫助您去找出問題所在。';
$strSQLQuery = 'SQL 語法';
$strSQLResult = 'SQL 查詢結果';
$strSQL = 'SQL'; // should express in english
$strSQPBugInvalidIdentifer = '無效的識別碼 (Invalid Identifer)';
$strSQPBugUnclosedQuote = '未完結的引號 (Unclosed quote)';
$strSQPBugUnknownPunctuation = '不知明的標點符號 (Unknown Punctuation String)';
$strStatCheckTime = '最後檢查';
$strStatCreateTime = '建立';
$strStatement = '敘述';
$strStatUpdateTime = '最後更新';
$strStatus = '狀態';
$strStrucCSV = 'CSV 資料';
$strStrucData = '結構與資料';
$strStrucDrop = '加入 \'刪除資料表\' 語法';
$strStrucExcelCSV = 'MS Excel 的 CSV 格式';
$strStrucNativeExcel = '原始 MS Excel 資料';
$strStrucOnly = '只有結構';
$strStructPropose = '分析資料表結構';
$strStructure = '結構';
$strSubmit = '送出';
$strSuccess = '您的SQL語法已順利執行';
$strSum = '總計';
$strSwedish = '瑞典語';
$strSwitchToTable = '跳到已複製之資料表';

$strTableComments = '資料表註解文字';
$strTableEmpty = '請輸入資料表名稱!';
$strTableHasBeenDropped = '資料表 %s 已被刪除';
$strTableHasBeenEmptied = '資料表 %s 已被清空';
$strTableHasBeenFlushed = '資料表 %s 已被強迫更新';
$strTableMaintenance = '資料表維護';
$strTableOfContents = '目錄';
$strTableOptions = '資料表選項';
$strTables = '%s 資料表';
$strTableStructure = '資料表格式：';
$strTableType = '資料表類型';
$strTable = '資料表';
$strTakeIt = '選用';
$strTblPrivileges = '指定資料表權限';
$strTextAreaLength = ' 由於長度限制<br /> 此欄位不能編輯 ';
$strThai = '泰語';
$strTheContents = '檔案內容將會取代選定的資料表中具有相同主鍵或唯一鍵的記錄';
$strTheContent = '檔案內容已經匯入資料表';
$strTheme = '款式';
$strTheTerminator = '分隔欄位的字元';
$strThisHost = '指定主機';
$strThisNotDirectory = '這並不是一個目錄';
$strThreadSuccessfullyKilled = '指令 %s 已成功中止.';
$strTime = '時間';
$strToggleScratchboard = '轉換便條';
$strTotalUC = '總共';
$strTotal = '總計';
$strTraditionalChinese = '繁體中文';
$strTraditionalSpanish = '傳統西班牙語';
$strTraffic = '流量';
$strTransformation_application_octetstream__download = '於欄位顯示連線來下載二進制資料. 第一個選項是二進制的檔案名稱. 第二個選項可設定可用的欄位名稱用作檔案名稱. 如您設定了第二個選項, 第一個選項無需設定';
$strTransformation_image_jpeg__inline = '顯示可按式圖像; 選項; 寬度,高度[以像素為單位] (保時原有比例)';
$strTransformation_image_jpeg__link = '顯示圖像的連線 (直接下載).';
$strTransformation_image_png__inline = '參看 image/jpeg: 內建';
$strTransformation_text_plain__dateformat = '使用 TIME, TIMESTAMP 或 DATETIME 並以本地時區時間顯示. 第一個選項是修正 (以小時為單位) 來調整顯示之時間 (預設: 0). 第二個選項是日期格式 [跟據 PHPs strftime() 的參數].';
$strTransformation_text_plain__external = '只限於 LINUX : 執行外部程式及將內容以標準輸入模式輸入. 輸出程式之標準輸出. 預設是整齊的, 方便顯示 HTML 碼. 由於保安理由, 您需要自行編輯 libraries/transformations/text_plain__external.inc.php 及加入需要使用工具作為執行. 第一個選項為有多少個程式需要使用, 第二個選項為這式程式的參數, 第三個選項, 如設定為 1 將會使用 htmlspecialchars() 轉換輸出 (預設: 1). 第四個選項, 如設定為 1 將會加入 NOWRAP 於內容的表格內, 令輸出之所有內容都不會重新排位 (預設: 1)';
$strTransformation_text_plain__formatted = '保存原本內容之格式. 不進行任何 Escaping 處理.';
$strTransformation_text_plain__imagelink = '顯示圖像及連結, 數據內容是檔案名稱; 第一個選項是網址前段 (例 "http://domain.com/" ), 第二個選項是寬度的像素,第三個選項是高度的像素.';
$strTransformation_text_plain__link = '顯示連結, 數據內容是檔案名稱; 第一個選項是網址前段 (例 "http://domain.com/" ), 第二選項是連結的標題.';
$strTransformation_text_plain__substr = '只顯示部份的字串. 第一個選項為字串開始輸出的位置 (offset)  (預設: 0). 第二個選項為多少個字串輸出. 留空為輸出餘下所有字串. 第三個選項為當部份字串取回後顯示什麼字串於結尾 (預設: ...) .';
$strTransformation_text_plain__unformatted = '以 HTML 碼顯示 HTML 實體. 不會顯示任何 HTML 格式.';
$strTruncateQueries = '刪除已顯示查詢';
$strTurkish = '土耳其語';
$strType = '型態';

$strUkrainian = '烏克蘭語';
$strUncheckAll = '全部取消';
$strUnicode = '統一碼 (Unicode)';
$strUnique = '唯一';
$strUnknown = '不詳';
$strUnselectAll = '全部取消';
$strUpdatePrivMessage = '您已經更新了 %s 的權限.';
$strUpdateProfileMessage = '資料己經更新.';
$strUpdateQuery = '更新語法';
$strUpdComTab = '請參看說明文件查詢如何更新 Column_comments 資料表';
$strUpgrade = '您應該更新到 %s %s 或之後.';
$strUsage = '使用';
$strUseBackquotes = '在資料表及欄位使用引號';
$strUseHostTable = '使用主機資料表';
$strUserAlreadyExists = '使用者 %s 己存在!';
$strUserEmpty = '請輸入使用者名稱!';
$strUserName = '使用者名稱';
$strUserNotFound = '選擇的使用者在權限資料表內找不到.';
$strUserOverview = '使用者一覽';
$strUsersDeleted = '選擇的使用者已成功刪除.';
$strUsersHavingAccessToDb = '可讀取 &quot;%s&quot; 之使用者';
$strUser = '使用者';
$strUseTables = '使用資料表';
$strUseTextField = '文字輸入';
$strUseThisValue = '使用此值';

$strValidateSQL = '檢查 SQL';
$strValidatorError = 'SQL 分析程式未能啟動，請檢查是否已將 %s文件%s 內的 PHP 檔案安裝。';
$strValue = '值';
$strVar = '資訊';
$strViewDumpDatabases = '顯示資料庫概要 (schema)';
$strViewDumpDB = '檢視資料庫的備份概要 (dump schema)';
$strViewDump = '檢視資料表的備份概要 (dump schema)';

$strWebServerUploadDirectoryError = '設定之上載目錄錯誤，未能使用';
$strWebServerUploadDirectory = 'Web 伺服器上載目錄';
$strWelcome = '歡迎使用 %s';
$strWestEuropean = '西歐語文';
$strWildcard = '萬用字元';
$strWindowNotFound = '目地的視窗無法更新. 可能你已關閉此視窗或你的瀏覽器於安全設定內啟動了無法跨視窗更新';
$strWithChecked = '選擇的資料表：';
$strWritingCommentNotPossible = '無法儲存註解文字';
$strWritingRelationNotPossible = '無法儲存關聯';
$strWrongUser = '錯誤的使用者名稱或密碼，拒絕存取';

$strXML = 'XML'; //USE ENG

$strYes = ' 是 ';

$strZeroRemovesTheLimit = '註: 設定這些選項為 0 (零) 可解除限制.';
$strZip = '"zipped"';

$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
?>
