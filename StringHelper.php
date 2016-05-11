<?php
/**
 * Author: liasica
 * CreateTime: 16/5/7 17:51
 * Filename: StringHelper.php
 * PhpStorm: mipay
 */
namespace liasica\helpers;
class StringHelper
{
  /**
   * @param         $string      原字符串
   * @param         $replacement 替换的字符串
   * @param         $start       开始位置, 正数 - 在字符串中的指定位置开始替换 负数 - 在从字符串结尾的指定位置开始替换 0 - 在字符串中的第一个字符处开始替换
   * @param null    $length      替换长度, 正数 - 被替换的字符串长度 负数 - 表示待替换的子字符串结尾处距离 string 末端的字符个数。 0 - 插入而非替换, 默认是与字符串长度相同。
   * @param integer $repeat      重复次数
   * @return string
   */
  public static function strReplace($string, $replacement, $start, $length = null, $repeat = 0):string
  {
    $len = mb_strlen($string, 'utf8');
    if ($repeat)
    {
      $replacement = str_repeat($replacement, $repeat);
    }

    return substr_replace($string, $replacement, $start, $length);
  }

  /**
   * 只保留字符串首尾字符，隐藏中间用*代替（两个字符时只显示第一个）
   * @param string $user_name 姓名
   * @return string 格式化后的姓名
   */
  public static function name_cut($user_name)
  {
    $strlen   = mb_strlen($user_name, 'utf-8');
    $firstStr = mb_substr($user_name, 0, 1, 'utf-8');
    $lastStr  = mb_substr($user_name, -1, 1, 'utf-8');

    return $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($user_name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
  }
}