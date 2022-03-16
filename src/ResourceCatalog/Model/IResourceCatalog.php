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
        // @position_type_131
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
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
        ),
        IUserGroup::ID['SSWJ'] => array(
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
        ),
        IUserGroup::ID['SJTJ'] => array(
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
        ),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
        ),
        IUserGroup::ID['SJCY'] => array(),
        IUserGroup::ID['SYBJ'] => array(),
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
        IUserGroup::ID['SXFJ'] => array(
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
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
