<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'QYYCMLXX' => 3,
        'SXQYHMD' => 4,
        'DYZGXX' => 5,
        'QYGDZCTZXMHZHBA' => 6,
        'ZFCGDLJGXX' => 7,
        'QYGSZXXX' => 8,
        'AJNSRXX' => 9,
        'QYDSXZCFXX' => 10,
        'YSCRJZJJJZGRDXX' => 11,
        'SFJDJGCYRYZGXX' => 12,
        'QXTCHJBHJDXX' => 13,
        'PXSTYXHDJXX' => 14,
        'HSZYZGZXX' => 15,
        'JGJCDXZJL' => 16,
        'JXSZLJDW' => 17,
        'ZLJCQYXX' => 18,
        'SLGCZBXX' => 19,
        'ESCJDPGJGHZZS' => 20,
        'PGJGXX' => 21,
        'DTJXJGRXX' => 22,
        'YXZZDWJBGXX' => 23,
        'SLYSXKZXX' => 24,
        'ZYJNZSXX' => 25,
        'QYRYXX' => 26,
        'SHZZNJXX' => 27,
        'YLBXXX' => 28,
        'TJDCDXML' => 29,
        'JDCWFXX' => 30,
        'GTGSHXX' => 31,
        'CMQYSBXX' => 32,
        'YPLSQYXX' => 33,
        'YZTQSBXXHMD' => 34,
        'JGRYXX' => 35,
        'SPYPTSJBJLGR' => 36,
        'SPYPTSJBJLDW' => 37,
        'JXMPCPXX' => 38,
        'JSZGXX' => 39,
        'SJYXXS' => 40,
        'SYBXXX' => 41,
        'SJJXMXX' => 42,
        'JYJGXINXI' => 43,
        'GRRYXXJYJ' => 44,
        'GRRYXXJTJ' => 45,
        'GRRYXXGDJ' => 46,
        'GRRYXXMZJ' => 47,
        'SBQYXX' => 48,
        'SFJDJGDJXX' => 49,
        'GZJGJBXX' => 50,
        'GZYXX' => 51,
        'JCFLFWSXX' => 52,
        'JCFLFWGZZJBXX' => 53,
        'LSSWSXX' => 54,
        'LSZYZGZXX' => 55,
        'GZRYXX' => 56,
        'YSZYZCHBGZC' => 57,
        'YSZYZGZXX' => 58,
        'WSHJHSYWYHJCXX' => 59,
        'YLHJSFWJGXX' => 60,
        'JBYFKZJGXX' => 61,
        'FYCRYJLXX' => 62,
        'WSZYJSZGKSWJXX' => 63,
        'QSWCXXXJDWBZ' => 64,
        'YZTQNMGGZHMD' => 65,
        'JGRYXXSWGXJ' => 66,
        'JGRYXXSJYJ' => 67,
        'JGRYXXSSFJ' => 68,
        'MBFQYML' => 69,
        'SHTTDJXX' => 70,
        'QYZXXX' => 71,
        'QYDXXX' => 72,
        'CCJCJGXX' => 73,
        'TZXMBLJGGSXX' => 74,
        'TZXMMCDMPPXX' => 75,
        'SFJDRXX' => 76,
        'SFJDJGXX' => 77,
        'LSZYXX' => 78,
        'LSNDPJXX' => 79,
        'LSSWSNDPJXX' => 80,
        'SAJLVJQ' => 81,
        'BWGXX' => 82,
        'WWSDXX' => 83,
        'WWSDGMXSJLSX' => 84,
        'QYSWJBDJXX' => 85,
        'NSXYDJPDXX' => 86,
        'QYQSGGXX' => 87,
        'FZCNSRXX'=> 88,
        'LXSDJXX' => 89,
        'GRYCJJBAXX' => 90,
        'XZJLXXZRR' => 91,
        'XZJLXXFRHQTZZ' => 92,
        'MZSHTTHMBFQYDW' => 93,
        'QYJBXX' => 94,
        'SXBZXRXX' => 95,
        'ZDSSWFAJXX' => 96,
        'HXLDGXXX' => 97,
        'SCAQBLJLHMD' => 98,
        'YZSXWFQY' => 99,
        'HGSXQY' => 100,
        'HGGJRZ' => 101,
        'ZZQSGBZHSFGDMD' => 102,
        'ZZQCYBGCZLJMD' => 103,
        'ZZQYZYBGCMD' => 104,
        'SLJSSC' => 105,
        'LHCJFRHMD'=>106,
        'LHJLFRHMD'=>107,
        'XYSFSQ'=>108,
        'C_AJASRMD'=>109,
        'C_AJNSR'=>110,
        'C_SXBZXJG'=>111,
        'P_VWEB_PERSON'=>112,
        'C_JYZCX'=>113,
        'C_NYLYJL'=>114,
        'C_SBHQJT'=>115,
        'DDMFSBHR'=>116,
        'NYLYGRJLXX'=>117,
        'P_JGJGBB'=>118,
        'P_SXBZXR'=>119,
        'P_YXSBHQS'=>120,
        'T_XINING_P_GRGJJYWMXXX'=>121,
        'T_XINING_P_GRZFGJJ'=>122,
        'T_XINING_P_JYXX'=>123,
        'T_XINING_P_SBJFXX'=>124,
        'T_XINING_P_XSXJXX_NEW'=>125,
        'T_GONGSHANG_CWFZR' => 126,
        'T_GONGSHANG_DSJSJLXX' => 127,
        'T_GONGSHANG_FRXX' => 128,
        'T_GONGSHANG_FZJGZGBMXX' => 129,
        'T_GONGSHANG_GTHBGXX' => 130,
        'T_GONGSHANG_NBXXWZHWD' => 131,
        'T_GONGSHANG_NBXXZCXX' => 132,
        'T_GONGSHANG_QYBGXX' => 133,
        'T_GONGSHANG_QYJYYCML' => 134,
        'T_GONGSHANG_TZFGDXX' => 135,
        'T_GONGSHANG_GTJYCSXX' => 136,
        'T_GONGSHANG_LLYXX' => 137,
        'T_GONGSHANG_NBXXGQBGXX' => 138,
        'T_GONGSHANG_NBXXJBXX' => 139,
        'T_GONGSHANG_NBXXQYRJCZ' => 140,
        'T_XINING_P_GRGJJDKSQJDXX' => 141,
        'T_XINING_GJJDSJ_CR_GR' => 142,
        'GS_GT_GTGSHXX' => 143,
        'T_XINING_P_SPFYSHTBA' => 144,
        'T_XINING_GJJDSJ_GRDK_SQ_DBXX' => 145,
        'T_XINING_P_XZGFXX' => 146,
        'T_XINING_P_XZQRXX' => 147,
        'T_GJJDSJ_FGW_DWYWMX' => 148,
        'T_XINING_GJJDSJ_GRDK_SQ_GTJKR' => 149,
        'T_XINING_L_GTJYCSXX' => 150,
        'T_XINING_L_NBXXJBXX' => 151,
        'T_XINING_L_NBXXZCXX' => 152,
        'T_XINING_L_GQJGXX' => 153,
        'T_XINING_P_GZXX' => 154,
        'T_GJJDSJ_FGW_JCDWXX' => 155,
        'T_XINING_L_JDJCXX' => 156,
        'T_XINING_JYT_JSGXXX_SJ' => 157,
        'T_XINING_L_NBXXQYRJCZXX' => 158,
        'T_XINING_JTJ_XN_TAXI_PRACTITIONERS_INFO' => 159,
        'T_XINING_P_QFHTBAZX' => 160,
        'T_XINING_L_QTJGDJXX' => 161,
        'T_XINING_P_QTXZZFXX' => 162,
        'T_XINING_GJJDSJ_GRDK_SQ_HTXX' => 163,
        'T_XINING_P_TKGYJFFLS' => 164,
        'T_XINING_P_ZYCYZGXX' => 165,
        'T_XINING_L_JGBGDJXX' => 166,
        'T_XINING_L_JYYCMLXX' => 167,
        'T_XINING_L_LLYXX' => 168,
        'T_XINING_L_QHSCYHYSPAQDJPJ' => 169,
        'T_GJJDSJ_FGW_DWZHXX' => 170,
        'T_XINING_P_GZFFPXX' => 171,
        'T_XINING_L_QFHTBAZX' => 172,
        'T_XINING_P_JDJCXX' => 173,
        'T_XINING_P_RYBZXX' => 174,
        'T_XINING_P_ZDRQZZXX' => 175,
        'T_XINING_L_HYXXPJ' => 176,
        'T_XINING_P_SXBZXRMDXX' => 177,
        'T_XINING_P_TKGYRYJTDA' => 178,
        'XZCJ'=>179,
        'XZJDJC'=>180,
        'XZJL'=>181,
        'XZQR'=>182,
        'XZQZ'=>183,
        // @position_type_184
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['XZQZ'],
            self::TYPE['XZQR'],
            self::TYPE['XZJL'],
            self::TYPE['XZJDJC'],
            self::TYPE['XZCJ'],
        ),
        IUserGroup::ID['SFGW'] => array(
            self::TYPE['LHJLFRHMD'],
            self::TYPE['LHCJFRHMD'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['TZXMBLJGGSXX'],
            self::TYPE['TZXMMCDMPPXX'],
            self::TYPE['QYGDZCTZXMHZHBA'],
            self::TYPE['TEST'],
            self::TYPE['T_XINING_P_XZGFXX'],
            self::TYPE['T_XINING_P_XZQRXX'],
            self::TYPE['T_GJJDSJ_FGW_DWYWMX'],
            self::TYPE['T_XINING_P_GZXX'],
            self::TYPE['T_XINING_L_JDJCXX'],
            self::TYPE['T_XINING_P_QTXZZFXX'],
            self::TYPE['T_XINING_P_ZYCYZGXX'],
            self::TYPE['T_XINING_P_JDJCXX'],
            self::TYPE['T_XINING_P_RYBZXX'],
            self::TYPE['T_XINING_P_ZDRQZZXX'],
            self::TYPE['T_XINING_L_HYXXPJ'],
        ),
        IUserGroup::ID['SSCJDGLJ'] => array(
            self::TYPE['QYJBXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JGRYXX'],
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
            self::TYPE['T_GONGSHANG_CWFZR'],
            self::TYPE['T_GONGSHANG_DSJSJLXX'],
            self::TYPE['T_GONGSHANG_FRXX'],
            self::TYPE['T_GONGSHANG_FZJGZGBMXX'],
            self::TYPE['T_GONGSHANG_GTHBGXX'],
            self::TYPE['T_GONGSHANG_NBXXWZHWD'],
            self::TYPE['T_GONGSHANG_NBXXZCXX'],
            self::TYPE['T_GONGSHANG_QYBGXX'],
            self::TYPE['T_GONGSHANG_QYJYYCML'],
            self::TYPE['T_GONGSHANG_TZFGDXX'],
            self::TYPE['T_GONGSHANG_GTJYCSXX'],
            self::TYPE['T_GONGSHANG_LLYXX'],
            self::TYPE['T_GONGSHANG_NBXXGQBGXX'],
            self::TYPE['T_GONGSHANG_NBXXJBXX'],
            self::TYPE['T_GONGSHANG_NBXXQYRJCZ'],
            self::TYPE['GS_GT_GTGSHXX'],
            self::TYPE['T_XINING_L_GTJYCSXX'],
            self::TYPE['T_XINING_L_NBXXJBXX'],
            self::TYPE['T_XINING_L_NBXXZCXX'],
            self::TYPE['T_XINING_L_GQJGXX'],
            self::TYPE['T_XINING_L_NBXXQYRJCZXX'],
            self::TYPE['T_XINING_L_QTJGDJXX'],
            self::TYPE['T_XINING_L_JGBGDJXX'],
            self::TYPE['T_XINING_L_JYYCMLXX'],
            self::TYPE['T_XINING_L_LLYXX'],
            self::TYPE['T_XINING_L_QHSCYHYSPAQDJPJ'],
        ),
        IUserGroup::ID['SSHUIWJ'] => array(
            self::TYPE['C_AJNSR'],
            self::TYPE['C_AJASRMD'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYSWJBDJXX'],
            self::TYPE['NSXYDJPDXX'],
            self::TYPE['QYQSGGXX'],
            self::TYPE['FZCNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['SRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['HXLDGXXX'],
            self::TYPE['T_XINING_P_SBJFXX'],
        ),
        IUserGroup::ID['SHBJ'] => array(),
        IUserGroup::ID['SFY'] => array(
            //self::TYPE['P_SXBZXR'],
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['T_XINING_P_SXBZXRMDXX'],
        ),
        IUserGroup::ID['SJTJ'] => array(
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
            self::TYPE['T_XINING_JTJ_XN_TAXI_PRACTITIONERS_INFO'],
        ),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
        ),
        IUserGroup::ID['SJCY'] => array(),
        IUserGroup::ID['SYBJ'] => array(
            self::TYPE['T_XINING_L_JDJCXX'],
        ),
        IUserGroup::ID['SGYHXXHJ'] => array(),
        IUserGroup::ID['SYJGLJ'] => array(),
        IUserGroup::ID['SGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
        ),
        IUserGroup::ID['SJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['T_XINING_P_JYXX'],
            self::TYPE['T_XINING_P_XSXJXX_NEW'],
            self::TYPE['T_XINING_JYT_JSGXXX_SJ'],
        ),
        IUserGroup::ID['SWSJKW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
        ),
        IUserGroup::ID['SJRB'] => array(),
        IUserGroup::ID['SNMJ'] => array(
            //self::TYPE['NYLYGRJLXX'],self::TYPE['C_NYLYJL'],self::TYPE['C_JYZCX']
        ),
        IUserGroup::ID['STJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
        ),
        IUserGroup::ID['SKJJ'] => array(
            self::TYPE['JXSZLJDW'],
        ),
        IUserGroup::ID['SMZJ'] => array(
            self::TYPE['MZSHTTHMBFQYDW'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['T_XINING_P_TKGYJFFLS'],
            self::TYPE['T_XINING_P_TKGYRYJTDA'],
        ),
        IUserGroup::ID['SSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['SFJDRXX'],
            self::TYPE['SFJDJGXX'],
            self::TYPE['LSZYXX'],
            self::TYPE['LSNDPJXX'],
            self::TYPE['LSSWSNDPJXX'],
        ),
        IUserGroup::ID['SZJJ'] => array(
            self::TYPE['P_VWEB_PERSON'],
            self::TYPE['ZLJCQYXX'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['ZZQSGBZHSFGDMD'],
            self::TYPE['ZZQCYBGCZLJMD'],
            self::TYPE['ZZQYZYBGCMD'],
        ),
        IUserGroup::ID['SZGH'] => array(),
        IUserGroup::ID['SCZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
        ),
        IUserGroup::ID['SGSL'] => array(),
        IUserGroup::ID['SLCJ'] => array(),
        IUserGroup::ID['SGGZYJYZX'] => array(),
        IUserGroup::ID['SGBDST'] => array(),
        IUserGroup::ID['SZJB'] => array(
        ),
        IUserGroup::ID['SXCB'] => array(
        ),
        IUserGroup::ID['SZFW'] => array(
        ),
        IUserGroup::ID['SBB'] => array(
        ),
        IUserGroup::ID['SZJGGW'] => array(
        ),
        IUserGroup::ID['TSW'] => array(
        ),
        IUserGroup::ID['SFL'] => array(
        ),
        IUserGroup::ID['SYSHJJGJ'] => array(
        ),
        IUserGroup::ID['SGJAQJ'] => array(
        ),
        IUserGroup::ID['SZfBZFCJ'] => array(
            self::TYPE['T_XINING_P_SPFYSHTBA'],
            self::TYPE['T_XINING_GJJDSJ_GRDK_SQ_DBXX'],
            self::TYPE['T_XINING_GJJDSJ_GRDK_SQ_GTJKR'],
            self::TYPE['T_XINING_P_QFHTBAZX'],
            self::TYPE['T_XINING_GJJDSJ_GRDK_SQ_HTXX'],
            self::TYPE['T_XINING_P_GZFFPXX'],
            self::TYPE['T_XINING_L_QFHTBAZX'],
        ),
        IUserGroup::ID['STYJRJ'] => array(
        ),
        IUserGroup::ID['SWSB'] => array(
        ),
        IUserGroup::ID['STYJ'] => array(
        ),
        IUserGroup::ID['SXCZXJ'] => array(
        ),
        IUserGroup::ID['SRFB'] => array(
        ),
        IUserGroup::ID['SXFJ'] => array(
        ),
        IUserGroup::ID['SXZSPJ'] => array(
        ),
        IUserGroup::ID['SXFD'] => array(
        ),
        IUserGroup::ID['SWL'] => array(
        ),
        IUserGroup::ID['SKX'] => array(
        ),
        IUserGroup::ID['SCL'] => array(
        ),
        IUserGroup::ID['SHSZH'] => array(
        ),
        IUserGroup::ID['SGXLX'] => array(
        ),
        IUserGroup::ID['SMCH'] => array(
        ),
        IUserGroup::ID['SSWJ'] => array(
        ),
        IUserGroup::ID['SDSJGLJ'] => array(
        ),
        IUserGroup::ID['YZGLJ'] => array(
        ),
        IUserGroup::ID['XHHG'] => array(
        ),
        IUserGroup::ID['GJJGLZX'] => array(
            self::TYPE['T_XINING_P_GRGJJYWMXXX'],
            self::TYPE['T_XINING_P_GRZFGJJ'],
            self::TYPE['T_XINING_P_GRGJJDKSQJDXX'],
            self::TYPE['T_XINING_GJJDSJ_CR_GR'],
            self::TYPE['T_GJJDSJ_FGW_JCDWXX'],
            self::TYPE['T_GJJDSJ_FGW_DWZHXX'],
        ),
        IUserGroup::ID['ZGDXXNFGS'] => array(
        ),
        IUserGroup::ID['ZGYDXNFGS'] => array(
        ),
        IUserGroup::ID['ZGLTXNFGS'] => array(
        ),
        IUserGroup::ID['GSJT'] => array(
        ),
        IUserGroup::ID['GWXNGDGS'] => array(
        ),
        IUserGroup::ID['XNNZYRQ'] => array(
        ),
        IUserGroup::ID['GJJT'] => array(
        ),
        IUserGroup::ID['CDGR'] => array(
        ),
        IUserGroup::ID['CDQ'] => array(
        ),
        IUserGroup::ID['CXQ'] => array(
        ),
        IUserGroup::ID['CZQ'] => array(
        ),
        IUserGroup::ID['CBQ'] => array(
        ),
        IUserGroup::ID['DTX'] => array(
        ),
        IUserGroup::ID['HZX'] => array(
        ),
        IUserGroup::ID['HYX'] => array(
        ),

        IUserGroup::ID['CDQWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),
        IUserGroup::ID['CXQWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),
        IUserGroup::ID['CZQWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),
        IUserGroup::ID['CBJKJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),
        IUserGroup::ID['DTXWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),
        IUserGroup::ID['HZXWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),
        IUserGroup::ID['HYXWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
        ),

        IUserGroup::ID['CDQCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),
        IUserGroup::ID['CXQCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),
        IUserGroup::ID['CZQCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),
        IUserGroup::ID['DTXCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),
        IUserGroup::ID['HYXCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),
        IUserGroup::ID['CBCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),
        IUserGroup::ID['SCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),

        IUserGroup::ID['CXQYBJ'] => array(
            self::TYPE['T_XINING_L_JDJCXX'],
        ),
        IUserGroup::ID['CZQYBJ'] => array(
            self::TYPE['T_XINING_L_JDJCXX'],
        ),
        IUserGroup::ID['DTXYBJ'] => array(
            self::TYPE['T_XINING_L_JDJCXX'],
        ),
        IUserGroup::ID['HZXYBJ'] => array(
            self::TYPE['T_XINING_L_JDJCXX'],
        ),
        IUserGroup::ID['HYXYBJ'] => array(
            self::TYPE['T_XINING_L_JDJCXX'],
        ),

        IUserGroup::ID['CDJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['CXQJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['CZQJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['CBJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['DTXJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['HZXJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['HYXJYUJ'] => array(
            self::TYPE['JSZGXX'],
        ),

        IUserGroup::ID['CDQFY'] => array(
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['T_XINING_P_SXBZXRMDXX'],
        ),
        IUserGroup::ID['CXQFY'] => array(
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['T_XINING_P_SXBZXRMDXX'],
        ),
        IUserGroup::ID['CZQFY'] => array(
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['T_XINING_P_SXBZXRMDXX'],
        ),
        IUserGroup::ID['DTXFY'] => array(
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['T_XINING_P_SXBZXRMDXX'],
        ),
        IUserGroup::ID['HYXFY'] => array(
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['T_XINING_P_SXBZXRMDXX'],
        ),
        IUserGroup::ID['DTCGJ'] => array(
            self::TYPE['SLYSXKZXX'],
        ),

        IUserGroup::ID['CDRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['CXQRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['CZQRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['CBRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['DTXRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['HZXRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['HYXRSJ'] => array(
            self::TYPE['YZTQNMGGZHMD'],
        ),

        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
