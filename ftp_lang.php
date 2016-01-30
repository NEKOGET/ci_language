<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['ftp_no_connection']			= "正しい接続IDが見つかりません。ファイル処理を行う前にまず接続されているか確かめてください。";
$lang['ftp_unable_to_connect']		= "指定したホスト名でFTPサーバに接続できません。";
$lang['ftp_unable_to_login']		= "FTP サーバにログインできません。ユーザ名とパスワードを確かめてください。";
$lang['ftp_unable_to_makdir']		= "指定したディレクトリを作成できません。";
$lang['ftp_unable_to_changedir']	= "ディレクトリを変更できません。";
$lang['ftp_unable_to_chmod']		= "パーミッションをセットできません。パスを確かめてください。注意:この機能は、PHP 5 以上でのみ利用できます。";
$lang['ftp_unable_to_upload']		= "指定したファイルをアップロードできません。パスを確かめてください。";
$lang['ftp_unable_to_download']		= "指定したファイルをダウンロードできません。パスを確かめてください。";
$lang['ftp_no_source_file']			= "操作するファイルが特定できません。パスを確かめてください。";
$lang['ftp_unable_to_rename']		= "ファイルをリネームできません。";
$lang['ftp_unable_to_delete']		= "ファイルを削除できません。";
$lang['ftp_unable_to_move']			= "ファイルを移動できません。移動先のディレクトリが存在するか確かめてください。";