ci_languageとは
======================
* 言語ファイルの保守運用のためにレポジトリを作成しました。
* [CodeIgniter本家](https://github.com/bcit-ci/CodeIgniter "本家") の  system/language/english を日本語化するためのレポジトリです。
* このgitレポジトリから system/language/english のみを抽出しforkしたものです。
* 日本語訳について [ci-ja](https://github.com/codeigniter-jp/ci-ja "ci-ja") にて翻訳されたものをmergeしています。
 *  https://github.com/NEKOGET/ci_language/pull/2 

copyrightについて
-----------------------

* https://github.com/NEKOGET/ci_language/blob/2.1-stable_japanese/copyright.txt
 * [ci-ja](https://github.com/codeigniter-jp/ci-ja "ci-ja") に由来するものです。

各branchについて
-----------------------

|ブランチ名|対応バージョン|zipでの取得|
|---|---|---|
|2.1-stable_japanese|CodeIgniter2.1.x|[2.1-stable_japanese.zip](https://github.com/NEKOGET/ci_language/archive/2.1-stable_japanese.zip "2.1-stable_japanese.zip")|
|2.2-stable_japanese|CodeIgniter2.2.x|[2.2-stable_japanese.zip](https://github.com/NEKOGET/ci_language/archive/2.2-stable_japanese.zip "2.2-stable_japanese.zip")|
|develop_japanese|開発最新版(3.x)|[develop_japanese.zip](https://github.com/NEKOGET/ci_language/archive/develop_japanese.zip "develop_japanese.zip")|

使用方法
---------------

pplication/config/config.php englishをjapaneseに変更

```php:application/config/config.php
$config['language']	= 'english';
```
```php:application/config/config.php
$config['language']	= 'japanese';
```
* このレポジトリgit cloneして入手し、対応するバージョンのブランチを取得し system/language/japanese として設置する。
* このレボジトリの対応するブランチをzipファイルにて取得し、解答したものを system/language/japanese として設置する。



貢献
---------------
https://github.com/NEKOGET/ci_language/graphs/contributors


感謝
---------------
CodeIgniterの開発に携わった全ての方と、日本語翻訳に関わった全ての方に感謝致します。


