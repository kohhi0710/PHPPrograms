<?php


//���K�\��:https://murashun.jp/article/programming/regular-expression.html

//preg_match:���K�\����p���ă}�b�`���邩�ǂ������ׂ�

//�u/������/�v����{�̌`��
//�u^�v:���O�̕������s�̐擪�ɂ���ꍇ�Ƀ}�b�`����@ex)^google �� google...
//�u(...)�v:�������ЂƂ̃O���[�v�ɂ܂Ƃ߂邱�Ƃ��ł���
//�u|�v:or�����Ƃ��Ďg�p�ł���
//�u{n,}�v:���O�̕����̍ŏ������̂ݎw��ł��� ex)a{3,} �� aaa aaaa...
//�u&�v:���O�̕������s�̖����ɂ���ꍇ�}�b�`���� ex)google& �� ...google

//True���Ԃ��ꂽ���AYES�ɕϊ����ĕԂ��BFalse�Ȃ�No�ɕϊ��B
$result = preg_match("/^(dreamerase|dreamer|eraser|dream|erase){1,}$/", trim(fgets(STDIN))) ? 'YES' : 'NO';

echo $result;

?>