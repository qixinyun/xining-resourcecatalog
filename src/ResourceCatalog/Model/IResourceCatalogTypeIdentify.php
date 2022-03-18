<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['DYZGXX'] => 'DYZGXX',
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => 'QYGDZCTZXMHZHBA',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'QXTCHJBHJDXX',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => 'PXSTYXHDJXX',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'HSZYZGZXX',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'JXSZLJDW',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'SLGCZBXX',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['PGJGXX'] => 'PGJGXX',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'YXZZDWJBGXX',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'SLYSXKZXX',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'JXMPCPXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'GRRYXXJTJ',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => 'GRRYXXGDJ',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'YSZYZCHBGZC',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'YSZYZGZXX',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'WSHJHSYWYHJCXX',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'YLHJSFWJGXX',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'JBYFKZJGXX',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'FYCRYJLXX',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'WSZYJSZGKSWJXX',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'QSWCXXXJDWBZ',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => 'JGRYXXSWGXJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['MBFQYML'] => 'MBFQYML',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'SHTTDJXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',
        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => 'TZXMBLJGGSXX',
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => 'TZXMMCDMPPXX',
        IResourceCatalog::TYPE['SFJDRXX'] => 'SFJDRXX',
        IResourceCatalog::TYPE['SFJDJGXX'] => 'SFJDJGXX',
        IResourceCatalog::TYPE['LSZYXX'] => 'LSZYXX',
        IResourceCatalog::TYPE['LSNDPJXX'] => 'LSNDPJXX',
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => 'LSSWSNDPJXX',
        IResourceCatalog::TYPE['SAJLVJQ'] => 'SAJLVJQ',
        IResourceCatalog::TYPE['BWGXX'] => 'BWGXX',
        IResourceCatalog::TYPE['WWSDXX'] => 'WWSDXX',
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => 'WWSDGMXSJLSX',
        IResourceCatalog::TYPE['QYSWJBDJXX'] => 'QYSWJBDJXX',
        IResourceCatalog::TYPE['NSXYDJPDXX'] => 'NSXYDJPDXX',
        IResourceCatalog::TYPE['QYQSGGXX'] => 'QYQSGGXX',
        IResourceCatalog::TYPE['FZCNSRXX'] => 'FZCNSRXX',
        IResourceCatalog::TYPE['LXSDJXX'] => 'LXSDJXX',
        IResourceCatalog::TYPE['GRYCJJBAXX'] => 'GRYCJJBAXX',
        IResourceCatalog::TYPE['XZJLXXZRR'] => 'XZJLXXZRR',
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => 'XZJLXXFRHQTZZ',
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => 'MZSHTTHMBFQYDW',
        IResourceCatalog::TYPE['QYJBXX'] => 'QYJBXX',
        IResourceCatalog::TYPE['SXBZXRXX'] => 'SXBZXRXX',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'ZDSSWFAJXX',
        IResourceCatalog::TYPE['HXLDGXXX'] => 'HXLDGXXX',
        IResourceCatalog::TYPE['SCAQBLJLHMD'] => 'SCAQBLJLHMD',
        IResourceCatalog::TYPE['YZSXWFQY'] => 'YZSXWFQY',
        IResourceCatalog::TYPE['HGSXQY'] => 'HGSXQY',
        IResourceCatalog::TYPE['HGGJRZ'] => 'HGGJRZ',
        IResourceCatalog::TYPE['ZZQSGBZHSFGDMD'] => 'ZZQSGBZHSFGDMD',
        IResourceCatalog::TYPE['ZZQCYBGCZLJMD'] => 'ZZQCYBGCZLJMD',
        IResourceCatalog::TYPE['ZZQYZYBGCMD'] => 'ZZQYZYBGCMD',
        IResourceCatalog::TYPE['SLJSSC'] => 'SLJSSC',
        IResourceCatalog::TYPE['LHCJFRHMD'] => 'LHCJFRHMD',
        IResourceCatalog::TYPE['LHJLFRHMD'] => 'LHJLFRHMD',
        IResourceCatalog::TYPE['XYSFSQ'] => 'XYSFSQ',
        IResourceCatalog::TYPE['TEST'] => 'TEST',
        IResourceCatalog::TYPE['C_AJASRMD'] => 'C_AJASRMD',
        IResourceCatalog::TYPE['C_AJNSR'] => 'C_AJNSR',
        IResourceCatalog::TYPE['C_SXBZXJG'] => 'C_SXBZXJG',
        IResourceCatalog::TYPE['P_VWEB_PERSON'] => 'P_VWEB_PERSON',
        IResourceCatalog::TYPE['C_JYZCX'] => 'C_JYZCX',
        IResourceCatalog::TYPE['C_NYLYJL'] => 'C_NYLYJL',
        IResourceCatalog::TYPE['C_SBHQJT'] => 'C_SBHQJT',
        IResourceCatalog::TYPE['DDMFSBHR'] => 'DDMFSBHR',
        IResourceCatalog::TYPE['NYLYGRJLXX'] => 'NYLYGRJLXX',
        IResourceCatalog::TYPE['P_JGJGBB'] => 'P_JGJGBB',
        IResourceCatalog::TYPE['P_SXBZXR'] => 'P_SXBZXR',
        IResourceCatalog::TYPE['P_YXSBHQS'] => 'P_YXSBHQS',
        IResourceCatalog::TYPE['T_XINING_P_GRGJJYWMXXX'] => 'T_XINING_P_GRGJJYWMXXX',
        IResourceCatalog::TYPE['T_XINING_P_GRZFGJJ'] => 'T_XINING_P_GRZFGJJ',
        IResourceCatalog::TYPE['T_XINING_P_JYXX'] => 'T_XINING_P_JYXX',
        IResourceCatalog::TYPE['T_XINING_P_XSXJXX_NEW'] => 'T_XINING_P_XSXJXX_NEW',
        IResourceCatalog::TYPE['T_XINING_P_SBJFXX'] => 'T_XINING_P_SBJFXX',
        IResourceCatalog::TYPE['T_GONGSHANG_CWFZR'] => 'T_GONGSHANG_CWFZR',
        IResourceCatalog::TYPE['T_GONGSHANG_DSJSJLXX'] => 'T_GONGSHANG_DSJSJLXX',
        IResourceCatalog::TYPE['T_GONGSHANG_FRXX'] => 'T_GONGSHANG_FRXX',
        IResourceCatalog::TYPE['T_GONGSHANG_FZJGZGBMXX'] => 'T_GONGSHANG_FZJGZGBMXX',
        IResourceCatalog::TYPE['T_GONGSHANG_GTHBGXX'] => 'T_GONGSHANG_GTHBGXX',
        IResourceCatalog::TYPE['T_GONGSHANG_NBXXWZHWD'] =>  'T_GONGSHANG_NBXXWZHWD',
        IResourceCatalog::TYPE['T_GONGSHANG_NBXXZCXX'] =>  'T_GONGSHANG_NBXXZCXX',
        IResourceCatalog::TYPE['T_GONGSHANG_QYBGXX'] =>  'T_GONGSHANG_QYBGXX',
        IResourceCatalog::TYPE['T_GONGSHANG_QYJYYCML'] =>  'T_GONGSHANG_QYJYYCML',
        IResourceCatalog::TYPE['T_GONGSHANG_TZFGDXX'] =>  'T_GONGSHANG_TZFGDXX',
        IResourceCatalog::TYPE['T_GONGSHANG_GTJYCSXX'] => 'T_GONGSHANG_GTJYCSXX',
        IResourceCatalog::TYPE['T_GONGSHANG_LLYXX'] => 'T_GONGSHANG_LLYXX',
        IResourceCatalog::TYPE['T_GONGSHANG_NBXXGQBGXX'] => 'T_GONGSHANG_NBXXGQBGXX',
        IResourceCatalog::TYPE['T_GONGSHANG_NBXXJBXX'] => 'T_GONGSHANG_NBXXJBXX',
        IResourceCatalog::TYPE['T_GONGSHANG_NBXXQYRJCZ'] => 'T_GONGSHANG_NBXXQYRJCZ',
        IResourceCatalog::TYPE['T_XINING_P_GRGJJDKSQJDXX'] => 'T_XINING_P_GRGJJDKSQJDXX',
        IResourceCatalog::TYPE['T_XINING_GJJDSJ_CR_GR'] => 'T_XINING_GJJDSJ_CR_GR',
        IResourceCatalog::TYPE['GS_GT_GTGSHXX'] => 'GS_GT_GTGSHXX',
        IResourceCatalog::TYPE['T_XINING_P_SPFYSHTBA'] => 'T_XINING_P_SPFYSHTBA',
        IResourceCatalog::TYPE['T_XINING_GJJDSJ_GRDK_SQ_DBXX'] => 'T_XINING_GJJDSJ_GRDK_SQ_DBXX',
        IResourceCatalog::TYPE['T_XINING_P_XZGFXX'] => 'T_XINING_P_XZGFXX',
        IResourceCatalog::TYPE['T_XINING_P_XZQRXX'] => 'T_XINING_P_XZQRXX',
        IResourceCatalog::TYPE['T_GJJDSJ_FGW_DWYWMX'] => 'T_GJJDSJ_FGW_DWYWMX',
        IResourceCatalog::TYPE['T_XINING_GJJDSJ_GRDK_SQ_GTJKR'] => 'T_XINING_GJJDSJ_GRDK_SQ_GTJKR',
        IResourceCatalog::TYPE['T_XINING_L_GTJYCSXX'] => 'T_XINING_L_GTJYCSXX',
        IResourceCatalog::TYPE['T_XINING_L_NBXXJBXX'] => 'T_XINING_L_NBXXJBXX',
        IResourceCatalog::TYPE['T_XINING_L_NBXXZCXX'] => 'T_XINING_L_NBXXZCXX',
        //@position
    );
}
